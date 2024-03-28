@if (session()->has('success'))
<h2 class="alert alert-success">{{session('success')}}, dopo la verifica sarà pubblicato!  </h2>
@endif