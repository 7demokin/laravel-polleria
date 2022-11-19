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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed feugiat nibh, vel tincidunt sem.
            Pellentesque convallis, leo quis tempus ullamcorper, lorem justo egestas quam, consectetur imperdiet
            quam metus nec nisi. Maecenas varius faucibus erat, non congue libero. Nullam fringilla ultrices quam id
            tincidunt. Mauris et tortor varius, congue leo sed, consequat mi. Vivamus vitae urna arcu. Vivamus
            fringilla dictum consequat. Quisque tristique varius urna ac volutpat. Aenean gravida dolor et mi
            pulvinar pretium.
        </p>
    </div>
</section>
@endsection
