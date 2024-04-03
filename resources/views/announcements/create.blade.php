<x-layout>
    <div class="headerImage">
        <div style="margin-top: 35px; margin-left: 20px" class="cerca">
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:create-announcement />
            </div>
        </div>
    </div>
</x-layout>