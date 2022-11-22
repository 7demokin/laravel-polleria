@extends('user.layout', ['title' => $title, 'description' => $description, 'logo' => $logo])
@section('styles')
    <style>
        .inline-gallery-container {
            width: 100%;

            // set 60% height
            height: 0;
            padding-bottom: 65%;
        }

        .lg-counter span {
            display: inline-block !important;
        }
    </style>
@endsection
@section('content')
    <section class="section">

        <div class="d-flex justify-content-center">
            <div id="inline-gallery-container" class="inline-gallery-container"></div>
        </div>

    </section>
@endsection
@section('scripts')
    <script>
        const $lgContainer = document.getElementById("inline-gallery-container");

        const inlineGallery = lightGallery($lgContainer, {
            container: $lgContainer,
            dynamic: true,
            // Turn off hash plugin in case if you are using it
            // as we don't want to change the url on slide change
            hash: false,
            // Do not allow users to close the gallery
            closable: false,
            // Add maximize icon to enlarge the gallery
            showMaximizeIcon: true,
            // Append caption inside the slide item
            // to apply some animation for the captions (Optional)
            appendSubHtmlTo: ".lg-item",
            // Delay slide transition to complete captions animations
            // before navigating to different slides (Optional)
            // You can find caption animation demo on the captions demo page
            slideDelay: 400,
            autoplay: true,
            slideShowAutoplay: true,
            forceSlideShowAutoplay: true,
            plugins: [lgZoom, lgThumbnail, lgAutoplay],
            dynamicEl: [
                @for ($i = 1; $i <= 13; $i++)
                    {
                        src: "{{ asset('Assets/img/gallery/img-'.$i.'.jpeg') }}",
                        thumb: "{{ asset('Assets/img/gallery/img-'.$i.'.jpeg') }}",
                    },
                @endfor
                @for ($i = 1; $i <= 28; $i++)
                    {
                        src: "{{ asset('Assets/img/gallery/img-'.$i.'.jpg') }}",
                        thumb: "{{ asset('Assets/img/gallery/img-'.$i.'.jpg') }}",
                    },
                @endfor
            ],

            // Completely optional
            // Adding as the codepen preview is usually smaller
            thumbWidth: 60,
            thumbHeight: "40px",
            thumbMargin: 4
        });

        setTimeout(() => {
            inlineGallery.openGallery();
        }, 200);
    </script>
@endsection
