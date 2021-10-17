@foreach($brands as $value)
    @if($value->getTranslatedAttribute('name') != 'None')
        <label class="checkbox">
            <span class="checkbox__input js_ac_checkbox js_ac_brand @if(in_array($value->id,$filters['brand'])) active @endif" data-id="{{ $value->id }}">
                <input type="checkbox" name="brand[]" @if(in_array($value->id,$filters['brand'])) checked @endif class="js_category" value="{{ $value->id }}" >
                <span class="checkbox__control">
                    <span class="icon-check"></span>
                </span>
            </span>
            <span class="radio__label"> {{ $value->getTranslatedAttribute('name') }}</span>
            {{--<small class="count">34</small>--}}
        </label>
    @endif
@endforeach
{{--<button class="show-more">Show all (29)</button>--}}
