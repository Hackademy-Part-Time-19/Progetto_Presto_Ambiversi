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
    <x-success></x-success>
    <div class="containerCatalogo">

        <div class="containerFiltro">
            <h6 style="padding-top: 10px">
                <a href="{{ route('homepage') }}">Home / </a> <a style="cursor: default;">Catalogo</a>
            </h6>
            <h3>Categorie </h3>
            <hr>
            @foreach ($categories as $category)
                <a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
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
                                <select wire:model="order" name="order" style="width: 100%;">
                                    <option value="0">Recenti</option>
                                    <option value="1">Prezzo (dal più basso al più alto)</option>
                                    <option value="2">Prezzo (dal più alto al più basso)</option>
                                </select>
                            </div>

                        </div>
                        @foreach ($announcements as $announcement)
                            <div class="col-6 col-ml-6 col-sm-4 p-1">
                                <a style="text-decoration: none"
                                    href="  {{ route('announcements.show', compact('announcement')) }}  ">
                                    <div class="BoxInformazioni">
                                        <img src="https://static.wixstatic.com/media/c837a6_c913b8b392b545a0b2dfe10cf783c951~mv2.jpg/v1/fill/w_1206,h_1608,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/c837a6_c913b8b392b545a0b2dfe10cf783c951~mv2.jpg"
                                            width="100%" height="600px" alt="">
                                        <div style="display: flex;justify-content: space-between; width: 100%;">
                                            <h6 class="d-inline-block text-truncate" style="max-width: 150px;">{{ $announcement->title }} </h6>
                                            <div class="provakeri">
                                                <p style="color: #2c2c2c;">Info :<a class="categoryCardDescription"
                                                        href="{{ route('categoryShow', ['category' => $announcement->category->id]) }}">{{ $announcement->category->name }}</a>
                                                    | Autore: <strong>{{ $announcement->user->name }}</strong> |
                                                    {{ $announcement->created_at->format('d/m/Y') }}
                                                </p>
                                            </div>
                                        </div>
                                        <p>€ {{ $announcement->price }}</p>

                                    </div>
                                </a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
