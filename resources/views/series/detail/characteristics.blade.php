@if($product && $product->getTranslatedAttribute('text'))
    <section id="characteristic-section" class="single-section single-charachteristic">
        <style>
            .characteristic-grid_row table {
                width: 100% !important;
            }
        </style>
        <div class="container">
            <div class="single-section__header">
                <h3>{{ $vars['characteristics'] }}</h3>
            </div>

            <div class="characteristic-grid-old">


                <div class="characteristic-grid_row" style="width: 100%">
                    @if($product)
                        {!! $product->getTranslatedAttribute('text') !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif