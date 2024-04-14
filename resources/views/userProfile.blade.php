<x-layout>
    <div class="headerImage">

        <div style="margin-top: 35px;margin-left: 70px ; " class="cerca">
            <form action="{{ route('announcements.search') }}" method="GET">
                <input
                style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                type="search" placeholder=" cerca.." name="searched">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                    class="bi bi-search"></i></button>
                </form>
            </div>
        </div>


        <x-success></x-success>
        <div style="width: 100%; border-top:#2c2c2c 1px solid;height: 50px; ">

            <h1 style="width: 100%; text-align: center; padding-top: 20px;  font-family: CormorantGaramond; ">DATI PERSONALI
            </h1>
            @if (session()->has('message'))
            <h2 id="successMessage"
            style="background-color: #0C6B37;color: #ebeaea;border-radius: 0px;font-family: CormorantGaramond; opacity: 1; transition: opacity 1s;"
            class="alert alert-success">{{ session('message') }}</h2>
            @endif


            @if (session()->has('messageref'))
            <h2 id="errorMessage"
            style="background-color:#ab3131;color: #ebeaea;border-radius: 0px;font-family: CormorantGaramond; opacity: 1; transition: opacity 1s;"
            class="alert alert-danger">{{ session('messageref') }}</h2>
            @endif



        </div>
        <div style="border-top:#2c2c2c00 1px solid;height: auto; margin-bottom: 100px; margin-top:50px; ">
            <div style="width:80%; max-width:1000px;" class="container text-center">
                <div style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="row">

                    <div class="col-12 col-md-5 col-lg-4 col-ml-4 col-sm-12 p-0">
                        <div class="boxUserLeft">
                            <div>
                                <img style="object-fit: cover; border-radius: 100%;"
                                src="{{Auth::user()->profile_photo_path !==null ? Auth::user()->getUrl(150,150) : Storage::url('images/user.jpg')  }}"
                                height="150px" width="150px" alt="">
                            </div>
                            <h3 style="color: #e9e9e9; font-family: CormorantGaramond; font-size: 30px;margin-top:5px">
                                {{ Auth::user()->name }}</h3>
                                <div id="infoPers" onclick="color('infoPers'); mostraContenuto('InfoPers');" class="infoPers"
                                style="display: flex; margin-top: 30px;">
                                <i style="margin-right: 20px;" class="bi bi-person"></i>
                                <a style="text-align:start">Informazioni personali</a>
                            </div>
                            <div id="myArticle" onclick="color('myArticle');mostraContenuto('MyArticle')" class="myArticle"
                            style="display: flex; margin-top: 30px">
                            <i style="margin-right: 20px;" class="bi bi-newspaper"></i>
                            <a style="text-align:start">I miei articoli</a>
                        </div>
                        <div id="myMessage" onclick="color('myMessage');mostraContenuto('MyMessage')" class="myMessage"
                        style="display: flex; margin-top: 30px">
                        <i style="margin-right: 20px;" class="bi bi-chat"></i>
                        <a style="text-align:start">I miei messaggi</a>
                    </div>
                    <div id="setInfoPers" onclick="color('setInfoPers');mostraContenuto('SetInfoPers')"
                    class="setInfoPers" style="display: flex; margin-top: 30px">
                    <i style="margin-right: 20px;" class="bi bi-gear-wide-connected"></i>
                    <a  style="text-align:start">Impostazioni dell'account</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-7 col-lg-8 col-ml-8 col-sm-12 p-0">
            <div class="boxContent boxInfoPers">
                <h2 class="h2BoxProfile">Informazioni personali</h2>
                <div class="mb-3">

                    <label style="text-align: start; width: 100%;margin-top:40px" for="name"
                    class="block text-sm font-medium text-gray-700">Nome e Cognome</label>
                    <input id="name" style="height: 50px" placeholder="{{ Auth::user()->name }}"
                    type="text" class="form-control">




                    <label style="text-align: start; width: 100%;margin-bottom:0px;margin-top:30px"
                    for="exampleFormControlInput1" class="form-label">Password</label>
                    <div style="display: flex; justify-content: space-between">
                        <input id="passwordInput" style="height: 50px" placeholder="Mostra Password"
                        type="password" class="form-control"
                        data-password="{{ Auth::user()->password }}">
                        <button id="bottoneMostaPas" class="bottoneMostaPas"
                        onclick="togglePassword(this)"><i id="eyeIcon" class="bi bi-eye"></i></button>
                    </div>

                    <div style="display: flex; justify-content: space-between;margin-top:30px">
                        <div style="width: 45%">
                            <label style="text-align: start; width: 100%" for="name"
                            class="block text-sm font-medium text-gray-700">Email</label>
                            <input id="name" style="height: 50px"
                            placeholder="{{ Auth::user()->email }}" type="text" class="form-control"
                            wire:model="name">
                        </div>
                        <div style="width: 45%">
                            <label style="text-align: start; width: 100%" for="name"
                            class="block text-sm font-medium text-gray-700">Telefono</label>
                            <input id="name" style="height: 50px" placeholder="+39 0471 1655928"
                            type="text" class="form-control" wire:model="name">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: start;margin-top:50px">
                        <button class="bottoneMostaPasSave"> Salva</button>
                        <button class="bottoneMostaPasCancel"> Annulla</button>
                    </div>




                </div>
            </div>
            <div class="boxContent boxMyArticle">
                <h2 class="h2BoxProfile">I miei articoli</h2>
                <div style=";width:100%; height: 450px; overflow-y: scroll;">

                    @foreach ($announcements as $announcement)
                    <a style="text-decoration: none;color:#2c2c2c"  href="{{ route('announcements.show', compact('announcement')) }}">

                        <div class="DivMyArticle">
                            <div style="height: 100%;">
                                <div style="height: 100%">
                                    <div style="height: 100%" id="showCarousel-{{ $announcement->id }}"
                                        class="carousel slide">
                                        <div style="height: 100%; width:100px;" class="carousel-inner">
                                            @if ($announcement->images->isEmpty())
                                            <!-- Se non ci sono immagini caricate, visualizza un'immagine di default -->
                                            <div style="height:100%;">
                                                <img style="object-fit:cover; padding: 0px;height:100%;border-top-left-radius: 5px;
                                                border-bottom-left-radius: 5px; "
                                                src="{{ Storage::url('images/default.jpg') }}">
                                            </div>
                                            @else
                                            @foreach ($announcement->images as $key => $image)
                                            <div style="height:100%;"
                                            class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img style="object-fit: cover; padding: 0px; height:100% ;border-top-left-radius: 5px;
                                            border-bottom-left-radius: 5px;"
                                            src="{{ $image->getUrl(600, 500) }}" alt=""
                                            class="img-fluid " ">
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    @if (
                                    !$announcement->images->isEmpty() &&
                                    count($announcement->images) > 1 &&
                                    $announcement->images->first()->getUrl(600, 500) != Storage::url('images/default.jpg'))
                                    <button id="FrecciaPrev2" class="carousel-control-prev"
                                    type="button"
                                    data-bs-target="#showCarousel-{{ $announcement->id }}"
                                    data-bs-slide="prev">
                                    <i class="bi bi-arrow-left-circle"></i>
                                </button>
                                <button id="FrecciaNext2" class="carousel-control-next"
                                type="button"
                                data-bs-target="#showCarousel-{{ $announcement->id }}"
                                data-bs-slide="next">
                                <i class="bi bi-arrow-right-circle"></i>
                            </button>
                            @endif
                        </div>

                    </div>
                </div>


                <div style="height: 90%; background-color:rgba(255, 0, 0, 0);width:450px;display:flex; flex-direction:column; align-items:flex-start;margin-left:5px;margin-top:5px">

                    <strong>
                        <h2 style="font-size: clamp(1.1rem, 1.4vw, 1.1rem);margin-bottom: 0px;  font-family: CormorantGaramond;">
                            {{ $announcement->title }}</h2>
                        </strong>
                        <h6 style="font-size: clamp(0.8rem, 1.0vw, 0.8rem);  font-family: CormorantGaramond;margin-bottom: 0px">Categoria:
                        </strong>{{ $announcement->category->name }}</h6>
                        <h6 style="  font-family: CormorantGaramond;font-size: clamp(0.9rem, 0.9vw, 0.9rem)">Prezzo: {{ $announcement->price }}</h6>
                        <p style="margin:0px;  font-family: CormorantGaramond;">Descrizione:</p>
                        <textarea readonly style="height: auto;width:80%; resize: none;border-radius:5px;  font-family: CormorantGaramond;;background:rgb(255, 255, 255);padding:5px" name="" id="" cols="30" rows="10">{{ $announcement->body }}</textarea>
                    </div>
                    @auth
                    @if (Auth::check() && Auth::user()->id == $announcement->user_id)
                    <form style="width: auto;"
                    action="{{ route('announcements.delete', $announcement) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')
                    <button  class="DivDeleteArticle" class="ButtonDeleteArticle" type="submit"  onclick="return confirm('Sei sicuro di voler eliminare questo annuncio?')"
                    >




                    <i style="font-size: 20px" class="bi bi-trash3"></i>


                    @endif

                </button>
            </form>
            @endauth



        </div>
    </a>
    @endforeach










