@section('footer_scripts')
    <script>

        var upUrl = new URL();

        function filtreProducts() {

            upUrl.searchParams.delete('category_id');
            var category_id = $('.category_id').val();
            if(category_id > 0) {
                upUrl.searchParams.append('category_id', category_id);
            }

            //  Price from
            upUrl.searchParams.delete('price_start');
            var price_start = $('.price_start').val();
            if(price_start > 0) {
                upUrl.searchParams.append('price_start', price_start);
            }

            //  Price to
            upUrl.searchParams.delete('price_end');
            var price_end = $('.price_end').val();
            if(price_end > 0) {
                upUrl.searchParams.append('price_end', price_end);
            }


            //  Sort
            upUrl.searchParams.delete('sortBy');
            var sortBy = $('.sortBy').val();
            upUrl.searchParams.append('sortBy', sortBy);


            var params = {
                sortBy: sortBy,
                shop_id: $('.shop_id').val(),
                category_id: category_id,
                '_token': $('.csrf_token').val(),
                price_start: price_start,
                price_end: price_end,
            }

            $.ajax({
                type: "POST",
                url: "/api/v1/product/filterProducts",
                data: params,
                dataType : "json",
                success: function(resp) {

                    // generate push url
                    if(upUrl) {
                        history.pushState(null,null,upUrl.href);
                    }
                    $('.shop_products-body').html(resp.product_list_area);
                    $('.shop_pagination').html(resp.pagination_list_area);

                }
            });

        }

        $(document).ready(function () {

            $(document).on("click", ".js_category", function (e) {
                $('.category_id').val($(this).attr('data-id'));
                $('.block_button').removeClass('active');
                $(this).addClass('active');
                filtreProducts();
            });

            $(document).on("change", ".form_filtre-input", function (e) {
                filtreProducts();
            });


        });

    </script>
@stop