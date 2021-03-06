<?php
namespace App\Http\Controllers\App\BackControllers\CategoryManeger;
use App\Http\Controllers\MainController;
use App\Models\App\BackModels\Category\CategoryExtends;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Models\App\BackModels\Category\Category;

class CategoryBuilderController extends MainController{

	protected $layout = 'layout';

	public function getIndex()
	{
		$items 	= Category::orderBy('pos')->get();

		$category 	= new Category;
		$category   = $category->getHTML($items);

        $this->data["items"] = $items;
        $this->data["category"]  = $category;

        return view('Admin._CategoryManager.builder', $this->data);
	}

	// მენიუს ყველა ველების რედაქტირება
	public function getEdit($id)
	{
		$item = Category::find($id);
        $this->data["Category"] = $item;

        return view('Admin._CategoryManager.edit', $this->data);
	}

	// მენიუს ყველა ველების განახლება
	public function postEdit(Request $request, CategoryExtends $categoryExtends)
	{
        $categoryExtends->UpdateCategory($request);

        return Redirect("admin/build_category");
	}

	// AJAX Reordering function
	public function postIndex()
	{

        $child_id       = e(Input::get('source'));
	    $parent_id  = e(Input::get('destination',NULL));

        // ამოთრევის შემთხვევაში root id არის 0
        if($parent_id ==0){

            // და გარდავქმნით  NULL
            $parent_id = NULL;
        }
	    $item             = Category::find($child_id);

        // ვიღებთ მიმდინარე მენიუს მშობლის id-ს root იდ-ის მეშვეობით
        $parent_category_id = $item->root_id;

        $item->root_id  = $parent_id;
	    $item->save();

        // თუ არ შემოდის მშობლის იდ (ამოთრევის შემთხვევაში) ******
        if(!$parent_id){
            // ვეძებთ მშობელ მენიუს ყავს თუ არა სხვა შვილები
            $parent_childs = Category::where('root_id', '=' ,$parent_category_id)->first();
            //თუ ვერ ვიპოვეთ მისი შვილები
            if(!$parent_childs){
                // ვპოულობთ მშობელ მენიუს და ვაფიქსირებთ რომ არ ყავს შვილები
                $parent_category = Category::find($parent_category_id);
                $parent_category->level  = 0;
                $parent_category->save();
            }
        }
        //თუ შემოდის მშობლის იდ შეთრევის შემთხვევაში ******
        else{
            // ვეძებთ მშობელ მენიუს და ვუცვლით level-სტატუსს
            $parent = Category::find($parent_id);
            if($parent->level == 0){
                $parent->level  = 1;
            }
            $parent->save();
        }

	    $ordering       = json_decode(Input::get('order'));
	    $rootOrdering   = json_decode(Input::get('rootOrder'));

	    if($ordering){
	      foreach($ordering as $order=>$item_id){
	        if($itemToOrder = Category::find($item_id)){
	            $itemToOrder->pos = $order;
	            $itemToOrder->save();
	        }
	      }
	    } else {
	      foreach($rootOrdering as $order=>$item_id){
	        if($itemToOrder = Category::find($item_id)){
	            $itemToOrder->pos = $order;
	            $itemToOrder->save();
	        }
	      }
	    }

	    return 'ok ';
	}

	public function postNew()
	{
		// Create a new category item and save it
		$item = new Category;

		$item->title_ge 	= e(Input::get('title_ge','untitled'));
		$item->title_en 	= e(Input::get('title_en','untitled'));
		$item->title_ru 	= e(Input::get('title_ru','untitled'));
		$item->pos 	= Category::max('pos')+1;

		$item->save();

        return Redirect("ge/admin/build_category");
	}

	public function postDelete()
	{
		$id = Input::get('delete_id');
		// Find all items with the root_id of this one and reset the root_id to zero
		$items = Category::where('root_id', $id)->get()->each(function($item)
		{
			$item->title_ge = 0;
			$item->save();
		});

		// Find and delete the item that the user requested to be deleted
		$item = Category::find($id);
		$item->delete();

        return Redirect("ge/admin/build_category");
	}

	//მენიუს გამოჩენა
	public function show($id){
        $item = Category::find($id);
        $item->status = 1;
        $item->save();
        return Redirect("ge/admin/build_category");
    }
    //მენიუს დამალვა
    public function hide($id){
        $item = Category::find($id);
        $item->status = 0;
        $item->save();
        return Redirect("ge/admin/build_category");
    }
}