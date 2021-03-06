<?php

namespace App\Models\App\BackModels\ModuleManager\Modules;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class NewsModule extends Model
{
    protected $table = "News";
    protected $filable = array();

    /*
    |--------------------------------------------------------------------------
    |  Model Functions
    |--------------------------------------------------------------------------
    |
    | ფუნქციები წასაკითხათ
    |
    */

    /*სიახლის წაკითხვა ID-ს მიხედვით*/
    public function GetNews($menu_id)
    {

        return $this->where('menu_id', $menu_id)->OrderBy('pos', 'asc')->get();
    }

    public function NewsById($news_id)
    {
        return $this->where('id', $news_id)->first();
    }

    //ბოლო სიახლეები მთავარი გვერდისთვის
    public function LastNews()
    {
        return $this->take(5)->OrderBy('pos', 'asc')->get();
    }

    /*სიახლის დამატება ბაზაში*/
    public function SaveNews($News_forms, $UpImage)
    {

        $news = new NewsModule;

        $news->menu_id        =    $News_forms['menu_id'];

        $news->image          =    $UpImage ? "files/news/" . $UpImage : '';
        $news->tumb           =    $UpImage ? "files/news/tumb/" . $UpImage : '';
        $news->date           =    Carbon::now()->toDayDateTimeString();
        $news->main           =    $News_forms['main'];
        $news->pos           =     $News_forms['pos'];

        $news->title_ge       =    $News_forms['title_ge'];
        $news->title_en       =    $News_forms['title_en'];
        $news->title_ru       =    $News_forms['title_ru'];

        $news->short_text_ge  =    $News_forms['short_text_ge'];
        $news->short_text_en  =    $News_forms['short_text_en'];
        $news->short_text_ru  =    $News_forms['short_text_ru'];

        $news->full_text_ge   =    $News_forms['full_text_ge'];
        $news->full_text_en   =    $News_forms['full_text_en'];
        $news->full_text_ru   =    $News_forms['full_text_ru'];

        $news->description_ge =    $News_forms['description_ge'];
        $news->description_en =    $News_forms['description_en'];
        $news->description_ru =    $News_forms['description_ru'];

        $news->keywords_ge    =    $News_forms['keywords_ge'];
        $news->keywords_en    =    $News_forms['keywords_en'];
        $news->keywords_ru    =    $News_forms['keywords_ru'];

        //youtube video links
        $news->youtube_link_en = $this->youtubeVideoID($News_forms['youtube_link_en']);
        $news->youtube_link_ru = $this->youtubeVideoID($News_forms['youtube_link_ru']);
        $news->youtube_link_ge = $this->youtubeVideoID($News_forms['youtube_link_ge']);

        //attach documents
        $news->document_ge = $this->bindFiles($News_forms['doc_ge'], 'ge');
        $news->document_en = $this->bindFiles($News_forms['doc_en'], 'en');
        $news->document_ru = $this->bindFiles($News_forms['doc_ru'], 'ru');

        $news->save();
    }

    /*სიახლის რედაქტირება ბაზაში*/
    public function UpdateNews($News_forms, $UpImage)
    {

        $news = $this->find($News_forms['record_item_id']);

        //რედაქტირებისას თუ არ არსებობს ახალი სურათი ვტოვებთ ხელუხლებელს
        if (!empty($UpImage)) {
            $news->image          =    "files/news/" . $UpImage;
            $news->tumb           =     "files/news/tumb/" . $UpImage;
        }

        $news->menu_id        =    $News_forms['menu_id'];
        $news->date           =    Carbon::now()->toDayDateTimeString();
        $news->main           =    $News_forms['main'];
        $news->pos           =    $News_forms['pos'];

        $news->title_ge       =    $News_forms['title_ge'];
        $news->title_en       =    $News_forms['title_en'];
        $news->title_ru       =    $News_forms['title_ru'];

        $news->short_text_ge  =    $News_forms['short_text_ge'];
        $news->short_text_en  =    $News_forms['short_text_en'];
        $news->short_text_ru  =    $News_forms['short_text_ru'];

        $news->full_text_ge   =    $News_forms['full_text_ge'];
        $news->full_text_en   =    $News_forms['full_text_en'];
        $news->full_text_ru   =    $News_forms['full_text_ru'];

        $news->description_ge =    $News_forms['description_ge'];
        $news->description_en =    $News_forms['description_en'];
        $news->description_ru =    $News_forms['description_ru'];

        $news->keywords_ge    =    $News_forms['keywords_ge'];
        $news->keywords_en    =    $News_forms['keywords_en'];
        $news->keywords_ru    =    $News_forms['keywords_ru'];

        //youtube video links
        $news->youtube_link_en = $this->youtubeVideoID($News_forms['youtube_link_en']);
        $news->youtube_link_ru = $this->youtubeVideoID($News_forms['youtube_link_ru']);
        $news->youtube_link_ge = $this->youtubeVideoID($News_forms['youtube_link_ge']);

        //attach documents
        $news->document_ge = $this->bindFiles($News_forms['doc_ge'], 'ge', $News_forms['current_document_ge']);
        $news->document_en = $this->bindFiles($News_forms['doc_en'], 'en', $News_forms['current_document_en']);
        $news->document_ru = $this->bindFiles($News_forms['doc_ru'], 'ru', $News_forms['current_document_ru']);

        $news->save();
    }


    /*სიახლის წაშლა ბაზიდან*/
    public function Delete_news($news_id)
    {
        $news_item = $this->find($news_id);
        $news_item->delete();
        return  array('image' => $news_item->image, 'tumb' => $news_item->tumb, 'menu_id' => $news_item->menu_id);
    }

    /*
    |--------------------------------------------------------------------------
    |
    |--------------------------------------------------------------------------
    |
    | დამხმარე ფუნქციები
    |
    */
    public function bindFiles($inputFiles, $lang, $oldFiles = '')
    {

        $files = strlen($oldFiles) > 2 ? json_decode($oldFiles, true) : [];

        if (implode($inputFiles)) {
            foreach ($inputFiles as $key => $file) {
                error_log($key);
                if (is_null($inputFiles["$key"])) {
                    continue;
                }
                $dRes = $this->documentUpload($lang, $key);
                $docs = $files;
                $docs["$key"] = !$dRes ? '' : $dRes;
                $files = $docs;
            }
        }

        return implode($files) ? json_encode($files) : null;
    }

    public function documentUpload($doc_lang, $key)
    {
        $target_dir = public_path("files/documents/");
        $fileName = preg_replace('/\s+/', '_', basename($_FILES['doc_' . $doc_lang]["name"][$key]));
        $target_file = $target_dir . $fileName;
        $downloadPath = '/public/files/documents/';
        $downloadFilePath = $fileName;

        if (file_exists($target_file)) {
            $path_parts = pathinfo($target_file);
            $versionName = $path_parts['filename'] . '_' . $doc_lang . '_' . rand(0, 1000) . '.' . $path_parts['extension'];
            $target_file = $path_parts['dirname'] . '/' . $versionName;
            $downloadFilePath = $versionName;
        }

        if (move_uploaded_file($_FILES['doc_' . $doc_lang]["tmp_name"][$key], $target_file)) {
            return $downloadPath . $downloadFilePath;
        }

        return false;
    }

    public function youtubeVideoID($url)
    {
        if ($url == '') {
            return '';
        }

        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
        return isset($matches[1]) ? $matches[1] : $url;
    }
}
