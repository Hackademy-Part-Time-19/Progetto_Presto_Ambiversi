<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/java.js', 'resources/css/style.css'])
    @livewireStyles
</head>

<body>

    {{ $slot }}
    @livewireScripts
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/java.js', 'resources/css/style.css'])
    <script>
        // Open/Close 
        function OpenLogin() {
            document.getElementById("RegistrazioneUtente").style.display = "flex";
        };

        function CloseLogin() {
            document.getElementById("RegistrazioneUtente").style.display = "none";
        };
        //


        // Login/Register 
        const signUpButton = document.getElementById("signUp");
        const signInButton = document.getElementById("signIn");
        const containerKER = document.getElementById("Kericontainer");

        signUpButton.addEventListener("click", () => {
            containerKER.classList.add("right-panel-active");
        });

        signInButton.addEventListener("click", () => {
            containerKER.classList.remove("right-panel-active");
        });
        //


        // Change Color/Image Category
        function changeCategory(id, imgURL, gradient) {
            const elements = ["Gioielli", "Donna", "Tech", "Uomo"];

            elements.forEach(element => {
                document.getElementById(element).style.color = "#ebeaea8d";
            });

            document.getElementById(id).style.color = "#ffffff";
            document.getElementById("ImagineContainerCategory").style.backgroundImage = `url(${imgURL})`;
            document.getElementById("SfondoCategorie").style.background = gradient;
            document.getElementById("BoxContatti").style.background = gradient;
        }

        function Gioielli() {
            changeCategory("Gioielli", "{{ Storage::url('/Imagini/Gioielli.jpg') }}",
                "linear-gradient(90deg, rgba(177, 137, 85, 1) 10%, rgba(180, 161, 138, 1) 100%)");
        }

        function Donna() {
            changeCategory("Donna", "{{ Storage::url('/Imagini/Donna.jpg') }}",
                "linear-gradient(90deg, rgba(168,101,88,1) 10%, rgba(194,136,124,1) 100%)");
        }

        function Tech() {
            changeCategory("Tech", "{{ Storage::url('/Imagini/Tech.jpg') }}",
                "linear-gradient(90deg, rgba(24,23,23,1) 10%, rgba(64,64,64,1) 100%)");
        }

        function Uomo() {
            changeCategory("Uomo", "{{ Storage::url('/Imagini/Uomo.jpg') }}",
                "linear-gradient(90deg, rgba(32,32,115,1) 10%, rgba(56,56,92,1) 100%)");
        }
        //
    </script>
</body>

</html>
