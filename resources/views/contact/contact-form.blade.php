<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-list__item">
                <a href="{{ route('home') }}" class="breadcrumb-list__link">Home</a>
            </li>
            <li class="breadcrumb-list__item">
                <a href="{{ route('contacts') }}" class="breadcrumb-list__link">{{ $page->getTranslatedAttribute('name') }}</a>
            </li>
        </ul>
    </div>
</div>

<div class="contact-background container" style="background: url('img/contact_bg.jpg') 50% 50% / cover no-repeat; width: 100%; height: 400px;"></div>

<div class="contact-form">
    <h2>{{ $vars['contact_text_form'] }}</h2>
    @if ($errors->any())

            <div class="contact-form-errors">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
    @endif  
    <form action="{{ route('sendContactForm') }}" method="post">
        @csrf
        
        <label class="contact-form__lable" for="nume"><span>*</span> Prenume
            <input class="contact-form__input {{ ($errors->has('first_name') ? 'error' : '') }}" required type="text" name="first_name" id="nume" placeholder="Ex: Ion" value="{{ old('first_name') }}">
        </label>

        <label class="contact-form__lable" for="familie"><span>*</span>  Nume familie
            <input class="contact-form__input {{ ($errors->has('last_name') ? 'error' : '') }}" type="text" name="last_name" id="familie" placeholder="Ex: Ciobanu" value="{{ old('last_name') }}">
        </label>

        <label class="contact-form__lable" for="telefon"><span>*</span>  Număr de telefone
            <input class="contact-form__input {{ ($errors->has('phone') ? 'error' : '') }}" type="tel" name="phone" id="telefon" placeholder="+373 _ _ _ _ _ _ _ _"  value="{{ old('phone') }}">
        </label>

        <label class="contact-form__lable" for="telefon"><span>*</span>  E-mail
            <input class="contact-form__input {{ ($errors->has('email') ? 'error' : '') }}" type="email" name="email" id="telefon" placeholder="exemplu@gmail.com" value="{{ old('email') }}">
        </label>

        <label class="contact-form__lable" for="textarea"><span>*</span>  Mesaj
            <textarea class="contact-form__input textarea {{ ($errors->has('msg') ? 'error' : '') }}" name="msg" id="textarea" cols="10" rows="3"  placeholder="Scrie-ne un mesaj.">
                {{ old('msg') }}
            </textarea>
        </label>

        <button type="submit" class="contact-form__btn accent-btn">Trimite</button>
    </form>
</div>