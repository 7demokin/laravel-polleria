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
            
                    <button class="btn btn-secondary btn-icon">
                        <img src="{{ asset('Assets/img/agregar.png') }}" height="26" alt="agregar icon">
                        Agregar
                    </button>
              
            </div>
        </div>

    </section>
    <section class="section pt-75">
        <h2 class="text-center text-white pb-50 h2">Otros Productos</h2>
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
                                        <span class="small">S/</span>{{ $producto->precio }}
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
