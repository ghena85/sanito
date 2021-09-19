@section('footer_scripts')
    <script>

        var upUrl = new URL('{{ route('series',['slug' => $category->slug]) }}');

        function filtreSeries() {


            // brand list
            upUrl.searchParams.delete('brand[]');
            var ac_brand_ids = [];
            $(".js_ac_brand").each(function(){
                var el = $(this);
                // if( el.hasClass('active') ) {
                if(el.is(':checked')){
                        ac_brand_ids.push($(this).attr('data-id'));
                        upUrl.searchParams.append('brand[]', $(this).attr('data-id'));
                }
            });

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
                category_id: {{ $category->id }},
                '_token': $('.csrf_token').val(),
                price_start: price_start,
                price_end: price_end,
            }

            $.ajax({
                type: "POST",
                url: "/api/v1/series/filterSeries",
                data: params,
                dataType : "json",
                success: function(resp) {

                    // generate push url
                    if(upUrl) {
                        history.pushState(null,null,upUrl.href);
                    }
                    $('.series_list_area').html(resp.series_list_area);
                    $('.pagination_list_area').html(resp.pagination_list_area);

                }
            });

        }

        $(document).ready(function () {
            $(document).on("click", ".js_ac_brand", function (e) {

                var input = $(this).find('input');

                if( input.is(':checked') ){
                    input.removeAttr("checked");
                    $(this).removeClass("active");
                }
                else{
                    input.attr("checked", "checked");
                    $(this).addClass("active");
                }


                filtreSeries();
            });

        });


    </script>
@stop