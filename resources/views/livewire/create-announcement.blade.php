<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes

<div class="formCreate" style="width: 800px;">

    <div class="bg"></div>

    <h1>Crea il tuo annuncio!</h1>
    <form  wire:submit.prevent="store" >

<<<<<<< Updated upstream
        @csrf
        <div class="mb-3">
            <input style="width: 100%"  placeholder="Titolo" wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
           
            <textarea  placeholder="Descrizione" wire:model="body" type="text" class="form-control @error('body') is-invalid @enderror"></textarea>
            @error('body')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <input wire:model="price" type="text" placeholder="Prezzo" class="form-control @error('price') is-invalid @enderror">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">Categoria</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category )
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
       
        <button  type="submit" > Crea</button>
    </form>
   
=======
     



            <div class="mb-3">
                <input style="width: 100%"  placeholder="Titolo" wire:model.live="title" type="text" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                
                <textarea  placeholder="Descrizione" wire:model.live="body" type="text" class="form-control @error('body') is-invalid @enderror"></textarea>
                @error('body')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="price">Prezzo</label>
                <input wire:model.live="price" type="text" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-3">
                <label for="category">Categoria</label>
                <select wire:model.live="category" id="category" class="form-control">
                    <option value="">Scegli la categoria</option>
                    @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary shadow px-4 py-2"> Crea</button>
        </form>
>>>>>>> Stashed changes


</div>
