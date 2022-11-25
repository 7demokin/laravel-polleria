<!-- Scripts -->
<script src="{{ mix('js/all.js') }}"></script>
<!-- ionicon link-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- lightgallery -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/lightgallery.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/zoom/lg-zoom.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/thumbnail/lg-thumbnail.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.0/plugins/autoplay/lg-autoplay.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $.ajax({
        type: "get",
        url: "{{ route('api.getCart') }}",
        beforeSend: function() {},
        complete: function() {},
        error: function() {
            $("#div-carrito").html("Ha ocurrido un error interno!");
        },
        success: function(res) {
            $('#total-carrito').html(res.data.length)
            $("#div-carrito").html(loadCarrito(res.data));
        },
    });
</script>
