<footer>
    <div style="display: flex;">

<div class="footerDescription">
<h3>Iscriviti alla nostra newsletter!</h3>
<div >
<div class="cerca">
    <form action="/action_page.php">
        <input
            style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
            type="text" placeholder=" Indirizzo email" name="search">
        <button type="submit">Iscriviti</button>
    </form>
</div>
</div>
<div class="FooterPaymentBox">
<i class="fa fa-cc-mastercard" style="font-size:24px;color:#fef9ec"></i>
<i class="fa fa-cc-visa" style="font-size:24px;color:#fef9ec"></i>
<i class="fa fa-cc-amex" style="font-size:24px;color:#fef9ec"></i>
<i class="fa fa-paypal" style="font-size:24px;color:#fef9ec"></i>
</div>
<p>Contatti | Copyright © 2024 Presto | Tutti diriti riservati</p>
</div>
<div style="position: relative;background-color: #c01a1a; ;"><hr style=";width: 120px; margin:0px;  "></div>
<div class="footerSocial">

<i class="bi bi-facebook"></i>
<i class="bi bi-instagram"></i>
<i class="bi bi-twitter-x"></i>
<i class="bi bi-tiktok"></i>
</div>
@Auth
<div @if (Auth::user()->is_revisor)  style="display:none;"
@endif>
            <a href="{{route('become.revisor')}}">Diventa revisore</a>
</div>
@endAuth
    </div>
</footer>