<section id="characteristic-section" class="single-section single-charachteristic">
    <div class="container">
        <div class="single-section__header">
            <h3>Characteristics</h3>
        </div>

        <div class="characteristic-grid">

            <div class="characteristic-grid_row">
                <table>
                    <tbody>
                        <tr>
                            <td>Main</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td>
                                @foreach($brands as $brand)
                                    <img src="{{ url('storage/'.$brand->image) }}" alt="{{ $brand->getTranslatedAttribute('name') }}" class="table_img_brand">
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                @if($product)
                    {!! $product->getTranslatedAttribute('text') !!}
                @endif
            </div>

            <div class="characteristic-grid_row">
                <table>
                    <tbody>
                        <tr>
                            <td>Main</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td>
                                @foreach($brands as $brand)
                                    <img src="{{ url('storage/'.$brand->image) }}" alt="{{ $brand->getTranslatedAttribute('name') }}" class="table_img_brand">
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
                @if($product)
                    {!! $product->getTranslatedAttribute('text') !!}
                @endif
            </div>
        </div>
    </div>
</section>