@foreach($brands as $value)
    <label class="checkbox">
        <span class="checkbox__input">
            <input type="checkbox" name="checkbox">
            <span class="checkbox__control">
                <span class="icon-check"></span>
            </span>
        </span>
        <span class="radio__label"> {{ $value->getTranslatedAttribute('name') }}</span>
        {{--<small class="count">34</small>--}}
    </label>
@endforeach
{{--<button class="show-more">Show all (29)</button>--}}
