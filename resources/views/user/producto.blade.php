@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
    <section class="about">
        <div class="pt-50">
            <div class="img-box">
                <img src="{{ asset('Assets/img/products/' . $producto->imagen) }}" alt="{{ $producto->nombre }}"
                    class="about-img">
            </div>
        </div>

        <div class="about-right">

            <h1 class="section-title h1">{{ $producto->categoria->nombre }}</h1>
            <span class="text-red h3 text-bold">S/ {{ $producto->precio }}</span>
            <p class="section-text">
                {{ $producto->nombre }}
            </p>
            <div class="btn-group">
                <div class="cantidad-div">
                    <button id="btn-cantidad-menos" class="btn btn-primary h5">
                        -
                    </button>
                    <div class="cantidad h5">
                        <span id="span-cantidad">1</span>
                    </div>
                    <button id="btn-cantidad-mas" class="btn btn-primary h5 ">
                        +
                    </button>
                </div>

                <button id="btn-submit" class="btn btn-secondary btn-icon">
                    <img id="load-btn-submit" height="26">
                    <img id="icon-btn-submit" src="{{ asset('Assets/img/agregar.png') }}" height="26" alt="agregar icon">
                    <span id="text-btn-submit">Agregar</span>
                </button>

            </div>
        </div>

    </section>
    <section class="section pt-75">
        <h2 class="text-center text-white pb-50 h2">Otros Productos</h2>
        <div class="carta">
            <div class="products-grid">
                @foreach ($productos as $obj)
                    <a href="{{ route('product', $obj->id) }}">
                        <div class="product-card">
                            <div class="img-box">
                                <img src="{{ $obj->imagen != null ? asset('Assets/img/products/' . $obj->imagen) : asset('Assets/img/no-pictures.png') }}"
                                    class="product-img" loading="lazy" alt="{{ $obj->nombre }}">
                            </div>
                            <div class="product-content">
                                <div class="wrapper">
                                    <h3 class="product-name">{{ $obj->categoria->nombre }}</h3>
                                    <p class="product-price">
                                        <span class="small">S/</span>{{ $obj->precio }}
                                    </p>
                                </div>
                                <p class="product-text">
                                    {{ $obj->nombre }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        const btnCantidadMas = document.getElementById('btn-cantidad-mas');
        const btnCantidadMenos = document.getElementById('btn-cantidad-menos');
        const spanCantidad = document.getElementById('span-cantidad');
        const btnSubmit = document.getElementById('btn-submit');
        const iconBtnSubmit = $('#icon-btn-submit');
        const loadBtnSubmit = $('#load-btn-submit');
        const textBtnSubmit = $('#text-btn-submit');

        loadBtnSubmit.hide();
        loadBtnSubmit.attr('src', "{{ asset('Assets/img/load.gif') }}");

        btnCantidadMas.addEventListener('click', function() {
            let cantidad = spanCantidad.textContent
            spanCantidad.textContent = parseInt(cantidad) + 1;
        });

        btnCantidadMenos.addEventListener('click', function() {
            let cantidad = spanCantidad.textContent
            if (parseInt(cantidad) > 1) {
                spanCantidad.textContent = parseInt(cantidad) - 1;
            }
        });



        btnSubmit.addEventListener('click', function() {

            let data = {
                id: {{ $producto->id }},
                cantidad: parseInt(spanCantidad.textContent),
                _token: $('meta[name="csrf-token"]').attr('content')
            };
            $.ajax({
                type: "post",
                url: "{{ route('api.addCartItem') }}",
                data: data,
                beforeSend: function() {
                    iconBtnSubmit.hide();
                    loadBtnSubmit.show();
                    textBtnSubmit.text('Agregando...')
                    $(this).attr("disabled", "disabled");
                },
                complete: function() {
                    iconBtnSubmit.show();
                    loadBtnSubmit.hide();
                    textBtnSubmit.text('Agregar')
                    $(this).removeAttr("disabled");
                },
                error: function() {
                    toastr["error"]('Ha ocurrido un error interno!');
                },
                success: function(res) {
                    toastr["success"](res.message);
                    $('#total-carrito').html(res.data.length)
                    $('#div-carrito').html(loadCarrito(res.data))
                }
            });
        });
    </script>
@endsection
