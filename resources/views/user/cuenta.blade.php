@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
    <section class="section">
        <div class="text-center pb-50 w-100 mw-100 pt-50">
            <h1 class="section-title page-title w-100 mw-100">Cuenta</h1>
        </div>
        <form class="cd-form p-0" action="">
            <div class="row">
                <div class="col-md-8">
                    <div class="bg-white p-15">
                        <strong class="h3">Información personal</strong>
                        @if (@Auth::user() && @Auth::user()->hasRole('cliente'))
                        @else
                            <p>Te recomendamos <a href="#!" class="link-register">registrarte</a> o <a href="#!"
                                    class="link-login">ingresar</a> para no volver a rellenar tus datos</p>
                            <p class="fieldset">
                                <label class="image-replace cd-user" for="signup-firstname">Nombres</label>
                                <input class="full-width has-padding has-border" id="signup-firstname"
                                    name="signup-firstname" type="text" placeholder="Nombres">
                                <!--<span class="cd-error-message">Error message here!</span>-->
                            </p>

                            <p class="fieldset">
                                <label class="image-replace cd-user" for="signup-lastname">Apellidos</label>
                                <input class="full-width has-padding has-border" id="signup-lastname" name="signup-lastname"
                                    type="text" placeholder="Apellidos">
                            </p>
                            <p class="fieldset">
                                <label class="image-replace cd-mobile" for="signup-mobile">Celular</label>
                                <input class="full-width has-padding has-border" id="signup-mobile" name="signup-mobile"
                                    type="text" placeholder="Celular">
                            </p>
                            <p class="fieldset">
                                <label class="image-replace cd-email" for="signup-email">E-mail</label>
                                <input class="full-width has-padding has-border" id="signup-email" name="signup-email"
                                    type="email" placeholder="Correo">
                            </p>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <div class="bg-white p-15">
                            <div class="row mb-15">
                                <div class="col-6 mb-5">
                                    <strong>Cantidad x Producto</strong>
                                </div>
                                <div class="col-6 ">
                                    <strong>Precio</strong>
                                </div>
                                @foreach ($carrito as $item)
                                    <div class="col-6">{{ $item['cantidad'] }} x {{ $item['producto']->nombre }}</div>
                                    <div class="col-6">S/{{ $item['producto']->precio * $item['cantidad'] }}</div>
                                    <div class="col-6">{{ $item['cantidad'] }} x {{ $item['producto']->nombre }}</div>
                                    <div class="col-6">S/{{ $item['producto']->precio * $item['cantidad'] }}</div>
                                @endforeach

                            </div>
                            <div class="h4 ">Total: S/ <span id="span-total" class="d-inline">{{ $total }}</span>
                            </div>
                            <div class="text-red h5"><small>*Incluye IGV</small></div>
                        </div>
                        <div>
                            <a class="btn btn-primary btn-icon w-100 text-center" href="{{ route('checkout') }}">
                                <img class="icon-img" src="{{ asset('Assets/img/checkout.png') }}" height="26"
                                    alt="trash icon">
                                Generar Pedido
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('scripts')
@endsection
