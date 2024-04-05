<x-layout>
    <div class="headerImage">

        <div style="margin-top: 35px; margin-right: 80px" class="cerca">
            <form action="{{route('announcements.search')}}" method="GET">
                <input
                    style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                    type="search" placeholder=" cerca.." name="searched">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                        class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    <x-success></x-success>
    @if (session()->has('message'))
    <h2 class="alert alert-success">{{session('message')}}</h2>
    @endif
    <div class="containerCatalogo">

        <div class="containerFiltro">
            <h6 style="padding-top: 10px">
                <a href="{{ route('homepage') }}">Home / </a> <a style="cursor: default;">Catalogo</a>
            </h6>
            <h3>Categorie </h3>
            <hr>
            @foreach ($categories as $category)
                <a class="dropdown-item"
                    href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
            @endforeach




        </div>

        <div class="containerProdotti">

            <div class="boxProdotti">

                <div class="container text-center p-0">

                    <div class="row">

                        <div class="boxTitoloCatalogo">
                            <h2>CATALOGO</h2>
                            <p>Scopri i prodotti adatti per te, a un prezzo imperdibile</p>

                        </div>
                        <div
                            style="width: 100%;display: flex;justify-content: space-between; border-bottom: 1px solid #2c2c2c;margin-bottom: 15px;">
                            <p style="margin-top: 0px 0px 3px 0px">{{ $announcements->count() }} prodotti</p>


                            <div class="custom-select" style="width:200px;">
                                <select  name="order" style="width: 100%;" >
                                    <option value="0">Ordina per</option>
                                    <option value="1">Prezzo (dal più basso al più alto)</option>
                                    <option value="2">Prezzo (dal più alto al più basso)</option>
                                    <option value="3">Dal più recente</option>
                                    <option value="4">Dal più vecchio</option>
                                </select>
                            </div>



                        </div>
                        @forelse ($announcements as $announcement)
                            <div  class="col-12 col-ml-6 col-sm-4 p-1">
                                <a style="text-decoration: none"
                                    href="{{ route('announcements.show', compact('announcement')) }}">
                                    <div  style="border: #5d5d5d5c 0.5px solid;height: 710px" class="BoxInformazioni">
                                        <div  id="showCarousel-{{ $announcement->id }}" class="carousel slide">
                                            <div  class="carousel-inner">
                                                <div  class="carousel-item active">
                                                    <img style="object-fit: cover; padding: 0px; height: 585px;width:500px; "
                                                        src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(600,500) : Storage::url('images/default.jpg')}}"
                                                        alt="" class="img-fluid rounded" height="100%">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="object-fit: cover; padding: 0px; height: 585px;width:500px "
                                                        src="https://static.wixstatic.com/media/c837a6_b985edee7e274f068e0e3783a789889a~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_b985edee7e274f068e0e3783a789889a~mv2.webp"
                                                        alt="" class="img-fluid rounded" height="100%">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="object-fit: cover; padding: 0px; height: 585px;width:500px "
                                                        src="https://static.wixstatic.com/media/c837a6_935cf1de86ee4db0a33721aee2f7a69b~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_935cf1de86ee4db0a33721aee2f7a69b~mv2.webp"
                                                        alt="" class="img-fluid rounded" height="100%">
                                                </div>
                                            </div>
                                            <button id="FrecciaPrev" style=" height:86.5%; "
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#showCarousel-{{ $announcement->id }}"
                                                data-bs-slide="prev">
                                                <i class="bi bi-arrow-left-circle"></i>
                                            </button>
                                            <button id="FrecciaNext" style=" height:86.5%" class="carousel-control-next"
                                                type="button" data-bs-target="#showCarousel-{{ $announcement->id }}"
                                                data-bs-slide="next">
                                                <i class="bi bi-arrow-right-circle"></i>
                                       </button>
                                            <div
                                                style="display: flex;flex-direction:column;justify-content:start;align-items:start; padding:5px ">
                                              <div class="d-flex justify-content-between align-items-center" style=" width: 100%;">
                                                    <h6 class="d-inline-block text-truncate;"
                                                        style="max-width: 250px;margin-top:3px;">{{ $announcement->title }}
                                                    </h6>
                                                    <div class="provakeri">
                                                        <p style="color: #2c2c2c;">Info: <a class="categoryCardDescription"
                                                                href="{{ route('categoryShow', ['category' => $announcement->category->id]) }}">{{ $announcement->category->name }}</a>
                                                             |
                                                            {{ $announcement->created_at->format('d/m/Y') }}</p>
                                                    </div>

                                              </div>
                                                <p>€ {{ $announcement->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @empty
                            <div class="col-12">
                                <div class="alert alert-warning py-3 shadow">
                                    <p class="lead">Non ci sono annunci per questa ricerca</p>
                                </div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
