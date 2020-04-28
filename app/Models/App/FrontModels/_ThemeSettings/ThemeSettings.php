<?php
namespace App\Models\App\FrontModels\_ThemeSettings;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ThemeSettings extends Model
{
    protected $table = "ThemeSettings";
    protected $filable = array();


    public static function SliderTheme()
    {
        $main_slider = ThemeSettings::where('code','main_slider')->first();
        return $main_slider['theme'];
    }

}