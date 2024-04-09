<x-layout>
    <div class="headerImage">

        <div style="margin-top: 35px; margin-right: 40px" class="cerca">
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
                <a href="{{ route('homepage') }}">Home / </a> <a style="cursor: default;">
                    @if(request()->routeIs('announcements.showFavorites'))
        Preferiti
    @else
        Catalogo
    @endif
                </a>
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
                            <h2>
                                @if(request()->routeIs('announcements.showFavorites'))
        PREFERITI
    @else
        CATALOGO
    @endif
                            </h2>
                            <p style="text-align: start">
                                @if(request()->routeIs('announcements.showFavorites'))
                                Tutti gli articoli preferiti in un unico posto
                            @else
                            Scopri i prodotti adatti per te, a un prezzo imperdibile
                            @endif
                               
                            
                            </p>

                        </div>
                        <div
                            style="width: 100%;display: flex;justify-content: space-between; border-bottom: 1px solid #2c2c2c;margin-bottom: 15px;">
                            <p style="margin-top: 0px 0px 3px 0px">{{ $announcements_all->count() }} prodotti</p>


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
                            <div  class="col-12 col-md-6 col-lg-4 col-ml-4 col-sm-12 p-3">
                                <a style="text-decoration: none" href="{{ route('announcements.show', compact('announcement')) }}">
                                    <div id="BoxInformazioniMobile"  class="BoxInformazioni">
                                        <div id="showCarousel-{{ $announcement->id }}" class="carousel slide">
                                            <div class="carousel-inner">
                                                @if ($announcement->images->isEmpty())
                                                    <!-- Se non ci sono immagini caricate, visualizza un'immagine di default -->
                                                    <div class="carousel-item active">
                                                        <img style="object-fit: cover; padding: 0px; height: 555px; width: auto;"
                                                            src="{{ Storage::url('images/default.jpg') }}" alt="Default Image" class="img-fluid rounded" height="100%">
                                                    </div>
                                                @else
                                                    @foreach ($announcement->images as $key => $image)
                                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                            <img style="object-fit: cover; padding: 0px; height: 555px; width: auto;"
                                                                src="{{ $image->getUrl(600, 500) }}" alt="" class="img-fluid rounded" height="100%">
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            @if (
                                                !$announcement->images->isEmpty() &&
                                                    $announcement->images->first()->getUrl(600, 500) != Storage::url('images/default.jpg'))
                                            <button id="FrecciaPrev" style="height: 86.5%" class="carousel-control-prev" type="button"
                                                data-bs-target="#showCarousel-{{ $announcement->id }}" data-bs-slide="prev">
                                                <i class="bi bi-arrow-left-circle"></i>
                                            </button>
                                            <button id="FrecciaNext" style="height: 86.5%" class="carousel-control-next" type="button"
                                                data-bs-target="#showCarousel-{{ $announcement->id }}" data-bs-slide="next">
                                                <i class="bi bi-arrow-right-circle"></i>
                                            </button>
                                            @endif
                                            <div style="display: flex; flex-direction: column; justify-content: start; align-items: start; padding: 5px">
                                                <div class="d-flex justify-content-between align-items-center" style="width: 100%;">
                                                    <h6 class="d-inline-block text-truncate" style="max-width: 250px; margin-top: 3px;">{{ $announcement->title }}</h6>
                                                    <div class="provakeri">
                                                        <p style="color: #2c2c2c;">Info: <a class="categoryCardDescription"
                                                                href="{{ route('categoryShow', ['category' => $announcement->category->id]) }}">{{ $announcement->category->name }}</a> |
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
                                <div class="">

                                    <p class="lead">
                                        @if(request()->routeIs('announcements.showFavorites'))
                                        Non hai aggiunto nessun articolo ai preferiti
                                    @else
                                    Non ci sono annunci per questa ricerca
                                    @endif
                                      

                                    </p>
                                    
                                </div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($announcements instanceof \Illuminate\Pagination\LengthAwarePaginator)
<div class="d-flex justify-content-end my-4 me-3">
    <div class="pagination">
        @if ($announcements->onFirstPage())
        <span class="disabled me-2">&laquo;</span>
        @else
        <a class="me-2" href="{{ $announcements->previousPageUrl() }}">&laquo;</a>
        @endif
        @php
        $currentPage = $announcements->currentPage();
        $lastPage = $announcements->lastPage();
        $start = max($currentPage - 2, 1);
        $end = min($currentPage + 2, $lastPage);
        @endphp

        @if ($start > 1)
        <a style="color: #2c2c2c;text-decoration:none; " class="mx-1" href="{{ $announcements->url(1) }}">1</a>
        @if ($start > 2)
        <span class="mx-1">...</span>
        @endif
        @endif

        @for ($i = $start; $i <= $end; $i++)
        @if ($i == $currentPage)
        <span class="active mx-3 text-danger">{{ $i }}</span>
        @else
        <a style="color: #2c2c2c;text-decoration:none; " class="mx-1" href="{{ $announcements->url($i) }}">{{ $i }}</a>
        @endif
        @endfor

        @if ($end < $lastPage)
        @if ($end < $lastPage - 1)
        <span class="mx-1">...</span>
        @endif
        <a style="color: #2c2c2c;text-decoration:none; " class="mx-1" href="{{ $announcements->url($lastPage) }}">{{ $lastPage }}</a>
        @endif

        @if ($announcements->hasMorePages())
        <a style="color: #2c2c2c;text-decoration:none; " class="ms-2" href="{{ $announcements->nextPageUrl() }}">&raquo;</a>
        @else
        <span class="disabled ms-2">&raquo;</span>
        @endif
    </div>

</div>


@endif
    <x-footer />
</x-layout>
