<x-layout>
    <x-nav></x-nav>
    <x-success></x-success>
    <div  class="containerCatalogo">


        <div style=" padding: 80px 0px; " class="container text-center  ">
           
            <div  class="row  ">
                <div style="padding-right: 50px" class="col-8 col-ml-8 col-md-8 col-sm-12  ">

                    <div  class="BoxInformazioni2">
                       <img style="object-fit: cover;" src="https://static.wixstatic.com/media/c837a6_c913b8b392b545a0b2dfe10cf783c951~mv2.jpg/v1/fill/w_1206,h_1608,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/c837a6_c913b8b392b545a0b2dfe10cf783c951~mv2.jpg"
                       width="100%" height="auto"  alt="">
                    </div>
            </div>
         
            
                <div   class="col-4 col-ml-4 col-md-4 col-sm-12 p-0 ">
                 <div   class="BoxInformazioni2">
                    <div style=" height: 100%; " class="ContainterShowDetail">
                        <h2 style="font-family: CormorantGaramond;margin-bottom: 3px">{{$announcement->title}}</h2>
                        <p style="font-size: 15px ;">STK: 004</p>
                        <h4 style="font-family:'Times New Roman', Times, serif" >€ {{$announcement->price}}</h4>
                        <p style="text-align: start;font-family: CormorantGaramond;margin-top: 20px">{{$announcement->body}}</p>
                        <p  style="margin: 0px;font-family: CormorantGaramond;">
                            Quantità</p>
                        <div style="border-bottom: 1px solid grey; width: 150px;" class="input-group">
                            <span class="input-group-btn">
                                <button id="buttonMinus" style="border: none" type="button" class="btn btn-outline-secondary" onclick="decreaseQuantity()">-</button>
                            </span>
                            <input style="background-color: rgba(255, 255, 255, 0); border:none" type="text" class="form-control text-center" value="1" id="quantityInput">
                            <span class="input-group-btn">
                                <button id="buttonPlus" style="border: none" type="button" class="btn btn-outline-secondary" onclick="increaseQuantity()">+</button>
                            </span>
                        </div>
                      
                   

                    </div>
                    <div class="boxShowButton" style="display: flex; justify-content: space-between ; margin-top: 30px;">
                        <button style="width: 85%" >Aggiungi al carrello</button>
                        <button>
                            <i class="bi bi-heart"></i>
                        </button>
                    </div>
               

         </div>
            </div>
          </div>


    
      
    
    
    
            </div>
    
    </div>
    <x-footer />
</x-layout>
