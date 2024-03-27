<x-layout>
    
    <x-success></x-success>
    <div class="containerCatalogo">

        <div class="containerFiltro">
            <h6 style="padding-top: 10px">
                <a  href="{{ route('homepage') }}">Home / </a> <a href="{{ route('announcements.index') }}">Catalogo / </a><a style="cursor: default">{{$category->name}}</a>
            </h6>
            <h3>Categorie</h3>
            <hr >
            @foreach ($categories as $category1)
            <a class="dropdown-item" href="{{route('categoryShow',['category'=>$category1])}}">{{$category1->name}}</a>
          
            @endforeach
          
        </div>

        <div class="containerProdotti">

            <div class="boxProdotti">

                <div class="container text-center p-0">

                    <div class="row">
                      
                            <div class="boxTitoloCatalogo">
                                <h2>{{$category->name}}</h2>
                               
                                <p>Scopri i prodotti adatti per te, a un prezzo imperdibile</p>
    
                            </div>
                            <div
                                style="width: 100%;display: flex;justify-content: space-between; border-bottom: 1px solid #2c2c2c;margin-bottom: 15px;">
                                <p style="margin-top: 0px 0px 3px 0px">{{$category->announcements->count()}} prodotti</p>
                                <div class="custom-select" style="width:200px;">
                                    <select name="order" id="orderSelect" style="width: 100%;">
                                        <option value="0">Recenti</option>
                                        <option value="1">Prezzo (dal più basso al più alto)</option>
                                        <option value="2">Prezzo (dal più alto al più basso)</option>
                                    </select>
                                </div>
    
                            </div>
                            @forelse ($category->announcements as $announcement)
                           
                        <div class="col-6 col-ml-6 col-sm-4 p-1">
                           <a style="text-decoration: none" href="  {{route('announcements.show', compact('announcement'))}}  ">
                                <div  class="BoxInformazioni">
                                        <img  src="https://static.zara.net/assets/public/83dd/dcd9/a93f47029263/0e1f7ab00070/05679567044-a2/05679567044-a2.jpg?ts=1710506823085&w=624"
                                            width="100%" height="600px"  alt="">
                                   <div style="display: flex;justify-content: space-between; width: 100%;">
                                     <h6>{{$announcement->title}}  </h6>
                                     <p style="font-size: 12px;position: relative;bottom: 10px"> Autore: {{$announcement->user->name ?? ''}}   | {{$announcement->created_at->format('d/m/Y')}}  </p>
                                </div>
                                    <p>${{$announcement->price}}</p>
                                </div>
                           </a>
                        </div>
                        @empty

                        <div class="col-12">
                            <p class="h1">Non sono presenti annunci per questa categoria!</p>
                            <p class="h2">Pubblicane uno: <a href="{{route('announcements.create')}}" class="btn btn-success shadow">Nuovo annuncio</a></p>
                        </div>
                        @endforelse
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <x-footer />
</x-layout>
