@foreach($colors as $value)
    <label class="checkbox">
        <span class="checkbox__input js_ac_checkbox js_ac_color @if(in_array($value->id,$filters['color'])) active @endif" data-id="{{ $value->id }}">
            <input type="checkbox" name="color[]"  @if(in_array($value->id,$filters['color'])) checked @endif class="js_category" value="{{ $value->id }}" >
            <span class="checkbox__control">
                <span class="icon-check"></span>
            </span>
        </span>
        <span class="radio__label"> {{ $value->getTranslatedAttribute('name') }}</span>
    </label>
@endforeach
