<aside class="page-grid__sidebar sidebar">

    @foreach($categories as $value)
        @if($value->id != 46)
            <div class="sidebar-row">
                <h4 class="sidebar-row__title {{ (isset($category) && $category->id ==$value->id ? 'active' : '') }}">
                    <a href="{{ route('categoryDetail',['slug' => $value->slug])  }}">
                        {{ $value->getTranslatedAttribute('name') }}
                    </a>

                </h4>
                @if($value->childrens)
                    <ul class="sidebar-row__list sidebar-list">
                        @foreach($value->childrens as $svalue)
                            <li class="sidebar-list__item">
                                <a href="{{ route('series',['categorySlug' => $svalue->slug]) }}" class="sidebar-list__link">
                                    <span class="icon-chevron"></span>
                                    {{ $svalue->getTranslatedAttribute('name') }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endif
    @endforeach

</aside>