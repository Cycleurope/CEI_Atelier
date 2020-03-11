<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Video extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $table = "videos";

    protected $fillable = ['title', 'name', 'url', 'description'];

    public function youtubeID()
    {
        $url = $this->url;
        $id = explode("?v=", $url);
        return $id[1];
        
    }

    public function embed()
    {
        return '<div class="video-container"><iframe width="853" height="480" src="https://www.youtube.com/embed/'.$this->youtubeID().'" frameborder="0" allowfullscreen></iframe></div>';
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

}
