<nav>
    <!--Inizio Registrazione PopUp -->
    <div id="RegistrazioneUtente" class="RegistrazioneUtente">
        <div class="RegistrazioneContainer">

            <div class="containerKeri" id="Kericontainer">

                <div class="form-container sign-up-container">
                    <div
                        style="display: flex; justify-content: end;align-items: start; position: absolute; right: 10px;top:-5px;background-color: rgba(255, 255, 255, 0);height: auto;">
                        <a> <i onclick="CloseLogin()" style="background-color: white;" id="CloseLogin"
                                class="bi bi-x-circle"></i></a>
                    </div>

                    <form action="/register" method="POST">
                        @csrf
                        <h1 style="background-color: white ">Registrati</h1>
                        <div style="background-color: white " class="social-container">
                            <a style="background-color: white " href="https://www.facebook.com/" class="social"><i
                                    style="background-color: white " id="social" class="bi bi-facebook"></i></a>
                            <a style="background-color: white " href="https://www.instagram.com/" class="social"><i
                                    style="background-color: white " id="social" class="bi bi-instagram"></i></a>
                            <a style="background-color: white " href="https://twitter.com/?lang=it" class="social"><i
                                    style="background-color: white " id="social" class="bi bi-twitter-x"></i></a>
                        </div>
                        <span style="background-color: white ">oppure inserisci i dati</span>

                        <input name="name" type="text" id="name" placeholder="Nome">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input name="email" type="email" id="email" placeholder="Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input name="password" type="password" id="password" placeholder="Password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input input name="password_confirmation" type="password" id="password_confirmation"
                            placeholder="Conferma Password">

                        <button style="margin-top: 20px" type="submit">Crea account</button>
                    </form>
                </div>



                <div class="form-container sign-in-container">
                    <form class="mt-5" action="/login" method="POST">
                        @csrf
                        <h1 style="background-color: white">Accedi</h1>
                        <div style="background-color: white" class="social-container">
                            <a style="background-color: white" href="{{ route('auth.google') }}" class="social"><i
                                    style="background-color: white" id="social" class="bi bi-google"></i></a>
                            <a style="background-color: white" href="https://www.facebook.com/" class="social"><i
                                    style="background-color: white" id="social" class="bi bi-facebook"></i></a>
                            <a style="background-color: white" href="https://www.instagram.com/" class="social"><i
                                    style="background-color: white" id="social" class="bi bi-instagram"></i></a>
                            <a style="background-color: white" href="https://twitter.com/?lang=it" class="social"><i
                                    style="background-color: white" id="social" class="bi bi-twitter-x"></i></a>
                        </div>
                        <span style="background-color: white"> oppure usa il tuo account
                        </span>

                        <input name= "email" type="email" id="email" placeholder="Email">
                        @error('email')
                            <div style="background-color: white"><span
                                    style="color: rgb(243, 70, 70);background-color: white">{{ $message }}</span>
                            </div>
                        @enderror

                        <input name="password" type="password" placeholder="Password">
                        @error('password')
                            <div style="background-color: white"><span
                                    style="color: rgb(243, 70, 70);background-color: white">{{ $message }}</span>
                            </div>
                        @enderror
                        <a style="background-color: white" href="">Hai dimenticato la password?</a>
                        <button type="submit">Login</button>
                    </form>
                </div>



                <div class="overlay-container">
                    <div class="overlay">
                        <div style="background-color: black" class="overlay-panel overlay-left">
                            <h1 style="font-weight: bold;
                        margin: 0;background-color: black">
                                Bentornato!</h1>
                            <p
                                style="	font-size: 14px;
                                font-weight: 100;
                                line-height: 20px;
                                letter-spacing: 0.5px;
                                margin: 20px 0 30px;background-color: black">
                                Effettua il login con i tuoi dati.</p>
                            <button class="ghost" id="signIn">Login</button>
                        </div>
                        <div style="background-color: black" class="overlay-panel overlay-right">
                            <div
                                style="display: flex; justify-content: end;align-items: start; position: absolute; right: 10px;top:-5px;background-color: rgba(255, 255, 255, 0);height: auto;">
                                <a><i onclick="CloseLogin()" style="background-color: rgb(0, 0, 0)" id="CloseLogin2"
                                        class="bi bi-x-circle"></i></a>
                            </div>
                            <h1 style="font-weight: bold;
                        margin: 0;background-color: black">
                                Ciao!</h1>
                            <p
                                style="	font-size: 14px;
                            font-weight: 100;
                            line-height: 20px;
                            letter-spacing: 0.5px;
                        margin: 20px 0 30px;background-color: black">
                                Inserisci i tuoi dati e inizia il viaggio con noi.</p>
                            <button class="ghost" id="signUp">Crea account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fine Registrazione PopUp -->
    <div class="menu">
        <a href="{{ route('homepage') }}">HOME</a>
        <a href="{{ route('announcements.index') }}">SHOP</a>
        @if (!request()->routeIs('announcements.index') && !request()->routeIs('categoryShow'))
            <div class="dropdown">
                <button class="dropbtn">CATEGORIE</button>
                <div style="z-index: 44" class="dropdown-content">
                    @foreach ($categories as $category)
                        <a class="dropdown-item"
                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    <div class="menuMobile">
        <a> <i style="color: #2c2c2c" class="bi bi-list"></i></a>
    </div>
    <div class="logo">
        <h1><a style="text-decoration: none;color:#2c2c2c;    " href="{{ route('homepage') }}">PRESTO</a
                href="{{ route('homepage') }}"></h1>
        <p>ESPLORA. SCEGLI. ACQUISTA. TUTTO IN UN SOLO POSTO.</p>

    </div>
    <div class="login">
        <div class="lingua">
            <div class="dropdown mt-0  ">
                <a class="dropdown-toggle lang-cust" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><span class=" h4 bi bi-globe-americas"></span></a>
                <ul style="background-color: rgba(255, 255, 255, 0); width: 22px; " class=" dropdown-menu ">
                    <div class="dropdown-item text-center">
                        <img style="margin-right: 5px;" src="{{ Storage::url('/nav/Ita.png') }}" width="37px"
                            alt="">
                    </div>
                    <div class="dropdown-item text-center">
                        <img style="margin-right: 5px;" src="{{ Storage::url('/nav/Ita.png') }}" width="37px"
                            alt="">
                    </div>

                </ul>
            </div>
        </div>
        @guest
            <div onclick="OpenLogin()" style="display: flex;align-items: center;">
                <i style="padding-right:10px " class="bi bi-person-fill"> </i>
                <a class="loginA">ACCEDI</a>
            </div>
        @endguest
        @auth
            <div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <div id="MenuDestraMobile" class="boxLog">
                        <p class="messaggioBenvenuto" style=" font-family: CormorantGaramond;margin:0px;margin-right:5px ">Bentornato: </p>
                        <p style="margin: 0px;font-family: CormorantGaramond;font-size: 20px;  ">
                            @if (Auth::user()->isAdmin())
                                @if (App\Models\Announcement::toBeRevisionedCount() > 0)
                                    <button
                                        style="background-color: #f04040;padding: 0.5px; border-radius: 100%; height: 10px;width: 10px; font-family: magnoglia; color:white;font-size:7px;cursor: default; position: relative; bottom:2px">{{ App\Models\Announcement::toBeRevisionedCount() }}</button>
                                @endif
                            @endif
                        <div style="" class="dropdown"><button class="dropbtn2"> <a
                                    style="background-color: rgba(255, 255, 255, 0); border: none; "
                                    class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                            </button>
                            <div style="position: relative; right:90px">
                                <div style="position: absolute;left: 0;" class="dropdown-content">
                                    <a class="dropdown-item" href="#">Dati Personali</a>
                                    @auth @if (Auth::user()->isAdmin())
                                        <a style=" @if (App\Models\Announcement::toBeRevisionedCount() > 0) background-color: rgb(240, 64, 64) @endif"
                                            class="dropdown-item" href="{{ route('revisor.index') }}">Revisione </a>
                                    @endif @auth
                                    <a href="{{ route('announcements.create') }}">Inserisci articolo</a>
                                    @endauth @endauth
                                    @Auth
                                        <div @if (Auth::user()->is_revisor) style="display:none;" @endif>
                                            <a href="{{ route('become.revisor') }}">Diventa revisore</a>
                                        </div>
                                    @endAuth
                                    <button
                                        style="background-color: rgba(255, 255, 255, 0);text-align: left;padding:0px;"type="submit"><a
                                            id="EscMenu" class="dropdown-item" type="submit">Esci </a></button>
                                </div>
                            </div>
                        </div>
                        @if (App\Models\Announcement::toBeRevisionedCount() > 0)
                        @endif
                        </p>
                    </div>
                </form>
            </div>
        @endauth
    </div>

</nav>
