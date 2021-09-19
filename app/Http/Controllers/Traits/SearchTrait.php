<?php
namespace App\Traits;

trait SearchTrait {

    /*
     * this is copy from Car Model
     */
    public static function scopeSearchHermesFilter($query, $request,$lng = 'ro',$options = [])
    {
        // by code and name
        $s = $request->input('s');
        if($s) {
            $s = strtolower($s);
            $query->where("name",$s);
        }

        // Pret de la
        if($request->input('price_start')) {
            $query = $query->where('cars.price_'.session('valuta'),'>=',$request->input('price_start'));
        }
        // Pret pina la
        if($request->input('price_end')) {
            $query = $query->where('cars.price_'.session('valuta'),'<=',$request->input('price_end'));
        }

        if(
            !isset($options['noCheckDrive']) && !isset($options['noCheckEngine']) && !isset($options['noCheckConfiguration']) &&
            !isset($options['noCheckPlace']) && !isset($options['noCheckTransmission']) && !isset($options['noCheckBody']) &&
            !isset($options['noCheckFuel']) && !isset($options['noCheckLocation'])
        )
        {
            // SortBy
            if($request->input('sortBy'))
            {
                switch ($request->input('sortBy')) {
                    case 'price_desc' :
                        $query = $query->orderBy('cars.order_'.session('valuta'),'DESC');
                        break;
                    case 'price_asc' :
                        $query = $query->orderBy('cars.order_'.session('valuta'),'ASC');
                        break;
                    default:
                        $query = $query->orderBy('cars.order_'.session('valuta'),'ASC');
                        break;
                }
            }
            else
            {
                $query = $query->orderBy('cars.order_'.session('valuta'),'ASC');
            }

        }

        return $query;
    }

}