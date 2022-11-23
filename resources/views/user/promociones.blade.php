@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])

@section('content')
    <section class="section">
        <div class="text-center pb-50 w-100 mw-100 pt-50">
            <h1 class="section-title page-title w-100 mw-100">Nuestras Promociones</h1>
        </div>

        <div class="carta">
            
            <div class="products-grid">
                @foreach ($productos as $producto)
                    <a href="{{ route('product', $producto->id) }}">
                        <div class="product-card">
                            <div class="img-box">
                                <img src="{{ $producto->imagen != null ? asset('Assets/img/products/' . $producto->imagen) : asset('Assets/img/no-pictures.png') }}"
                                    class="product-img" loading="lazy" alt="{{ $producto->nombre }}">
                            </div>
                            <div class="product-content">
                                <div class="wrapper">
                                    <h3 class="product-name">{{ $producto->categoria->nombre }}</h3>
                                    <p class="product-price">
                                        <!--<span class="small">S/</span>{{ $producto->precio }}-->
                                    </p>
                                </div>
                                <p class="product-text">
                                    {{ $producto->nombre }}
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
