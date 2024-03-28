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
    <x-success/>
    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    {{ $announcement_to_check ? "Ecco l'annuncio da revisionare" : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    @if ($announcement_to_check)






      
       
    <div class="col-6 col-ml-6 col-sm-4 p-1">
        <a style="text-decoration: none"
            >
            <div class="BoxInformazioni">
                <div id="showCarousel-{{ $announcement_to_check->id }}" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="object-fit: cover; padding: 0px; height: 585px;width:500px "
                                src="https://static.wixstatic.com/media/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.jpg/v1/fill/w_1956,h_2608,q_90/c837a6_6bbaedf840c64672a7df939af9ceb9a4~mv2.webp"
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
                        data-bs-target="#showCarousel-{{ $announcement_to_check->id }}"
                        data-bs-slide="prev">
                        <i class="bi bi-arrow-left-circle"></i>
                    </button>
                    <button id="FrecciaNext" style=" height:86.5%" class="carousel-control-next"
                        type="button" data-bs-target="#showCarousel-{{ $announcement_to_check->id }}"
                        data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle"></i>
                    </button>
                    <div
                        style="display: flex;flex-direction:column;justify-content:start;align-items:start ">
                      <div class="d-flex justify-content-between align-items-center" style=" width: 100%;">
                            <h6 class="d-inline-block text-truncate "
                                style="max-width: 150px;margin-top:3px">{{ $announcement_to_check->title }}
                            </h6>  
                            <div class="provakeri">
                                <p style="color: #2c2c2c;">Info: <a class="categoryCardDescription"
                                       >{{ $announcement_to_check->category->name }}</a>
                                    | Autore: <strong>{{ $announcement_to_check->user->name }}</strong> |
                                    {{ $announcement_to_check->created_at->format('d/m/Y') }}</p>
                            </div>
                           
                      </div>
                        <p>€ {{ $announcement_to_check->price }}</p>

                        <div style="display: flex;justify-content: space-between; width: 100%;">
                            <form
                                action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow">Accetta</button>
                            </form>

                            <form
                                action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                            </form>

                        </div>




                    </div>
                </div>
            </div>
        </a>
    </div>
  
  



    @endif
</x-layout>
