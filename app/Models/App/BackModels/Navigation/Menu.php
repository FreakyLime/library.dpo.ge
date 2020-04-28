<?php
namespace App\Models\App\BackModels\Navigation;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Menu extends Model
{

    protected $table = 'navigation';

	// Recursive function that builds the menu from an array or object of items
	// In a perfect world some parts of this function would be in a custom Macro or a View
	public function buildMenu($menu, $parentid = NULL)
	{ 
	  $result = null;
	  foreach ($menu as $item) 
	    if ($item->root_id == $parentid) {
	      $result .= "<li class='dd-item nested-list-item' data-order='{$item->pos}' data-id='{$item->id}'>
	      <div class='dd-handle nested-list-handle'>
	        <span class='glyphicon glyphicon-move'></span>
	      </div>
	      <div class='nested-list-content'>{$item->title_ge}
	        <div class='pull-right'>
	          <a href='".url("admin/module_manager/menu/{$item->id}")."' class=\"btn green\"><i class=\"fa fa-list-alt\"></i> გვერდის მართვა</a>";
                if($item->status ==1){
	                $result .=" <a href='".url("admin/build_menu/hide/{$item->id}")."' class=\"btn purple\"><i class=\"fa fa-battery-full\"></i></a>";
	            }else{
                    $result .=" <a href='".url("admin/build_menu/show/{$item->id}")."' class=\"btn grey-cascade\"><i class=\"fa fa-battery-empty\"></i></a>";
                }
	          $result .="
	          <a href='".url("admin/build_menu/edit/{$item->id}")."' class=\"btn blue\"><i class=\"fa fa-pencil\"></i></a>
	          <a href='#' class=\"delete_toggle btn red\" rel='{$item->id}'><i class=\"fa fa-remove\"></i></a>
	        </div>
	      </div>".$this->buildMenu($menu, $item->id) . "</li>"; 
	    } 
	  return $result ?  "\n<ol class=\"dd-list\">\n$result</ol>\n" : null; 
	} 

	// Getter for the HTML menu builder
	public function getHTML($items)
	{
		return $this->buildMenu($items);
	}

}
