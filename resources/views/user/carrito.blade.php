@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
    <section class="section">
        <h1 class="text-white text-center h2 pb-25">Carrito de compras</h1>
        @if ($carrito && count($carrito) > 0)
            <div id="div-table" class="div-table">
                <table id="carrito-tb" class="display table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio U.</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carrito as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('product', $item['producto']['id']) }}">
                                        {{ $item['producto']->nombre }}
                                    </a>
                                </td>
                                <td>S/ <span
                                        id="span-precio-u-{{ $item['producto']['id'] }}">{{ $item['producto']->precio }}</span>
                                </td>
                                <td>
                                    <div class="cantidad-div">
                                        <button class="btn btn-primary h5 btn-cantidad-menos"
                                            rel="{{ $item['producto']['id'] }}">
                                            -
                                        </button>
                                        <div class="cantidad h5">
                                            <span
                                                id="span-cantidad-{{ $item['producto']['id'] }}">{{ $item['cantidad'] }}</span>
                                        </div>
                                        <button class="btn btn-primary h5 btn-cantidad-mas"
                                            rel="{{ $item['producto']['id'] }}">
                                            +
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    S/ <span
                                        id="span-precio-{{ $item['producto']['id'] }}">{{ $item['cantidad'] * $item['producto']->precio }}</span>
                                </td>
                                <td>
                                    <button rel="{{ $item['producto']['id'] }}"
                                        class="btn btn-tertiary btn-icon btn-delete">
                                        <img class="load-img" height="26">
                                        <img class="icon-img" src="{{ asset('Assets/img/trash.png') }}" height="26"
                                            alt="trash icon">
                                        <span class="text-btn">Eliminar</span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div id="div-total" class="div-total mt-50 text-center ml">
                <div class="bg-white p-15">
                    <div class="h4">Total: S/ <span id="span-total" class="d-inline">{{ $total }}</span>
                    </div>
                    <div class="text-red h5"><small>*Incluye IGV</small></div>
                </div>
                <div>
                    <a class="btn btn-primary btn-icon w-100 text-center" href="{{ route('checkout') }}">
                        <img class="icon-img" src="{{ asset('Assets/img/checkout.png') }}" height="26" alt="trash icon">
                        Realizar Pedido
                    </a>
                </div>
            </div>
        @else
            <img class="mx pt-25" src="{{ asset('Assets/img/carrito-de-compras.png') }}" alt="shopping cart icon "
                width="100">
            <h2 class="text-red h3 text-center ">Aun no has agregado ningun producto!</h2>
            <div class="pb-150">
                <div class="btn-group-center pt-25">
                    <a href="{{ route('menu') }}">
                        <button class="btn btn-primary btn-icon">
                            <img src="{{ asset('Assets/img/menu.svg') }}" height="26" alt="menu icon">
                            Ver Carta
                        </button>
                    </a>
                    <a href="{{ route('promotions') }}">
                        <button class="btn btn-secondary btn-icon">
                            <img src="{{ asset('Assets/img/discount.png') }}" height="26" alt="discount icon">
                            Ver Promociones
                        </button>
                    </a>
                </div>
            </div>
        @endif
    </section>
@endsection
@section('scripts')
    <script>
        $('.load-img').attr('src', "{{ asset('Assets/img/load-w.gif') }}").hide();
        let spanTotal = $('#span-total');
        let divTotal = $('#div-total');
        let divTable = $('#div-table');



        function updateTotal(id, cantidad, sumar) {
            let btns = $('button');
            let data = {
                id: id,
                cantidad: sumar ? 1 : -1,
                _token: $('meta[name="csrf-token"]').attr('content')
            };

            $.ajax({
                type: "post",
                url: "{{ route('api.addCartItem') }}",
                data: data,
                beforeSend: function() {
                    btns.attr("disabled", "disabled");
                },
                complete: function() {
                    btns.removeAttr("disabled");
                },
                error: function(res) {
                    toastr["error"](res.responseJSON.message);
                },
                success: function(res) {

                    let spanCantidad = $('#span-cantidad-' + id);
                    let spanPrecioU = $('#span-precio-u-' + id);
                    let spanPrecio = $('#span-precio-' + id);

                    let precioU = parseFloat(spanPrecioU.text())
                    let precio = precioU * cantidad
                    spanCantidad.text(cantidad);
                    spanPrecio.text(precio)
                    let total = parseFloat(spanTotal.text())
                    if (sumar) {
                        spanTotal.text(total + precioU)
                    } else {
                        spanTotal.text(total - precioU)
                    }
                    $('#total-carrito').html(res.data.length)
                    $('#div-carrito').html(loadCarrito(res.data))
                }
            });
        }

        $(document).ready(function() {
            $(".btn-cantidad-mas").click(function() {
                let btns = $(this).closest('tr').find('button');
                btns.attr("disabled", "disabled");
                let id = $(this).attr('rel');
                let spanCantidad = $('#span-cantidad-' + id);
                let cantidad = parseInt(spanCantidad.text()) + 1;
                updateTotal(id, cantidad, true)
            });
            $(".btn-cantidad-menos").click(function() {
                let btns = $(this).closest('tr').find('button');
                btns.attr("disabled", "disabled");
                let id = $(this).attr('rel');
                let spanCantidad = $('#span-cantidad-' + id);
                let cantidad = parseInt(spanCantidad.text()) - 1;
                if (parseInt(cantidad) > 0) {
                    updateTotal(id, cantidad, false)
                }
            });

            $(".btn-delete").click(function() {
                event.preventDefault();
                let btn = $(this)
                let id = $(this).attr('rel')

                let spanPrecio = $('#span-precio-' + id);

                let loadImg = $(this).find('.load-img')
                let iconImg = $(this).find('.icon-img')
                let textBtn = $(this).find('.text-btn')

                let btns = $('button');

                let data = {
                    id: id,
                    _token: $('meta[name="csrf-token"]').attr('content')
                };
                $.ajax({
                    type: "post",
                    url: "{{ route('api.delCartItem') }}",
                    data: data,
                    beforeSend: function() {
                        iconImg.hide();
                        loadImg.show();
                        textBtn.text('Eliminando...')
                        btns.attr("disabled", "disabled");

                    },
                    complete: function() {
                        iconImg.show();
                        loadImg.hide();
                        textBtn.text('Eliminar')
                        btns.removeAttr("disabled");
                    },
                    error: function(res) {
                        toastr["error"](res.responseJSON.message);
                    },
                    success: function(res) {
                        toastr["success"](res.message);
                        spanTotal.text(parseFloat(spanTotal.text()) - parseFloat(spanPrecio
                            .text()));
                        $('#total-carrito').html(res.data.length)
                        $('#div-carrito').html(loadCarrito(res.data))
                        btn.closest('tr').remove();
                        if (res.data.length == 0) {
                            divTable.hide()
                            divTotal.hide()
                            location.reload();
                        }
                    }
                });


            });
        });
    </script>
@endsection
