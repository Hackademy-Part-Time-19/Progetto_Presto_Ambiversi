@if (session()->has('success'))
<h2 style="background-color: #0C6B37;color: #ebeaea;; border-radius: 0px;font-family: CormorantGaramond;" class="alert alert-success">{{session('success')}}</h2>
@endif