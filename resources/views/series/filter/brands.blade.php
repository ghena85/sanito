@foreach($brands as $value)
    <label class="checkbox">
        <span class="checkbox__input js_ac_brand" data-id="{{ $value->id }}">
            <input type="checkbox" name="brand[]" class="js_category" value="{{ $value->id }}" >
            <span class="checkbox__control">
                <span class="icon-check"></span>
            </span>
        </span>
        <span class="radio__label"> {{ $value->getTranslatedAttribute('name') }}</span>
        {{--<small class="count">34</small>--}}
    </label>
@endforeach
{{--<button class="show-more">Show all (29)</button>--}}
