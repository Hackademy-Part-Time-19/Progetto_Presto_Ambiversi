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
    <nav>
        <!--Inizio Registrazione PopUp -->
        <div id="RegistrazioneUtente" class="RegistrazioneUtente">
            <div class="RegistrazioneContainer">

                <div class="containerKeri" id="Kericontainer">

                    <div class="form-container sign-up-container">
                        <div
                            style="display: flex; justify-content: end;align-items: start; position: absolute; right: 10px;top:-5px;background-color: rgba(255, 255, 255, 0);height: auto;">
                            <a> <i onclick="CloseLogin()" style="background-color: white;" id="CloseLogin"
                                    class="bi bi-x-circle"></i></a>
                        </div>

                        <form action="/register" method="POST">
                            <?php echo csrf_field(); ?>
                            <h1 style="background-color: white ">Registrati</h1>
                            <div style="background-color: white " class="social-container">
                                <a style="background-color: white " href="https://www.facebook.com/" class="social"><i
                                        style="background-color: white " id="social" class="bi bi-facebook"></i></a>
                                <a style="background-color: white " href="https://www.instagram.com/" class="social"><i
                                        style="background-color: white " id="social" class="bi bi-instagram"></i></a>
                                <a style="background-color: white " href="https://twitter.com/?lang=it"
                                    class="social"><i style="background-color: white " id="social"
                                        class="bi bi-twitter-x"></i></a>
                            </div>
                            <span style="background-color: white ">oppure inserisci i dati</span>

                            <input name="name" type="text" id="name" placeholder="Nome">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input name="email" type="email" id="email" placeholder="Email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input name="password" type="password" id="password" placeholder="Password">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input input name="password_confirmation" type="password" id="password_confirmation"
                                placeholder="Conferma Password">

                            <button style="margin-top: 20px" type="submit">Crea account</button>
                        </form>
                    </div>



                    <div class="form-container sign-in-container">
                        <form class="mt-5" action="/login" method="POST">
                            <?php echo csrf_field(); ?>
                            <h1 style="background-color: white">Accedi</h1>
                            <div style="background-color: white" class="social-container">
                                <a style="background-color: white" href="https://www.facebook.com/" class="social"><i
                                        style="background-color: white" id="social" class="bi bi-facebook"></i></a>
                                <a style="background-color: white" href="https://www.instagram.com/" class="social"><i
                                        style="background-color: white" id="social" class="bi bi-instagram"></i></a>
                                <a style="background-color: white" href="https://twitter.com/?lang=it" class="social"><i
                                        style="background-color: white" id="social" class="bi bi-twitter-x"></i></a>
                            </div>
                            <span style="background-color: white"> oppure usa il tuo account
                            </span>

                            <input name= "email" type="email" id="email" placeholder="Email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div style="background-color: white"><span
                                        style="color: rgb(243, 70, 70);background-color: white"><?php echo e($message); ?></span>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input name="password" type="password" placeholder="Password">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div style="background-color: white"><span
                                        style="color: rgb(243, 70, 70);background-color: white"><?php echo e($message); ?></span>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <a style="background-color: white" href="">Hai dimenticato la password?</a>
                            <button type="submit">Login</button>
                        </form>
                    </div>



                    <div class="overlay-container">
                        <div class="overlay">
                            <div style="background-color: black" class="overlay-panel overlay-left">
                                <h1
                                    style="font-weight: bold;
                        margin: 0;background-color: black">
                                    Bentornato!</h1>
                                <p
                                    style="	font-size: 14px;
                                font-weight: 100;
                                line-height: 20px;
                                letter-spacing: 0.5px;
                                margin: 20px 0 30px;background-color: black">
                                    Effettua il login con i tuoi dati.</p>
                                <button class="ghost" id="signIn">Login</button>
                            </div>
                            <div style="background-color: black" class="overlay-panel overlay-right">
                                <div
                                    style="display: flex; justify-content: end;align-items: start; position: absolute; right: 10px;top:-5px;background-color: rgba(255, 255, 255, 0);height: auto;">
                                    <a><i onclick="CloseLogin()" style="background-color: rgb(0, 0, 0)"
                                            id="CloseLogin2" class="bi bi-x-circle"></i></a>
                                </div>
                                <h1
                                    style="font-weight: bold;
                        margin: 0;background-color: black">
                                    Ciao!</h1>
                                <p
                                    style="	font-size: 14px;
                            font-weight: 100;
                            line-height: 20px;
                            letter-spacing: 0.5px;
                        margin: 20px 0 30px;background-color: black">
                                    Inserisci i tuoi dati e inizia il viaggio con noi.</p>
                                <button class="ghost" id="signUp">Crea account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Fine Registrazione PopUp -->
        <div class="menu">
            <a href="<?php echo e(route('homepage')); ?>">HOME</a>
            <a href="<?php echo e(route('catalogo')); ?>">SHOP</a>
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('announcements.create')); ?>">INSERISCI ARTICOLO</a>

                <?php if(Auth::user()->is_revisor): ?>
                
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success btn-sm position-relative"
                    aria-current="page" href="<?php echo e(route('revisor.index')); ?>">
                    Zona revisore
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?php echo e(App\Models\Announcement::toBeRevisionedCount()); ?>

                        <span class="visually-hidden">unread message</span>
                    </span>
                </a>
            </li>
            
            <?php endif; ?>
            <?php endif; ?>
        </div>
        
        <div class="logo">
            <h1>PRESTO</h1>
            <p>ESPLORA. SCEGLI. ACQUISTA. TUTTO IN UN SOLO POSTO.</p>
        </div>
        <div class="login">
            <div class="lingua">
                <div class="dropdown mt-0  ">
                    <a class="dropdown-toggle lang-cust" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><span class=" h4 bi bi-globe-americas"></span></a>
                    <ul style="background-color: rgba(255, 255, 255, 0); width: 22px; " class=" dropdown-menu ">
                        <div class="dropdown-item text-center">
                            <img style="margin-right: 5px;" src="<?php echo e(Storage::url('/nav/Ita.png')); ?>" width="37px"
                                alt="">

                        </div>
                        <div class="dropdown-item text-center">
                            <img style="margin-right: 5px;" src="<?php echo e(Storage::url('/nav/Bandiera.png')); ?>"
                                width="37px" alt="">

                        </div>

                    </ul>
                </div>

            </div>
            <?php if(auth()->guard()->guest()): ?>

                <div onclick="OpenLogin()" style="display: flex;align-items: center;">

                    <i style="padding-right:10px "
                        class="bi bi-person-fill"> </i>
                        <a  class="loginA" >ACCEDI</a>


                </div>

            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>

                <div>
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="boxLog">
                            <p style="margin: 0px; padding-right: 10px;font-family: CormorantGaramond;font-size: 20px;">
                                Bentornato: <strong><?php echo e(Auth::user()->name); ?></strong></p>
                            <button type="submit" style="background-color:rgba(255, 255, 255, 0); padding-top: 5px; "> <i
                                    class="bi bi-box-arrow-left"></i></button>
                        </div>

                    </form>
                </div>

            <?php endif; ?>


        </div>
    </nav>
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
<?php /**PATH C:\Users\Lorek\OneDrive\Desktop\Aulab.project\Progetto_Presto_Ambiversi\resources\views/components/navbar.blade.php ENDPATH**/ ?>