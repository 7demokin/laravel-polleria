@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('content')
<section class="about" id="Nosotros">

    <div class="about-left">

        <div class="img-box">
            <img src="{{ asset('Assets/img/gallery/img-1.jpeg') }}" alt="about image" class="about-img" width="250">
        </div>

        <img src="./Assets/img/circle.svg" alt="circle shape" class="shape shape-6" width="20">
        <img src="./Assets/img/circle.svg" alt="circle shape" class="shape shape-7" width="30">
        <img src="./Assets/img/ring.svg" alt="ring shape" class="shape shape-8" width="35">
        <img src="./Assets/img/ring.svg" alt="ring shape" class="shape shape-9" width="80">

    </div>

    <div class="about-right">

        <h2 class="section-title">Sobre Nostros</h2>

        <p class="section-text">
            <br>
            Somos Pollos y Parrilas Edualdo y Familia, y nos distinguimos por brindar el Mejor Pollo a la Brasa, Parrillas y Chifas. El éxito esta en el Delicioso Sabor de nuestro platos, lo cual nos ha permitido seguir creciendo y ser la preferencia de miles de clientes.

        </p>
    </div>
</section>
@endsection
