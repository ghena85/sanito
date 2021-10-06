<section id="review-section" class="single-section single-review">
    <div class="container">

       

        <div class="single-section__header">
            <h3>Reviews <small>({{ $series->getTranslatedAttribute('reviews') }})</small></h3>
            <a href="#" class="write-review">Write review</a>
        </div>

        <div class="review-info">
            <img src="{{ url('storage/'.$series->image) }}" alt="product">
            <div class="review-info__rate">
                @php
                        $stars = $series->getTranslatedAttribute('rate');
                @endphp
                <h2>{{ $stars }} <span>/ ({{ $series->getTranslatedAttribute('reviews') }} reviews)</span></h2>
                <div class="stars">

                    @for ($i = 0; $i < $stars; $i++)
                        @if ($i<5)
                            <span class="icon-star fill"></span>
                        @endif
                    @endfor

                </div>
            </div>

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
        </div>

        <div class="review-reviews">
            <div class="review-reviews__item review-item">
                <div class="review-item__header">
                    <div class="review-item__profile">
                        <img src="img/profile1.png" alt="profile pic">
                        <div class="profile-info">
                            <p>Darlene Robertson</p>
                            <p class="profile-info__time">16 june, 2021</p>
                        </div>
                    </div>
                    <div class="stars">
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                    </div>
                </div>
                <div class="review-item__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

            <div class="review-reviews__item review-item">
                <div class="review-item__header">
                    <div class="review-item__profile">
                        <img src="img/profile2.png" alt="profile pic">
                        <div class="profile-info">
                            <p>Darlene Robertson</p>
                            <p class="profile-info__name">16 june, 2021</p>
                        </div>
                    </div>
                    <div class="stars">
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                    </div>
                </div>
                <div class="review-item__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

            <div class="review-reviews__item review-item">
                <div class="review-item__header">
                    <div class="review-item__profile">
                        <img src="img/profile1.png" alt="profile pic">
                        <div class="profile-info">
                            <p>Darlene Robertson</p>
                            <p class="profile-info__name">16 june, 2021</p>
                        </div>
                    </div>
                    <div class="stars">
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                    </div>
                </div>
                <div class="review-item__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

            <div class="review-reviews__item review-item">
                <div class="review-item__header">
                    <div class="review-item__profile">
                        <img src="img/profile2.png" alt="profile pic">
                        <div class="profile-info">
                            <p>Darlene Robertson</p>
                            <p class="profile-info__name">16 june, 2021</p>
                        </div>
                    </div>
                    <div class="stars">
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                        <span class="icon-star fill"></span>
                    </div>
                </div>
                <div class="review-item__text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>

            <button class="load-more">See more</button>

            <form action="#" class="review-form">
                <label class="contact-form__lable" for="nume">
                    <input class="contact-form__input" type="text" name="" id="nume" placeholder="Prenume">
                </label>

                <label class="contact-form__lable" for="familie"> 
                    <input class="contact-form__input" type="text" name="" id="familie" placeholder="Nume familie">
                </label>

                
                <label class="contact-form__lable" for="textarea"> 
                    <textarea class="contact-form__input textarea" name="" id="textarea" cols="10" rows="3"  placeholder="Review"></textarea>
                </label>

                <label class="contact-form__lable stars" for="textarea"> 
                    <span class="icon-star fill"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                    <span class="icon-star"></span>
                </label>

                <button type="submit" class="contact-form__btn accent-btn">Trimite</button>
            </form>
        </div>
        
    </div>
</section>