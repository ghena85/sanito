<section id="review-section" class="single-section single-review">
    <div class="container">

        <style>
            .review-info_form
            {
                max-width: 100%;
            }
            .contact-form__lable {
                width: 100%;

            }
            .contact-form__lable input,
            .contact-form__lable textarea
            {
                margin-bottom: 10px;
                min-width: 500px;
            }
            .contact-form__lable .stars,
            .contact-form__lable.stars
            {
                margin-bottom: 15px;
                margin-top: 5px;
            }
        </style>

        <div class="single-section__header">
            <h3>Reviews
                @if(count($reviews) > 0)
                    <small>({{ count($reviews) }})</small>
                @endif
            </h3>
            <a href="#" class="write-review">{{ $vars['write_review'] }}</a>
        </div>

        <div class="review-info review-info_form">

            @if ($errors->any())
               <ul>
                    @foreach ($errors->all() as $value)
                        <li>
                            {{ $value }}
                        </li>
                    @endforeach
               </ul>
            @endif

            <form action="{{ route('series-detail-review',['slug' => $series->slug ]) }}" class="review-form" method="post">
                @csrf
                <label class="contact-form__lable" for="nume">
                    <input class="contact-form__input" type="text" required name="first_name" id="nume" placeholder="Prenume">
                </label>

                <label class="contact-form__lable" for="familie"> 
                    <input class="contact-form__input" type="text" required name="last_name" id="familie" placeholder="Nume familie">
                </label>
                
                <label class="contact-form__lable" for="textarea"> 
                    <textarea class="contact-form__input textarea" required name="text" id="textarea" cols="10" rows="3"  placeholder="Review"></textarea>
                </label>

                <label class="contact-form__lable stars " for="textarea"> 
                    <span class="icon-star forRev" data-star="1"></span>
                    <span class="icon-star forRev" data-star="2"></span>
                    <span class="icon-star forRev" data-star="3"></span>
                    <span class="icon-star forRev" data-star="4"></span>
                    <span class="icon-star forRev" data-star="5"></span>
                    <input type="hidden" name="stars" value="" class="icon-starRev">
                </label>

                <button type="submit" class="contact-form__btn accent-btn">{{ $vars['trimite'] }}</button>
            </form>
        </div>


        <div class="review-info">
            <img src="{{ url('storage/'.$series->image) }}" alt="product">
            <div class="review-info__rate">
                @php
                    $stars = $series->rate;
                @endphp
                <h2>{{ $stars }} <span>/ ({{ $series->reviews }} reviews)</span></h2>
                <div class="stars">

                    @for ($i = 0; $i < $stars; $i++)
                        @if ($i<5)
                            <span class="icon-star fill"></span>
                        @endif
                    @endfor

                </div>
            </div>
            <!--
            <div class="review-info__percentage percentage">
                <div class="percentage-row">
                    <p>5</p>
                    <div class="percentage-line">
                        <div style="width: 96%;" class="percentage-line__fill"></div>
                    </div>
                    <p>96%</p>
                </div>
                <div class="percentage-row">
                    <p>4</p>
                    <div class="percentage-line">
                        <div style="width: 35%;" class="percentage-line__fill"></div>
                    </div>
                    <p>35%</p>
                </div>
                <div class="percentage-row">
                    <p>3</p>
                    <div class="percentage-line">
                        <div style="width: 21%;" class="percentage-line__fill"></div>
                    </div>
                    <p>21%</p>
                </div>
                <div class="percentage-row">
                    <p>2</p>
                    <div class="percentage-line">
                        <div style="width: 1%;" class="percentage-line__fill"></div>
                    </div>
                    <p>1%</p>
                </div>
                <div class="percentage-row">
                    <p>1</p>
                    <div class="percentage-line">
                        <div style="width: 0%;" class="percentage-line__fill"></div>
                    </div>
                    <p>0%</p>
                </div>
            </div>
             -->
        </div>

        <div class="review-reviews" id="allReviews">

            @foreach ($reviews as $value)
                <div class="review-reviews__item review-item">
                    <div class="review-item__header">
                        <div class="review-item__profile">
                            <img src="{{ url('img/profile1.png') }}" alt="profile pic">
                            <div class="profile-info">
                                <p>{{ $value->getTranslatedAttribute('first_name') }} {{ $value->getTranslatedAttribute('last_name') }}</p>
                                <p class="profile-info__time">{{ $value->date }}</p>
                            </div>
                        </div>
                        <div class="stars">
                            
                            @for ($i = 0; $i < $value->stars; $i++)
                                <span class="icon-star fill"></span>
                            @endfor

                        </div>
                    </div>
                    <div class="review-item__text">
                        <p>
                            {{ $value->getTranslatedAttribute('text') }}
                        </p>
                    </div>
                </div>
            @endforeach

            <!--
            <button class="load-more">{{ $vars['see_more'] }}</button>
            -->

        </div>
        
    </div>
</section>