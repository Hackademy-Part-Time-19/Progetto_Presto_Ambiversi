<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">

                <form class="mt-5" action="/register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input name= "name" type="name" class="form-control" id="name" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name= "email" type="email" class="form-control" id="email" a>
                    </div>
                    @error('email') <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" >
                    </div>
                    @error('password') <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">conferma password</label>
                        <input name= "password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>