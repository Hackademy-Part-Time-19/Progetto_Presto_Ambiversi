<form action="{{route('set_language_locale',$lang)}}" method="POST">
@csrf
<button type="submit" class="nav-link" style="background-color: transparent; border:none; width:30px;height:30px">
    <x-icon name="flag-country-{{$nation}}" />
    
</button>

</form>