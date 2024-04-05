<x-layout>
    <div style="border-bottom:#2c2c2c 1px solid " class="headerImage">

        <div style="margin-top: 35px; margin-left: 20px" class="cerca">
            <form action="{{route('announcements.search')}}" method="GET">
                <input
                style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                type="search" placeholder=" cerca.." name="searched">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                    class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
        <x-success />
        @if (session()->has('message'))
        <h2 class="alert alert-success">{{ session('message') }}</h2>
        @endif
        @if (session()->has('messageref'))
        <h2 class="alert alert-danger">{{ session('messageref') }}</h2>
        @endif

        <h2 style="font-family: CormorantGaramond; font-size: 40px; text-align: center; padding:20px">
            {{ $announcements_to_check->isNotEmpty() ? 'ANNUNCI DA REVISIONARE' : 'NESSUN ANNUNCIO DA REVISIONARE' }}
        </h2>

        @if ($announcements_to_check->isEmpty())
        <div style="height: 400px"></div>
        @endif

        @if ($announcements_to_check->isNotEmpty())
        <div {{-- style="overflow-y: scroll; height: 1300px" --}}>
            @php
            $counter = count($announcements_to_check);
            @endphp
            @foreach ($announcements_to_check as $key => $announcement)
            <div style="border-bottom:#2c2c2c 1px solid;  " class="container text-center">
                <div class="row">
                    <div class="col-12 col-ml-6 col-sm-12 p-1">
                        <div style=" width:100%; display:flex; justify-content:center;">
                            <div style=" padding: 80px 0px; width:auto; " class="container text-center m-0 ">
                                <div  style="width: 100%; background-color: #ffffff; padding: 20px; margin:0px " class="row  ">
                                    <div  class="col-12 col-ml-4 col-md-4 col-sm-12 p-0 ">
                                        <div style="padding:0px 20px" class="BoxInformazioni2">
                                            <div style=" height: 100%; " class="ContainterShowDetail">
                                                <h2 style="font-family: CormorantGaramond ;text-align:start;background-color:#2c2c2c;color: #e9e9e9;width:100%;height:50px;padding:5px">Annuncio Nr:  {{ $counter }}</h2>
                                                <div class="cavolo" style=" height: 200px; width:100%;display:flex;justify-content: center; align-items: center;;">

                                                    <img style="object-fit: cover; border-radius: 100%;"
                                                    src="https://sb.kaleidousercontent.com/67418/1672x1018/6463a5af0d/screenshot-2022-05-24-at-15-22-28.png"
                                                    height="170px" width="170px" alt="">

                                                </div>

                                                <div style="display: flex; flex-direction:column; justify-content: space-between ; width: 100%">
                                                    <h5
                                                    style="font-family: CormorantGaramond;margin:0px;text-align:start;margin-top: 25px; width:85%;  ">
                                                    <strong style="font-size: 25px">Nome e Cognome:</strong><br>
                                                    <p style="border-top: #b8b8b8 0.5px solid;padding: 5px;">{{ $announcement->user->name }}</p>
                                                </h5>

                                                <h5
                                                style="font-family: CormorantGaramond;margin:0px;text-align:start;margin-top: 25px;width:85% ">
                                                <strong style="font-size: 25px">Email:</strong><br>
                                                <p style="border-top: #b8b8b8 0.5px solid;padding: 5px;"> {{ $announcement->user->email }}</p>
                                            </h5>
                                        </div>



                                        <h2 style="font-family: CormorantGaramond ;margin-top: 55px;text-align:start;background-color:#2c2c2c;color: #e9e9e9;width:100%;height:50px;padding:5px">Dettagli Annuncio</h2>


                                        <h5
                                        style="font-family: CormorantGaramond;margin:0px;text-align:start; width:100%;   font-family: CormorantGaramond;margin-top: 15px ">
                                        <strong style="font-size: 25px">Titolo:</strong><br>
                                        <p style="border-top: #b8b8b8 0.5px solid;padding: 5px;">{{ $announcement->title }}</p>
                                    </h5>

                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <h5
                                        style="font-family: CormorantGaramond;margin:0px;text-align:start;;width:30% ">
                                        <strong style="font-size: 25px">Categoria:</strong><br>
                                        <p style="border-top: #b8b8b8 0.5px solid;padding: 5px;">{{ $announcement->category->name }}</p>
                                    </h5>
                                    <h5
                                    style="font-family: CormorantGaramond;margin:0px;text-align:start; width:30%;  ">
                                    <strong style="font-size: 25px">Data:</strong><br>
                                    <p style="border-top: #b8b8b8 0.5px solid;padding: 5px;">{{ $announcement->created_at->format('d/m/Y ') }}</p>
                                </h5>

                                <h5
                                style="font-family: CormorantGaramond;margin:0px;text-align:start;;width:30% ">
                                <strong style="font-size: 25px">Prezzo:</strong><br>
                                <p style="border-top: #b8b8b8 0.5px solid;padding: 5px;">€ {{ $announcement->price }}</p>
                            </h5>
                        </div>

                        <h5
                        style="font-family: CormorantGaramond;margin:0px;text-align:start; margin-top:30px">
                        <strong style="font-size: 25px">Descrizione:</strong></h5>
                        <p
                        style="text-align: start;font-family: CormorantGaramond;font-size:20px;overflow-y: scroll;height: 367px ;width: 100%;padding: 5px;border-top: #b8b8b8 0.5px solid">
                        {{ $announcement->body }}
                    </p>
                </div>

            </div>
        </div>
        <div  class="col-12 col-ml-12 col-md-8 col-sm-12 p-0 ">
            <div class="BoxInformazioni2">
                <div style="height: auto; width:auto">
                    <section>
                        <div style="width: auto" class="container">
                            <div class="carousel">
                                <input type="radio" name="slides" checked="checked"
                                id="slide-1{{ $key + 1 }}">
                                <input type="radio" name="slides"
                                id="slide-2{{ $key + 1 }}">
                                <input type="radio" name="slides"
                                id="slide-3{{ $key + 1 }}">
                                <ul class="carousel__slides">
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src=" {{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(600,500)  : 'https://static.wixstatic.com/media/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.webp'}}"
                                                width="100%" height="900px"
                                                alt="">
                                            </div>
                                        </figure>
                                    </li>
                                    <li class="carousel__slide">
                                        <figure>
                                            <div>
                                                <img src=" https://static.wixstatic.com/media/c837a6_b985edee7e274f068e0e3783a789889a~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_b985edee7e274f068e0e3783a789889a~mv2.webp"
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

                    <div  style="padding-top:30px;;display: flex;" class="boxShowButton"
                    style="display: flex; justify-content: space-between ; margin-top: 30px;">
                    <form style="width: 100%"
                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button id="acceptButton" type="submit"
                    style="width: 99%">Accetta</button>
                </form>
                <form style="width: 100%"
                action="{{ route('revisor.reject_announcement', ['announcement' => $announcement]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button id="rejectButton" type="submit"
                style="width: 99%;">Rifiuta</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@php
$counter--;
@endphp
@endforeach
</div>
@endif
<x-footer />
</x-layout>
