<?php
namespace App\Models\App\BackModels\Blog;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Blog extends Model
{

    protected $table = 'BlogCategory';

	// Recursive function that builds the blog from an array or object of items
	// In a perfect world some parts of this function would be in a custom Macro or a View
	public function buildBlog($blog, $parentid = NULL)
	{ 
	  $result = null;
	  foreach ($blog as $item)
	    if ($item->root_id == $parentid) {
	      $result .= "<li class='dd-item nested-list-item' data-order='{$item->pos}' data-id='{$item->id}'>
	      <div class='dd-handle nested-list-handle'>
	        <span class='glyphicon glyphicon-move'></span>
	      </div>
	      <div class='nested-list-content'>{$item->title_ge}
	        <div class='pull-right'>
	          <a href='".url("admin/blog_category/{$item->id}")."' class=\"btn green\"><i class=\"fa fa-list-alt\"></i> გვერდის მართვა</a>";
                if($item->status ==1){
	                $result .=" <a href='".url("admin/build_blog/hide/{$item->id}")."' class=\"btn purple\"><i class=\"fa fa-battery-full\"></i></a>";
	            }else{
                    $result .=" <a href='".url("admin/build_blog/show/{$item->id}")."' class=\"btn grey-cascade\"><i class=\"fa fa-battery-empty\"></i></a>";
                }
	          $result .="
	          <a href='".url("admin/build_blog/edit/{$item->id}")."' class=\"btn blue\"><i class=\"fa fa-pencil\"></i></a>
	          <a href='#' class=\"delete_toggle btn red\" rel='{$item->id}'><i class=\"fa fa-remove\"></i></a>
	        </div>
	      </div>".$this->buildBlog($blog, $item->id) . "</li>";
	    } 
	  return $result ?  "\n<ol class=\"dd-list\">\n$result</ol>\n" : null; 
	} 

	// Getter for the HTML blog builder
	public function getHTML($items)
	{
		return $this->buildBlog($items);
	}

}
