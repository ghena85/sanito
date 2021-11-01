<section class="subscribe">
    <div class="container">
        <div class="subscribe-header">
            <h2>{{ $vars['stay_tell_with'] }}</h2>
            <p>{{ $vars['subscribe_text'] }}</p>
        </div>
        <form action="javascript:void(0)" class="subscribe-form" method="post">
            @csrf
            <input type="email" placeholder="{{ $vars['your_e_mail'] }}" name="email" class="subscribeEmail">
            <button type="submit" class="accent-btn subscribe_btn">{{ $vars['subscribe'] }}</button>
        </form>
    </div>
</section>