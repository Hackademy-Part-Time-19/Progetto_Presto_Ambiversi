<x-layout>
    <div class="headerImage">

        <div style="margin-top: 35px; margin-left: 55px" class="cerca">
            <form action="/action_page.php">
                <input
                    style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                    type="text" placeholder=" cerca.." name="search">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                        class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    <x-success />
    @if (session()->has('message'))
        <h2 class="alert alert-success">{{ session('message') }}</h2>
    @endif
    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{ $announcements_to_check->isNotEmpty() ? "Ecco l'annuncio da revisionare" : 'Non ci sono annunci da revisionare' }}

                </h1>
            </div>
        </div>
    </div>
    @if ($announcements_to_check->isNotEmpty())
        @foreach ($announcements_to_check as $announcement)
            <div class="container text-center">
                <div class="row">
                    <div class="col-6 col-ml-6 col-sm-12 p-1">
                        <div style=" width:100%; display:flex; justify-content:center;">
                            <div style=" padding: 80px 0px; width:auto " class="container text-center m-0 ">

                                <div style="width: 100%" class="row  ">
                                    <div style="padding-right: 50px" class="col-12 col-ml-12 col-md-8 col-sm-12  ">
                                        <div class="BoxInformazioni2">
                                            <div style="height: auto; width:auto">

                                                <section>
                                                    <div style="width: auto" class="container">
                                                        <div class="carousel">
                                                            <input type="radio" name="slides" checked="checked"
                                                                id="slide-1">
                                                            <input type="radio" name="slides" id="slide-2">
                                                            <input type="radio" name="slides" id="slide-3">
                                                            <input type="radio" name="slides" id="slide-4">
                                                            <ul class="carousel__slides">
                                                                <li class="carousel__slide">
                                                                    <figure>
                                                                        <div>
                                                                            <img src="https://static.wixstatic.com/media/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.webp"
                                                                                width="100%" height="900px"
                                                                                alt="">
                                                                        </div>

                                                                    </figure>
                                                                </li>
                                                                <li class="carousel__slide">
                                                                    <figure>
                                                                        <div>
                                                                            <img src="https://static.wixstatic.com/media/c837a6_b985edee7e274f068e0e3783a789889a~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_b985edee7e274f068e0e3783a789889a~mv2.webp"
                                                                                width="100%" height="900px"
                                                                                alt="">
                                                                        </div>

                                                                    </figure>
                                                                </li>
                                                                <li class="carousel__slide">
                                                                    <figure>
                                                                        <div>
                                                                            <img src="https://static.wixstatic.com/media/c837a6_935cf1de86ee4db0a33721aee2f7a69b~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_935cf1de86ee4db0a33721aee2f7a69b~mv2.webp"
                                                                                width="100%" height="900px"
                                                                                alt="">
                                                                        </div>

                                                                    </figure>
                                                                </li>

                                                            </ul>
                                                            <ul class="carousel__thumbnails">
                                                                <li>
                                                                    <label for="slide-1"><img
                                                                            src="https://static.wixstatic.com/media/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.webp"
                                                                            alt=""></label>
                                                                </li>
                                                                <li>
                                                                    <label for="slide-2"><img
                                                                            src="https://static.wixstatic.com/media/c837a6_b985edee7e274f068e0e3783a789889a~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_b985edee7e274f068e0e3783a789889a~mv2.webp"
                                                                            alt=""></label>
                                                                </li>
                                                                <li>
                                                                    <label for="slide-3"><img
                                                                            src="https://static.wixstatic.com/media/c837a6_935cf1de86ee4db0a33721aee2f7a69b~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_935cf1de86ee4db0a33721aee2f7a69b~mv2.webp"
                                                                            alt=""></label>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>


                                    <div style="position:relative; top:20px"
                                        class="col-12 col-ml-4 col-md-4 col-sm-12 p-0 ">
                                        <div class="BoxInformazioni2">
                                            <div style=" height: 100%; " class="ContainterShowDetail">
                                                <h2
                                                    style="font-family: CormorantGaramond;margin-bottom: 3px;text-align:start ">
                                                    Titolo: {{ $announcement->title }}
                                                    <h6>Autore: {{ $announcement->user->name }} </h6>
                                                </h2>

                                                <h4 style="font-family:'Times New Roman', Times, serif">Prezzo:
                                                    {{ $announcement->price }} €
                                                </h4>
                                                <p
                                                    style="text-align: end;font-family: CormorantGaramond;;margin: 0px;margin-top: 20px">
                                                    <strong>Categoria: </strong>{{ $announcement->category->name }}
                                                </p>
                                                <p><strong>Data richiesta publicazione:</strong> {{ $announcement->created_at->format('d/m/Y') }}</p>
                                                <p style="text-align: start;font-family: CormorantGaramond;font-size:20px ">
                                                    <strong>Descrizione:</strong> {{ $announcement->body }}</p>

                                            </div>
                                            <div class="boxShowButton"
                                                style="display: flex; justify-content: space-between ; margin-top: 30px;">
                                                <form style="width: 100%"
                                                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" style="width: 90%">Accetta</button>
                                                </form>
                                                <form style="width: 100%"
                                                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" style="width: 90%">Rifiuta</button>

                                                </form>
                                            </div>


                                            <div style="margin-top: 30px; " class="accordion" id="accordionExample">
                                                <div style="border: none" class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button
                                                            style="border-bottom: #2c2c2c 0.5px solid;background-color:#e9e9e9;   font-family: CormorantGaramond;font-size:20px"
                                                            class="accordion-button" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Quality Product Info
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        data-bs-parent="#accordionExample">
                                                        <div style="background-color: #e9e9e9;"
                                                            class="accordion-body">
                                                            <p
                                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                                I'm a product detail. I'm a great place to add
                                                                more information about your product such as sizing,
                                                                material, care and
                                                                cleaning instructions. This is also a great space to
                                                                write what makes
                                                                this
                                                                product special and how your customers can benefit from
                                                                this item.</p>
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
                                                                to let your customers know what to do in case they are
                                                                dissatisfied with
                                                                their purchase. Having a straightforward refund or
                                                                exchange policy is a
                                                                great way to build trust and reassure your customers
                                                                that they can buy
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
                                                    <div style="background-color: rgba(255, 0, 0, 0)"
                                                        id="collapseThree" class="accordion-collapse collapse"
                                                        data-bs-parent="#accordionExample">
                                                        <div style="background-color:#e9e9e9;;"
                                                            class="accordion-body">
                                                            <p
                                                                style="text-align: start;   font-family: CormorantGaramond;font-size:18px">
                                                                I'm a shipping policy. I'm a great place to add
                                                                more information about your shipping methods, packaging
                                                                and cost.
                                                                Providing
                                                                straightforward information about your shipping policy
                                                                is a great way to
                                                                build trust and reassure your customers that they can
                                                                buy from you with
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
                </div>
            </div>
        @endforeach
    @endif
    <x-footer />
</x-layout>
