<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductFamily;
use App\Models\ProductAssortment;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    public $timestamps = false;
    protected $table = 'products';

    protected $fillable = [
        'reference',        // reference produit
        'name',             // designation
        'brand_id',    // marque rattachée
        'family_id',
        'season_id',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function bomitems()
    {
        return $this->hasMany(BOMItem::class)->orderBy('index', 'ASC');
    }

    public function hasBOM()
    {
        $bom = $this->hasMany(BOMItem::class)->get();
        if(count($bom) > 0) return '<span class="badge badge-purple">'.count($bom).' références associées</span>';
        else return '<span class="badge badge-light">Aucune BOM</span>';
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('exploded-views')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile();

        $this->addMediaCollection('photos')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->singleFile();

        $this->addMediaCollection('datssheets')
            ->acceptsMimeTypes(['application/pdf'])
            ->singleFile();
    }
}
