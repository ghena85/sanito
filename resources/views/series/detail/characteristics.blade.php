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
                            <td><img src="{{ url('storage/'.$brands->image) }}" alt="Brand Img" class="table_img_brand"></td>
                        </tr>
                    </tbody>
                </table>
                {!! $product->text !!}
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
                            <td><img src="{{ url('storage/'.$brands->image) }}" alt="Brand Img" class="table_img_brand"></td>
                        </tr>
                    </tbody>
                </table>
                {!! $product->text !!}
            </div>
        </div>
    </div>
</section>