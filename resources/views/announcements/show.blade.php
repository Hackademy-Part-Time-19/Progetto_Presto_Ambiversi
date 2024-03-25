<x-layout>
    <div class="container-fluid p-5 bg-gradient bg-success shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">Annuncio {{$announcement->title}}</h1>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/27/1200/200" alt="" class="img-fluid p-3 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/27/1200/200" alt="" class="img-fluid p-3 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/27/1200/200" alt="" class="img-fluid p-3 rounded">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h5 class="card-title"> {{$announcement->title}} </h5>
                    <p class="card-text"> {{$announcement->body}} </p>
                    <p class="card-text"> €{{$announcement->price}} </p>
                    <a class="btn btn-primary" href="{{route('announcements.show', compact('announcement'))}}">Visualizza</a>
                    <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-success">Categoria: {{$announcement->category->name}}</a>
                    <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} - Autore {{$announcement->user->name ?? ''}} </p>
                </div>
            </div>
        </div>
    </x-layout>