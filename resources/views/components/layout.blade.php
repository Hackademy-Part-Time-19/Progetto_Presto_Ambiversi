<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ $title ?? config('app.name') }}</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/java.js', 'resources/css/style.css'])
    @livewireStyles

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
     integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <x-navbar></x-navbar>

    {{ $slot }}
    @livewireScripts


    <script>

        setTimeout(function() {
        document.getElementById('successMessage').style.opacity = '0';
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 1000); // Rimuove il messaggio di successo dopo la transizione
    }, 1500); // Nasconde il messaggio di successo dopo 5 secondi

    setTimeout(function() {
        document.getElementById('errorMessage').style.opacity = '0';
        setTimeout(function() {
            document.getElementById('errorMessage').style.display = 'none';
        }, 1000); // Rimuove il messaggio di errore dopo la transizione
    }, 1500); // Nasconde il messaggio di errore dopo 5 secondi

const thumbnails = document.querySelectorAll('.carousel__thumbnails');
    thumbnails.forEach(thumbnail => {
        const announcementId = thumbnail.getAttribute('data-announcement-id');
        const radioButtons = document.querySelectorAll(`input[name="slides${announcementId}"]`);

        thumbnail.addEventListener('click', (event) => {
            if (event.target.tagName === 'LABEL') {
                const targetId = event.target.getAttribute('for');
                const radioBtn = document.getElementById(targetId);
                radioBtn.checked = true;
            }
        });
    });


        const categories = [{
                name: "Gioielli",
                image: "{{ Storage::url('/Imagini/Gioielli.jpg') }}",
                gradient: "linear-gradient(90deg, rgba(177, 137, 85, 1) 10%, rgba(180, 161, 138, 1) 100%)"
            },
            {
                name: "Donna",
                image: "{{ Storage::url('/Imagini/Donna.jpg') }}",
                gradient: "linear-gradient(90deg, rgba(168,101,88,1) 10%, rgba(194,136,124,1) 100%)"
            },
            {
                name: "Tech",
                image: "{{ Storage::url('/Imagini/Tech.jpg') }}",
                gradient: "linear-gradient(90deg, rgba(24,23,23,1) 10%, rgba(64,64,64,1) 100%)"
            },
            {
                name: "Uomo",
                image: "{{ Storage::url('/Imagini/Uomo.jpg') }}",
                gradient: "linear-gradient(to right, #141e30, #243b55)"
            },
            {
                name: "Giochi",
                image: "{{ Storage::url('/Imagini/Giochi.jpg') }}",
                gradient: "linear-gradient(to right, #200122, #6f0000)"
            },
            {
                name: "Sport",
                image: "{{ Storage::url('/Imagini/Sport.jpg') }}",
                gradient: "linear-gradient(to right, #093028, #237a57)"
            },
            {
                name: "Auto",
                image: "{{ Storage::url('/Imagini/Auto.jpg') }}",
                gradient: "linear-gradient(90deg, rgba(63,23,23,1) 50%, rgba(108,62,62,1) 100%)"
            },
            {
                name: "Orologio",
                image: "{{ Storage::url('/Imagini/Orologio.jpg') }}",
                gradient: "linear-gradient(to right, #1d4350, #a43931)"
            },
            {
                name: "Film",
                image: "{{ Storage::url('/Imagini/Film.jpg') }}",
                gradient: "linear-gradient(to right, #cb2d3e, #ef473a)"
            },
            {
                name: "Musica",
                image: "{{ Storage::url('/Imagini/Musica.jpg') }}",
                gradient: "linear-gradient(to right, #403a3e, #be5869)"
            }
        ];


        @php
            $category = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
        @endphp

        function GioielliLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[0]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function DonnaLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[1]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function TechLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[2]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }


        function UomoLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[3]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function GiochiLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[4]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function SportLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[5]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function AutoLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[6]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function OrologioLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[7]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function FilmLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[8]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }

        function MusicaLink() {
            var link = document.getElementById('frecciaHref');
            link.href = '{{ route('categoryShow', ['category' => $category[9]]) }}';
            link.innerHTML = ' <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>';
        }


        function decreaseQuantity() {
            var quantityInput = document.getElementById('quantityInput');
            var currentQuantity = parseInt(quantityInput.value);

            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
            }
        }

        function increaseQuantity() {
            var quantityInput = document.getElementById('quantityInput');
            var currentQuantity = parseInt(quantityInput.value);

            quantityInput.value = currentQuantity + 1;
        }

        const toggleHeart = document.getElementById('toggleHeart');
        const heartIcon = document.getElementById('AggiuntaPreferiti');
        const message = document.getElementById('message');

        toggleHeart.addEventListener('click', function() {
            if (heartIcon.classList.contains('bi-heart')) {
                heartIcon.classList.remove('bi-heart');
                heartIcon.classList.add('bi-heart-fill');
                heartIcon.style.color = 'red';
                message.textContent = 'Aggiungi ai preferiti';
                message.style.display = 'block';
                setTimeout(function() {
                    message.style.opacity = '0';
                    setTimeout(function() {
                        message.style.display = 'none';
                        message.style.opacity = '1';
                    }, 1000);
                }, 2000);
            } else {
                heartIcon.classList.remove('bi-heart-fill');
                heartIcon.classList.add('bi-heart');
                heartIcon.style.color = '#ffffff';
                message.textContent = 'Rimosso dai preferiti';
                message.style.display = 'block';
                setTimeout(function() {
                    message.style.opacity = '0';
                    setTimeout(function() {
                        message.style.display = 'none';
                        message.style.opacity = '1';
                    }, 1000);
                }, 2000);
            }
        });
    </script>

</body>

</html>
