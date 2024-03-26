<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo e($title ?? config('app.name')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js', 'resources/js/java.js', 'resources/css/style.css']); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body>

    <?php echo e($slot); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>



  <script>


const categories = [
    { name: "Gioielli", image: "<?php echo e(Storage::url('/Imagini/Gioielli.jpg')); ?>", gradient: "linear-gradient(90deg, rgba(177, 137, 85, 1) 10%, rgba(180, 161, 138, 1) 100%)" },
    { name: "Donna", image: "<?php echo e(Storage::url('/Imagini/Donna.jpg')); ?>", gradient: "linear-gradient(90deg, rgba(168,101,88,1) 10%, rgba(194,136,124,1) 100%)" },
    { name: "Tech", image: "<?php echo e(Storage::url('/Imagini/Tech.jpg')); ?>", gradient: "linear-gradient(90deg, rgba(24,23,23,1) 10%, rgba(64,64,64,1) 100%)" },
    { name: "Uomo", image: "<?php echo e(Storage::url('/Imagini/Uomo.jpg')); ?>", gradient: "linear-gradient(to right, #141e30, #243b55)" },
    { name: "Giochi", image: "<?php echo e(Storage::url('/Imagini/Giochi.jpg')); ?>", gradient: "linear-gradient(to right, #200122, #6f0000)" },
    { name: "Sport", image: "<?php echo e(Storage::url('/Imagini/Sport.jpg')); ?>", gradient: "linear-gradient(to right, #093028, #237a57)" },
    { name: "Auto", image: "<?php echo e(Storage::url('/Imagini/Auto.jpg')); ?>", gradient: "linear-gradient(90deg, rgba(63,23,23,1) 50%, rgba(108,62,62,1) 100%)" },
    { name: "Orologio", image: "<?php echo e(Storage::url('/Imagini/Orologio.jpg')); ?>", gradient: "linear-gradient(to right, #1d4350, #a43931)" },
    { name: "Film", image: "<?php echo e(Storage::url('/Imagini/Film.jpg')); ?>", gradient: "linear-gradient(to right, #cb2d3e, #ef473a)" },
    { name: "Musica", image: "<?php echo e(Storage::url('/Imagini/Musica.jpg')); ?>", gradient: "linear-gradient(to right, #403a3e, #be5869)" }
];


  </script>
    
</body>

</html>
<?php /**PATH C:\Users\Lorek\OneDrive\Desktop\Aulab.project\Progetto_Presto_Ambiversi\resources\views/components/layout.blade.php ENDPATH**/ ?>