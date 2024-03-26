<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal1811699cff5444317c92659701378323 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1811699cff5444317c92659701378323 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1811699cff5444317c92659701378323)): ?>
<?php $attributes = $__attributesOriginal1811699cff5444317c92659701378323; ?>
<?php unset($__attributesOriginal1811699cff5444317c92659701378323); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1811699cff5444317c92659701378323)): ?>
<?php $component = $__componentOriginal1811699cff5444317c92659701378323; ?>
<?php unset($__componentOriginal1811699cff5444317c92659701378323); ?>
<?php endif; ?>

    <div class="headerImage">
        <img  src="<?php echo e(Storage::url('/Imagini/image-header.png')); ?>" width="100%" alt="">
        <div class="cerca">
            <form action="/action_page.php">
                <input
                    style="font-size: 20px; font-family: CormorantGaramond; background-color: rgba(255, 255, 255, 0); "
                    type="text" placeholder=" cerca.." name="search">
                <button type="submit"><i style="color: white; background-color: #2c2c2c; height: 100%;"
                        class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
    <div id="SfondoCategorie" class="categorie">
        <div class="divCategorie">
            <h2>CATEGORIE</h2>
        </div>


        <div style="height: 100%; width: 100%; display: flex;">
            <div class="listaCategorie">
                <ul>
                    <li> <a onclick="Tech()" id="Tech" class="aMenuCategori"> <span>01. </span>Tech</a>
                    </li>
                    <hr>
                    <li> <a onclick="Donna()" id="Donna" class="aMenuCategori"> <span>02. </span>Donna</a></li>
                    <hr>
                    <li> <a onclick="Gioielli()" id="Gioielli" class="aMenuCategori"> <span>03. </span>Gioielli</a></li>
                    <hr>
                    <li> <a onclick="Uomo()" id="Uomo" class="aMenuCategori"> <span>04. </span>Uomo</a></li>
                    <hr>
                    <li> <a onclick="Giochi()" id="Giochi" class="aMenuCategori"> <span>05. </span>Giochi</a></li>
                    <hr>
                    <li> <a onclick="Sport()" id="Sport" class="aMenuCategori"> <span>06. </span>Sport</a></li>
                    <hr>
                    
                    <li> <a onclick="Auto()" id="Auto" class="aMenuCategori"> <span>07. </span>Auto</a></li>
                    <hr>
                    <li> <a onclick="Orologio()" id="Orologio" class="aMenuCategori"> <span>08. </span>Orologio</a></li>
                    <hr>
                    <li> <a onclick="Film()" id="Film" class="aMenuCategori"> <span>09. </span>Film</a></li>
                    <hr>
                    <li> <a onclick="Musica()" id="Musica" class="aMenuCategori"> <span>10. </span>Musica</a></li>
                    <hr>
                </ul>
            </div>
            <div class="boxImagineCategoria">
                <div  id="ImagineContainerCategory" class="img"></div>
                <div class="buttonImg">
                    <i style="padding-left: 50px;" class="bi bi-arrow-right-circle"></i>
                </div>

            </div>
        </div>
    </div>
    <div class="preferiti">
        <h2>I più amati</h2>
        <div>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <button>Donna</button>
                    </div>
                    <div class="col">
                        <button>Uomo</button>
                    </div>
                    <div class="col">
                        <button>Tech</button>
                    </div>
                    <div class="col">
                        <button>Gioielli</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div id="BoxContatti" class="BoxContatti">





        <div style="height: 100%;width: 60%;display: flex;justify-content: center;align-items: center">
            <form class="formContatto" action="">
                <input style="width: 100%" type="text" placeholder="Nome e Cognome">
                <div style="width: 100%;display: flex;justify-content: space-between ">
                    <input style="width: 63%" type="tel" placeholder="Telefono">
                    <input style="width: 35%" type="text" placeholder="N. Ordine">
                </div>
                <input style="width: 100%" type="email" placeholder="Email">
                <div style="width: 100%;display: flex;justify-content: space-between ">
                    <input style="width: 85%; text-align: start" type="tel" placeholder="Messaggio..">
                    <button style="width: 13%; height: 170px;" type="submit">Invia</button>
                </div>
            </form>
        </div>

        <div class="BoxDesContatti">
            <h2 text-align: center; ">CONTATTI</h2>
            <h5 text-align: center;>
                Mail: info@presto.com <br>
                Tel: 123-456-7890 <br>
                Via Gaetano Donizetti N.18, <br>
                Milano, Lombardia, Italia
                </h5>

        </div>



    </div>

    <div class="Informazioni">
        <div class="container text-center">
            <div class="row">
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-truck"></i>
                        <h6> <strong>SPEDIZIONE</strong> </h6>
                        <p>Gratis in store, a domicilio a partire da €49.99</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-box2-heart"></i>
                        <h6> <strong>RESO GRATIS</strong></h6>
                        <p>Hai 30 giorni di tempo per ripensarci!</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-credit-card"></i>
                        <h6> <strong>PAGAMENTI SICURI</strong> </h6>
                        <p>Dati protetti con codifica SSL</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="BoxInformazioni">
                        <i class="bi bi-chat-dots"></i>
                        <h6> <strong>SUPPORTO</strong></h6>
                        <p>Dal lunedi al venerdi dalle 9:00 alle 18:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Lorek\OneDrive\Desktop\Aulab.project\Progetto_Presto_Ambiversi\resources\views/homepage.blade.php ENDPATH**/ ?>