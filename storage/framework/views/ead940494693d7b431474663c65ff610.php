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
    <div class="containerCatalogo">

        <div class="containerFiltro">
            <h3>Categorie</h3>
            <hr >
            <a href="">Tech</a>
            <a href="">Donna</a>
            <a href="">Uomo</a>
            <a href="">Gioielli</a>
            <a href="">Giochi</a>
            <a href="">Sport</a>
            <a href="">Auto</a>
            <a href="">Orologio</a>
            <a href="">Film</a>
            <a href="">Musica</a>
        </div>

        <div class="containerProdotti">

            <div class="boxProdotti">

                <div class="container text-center p-0">

                    <div class="row">
                      
                            <div class="boxTitoloCatalogo">
                                <h2>CATALOGO</h2>
                                <p>Scopri i prodotti adatti per te, a un prezzo imperdibile</p>
    
                            </div>
                            <div
                                style="width: 100%;display: flex;justify-content: space-between; border-bottom: 1px solid #2c2c2c;margin-bottom: 15px;">
                                <p style="margin-top: 0px 0px 3px 0px">6 prodotti</p>
                                <div class="custom-select" style="width:200px;">
                                    <select style="width: 100%; ">
                                        <option value="0">Recomandati:</option>
                                        <option value="1">Recenti</option>
                                        <option value="2">Prezzo</option>
                                        <option value="3">Nuovi</option>
                                    </select>
                                </div>
    
                            </div>
                    
                        <div class="col-6 col-ml-6 col-sm-4 p-1">
                            <div class="BoxInformazioni">
                                <img  src="https://static.zara.net/assets/public/83dd/dcd9/a93f47029263/0e1f7ab00070/05679567044-a2/05679567044-a2.jpg?ts=1710506823085&w=624"
                                    width="100%" height="600px"  alt="">
                                <h6> Stainless Steel Lungh Box </h6>
                                <p>€49.99</p>
                            </div>
                        </div>
                        <div class="col-6 -ml-6  col-sm-4 p-1">
                            <div class="BoxInformazioni">
                                <img src="https://static.zara.net/assets/public/1a45/b124/0de449b180b8/cccd7eccad7f/07545471712-a1/07545471712-a1.jpg?ts=1707904555728&w=624"
                                    width="100%" height="600px" alt="">
                                <h6> Stainless Steel Lungh Box </h6>
                                <p>€49.99</p>
                            </div>
                        </div>
                        <div class="col-6 -ml-6  col-sm-4 p-1">
                            <div class="BoxInformazioni">
                                <img src="https://static.zara.net/assets/public/2ebd/5d1a/f54e40188135/9822c7be69ec/03268402804-a1/03268402804-a1.jpg?ts=1710923789037&w=624"
                                    width="100%" height="600px" alt="">
                                <h6> Stainless Steel Lungh Box </h6>
                                <p>€49.99</p>
                            </div>
                        </div>
                        <div class="col-6 -ml-6  col-sm-4 p-1">
                            <div class="BoxInformazioni">
                                <img src="https://static.zara.net/assets/public/cb67/fd6f/b0f54d97ba67/27907135af84/01063425105-a1/01063425105-a1.jpg?ts=1710843889420&w=624"
                                    width="100%" height="600px" alt="">
                                <h6> Stainless Steel Lungh Box </h6>
                                <p>€49.99</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 p-1">
                            <div class="BoxInformazioni">
                                <img src="https://static.zara.net/assets/public/4fd8/a64e/92504407be92/0ca6f9a90c81/07545475712-a1/07545475712-a1.jpg?ts=1706701293833&w=624"
                                    width="100%" height="600px" alt="">
                                <h6> Stainless Steel Lungh Box </h6>
                                <p>€49.99</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 p-1">
                            <div class="BoxInformazioni">
                                <img src="https://static.zara.net/assets/public/1a45/b124/0de449b180b8/cccd7eccad7f/07545471712-a1/07545471712-a1.jpg?ts=1707904555728&w=624"
                                    width="100%"  height="600px" alt="">
                                <h6> Stainless Steel Lungh Box </h6>
                                <p>€49.99</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 p-1">
                            <div class="BoxInformazioni">
                                <img src="https://static.zara.net/assets/public/0131/df2c/1c8a42ce8902/f9d6b6c93083/06987410519-a1/06987410519-a1.jpg?ts=1709286531253&w=624"
                                    width="100%"  height="600px" alt="">
                                <h6> Stainless Steel Lungh Box </h6>
                                <p>€49.99</p>
                            </div>
                        </div>
                       
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
<?php /**PATH C:\Users\Lorek\OneDrive\Desktop\Aulab.project\Progetto_Presto_Ambiversi\resources\views/catalogo.blade.php ENDPATH**/ ?>