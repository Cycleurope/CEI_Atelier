<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Document extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $table = "documents";

    protected $fillable = ['title', 'brand_id', 'doctype_id', 'mimetype'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('documents')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'application/pdf', 'application/zip', 'application/msword', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint'])
            ->singleFile();

    }

    public function type()
    {
        return $this->belongsTo(DocumentType::class, 'doctype_id', 'id');
    }
}
