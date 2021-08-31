@if ($key>0)
    <div class="blog-article">
        <div class="blog-article__video">
            @php
                $currentFile = $value->image;
                $extensions = ['.jpg',".jpeg",'.png','.gif','.tif','.tiff','.bmp'];
            @endphp
            @if (!in_array($currentFile,$extensions))
                <img src="{{ url('storage/'.$value->image) }}" alt="Image Article">
            @else
            <video class="video" src="{{ url('storage/'.$value->image) }}" muted loop></video>
            @endif
        </div>
        <div class="article">

            <h3 class="blog-article__title">
                {{ $value->getTranslatedAttribute('name') }}
            </h3>
            <p class="blog-article__descr">
                {{ $value->getTranslatedAttribute('short_text') }}
            </p>
            <data class="blog-article__data">
                {{ $value->getTranslatedAttribute('date') }}
            </data>
            <a class="blog-article__view" href="{{ route('news-detail',['id' => $value->id,'slug' => $value->slug]) }}">
                {{ $vars['blog-more-article'] }}
            </a>
        </div>
    </div>
@endif