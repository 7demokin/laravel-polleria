@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
    <section class="section">
        <h1 class="text-white text-center h2 pb-25">Carrito de compras</h1>
        @if ($carrito)
            <div class="div-table">
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
            <div class="bg-white mt-50 text-center w-50 ml p-15">
                <div class="h4">Total: S/ <span id="span-total" class="d-inline">{{ $total }}</span>
                </div>
                <div class="text-red h5"><small>*Incluye IGV</small></div>
                <div></div>
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
        let spanTotal = $('#span-total');

        function updateTotal(id, cantidad, sumar) {
            let spanPrecioU = $('#span-precio-u-' + id);
            let spanPrecio = $('#span-precio-' + id);

            precioU = parseFloat(spanPrecioU.text())
            precio = precioU * cantidad
            spanPrecio.text(precio)

            total = parseFloat(spanTotal.text())
            if (sumar) {
                spanTotal.text(total + precioU)
            } else {
                spanTotal.text(total - precioU)
            }
        }

        $(document).ready(function() {
            $(".btn-cantidad-mas").click(function() {
                $(this).attr("disabled", "disabled");
                let id = $(this).attr('rel');
                let spanCantidad = $('#span-cantidad-' + id);
                let cantidad = parseInt(spanCantidad.text()) + 1;
                spanCantidad.text(cantidad);
                updateTotal(id, cantidad, true)
                $(this).removeAttr("disabled");
            });
            $(".btn-cantidad-menos").click(function() {
                $(this).attr("disabled", "disabled");
                let id = $(this).attr('rel');
                let spanCantidad = $('#span-cantidad-' + id);
                let cantidad = parseInt(spanCantidad.text()) - 1;
                if (parseInt(cantidad) > 0) {
                    spanCantidad.text(cantidad);
                    updateTotal(id, cantidad, false)
                }
                $(this).removeAttr("disabled");
            });

            $(".btn-delete").click(function() {
                event.preventDefault();
                let btn = $(this)
                let id = $(this).attr('rel')

                let loadImg = $(this).find('.load-img')
                let iconImg = $(this).find('.icon-img')
                let textBtn = $(this).find('.text-btn')

                let data = {
                    id: id
                };
                $.ajax({
                    type: "post",
                    url: "{{ route('api.addCartItem') }}",
                    data: data,
                    beforeSend: function() {
                        iconImg.hide();
                        loadImg.show();
                        textBtn.text('Eliminando...')
                        btn.attr("disabled", "disabled");
                    },
                    complete: function() {
                        iconImg.show();
                        loadImg.hide();
                        textBtn.text('Eliminar')
                        btn.removeAttr("disabled");
                    },
                    error: function(res) {
                        toastr["error"](res.responseJSON.message);
                    },
                    success: function(res) {
                        $(this).closest('tr').remove();
                        toastr["success"](res.message);
                    }
                });

                
            });
        });
    </script>
@endsection
