<x-layout>
    <div style="border-bottom:#2c2c2c 1px solid " class="headerImage">

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

    <h2 style="font-family: CormorantGaramond; font-size: 40px; text-align: center; padding:20px">
        {{ $announcements_to_check->isNotEmpty() ? "ANNUNCI DA REVISIONARE" : 'NESSUN ANNUNCIO DA REVISIONARE' }}
    </h2>
    
    @if ($announcements_to_check->isEmpty())
        <div style="height: 400px"></div>
    @endif

    @if ($announcements_to_check->isNotEmpty())
        <div style="overflow-y: scroll; height: 1300px">
            @foreach ($announcements_to_check as $key => $announcement)
                <div style="border-bottom:#2c2c2c 1px solid " class="container text-center">
                    <div class="row">
                        <div class="col-12 col-ml-6 col-sm-12 p-1">
                            <div style=" width:100%; display:flex; justify-content:center;">
                                <div style=" padding: 80px 0px; width:auto " class="container text-center m-0 ">
                                    <div style="width: 100%" class="row  ">
                                        <h2 style="width: 100%; text-align: start;padding:0px 20px;font-family: CormorantGaramond">Annuncio nr:
                                            {{ $key + 1 }}</h2>
                                        <div class="col-12 col-ml-12 col-md-8 col-sm-12 p-0 ">
                                            <div class="BoxInformazioni2">
                                                <div style="height: auto; width:auto">
                                                    <section>
                                                        <div style="width: auto" class="container">
                                                            <div class="carousel">
                                                                <input type="radio" name="slides" checked="checked"
                                                                    id="slide-1{{ $key + 1 }}">
                                                                <input type="radio" name="slides" id="slide-2{{ $key + 1 }}">
                                                                <input type="radio" name="slides" id="slide-3{{ $key + 1 }}">
                                                              
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
                                                                        <label for="slide-1{{ $key + 1 }}"><img
                                                                                src="https://static.wixstatic.com/media/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.webp"
                                                                                alt=""></label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="slide-2{{ $key + 1 }}"><img
                                                                                src="https://static.wixstatic.com/media/c837a6_b985edee7e274f068e0e3783a789889a~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_b985edee7e274f068e0e3783a789889a~mv2.webp"
                                                                                alt=""></label>
                                                                    </li>
                                                                    <li>
                                                                        <label for="slide-3{{ $key + 1 }}"><img
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
                                        <div class="col-12 col-ml-4 col-md-4 col-sm-12 p-0 ">
                                            <div class="BoxInformazioni2">
                                                <div style=" height: 100%; " class="ContainterShowDetail">
                                                 <div style="display: flex;justify-content: space-between;width: 100%">
                                                        <img style="object-fit: cover" src="https://i.pinimg.com/736x/f8/66/8e/f8668e5328cfb4938903406948383cf6.jpg" height="150px" width="150px" alt="">
                                            
                                                 </div>
                                                 <h4 style="font-family: CormorantGaramond;margin-bottom: 3px;text-align:start;margin-top: 20px ">
                                                    <strong>Autore:</strong> {{ $announcement->user->name }}
                                                    <h6 style="text-align: start;font-family:CormorantGaramond"><strong>Email:</strong> {{ $announcement->user->email }}
                                                    </h6>
                                                    <h6 style="font-family:CormorantGaramond">
                                                        <strong>Data e ora:</strong>
                                                        {{ $announcement->created_at->format('d/m/Y ') }}
                                                    </h6>
                                                </h4>
                                                    <h3
                                                        style="font-family: CormorantGaramond;margin-top: 20px;margin-bottom: 0px">
                                                        <strong>Titolo: </strong>{{ $announcement->title }}
                                                    </h3>
                                                    <p6
                                                        style="text-align: end;font-family: CormorantGaramond;;margin: 0px;">
                                                        <strong>Categoria: </strong>{{ $announcement->category->name }}
                                                    </p6>
                                                    <p>
                                                        <strong>Prezzo:</strong>
                                                        {{ $announcement->price }} €
                                                    </p>
                                                    <h6><strong>Descrizione:</strong></h6>
                                                    <p
                                                        style="text-align: start;font-family: CormorantGaramond;font-size:20px;overflow-y: scroll;height: 300px ;width: 100%;padding: 5px;border: 0.1px solid rgb(186, 186, 186)">
                                                         {{ $announcement->body }}
                                                    </p>
                                                </div>
                                                <div class="boxShowButton"
                                                    style="display: flex; justify-content: space-between ; margin-top: 30px;">
                                                    <form style="width: 100%"
                                                        action="{{ route('revisor.accept_announcement', ['announcement' => $announcement]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button id="acceptButton" type="submit" style="width: 97%">Accetta</button>
                                                    </form>
                                                    <form style="width: 100%"
                                                        action="{{ route('revisor.reject_announcement', ['announcement' => $announcement]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button id="rejectButton" type="submit" style="width: 97%">Rifiuta</button>
                                                    </form>
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
        </div>
    @endif
    <x-footer />
</x-layout>
