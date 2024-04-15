<x-layout>
    <div class="headerImage">

        <div id="cercaShow"  class="cerca">
            <form action="{{ route('announcements.search') }}" method="GET">
                <input
                    style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                    type="search" placeholder={{__('ui.find')}} name="searched">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                        class="bi bi-search"></i></button>
            </form>
        </div>
    </div>


    <div style="width: 100%; border-top:#2c2c2c 1px solid;height: 50px; ">
        @if (session()->has('messageref'))
            <h2 id="errorMessage"
                style="background-color:#ab3131;color: #ebeaea;border-radius: 0px;font-family: CormorantGaramond; opacity: 1; transition: opacity 1s;"
                class="alert alert-danger">{{ session('messageref') }}</h2>
        @endif
        <x-success></x-success>
        <x-warning></x-warning>


    </div>
    <div style="border-top:#2c2c2c00 1px solid" class="containerCatalogo">


        <div style=" width:100%; display:flex; justify-content:center;">
            <div style=" padding: 80px 0px; width:auto " class="container text-center m-0 ">

                <div style="width: 100%" class="row  ">
                    <div style="padding-right: 0px" class="col-12 col-ml-12 col-md-8 col-sm-12  ">
                        <div class="BoxInformazioni2">
                            <div style="height: auto; width:auto">
                                <div class="percorsoShowCard"
                                    style="width: 100%; text-align:start;padding:5px 25px; padding-top:0px ">
                                    <a href="{{ route('homepage') }}">Home / </a> <a
                                        href="{{ route('announcements.index') }} "> Catalogo / </a> <a
                                        href="{{ route('categoryShow', ['category' => $announcement->category->id]) }}">{{ $announcement->category->name }}
                                        /</a> <a> {{ $announcement->title }} </a>
                                </div>
                                <section>
                                    <div style="width: auto" class="container">
                                        <div class="carousel">
                                            @if ($announcement->images->isEmpty())
                                                <!-- Se non ci sono immagini caricate, visualizza un'immagine di default -->
                                                <input type="radio" name="slides" checked="checked" id="slide-1">
                                                <ul class="carousel__slides">
                                                    <li class="carousel__slide">
                                                        <figure>
                                                            <div>
                                                                <img id="fotoAnnuncioMobile"
                                                                    src="{{ Storage::url('images/default.jpg') }}"
                                                                    width="100%" height="900px" alt="Default Image">
                                                            </div>
                                                        </figure>
                                                    </li>
                                                </ul>
                                                @if (
                                                    !$announcement->images->isEmpty() &&
                                                        $announcement->images->first()->getUrl(600, 500) != Storage::url('images/default.jpg'))
                                                    <ul class="carousel__thumbnails">
                                                        <li>
                                                            <label for="slide-1">
                                                                <img src="path_to_default_image.jpg" alt="Default Image"
                                                                    style="height: 140px; object-fit: cover; margin-right: 0px;">
                                                            </label>
                                                        </li>
                                                    </ul>
                                                @endif
                                            @else
                                                <!-- Altrimenti, mostra le immagini caricate nel carousel -->
                                                @foreach ($announcement->images as $key => $image)
                                                    <input type="radio" name="slides"
                                                        {{ $key == 0 ? 'checked' : '' }} id="slide-{{ $key + 1 }}">
                                                @endforeach
                                                <ul class="carousel__slides">
                                                    @foreach ($announcement->images as $key => $image)
                                                        <li class="carousel__slide">
                                                            <figure>
                                                                <div>
                                                                    <img id="fotoAnnuncioMobile"
                                                                        src="{{ $image->getUrl(600, 500) }}"
                                                                        width="100%" height="900px" alt="">
                                                                </div>
                                                            </figure>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <ul class="carousel__thumbnails">
                                                    @foreach ($announcement->images as $key => $image)
                                                        <li style="overflow-x: scroll">
                                                            <label for="slide-{{ $key + 1 }}">
                                                                <img id="miniFotoAnnuncioMobile"
                                                                    src="{{ $image->getUrl(600, 500) }}"
                                                                    alt="">
                                                            </label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>

                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>


                    <div style="position:relative; top:20px" class="col-12 col-ml-4 col-md-4 col-sm-12 p-0 ">
                        <div class="BoxInformazioni2">
                            <div style=" height: 100%; " class="ContainterShowDetail">
                                <h2 style="font-family: CormorantGaramond;margin-bottom: 3px;text-align:start ">
                                    {{ $announcement->title }}
                                </h2>
                                <p style="text-align: start;font-family: CormorantGaramond;">
                                    <strong>Categoria: </strong>{{ $announcement->category->name }}
                                </p>
                                <h4 style="font-family:'Times New Roman', Times, serif">€ {{ $announcement->price }}
                                </h4>
                                <p style="text-align: start;font-family: CormorantGaramond;margin-top: 20px">

                                    {{ $announcement->body }}</p>
                                <p style="margin: 0px;font-family: CormorantGaramond;">
                                    Quantità</p>
                                <div style="border-bottom: 1px solid grey; width: 150px;" class="input-group">
                                    <span class="input-group-btn">
                                        <button id="buttonMinus" style="border: none" type="button"
                                            class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                                    </span>
                                    <input style="background-color: rgba(255, 255, 255, 0); border:none" type="text"
                                        class="form-control text-center" value="1" id="quantityInput">
                                    <span class="input-group-btn">
                                        <button id="buttonPlus" style="border: none" type="button"
                                            class="btn btn-outline-secondary" onclick="increaseQuantity()">+</button>
                                    </span>
                                </div>



                            </div>
                            <div class="boxShowButton"
                                style="display: flex; justify-content: space-between ; margin-top: 30px;">
                                <button style="width: 80%">Aggiungi al carrello</button>
                                <div style=" display: flex; flex-direction: column;  position: relative; ">
                                    @auth
                                        @if (auth()->user()->favoriteAnnouncements->contains($announcement))
                                            <form id="favoriteForm"
                                                action="{{ route('announcements.removeFromFavorites', ['announcement' => $announcement->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button id="toggleHeart" type="submit">
                                                    <i id="AggiuntaPreferiti" class="bi bi-heart-fill text-danger"></i>
                                                </button>
                                            </form>
                                        @else
                                            <form id="favoriteForm"
                                                action="{{ route('announcements.addToFavorites', ['announcement' => $announcement->id]) }}"
                                                method="POST">
                                                @csrf
                                                <button id="toggleHeart" type="submit">
                                                    <i id="AggiuntaPreferiti" class="bi bi-heart"></i>
                                                </button>
                                            </form>
                                        @endif
                                    @endauth


                                    <p style="position: absolute; top:50px;width:200px; right:-70px; font-family: CormorantGaramond "
                                        id="message"></p>
                                </div>
                            </div>


                            <div style="margin-top: 30px; " class="accordion" id="accordionExample">
                                <div style="border: none" class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            style="border-bottom: #2c2c2c 0.5px solid;background-color:#e9e9e9;   font-family: CormorantGaramond;font-size:20px"
                                            class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Informazioni di qualità sul prodotto
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div style="background-color: #e9e9e9;" class="accordion-body">
                                            <p
                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                Presso la nostra azienda, la qualità è al centro di tutto ciò che facciamo. Ogni articolo che offriamo è sottoposto a rigorosi controlli di qualità per garantire che soddisfi i nostri standard più elevati prima di essere consegnato ai nostri clienti.</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="border: none" class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            style="border-bottom: #2c2c2c 0.5px solid;background-color:#e9e9e9;   font-family: CormorantGaramond;font-size:20px"
                                            class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Politica di Reso e Rimborso
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div style="background-color:#e9e9e9;" class="accordion-body">
                                            <p
                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                Accettiamo resi entro 30 giorni dall'acquisto. Per essere idoneo a un reso, il tuo articolo deve essere non utilizzato e nelle stesse condizioni in cui lo hai ricevuto. Deve essere anche nella confezione originale.</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="border: none" class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            style="background-color:#e9e9e9;   font-family: CormorantGaramond;font-size:20px"
                                            class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Informazioni sulla Spedizione
                                        </button>
                                    </h2>
                                    <div style="background-color: rgba(255, 0, 0, 0)" id="collapseThree"
                                        class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div style="background-color:#e9e9e9;;" class="accordion-body">
                                            <p
                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                Spedizione Standard: <br> <br>

                                                Costo: €5,00 <br>
                                                Tempi di consegna: 3-5 giorni lavorativi <br>
                                                Tracciamento: Disponibile <br> <br>
                                                La nostra spedizione standard offre un'opzione conveniente per ricevere i tuoi prodotti entro 3-5 giorni lavorativi dalla data di spedizione. Puoi monitorare il tuo pacco utilizzando il servizio di tracciamento incluso. <br><br>
                                                
                                                Spedizione Veloce: <br><br>
                                                
                                                Costo: €10,00 <br>
                                                Tempi di consegna: 1-2 giorni lavorativi <br>
                                                Tracciamento: Disponibile <br> <br>
                                                Per coloro che desiderano ricevere i loro ordini il prima possibile, offriamo la spedizione veloce. Consegneremo i tuoi articoli direttamente al tuo indirizzo entro 1-2 giorni lavorativi dalla data di spedizione, con tracciamento disponibile per tenerti aggiornato sullo stato della consegna.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>







            </div>
        </div>

    </div>

    <x-footer />
</x-layout>
