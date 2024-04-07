<x-layout>
    <div class="headerImage">

        <div style="margin-top: 35px;margin-left: 70px" class="cerca">
            <form action="{{ route('announcements.search') }}" method="GET">
                <input
                    style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                    type="search" placeholder=" cerca.." name="searched">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                        class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    @if (session()->has('message'))
        <h2 class="alert alert-success">{{ session('message') }}</h2>
    @endif
    @if (session()->has('messageref'))
        <h2 class="alert alert-danger">{{ session('messageref') }}</h2>
    @endif
    <x-success></x-success>
    <div class="containerCatalogo">


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
                                                                <img id="fotoAnnuncioMobile" src="{{ Storage::url('images/default.jpg') }}"
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
                                                                <img  src="path_to_default_image.jpg" alt="Default Image"
                                                                    style="height: 140px; object-fit: cover; margin-right: 0px;">
                                                            </label>
                                                        </li>
                                                    </ul>
                                                @endif
                                            @else
                                                <!-- Altrimenti, mostra le immagini caricate nel carousel -->
                                                @foreach ($announcement->images as $key => $image)
                                                    <input type="radio" name="slides"
                                                        {{ $key == 0 ? 'checked' : '' }}
                                                        id="slide-{{ $key + 1 }}">
                                                @endforeach
                                                <ul class="carousel__slides">
                                                    @foreach ($announcement->images as $key => $image)
                                                        <li class="carousel__slide">
                                                            <figure>
                                                                <div>
                                                                    <img id="fotoAnnuncioMobile" src="{{ $image->getUrl(600, 500) }}"
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
                                                                <img id="miniFotoAnnuncioMobile" src="{{ $image->getUrl(600, 500) }}"
                                                                    alt=""
                                                                  >
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
                                    <button id="toggleHeart">
                                        <i id="AggiuntaPreferiti" class="bi bi-heart"></i>
                                    </button>
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
                                            Quality Product Info
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div style="background-color: #e9e9e9;" class="accordion-body">
                                            <p
                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                I'm a product detail. I'm a great place to add
                                                more information about your product such as sizing, material, care and
                                                cleaning instructions. This is also a great space to write what makes
                                                this
                                                product special and how your customers can benefit from this item.</p>
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
                                            Return & Refund Policy
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div style="background-color:#e9e9e9;" class="accordion-body">
                                            <p
                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                I’m a Return and Refund policy. I’m a great place
                                                to let your customers know what to do in case they are dissatisfied with
                                                their purchase. Having a straightforward refund or exchange policy is a
                                                great way to build trust and reassure your customers that they can buy
                                                with
                                                confidence.</p>
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
                                            Shipping Info
                                        </button>
                                    </h2>
                                    <div style="background-color: rgba(255, 0, 0, 0)" id="collapseThree"
                                        class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div style="background-color:#e9e9e9;;" class="accordion-body">
                                            <p
                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                I'm a shipping policy. I'm a great place to add
                                                more information about your shipping methods, packaging and cost.
                                                Providing
                                                straightforward information about your shipping policy is a great way to
                                                build trust and reassure your customers that they can buy from you with
                                                confidence.</p>
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
