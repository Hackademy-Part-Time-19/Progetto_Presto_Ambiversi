<x-layout>
    {{-- riga 3/4/5 messaggio di successo per la richiesta di revisore --}}
    @if (session()->has('message'))
<h2 class="alert alert-success">{{session('message')}}</h2>
@endif

    <div class="headerImage">
        <img src="{{ Storage::url('/Imagini/image-header.png') }}" width="100%" alt="">
        <div class="cerca">
            <form action="/action_page.php">
                <input
                    style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                    type="text" placeholder=" cerca.." name="search">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                        class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    <div id="SfondoCategorie" class="categorie">
        <div class="divCategorie">
            <h2>CATEGORIE</h2>
        </div>


        <div style="height: 100%; width: 100%; display: flex;">
            <div class="listaCategorie">
                <ul>
                    <li> <a onclick="Tech(),TechLink()" id="Tech" class="aMenuCategori"> <span>01. </span>Tech</a>
                    </li>
                    <hr>
                    <li> <a onclick="Donna(),DonnaLink()" id="Donna" class="aMenuCategori"> <span>02. </span>Donna</a></li>
                    <hr>
                    <li> <a onclick="Gioielli(),GioielliLink()" id="Gioielli" class="aMenuCategori"> <span>03. </span>Gioielli</a></li>
                    <hr>
                    <li> <a onclick="Uomo(),UomoLink()" id="Uomo" class="aMenuCategori"> <span>04. </span>Uomo</a></li>
                    <hr>
                    <li> <a onclick="Giochi(),GiochiLink()" id="Giochi" class="aMenuCategori"> <span>05. </span>Giochi</a></li>
                    <hr>
                    <li> <a onclick="Sport(),SportLink()" id="Sport" class="aMenuCategori"> <span>06. </span>Sport</a></li>
                    <hr>
                    
                    <li> <a onclick="Auto(),AutoLink()" id="Auto" class="aMenuCategori"> <span>07. </span>Auto</a></li>
                    <hr>
                    <li> <a onclick="Orologio(),OrologioLink()" id="Orologio" class="aMenuCategori"> <span>08. </span>Orologio</a></li>
                    <hr>
                    <li> <a onclick="Film(),FilmLink()" id="Film" class="aMenuCategori"> <span>09. </span>Film</a></li>
                    <hr>
                    <li> <a onclick="Musica(),MusicaLink()" id="Musica" class="aMenuCategori"> <span>10. </span>Musica</a></li>
                    <hr>
                </ul>
            </div>
            <div class="boxImagineCategoria">
                <div  id="ImagineContainerCategory" class="img"></div>
                <div class="buttonImg">
                 <a id="frecciaHref" href="" >   <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i></a>
                </div>

            </div>
        </div>
    </div>
    <div class="preferiti">
        <h2>I più amati</h2>
        <div>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <button>Donna</button>
                    </div>
                    <div class="col">
                        <button>Uomo</button>
                    </div>
                    <div class="col">
                        <button>Tech</button>
                    </div>
                    <div class="col">
                        <button>Gioielli</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div id="BoxContatti" class="BoxContatti">





        <div style="height: 100%;width: 60%;display: flex;justify-content: center;align-items: center">
            <form class="formContatto" action="">
                <input style="width: 100%" type="text" placeholder="Nome e Cognome">
                <div style="width: 100%;display: flex;justify-content: space-between ">
                    <input style="width: 63%" type="tel" placeholder="Telefono">
                    <input style="width: 35%" type="text" placeholder="N. Ordine">
                </div>
                <input style="width: 100%" type="email" placeholder="Email">
                <div style="width: 100%;display: flex;justify-content: space-between ">
                    <input style="width: 85%; text-align: start" type="tel" placeholder="Messaggio..">
                    <button style="width: 13%; height: 170px;" type="submit">Invia</button>
                </div>
            </form>
        </div>

        <div class="BoxDesContatti">
            <h2 text-align: center; ">CONTATTI</h2>
            <h5 text-align: center;>
                Mail: info@presto.com <br>
                Tel: 123-456-7890 <br>
                Via Gaetano Donizetti N.18, <br>
                Milano, Lombardia, Italia
                </h5>

        </div>



    </div>

    <div class="Informazioni">
        <div class="container text-center">
            <div class="row">
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-truck"></i>
                        <h6> <strong>SPEDIZIONE</strong> </h6>
                        <p>Gratis in store, a domicilio a partire da €49.99</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-box2-heart"></i>
                        <h6> <strong>RESO GRATIS</strong></h6>
                        <p>Hai 30 giorni di tempo per ripensarci!</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-credit-card"></i>
                        <h6> <strong>PAGAMENTI SICURI</strong> </h6>
                        <p>Dati protetti con codifica SSL</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-chat-dots"></i>
                        <h6> <strong>SUPPORTO</strong></h6>
                        <p>Dal lunedi al venerdi dalle 9:00 alle 18:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>
