<?php

namespace App\Models\App\Library;

use Illuminate\Database\Eloquent\Model;

use Image;
use File;


class ImageLybrary extends Model
{
    /*
    |--------------------------------------------------------------------------
    | ImageLybrary Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები სურათთან სამუშაოდ
    |
    */
    /*სურათის ატვირთვა, ზომის შეცვლა, და სახელის დაბრუნება*/
    public function UpImage($request,$folder,$root,$sizes)
    {
        //სურათის წაკითხვა
        $image = $request->file('image');

        //სურათის სახელის მიღება თარიღთან ერთად
        $ImgName = time().'_'.$image->getClientOriginalName();

        //ასატვირთი ფოლდერის განსაზღვრა
        $destinationPath = public_path('/files/'.$folder.'/');
        // პატარა სურათის ფოლდერის განსაზღვრა
        $tumbdestinationPath = public_path('/files/'.$folder.'/tumb');

        //სურათის ატვირთვა
        $img = Image::make($image->getRealPath());

        //სურათის ზომების შეცვლა პროპორციულად და შენახვა
        $img->resize($sizes['width'], $sizes['height'], function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$ImgName);

        /*თუ გვსურს მატარა სურათის შექმნა*/
        if (isset($sizes['swidth']) || isset($sizes['sheight'])){
            //სურათის ზომების შეცვლა პროპორციულად და შენახვა + პატარა სურათისთვის
            $img->resize($sizes['swidth'], $sizes['sheight'], function ($constraint) {
                $constraint->aspectRatio();
            })->save($tumbdestinationPath.'/'.$ImgName);
        }

        //სურათის მისამართის და სახელის დაბრუნება
        return $ImgName;
    }

    /*სურათის წაშლა*/
    public function DeleteImage($image_name,$tumb_name){

        $destinationPath = public_path($image_name);
        File::delete($destinationPath);
        $tumbdestinationPath = public_path($tumb_name);
        File::delete($tumbdestinationPath);
    }

}
