<div class="{{$class}} faq js--faq">
    <div class="faq__container container">
        <h2 class="faq__title title title--center">
            Популярні запитання
        </h2>
        <div class="faq__wrapper">
            @foreach($faqs as $faq)
                <div class="faq__item js--faq-item">
                    <h5  class="faq__header js--faq-button">
                        {{ $faq['title'] ?? ''}}
                    </h5>
                    <div class="faq__collapse">
                        <div class="faq__text">
                            {!! $faq['text'] !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
