<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelAdminPanel\Traits\Translatable;


class Series extends Model
{
    use Translatable;

    protected $translatable = [
        'name',
        'text',
        'text2',
        'how_to_use',
        'youtube1',
        'short_text'
    ];

    protected $with = ['categoryId','labelId'];

    public function categoryId() {
        return $this->belongsTo(Category::class, 'category_id')->with(['parentId']);
    }

    public function labelId() {
        return $this->belongsToMany(Label::class, 'series_labels', 'series_id', 'label_id');
    }

    public function labels() {
        return $this->belongsToMany(Label::class, 'series_labels', 'series_id', 'label_id');
    }

    public function brandId() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function brands() {
        return $this->hasMany(Brand::class);
    }

    public function functionalId() {
        return $this->belongsTo(Functional::class, 'functional_id');
    }

    public function productId() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'series_tags', 'series_id', 'tag_id');
    }

    // todo if multiple categories
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'series_categories', 'series_id', 'category_id');
    }

    public function getSubCategoryAttribute()
    {
        return !empty($this->categoryId) ? $this->categoryId->getTranslatedAttribute('name') : '';
    }

    public function getLabelAttribute()
    {
        return !empty($this->labelId)  ? ( $this->label_id != 1 ? $this->labelId->getTranslatedAttribute('name') : '') : '';
    }

    public function getCategoryAttribute()
    {
        return !empty($this->categoryId) && $this->categoryId->parent_id > 0 ? $this->categoryId->parentId->getTranslatedAttribute('name') : '';
    }


    /**
     * Filter search
     *
     * @param $query
     * @param $request
     * @return mixed
     */
    public static function scopeSearchFilter($query, $request,$lng,$options = [])
    {
        // Pret de la
        $productJoined = 0;
        if($request->input('price_start'))
        {
            $query = $query->where('price_from','>=',$request->input('price_start'));
        }
        // Pret pina la
        if($request->input('price_end'))
        {
            $query = $query->where('price_from','<=',$request->input('price_end'));
        }

        // Brands
        if($request->input('brand')) {
            $query = $query->join('brands','brands.id','=','series.brand_id');
            $query->where(function ($query) use ($request) {
                foreach ($request->input('brand') as $value) {
                    $query->orWhere('brand_id', $value);
                }
            });
        }

        // Functional
        if($request->input('functional')) {
            $query = $query->whereIn('functional_id', $request->input('functional'));
        }

        // Colors
        if($request->input('color')) {
            if(empty($productJoined)) {
                $query = $query->join('products','products.series_id','=','series.id');
            }
            $query->where(function ($query) use ($request) {
                foreach ($request->input('color') as $value) {
                    $query->orWhere('products.color_id', $value);
                }
            });
        }

        // if count max price
        if(isset($options['priceMinMax'])) {
            return $options['priceMinMax'] == 'max' ? (int)$query->max('price') :  (int)$query->min('price');
        }

        // SortBy
        switch ($request->input('sortBy')) {
                // On sale
            case 'onSale' :
                $query = $query->orderBy('onSale','ASC');
                break;
            case 'onMostPopular' :
                $query = $query->orderBy('onCategoryPopular', 'desc');
                break;
            case 'onNewLine' :
                $query = $query->orderBy('onNewLine', 'desc');
                break;
            default:
                // On Top Results
                $query = $query->orderBy('series.onTopResult', 'desc');
                break;
        }

        $query = $query->groupBy('series.id')->paginate(12);

        return $query;
    }

}
