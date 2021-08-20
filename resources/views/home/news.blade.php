<div class="news_mission">
    <div class="container">
        <div class="news_mission-body">
            <div class="mission_info">
                <img src="{{ url('storage/'.$ourMission->image) }}" alt="" class="mission_video">
                <h3 class="mission_title">
                    {{ $ourMission->getTranslatedAttribute('name') }}
                </h3>
                <p class="mission_text">
                    {!! $ourMission->getTranslatedAttribute('text1') !!}
                </p>
                <p class="mission_text">
                    {!! $ourMission->getTranslatedAttribute('text2') !!}
                </p>
            </div>
            <div class="news_about">
                <h3 class="news_title">{{ $vars['news'] }}</h3>
                @foreach($news as $value)
                    <div class="news_body">
                        <p class="news_date">
                            {{ \Illuminate\Support\Carbon::parse($value->date)->format('F d, Y') }}
                        </p>
                        <a href="{{ route('news-detail',['id' => $value->id,'slug' => $value->slug]) }}" class="news_intro">
                            {{ $value->getTranslatedAttribute('name') }}
                        </a>
                        <p class="news_info">
                            {!! $value->getTranslatedAttribute('short_text') !!}
                        </p>
                    </div>
                @endforeach
                <a href="{{ route('news') }}" class="news_button">{{ $vars['show_more_news'] }}
                    <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.387207 12.0898L10.3872 6.08984L0.387207 0.0898438V12.0898Z" fill="#4A4F55"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>