</div>
</div>
<div class="boxContent boxMyMessage">
    <h2 class="h2BoxProfile">I miei messaggi</h2>
</div>
<div class="boxContent boxSetInfoPers">
    <h2 class="h2BoxProfile">Impostazioni dell'account</h2>
    <div class="mb-3">

        <label style="text-align: start; width: 100%;margin-top:40px" for="name"
        class="block text-sm font-medium text-gray-700">Nome e Cognome</label>
        <input id="name" style="height: 50px" placeholder="{{ Auth::user()->name }}"
        type="text" class="form-control">

        <label style="text-align: start; width: 100%;margin-top:40px" for="name"
        class="block text-sm font-medium text-gray-700">Inserisci la tua immagine profilo</label>
        <div class="card-body">
            <form action="{{route('fotoProfiloUpload')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <input type="submit" value="Upload">
            </form>
        </div>




        <label style="text-align: start; width: 100%;margin-bottom:0px;margin-top:30px"
        for="exampleFormControlInput1" class="form-label">Password</label>
        <div style="display: flex; justify-content: space-between">
            <input id="passwordInput" style="height: 50px" placeholder="Mostra Password"
            type="password" class="form-control"
            data-password="{{ Auth::user()->password }}">
            <button id="bottoneMostaPas" class="bottoneMostaPas"
            onclick="togglePassword(this)"><i id="eyeIcon" class="bi bi-eye"></i></button>
        </div>

        <div style="display: flex; justify-content: space-between;margin-top:30px">
            <div style="width: 45%">
                <label style="text-align: start; width: 100%" for="name"
                class="block text-sm font-medium text-gray-700">Email</label>
                <input id="name" style="height: 50px"
                placeholder="{{ Auth::user()->email }}" type="text" class="form-control"
                wire:model="name">
            </div>
            <div style="width: 45%">
                <label style="text-align: start; width: 100%" for="name"
                class="block text-sm font-medium text-gray-700">Telefono</label>
                <input id="name" style="height: 50px" placeholder="+39 0471 1655928"
                type="text" class="form-control" wire:model="name">

            </div>
        </div>

        <div style="display: flex; justify-content: start;margin-top:50px">
            <button class="bottoneMostaPasSave"> Salva</button>
            <button class="bottoneMostaPasCancel"> Annulla</button>
        </div>




    </div>
</div>
</div>






</div>
</div>


</div>

<x-footer />
</x-layout>
