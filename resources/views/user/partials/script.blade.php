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
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
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

    let loadCarrito = (data) => {
        return data.map((item) => {
            if (item.producto.imagen != null) {
                item.producto.imagen = "{{ asset('Assets/img/products/') }}" + '/' + item.producto.imagen
            } else {
                item.producto.imagen = "{{ asset('Assets/img/no-pictures.png') }}"
            }
            return (`<li>
                    <a href="{{ route('cart') }}" class="cart-item">
                        <div class="img-box">
                            <img src="${item.producto.imagen}" alt="${item.producto.nombre}"
                                class="product-img" width="50" height="50" loading="lazy">
                        </div>
                        <h5 class="product-name">(x${item.cantidad}) ${item.producto.nombre}</h5>
                        <p class="product-price">
                            <span class="small">S/</span>${item.precio*item.cantidad}
                        </p>
                    </a>
                </li>`)
        }).join(' ');
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

    /* ---Login Modal--- */
    jQuery(document).ready(function($) {
        let $form_modal = $('.cd-user-modal'),
            $form_login = $form_modal.find('#cd-login'),
            $form_signup = $form_modal.find('#cd-signup'),
            $form_forgot_password = $form_modal.find('#cd-reset-password'),
            $form_modal_tab = $('.cd-switcher'),
            $tab_login = $form_modal_tab.children('li').eq(0).children('a'),
            $tab_signup = $form_modal_tab.children('li').eq(1).children('a'),
            $forgot_password_link = $form_login.find('.cd-form-bottom-message a'),
            $back_to_login_link = $form_forgot_password.find('.cd-form-bottom-message a'),
            $main_nav = $('.nav-link-login');

        //open modal
        $main_nav.on('click', function(event) {

            //show modal layer
            $form_modal.addClass('is-visible');
            //show the selected form
            ($(event.target).is('.cd-signup')) ? signup_selected(): login_selected();

        });

        //close modal
        $('.cd-user-modal').on('click', function(event) {
            if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
                $form_modal.removeClass('is-visible');
            }
        });
        //close modal when clicking the esc keyboard button
        $(document).keyup(function(event) {
            if (event.which == '27') {
                $form_modal.removeClass('is-visible');
            }
        });

        //switch from a tab to another
        $form_modal_tab.on('click', function(event) {
            event.preventDefault();
            ($(event.target).is($tab_login)) ? login_selected(): signup_selected();
        });

        //hide or show password
        $('.hide-password').on('click', function() {
            let $this = $(this),
                $password_field = $this.prev('input');

            ('password' == $password_field.attr('type')) ? $password_field.attr('type', 'text'):
                $password_field.attr('type', 'password');
            ('Ocultar' == $this.text()) ? $this.text('Mostrar'): $this.text('Ocultar');
            //focus and move cursor to the end of input field
            $password_field.putCursorAtEnd();
        });

        //show forgot-password form 
        $forgot_password_link.on('click', function(event) {
            event.preventDefault();
            forgot_password_selected();
        });

        //back to login from the forgot-password form
        $back_to_login_link.on('click', function(event) {
            event.preventDefault();
            login_selected();
        });

        function login_selected() {
            $form_login.addClass('is-selected');
            $form_signup.removeClass('is-selected');
            $form_forgot_password.removeClass('is-selected');
            $tab_login.addClass('selected');
            $tab_signup.removeClass('selected');
        }

        function signup_selected() {
            $form_login.removeClass('is-selected');
            $form_signup.addClass('is-selected');
            $form_forgot_password.removeClass('is-selected');
            $tab_login.removeClass('selected');
            $tab_signup.addClass('selected');
        }

        function forgot_password_selected() {
            $form_login.removeClass('is-selected');
            $form_signup.removeClass('is-selected');
            $form_forgot_password.addClass('is-selected');
        }
    });


    //credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
    jQuery.fn.putCursorAtEnd = function() {
        return this.each(function() {
            // If this function exists...
            if (this.setSelectionRange) {
                // ... then use it (Doesn't work in IE)
                // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
                let len = $(this).val().length * 2;
                this.setSelectionRange(len, len);
            } else {
                // ... otherwise replace the contents with itself
                // (Doesn't work in Google Chrome)
                $(this).val($(this).val());
            }
        });
    };

    jQuery('#cody-info ul li').eq(1).on('click', function() {
        $('#cody-info').hide();
    });



    function sendLoginPost(form) {
        // Capturamnos el boton de envío
        let btnEnviar = $(form).find('input[type=submit]');
        let btnTexto = btnEnviar.val();
        $.ajax({
            type: 'POST',
            url: $(form).attr("action"),
            data: $(form).serialize(),
            beforeSend: function() {
                /*
                 * Esta función se ejecuta durante el envió de la petición al
                 * servidor.
                 * */
                // btnEnviar.text("Enviando"); Para button 
                btnEnviar.val("Procesando..."); // Para input de tipo button
                btnEnviar.attr("disabled", "disabled");
            },
            complete: function() {
                /*
                 * Se ejecuta al termino de la petición
                 * */
                btnEnviar.val(btnTexto);
                btnEnviar.removeAttr("disabled");
            },
            success: function(res) {
                /*
                 * Se ejecuta cuando termina la petición y esta ha sido
                 * correcta
                 * */
                toastr["success"](res.message);
                location.reload();
                return true
            },
            error: function(res) {
                /*
                 * Se ejecuta si la peticón ha sido erronea
                 * */
                toastr["error"](res.responseJSON.message);
                return false;
            }
        });
        // Nos permite cancelar el envio del formulario

    }



    $("#signup-form").submit(function(e) {
        e.preventDefault();
    }).validate({
        submitHandler: function(form) {
            sendLoginPost(form)
        },
        rules: {
            "signup-firstname": {
                required: true,
                maxlength: 50
            },
            "signup-lastname": {
                required: true,
                maxlength: 50
            },
            "signup-mobile": {
                required: true,
                digits: true,
                minlength: 9,
                maxlength: 9
            },
            "signup-email": {
                required: true,
                maxlength: 50,
                email: true
            },
            "signup-password": {
                required: true,
                maxlength: 50,
            }
        },
        messages: {
            "signup-firstname": {
                required: msgRequired,
                maxlength: msgMaxlength(50)
            },
            "signup-lastname": {
                required: msgRequired,
                maxlength: msgMaxlength(50)
            },
            "signup-mobile": {
                required: msgRequired,
                digits: msgDigits,
                minlength: msgMinlength(9),
                maxlength: msgMaxlength(9)
            },
            "signup-email": {
                required: msgRequired,
                maxlength: msgMaxlength(50),
                email: true
            },
            "signup-password": {
                required: msgRequired,
                maxlength: msgMaxlength(50),
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.insertAfter(element.parent('.fieldset'));
        },
    });


    $("#signin-form").submit(function(e) {
        e.preventDefault();
    }).validate({
        submitHandler: function(form) {
            sendLoginPost(form)
        },
        rules: {
            "signin-email": {
                required: true,
                maxlength: 50,
                email: true
            },
            "signin-password": {
                required: true,
                maxlength: 50,
            }
        },
        messages: {
            "signin-email": {
                required: msgRequired,
                maxlength: msgMaxlength(50),
                email: true
            },
            "signin-password": {
                required: msgRequired,
                maxlength: msgMaxlength(50),
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.insertAfter(element.parent('.fieldset'));
        },
    });
    /*
    $(document).ready(function() {
        $("#signup-form").bind("submit", function() {

        });
    });*/
</script>
