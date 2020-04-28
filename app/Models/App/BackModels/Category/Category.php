<?php
namespace App\Models\App\BackModels\Category;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Category extends Model
{

    protected $table = 'Category';

	// Recursive function that builds the category from an array or object of items
	// In a perfect world some parts of this function would be in a custom Macro or a View
	public function buildCategory($category, $parentid = NULL)
	{ 
	  $result = null;
	  foreach ($category as $item)
	    if ($item->root_id == $parentid) {
	      $result .= "<li class='dd-item nested-list-item' data-order='{$item->pos}' data-id='{$item->id}'>
	      <div class='dd-handle nested-list-handle'>
	        <span class='glyphicon glyphicon-move'></span>
	      </div>
	      <div class='nested-list-content'>{$item->title_ge}
	        <div class='pull-right'>
	          <a href='".url("admin/product_category/{$item->id}")."' class=\"btn green\"><i class=\"fa fa-list-alt\"></i> გვერდის მართვა</a>";
                if($item->status ==1){
	                $result .=" <a href='".url("admin/build_category/hide/{$item->id}")."' class=\"btn purple\"><i class=\"fa fa-battery-full\"></i></a>";
	            }else{
                    $result .=" <a href='".url("admin/build_category/show/{$item->id}")."' class=\"btn grey-cascade\"><i class=\"fa fa-battery-empty\"></i></a>";
                }
	          $result .="
	          <a href='".url("admin/build_category/edit/{$item->id}")."' class=\"btn blue\"><i class=\"fa fa-pencil\"></i></a>
	          <a href='#' class=\"delete_toggle btn red\" rel='{$item->id}'><i class=\"fa fa-remove\"></i></a>
	        </div>
	      </div>".$this->buildCategory($category, $item->id) . "</li>";
	    } 
	  return $result ?  "\n<ol class=\"dd-list\">\n$result</ol>\n" : null; 
	} 

	// Getter for the HTML category builder
	public function getHTML($items)
	{
		return $this->buildCategory($items);
	}

}
