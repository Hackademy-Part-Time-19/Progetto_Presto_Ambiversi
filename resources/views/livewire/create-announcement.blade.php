









<div class="formCreate" style="width: 800px;">



    <h1>Crea il tuo annuncio!</h1>

    <form   wire:submit.prevent="store"   >
        @csrf

        <div class="mb-3">
            <input style="width: 100%"  placeholder="Titolo" wire:model.live="title" type="text" class="form-control @error('title') is-invalid @enderror">
            @error('title')
            <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">

            <textarea  placeholder="Descrizione" wire:model.live="body" type="text" class="form-control @error('body') is-invalid @enderror"></textarea>
            @error('body')
            <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price">Prezzo</label>
            <input wire:model.live="price" type="text" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <p class="text-danger mt-2">{{ $message }}</p>
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
        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img">
            @error('temporary_images.*')
            <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>
        @if (!empty($images))
        <div class="row">
            <div class="col-12">
                <p>Photo preview:</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                    @foreach ($images as $key => $image)
                    <div class="col-6 my-3">

                        <img  src="{{$image->temporaryUrl()}}" alt="" srcset=""  style="object-fit: cover; padding: 0px; height: 585px;width:500px" class="img-fluid rounded"  width="100%">
                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <button  type="submit" class="btn btn-primary shadow px-4 py-2"> Crea</button>





    </form>


</div>
