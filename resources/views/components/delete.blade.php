@if (session()->has('delete'))
<h2 class="alert alert-danger">{{session('delete')}}</h2>
@endif