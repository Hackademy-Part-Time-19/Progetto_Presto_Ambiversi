@if (session()->has('success'))
<h2 class="alert alert-success">{{session('success')}}, dopo la verifica sarà pubblicato l'annuncio  </h2>
@endif