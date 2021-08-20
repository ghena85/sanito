<div class="news_block">
    <img src="{{ url('storage/'.$value->image) }}" alt="news" class="news_img">
    <a href="{{ route('news-detail',['id' => $value->id,'slug' => $value->slug]) }}" class="news_title"> {{ $value->getTranslatedAttribute('name') }}</a>
    <p class="news_text"> {!! $value->getTranslatedAttribute('short_text') !!}</p>
</div>