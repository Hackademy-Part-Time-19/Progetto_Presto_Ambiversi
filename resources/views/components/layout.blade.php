<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/java.js', 'resources/css/style.css'])
    @livewireStyles
</head>

<body>
    <x-navbar></x-navbar>
  
    <x-delete></x-delete>
    <x-warning></x-warning>

    {{ $slot }}
    @livewireScripts


    <script>
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



        function GioielliLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/1';
        }

        function DonnaLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/2';
        }

        function TechLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/3';
        }

        function UomoLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/4';
        }

        function GiochiLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/5';
        }

        function SportLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/6';
        }

        function AutoLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/7';
        }

        function OrologioLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/8';
        }

        function FilmLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/9';
        }

        function MusicaLink() {
            var link = document.getElementById('frecciaHref');
            link.href = 'http://127.0.0.1:8001/categorie/9';
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
