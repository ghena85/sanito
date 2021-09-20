$(document).ready(function () {

    function globalLocale() {

        let locale = $('html').attr('lang')

        if(locale == 'ro') {
            return ''
        }
        else {
            return '/' + locale
        }

    }

    $('body').on('click', '.btn-add-cart', function () {
        var el    = $(this)
        var id    = el.data('id');
        var page  = el.data('page');
        var count = page == 'detail' ? parseInt($('.quantity_number').html()) : 1;

        $.ajax({
            type:'post',
            url: "/api/v1/cart/add-to-cart",
            data: {'id' :id,'lng' : $('html').attr('lang'),'count' : count,'_token': $('.csrf_token').val()},
            success:function (result) {
                $('.header_cart').addClass('active');
                $('.cart__quantity').html(result.totalQt);
                $('.cart_content').html(result.popupCartContent);
                alertify.success(result.message);
            }
        })



    })

    $('.btn-plus-product').click(function () {

        var el = $(this)
        var id = el.data('id')
        var page  = el.data('page');
        var total = parseInt($('.quantity_number').html());
        if(page == 'detail')
        {
            $('.quantity_number').html(total+1);
        }
        else
        {
            $.ajax({
                type:'post',
                url: "/api/v1/cart/plus-to-cart",
                data: {'id' :id,'lng' : $('html').attr('lang'),'total' :total,'page' :page,'_token': $('.csrf_token').val()},
                success:function (result) {
                    $('.quantity_number').html(result.count);

                    $('.qt_product_'+id).html(result.count);
                    $('.fullPrice').html(result.fullPrice);
                    $('.totalPrice').html(result.totalPrice);
                    $('.cart__quantity').html(result.totalQt);
                    $('.header_cart').addClass('active');
                    if(result.delivery > 0) {
                        $('.block-delivery').show();
                    } else {
                        $('.block-delivery').hide();
                    }
                }
            })

        }

    })

    $('.btn-minus-product').click(function () {

        var el = $(this)
        var id = el.data('id')
        var page  = el.data('page');
        var total = parseInt($('.quantity_number').html());
        if(page == 'detail')
        {
            if(total-1 > 0) {
                $('.quantity_number').html(total-1);
            } else {
                $('.quantity_number').html(1);
            }

        }
        else
        {
            $.ajax({
                type:'post',
                url: "/api/v1/cart/minus-to-cart",
                data: {'id' :id,'lng' : $('html').attr('lang'),'_token': $('.csrf_token').val()},
                success:function (result) {
                    console.log('result.count='+result.count);
                    $('.quantity_number').html(result.count);

                    $('.qt_product_'+id).html(result.count);
                    $('.fullPrice').html(result.fullPrice);
                    $('.totalPrice').html(result.totalPrice);
                    $('.cart__quantity').html(result.totalQt);
                    if(result.delivery > 0) {
                        $('.block-delivery').show();
                    } else {
                        $('.block-delivery').hide();
                    }

                }
            })
        }


    })

    $(document).on("click", ".btn-remove-product", function (e) {
        var el = $(this)
        var id = el.data('id')

        $.ajax({
            type:'post',
            url: "/api/v1/cart/remove-from-cart",
            data: {'id' :id,'lng' : $('html').attr('lang'),'_token': $('.csrf_token').val()},
            success:function (result) {

                $('.item-'+id).remove();
                $('.fullPrice').html(result.fullPrice);
                $('.totalPrice').html(result.totalPrice);

                $('.cart__quantity').html(result.totalQt);
                if(result.totalQt == 0) {
                    $('.header_cart').removeClass('active');
                }
                $('.cart_content').html(result.popupCartContent);
            }
        })

    })


    if (document.querySelector('.header-category__select')) {
        const categorySelect = document.querySelector('.header-category__select');
        const categoryDropdown = document.querySelector('.header-category__dropdown');
        const categoryItems = categoryDropdown.querySelectorAll('.category-dropdown__item');
        const overlay = document.querySelector('.overlay');
    
        categorySelect.addEventListener('click', () => {
            categorySelect.classList.toggle('open');
            categoryDropdown.classList.toggle('open');
            overlay.classList.toggle('open');
            document.body.classList.toggle('lock');
    
            document.addEventListener('click', (el) => {
                if (el.target === overlay) {
                    categorySelect.classList.remove('open');
                    categoryDropdown.classList.remove('open');
                    overlay.classList.remove('open');
                    document.body.classList.remove('lock');
                }
            })
        });
    
        for (let i = 0; i < categoryItems.length; i++) {
            categoryItems[i].addEventListener('click', function() {
                const activeElement = document.getElementsByClassName('active');
    
                if (activeElement.length > 0) {
                    activeElement[0].className = activeElement[0].className.replace(" active", "");
                }
    
                this.className += " active";
            })
        }
    }

})
