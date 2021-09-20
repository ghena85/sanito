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
        'short_text'
    ];

    protected $with = ['categoryId','labelId'];

    public function categoryId() {
        return $this->belongsTo(Category::class, 'category_id')->with(['parentId']);
    }

    public function labelId() {
        return $this->belongsTo(Label::class, 'label_id');
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
        return !empty($this->labelId) ? $this->labelId->getTranslatedAttribute('name') : '';
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
        if($request->input('price_start') && !isset($options['priceMinMax']) && $request->input('price_start') != $request->input('min_price')) {
            $query = $query->where('price','>=',$request->input('price_start'));
        }
        // Pret pina la
        if($request->input('price_end') && !isset($options['priceMinMax'])  && $request->input('price_end') != $request->input('max_price')) {
            $query = $query->where('price','<=',$request->input('price_end'));
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

        // if count max price
        if(isset($options['priceMinMax'])) {
            return $options['priceMinMax'] == 'max' ? (int)$query->max('price') :  (int)$query->min('price');
        }

        // SortBy
        switch ($request->input('sortBy')) {
            case 'price_desc' :
                $query = $query->orderBy('price','DESC');
                break;
            case 'prices_asc' :
                $query = $query->orderBy('price','ASC');
                break;
            case 'popular' :
                $query = $query->orderBy('views', 'desc');
                break;
            default:
                $query = $query->orderBy('series.id', 'desc');
                break;
        }

        $query = $query->paginate(1);

        return $query;
    }

}
