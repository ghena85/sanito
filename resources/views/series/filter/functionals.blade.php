@foreach($functionals as $value)
    @if($value->getTranslatedAttribute('name') != 'None')
        <label class="checkbox">
            <span class="checkbox__input js_ac_checkbox js_ac_functional @if(in_array($value->id,$filters['functional'])) active @endif" data-id="{{ $value->id }}">
                <input type="checkbox" name="functional[]" @if(in_array($value->id,$filters['functional'])) checked @endif class="js_category" value="{{ $value->id }}" >
                <span class="checkbox__control">
                    <span class="icon-check"></span>
                </span>
            </span>
            <span class="radio__label"> {{ $value->getTranslatedAttribute('name') }}</span>
        </label>
    @endif
@endforeach

