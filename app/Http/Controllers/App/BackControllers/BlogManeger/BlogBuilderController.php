<?php
namespace App\Http\Controllers\App\BackControllers\BlogManeger;
use App\Http\Controllers\MainController;
use App\Models\App\BackModels\Blog\BlogExtends;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Models\App\BackModels\Blog\Blog;

class BlogBuilderController extends MainController{

	protected $layout = 'layout';

	public function getIndex()
	{
		$items 	= Blog::orderBy('pos')->get();

		$blog 	= new Blog;
		$blog   = $blog->getHTML($items);

        $this->data["items"] = $items;
        $this->data["blog"]  = $blog;

        return view('Admin._BlogCategory.builder', $this->data);
	}

	// მენიუს ყველა ველების რედაქტირება
	public function getEdit($id)
	{
		$item = Blog::find($id);
        $this->data["Blog"] = $item;

        return view('Admin._BlogCategory.edit', $this->data);
	}

	// მენიუს ყველა ველების განახლება
	public function postEdit(Request $request, BlogExtends $blogExtends)
	{
        $blogExtends->UpdateBlog($request);

        return Redirect("admin/build_blog");
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
	    $item             = Blog::find($child_id);

        // ვიღებთ მიმდინარე მენიუს მშობლის id-ს root იდ-ის მეშვეობით
        $parent_blog_id = $item->root_id;

        $item->root_id  = $parent_id;
	    $item->save();

        // თუ არ შემოდის მშობლის იდ (ამოთრევის შემთხვევაში) ******
        if(!$parent_id){
            // ვეძებთ მშობელ მენიუს ყავს თუ არა სხვა შვილები
            $parent_childs = Blog::where('root_id', '=' ,$parent_blog_id)->first();
            //თუ ვერ ვიპოვეთ მისი შვილები
            if(!$parent_childs){
                // ვპოულობთ მშობელ მენიუს და ვაფიქსირებთ რომ არ ყავს შვილები
                $parent_blog = Blog::find($parent_blog_id);
                $parent_blog->level  = 0;
                $parent_blog->save();
            }
        }
        //თუ შემოდის მშობლის იდ შეთრევის შემთხვევაში ******
        else{
            // ვეძებთ მშობელ მენიუს და ვუცვლით level-სტატუსს
            $parent = Blog::find($parent_id);
            if($parent->level == 0){
                $parent->level  = 1;
            }
            $parent->save();
        }

	    $ordering       = json_decode(Input::get('order'));
	    $rootOrdering   = json_decode(Input::get('rootOrder'));

	    if($ordering){
	      foreach($ordering as $order=>$item_id){
	        if($itemToOrder = Blog::find($item_id)){
	            $itemToOrder->pos = $order;
	            $itemToOrder->save();
	        }
	      }
	    } else {
	      foreach($rootOrdering as $order=>$item_id){
	        if($itemToOrder = Blog::find($item_id)){
	            $itemToOrder->pos = $order;
	            $itemToOrder->save();
	        }
	      }
	    }

	    return 'ok ';
	}

	public function postNew()
	{
		// Create a new blog item and save it
		$item = new Blog;

		$item->title_ge 	= e(Input::get('title_ge','untitled'));
		$item->title_en 	= e(Input::get('title_en','untitled'));
		$item->title_ru 	= e(Input::get('title_ru','untitled'));
		$item->pos 	= Blog::max('pos')+1;

		$item->save();

        return Redirect("ge/admin/build_blog");
	}

	public function postDelete()
	{
		$id = Input::get('delete_id');
		// Find all items with the root_id of this one and reset the root_id to zero
		$items = Blog::where('root_id', $id)->get()->each(function($item)
		{
			$item->title_ge = 0;
			$item->save();
		});

		// Find and delete the item that the user requested to be deleted
		$item = Blog::find($id);
		$item->delete();

        return Redirect("ge/admin/build_blog");
	}

	//მენიუს გამოჩენა
	public function show($id){
        $item = Blog::find($id);
        $item->status = 1;
        $item->save();
        return Redirect("ge/admin/build_blog");
    }
    //მენიუს დამალვა
    public function hide($id){
        $item = Blog::find($id);
        $item->status = 0;
        $item->save();
        return Redirect("ge/admin/build_blog");
    }
}