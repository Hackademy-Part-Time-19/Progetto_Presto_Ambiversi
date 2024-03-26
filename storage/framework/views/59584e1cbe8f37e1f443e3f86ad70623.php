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
    <div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">
        <div class="row">
            <div class="col-12 text-light p-5">
                <h1 class="display-2">
                    <?php echo e($announcement_to_check ? "Ecco l'annuncio da revisionare" : "Non ci sono annunci da revisionare"); ?>

                </h1>
            </div>
        </div>
    </div>
    <?php if($announcement_to_check): ?>    
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="container my-5">
                <div style="position:absolute;bottom:10px; margin-top: 100px" id="showCarousel" class="carousel slide my-5" data-bs-ride="carousel">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/27/1200/200" alt="" class="img-fluid p-3 rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/27/1200/200" alt="" class="img-fluid p-3 rounded">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/27/1200/200" alt="" class="img-fluid p-3 rounded">
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="container my-5">
                <h5 class="card-title">Titolo: <?php echo e($announcement_to_check->title); ?> </h5>
                <p class="card-text">Descrizione: <?php echo e($announcement_to_check->body); ?> </p>
                <p class="card-footer">Pubblicato il: <?php echo e($announcement_to_check->created_at->format('d/m/Y')); ?></p>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="<?php echo e(route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <form action="<?php echo e(route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
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
<?php endif; ?><?php /**PATH C:\Users\Lorek\OneDrive\Desktop\Aulab.project\Progetto_Presto_Ambiversi\resources\views/revisor/index.blade.php ENDPATH**/ ?>