@section('footer_scripts')
    <script>

        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this, args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function () {
                    callback.apply(context, args);
                }, ms || 0);
            };
        }

        var upUrl = new URL('{{ isset($search) ? route('search',['slug' => $search]) : route('series',['slug' => $category->slug]) }}');

        function filtreSeries() {

            // brand list
            upUrl.searchParams.delete('brand[]');
            var ac_brand_ids = [];
            $(".js_ac_brand").each(function(){
                var el = $(this);
                if( el.hasClass('active') ) {
                    ac_brand_ids.push($(this).attr('data-id'));
                    upUrl.searchParams.append('brand[]', $(this).attr('data-id'));
                }
            });

            // color list
            upUrl.searchParams.delete('color[]');
            var ac_color_ids = [];
            $(".js_ac_color").each(function(){
                var el = $(this);
                if( el.hasClass('active') ) {
                    ac_color_ids.push($(this).attr('data-id'));
                    upUrl.searchParams.append('color[]', $(this).attr('data-id'));
                }
            });


            // functional list
            upUrl.searchParams.delete('functional[]');
            var ac_functional_ids = [];
            $(".js_ac_functional").each(function(){
                var el = $(this);
                if( el.hasClass('active') ) {
                    ac_functional_ids.push($(this).attr('data-id'));
                    upUrl.searchParams.append('functional[]', $(this).attr('data-id'));
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

            //  Sort By
            upUrl.searchParams.delete('sortBy');
            var sortBy = $('.sortByVal').val();
            upUrl.searchParams.append('sortBy', sortBy);


            var params = {
                sortBy: sortBy,
                brand: ac_brand_ids,
                category_id: {{ isset($category) ? $category->id : '' }},
                '_token': $('.csrf_token').val(),
                functional: ac_functional_ids,
                color: ac_color_ids,
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

            // Price from
            $('.price_start').keyup(delay(function (e) {
                filtreSeries('price_start')
            }, 3000));

            // Price to
            $('.price_end').keyup(delay(function (e) {
                filtreSeries('price_end')
            }, 3000));

            $(document).on("click", ".js_ac_checkbox", function (e) {

                var input = $(this).find('input');

                if( input.is(':checked') ){
                    input.attr("checked", "checked");
                    $(this).addClass("active");


                }
                else{
                    input.removeAttr("checked");
                    $(this).removeClass("active");
                }


                filtreSeries();
            });

            $(document).on("click", ".js_ac_sortBy", function (e) {
                $('.js_ac_sortBy').removeClass('active');
                $(this).addClass('active');
                $('.sortByVal').val($(this).attr('data-type'));
                filtreSeries();
            });


        });


    </script>
@stop