<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h3 {font-family: "Lato", sans-serif;}
        body, html {
            height: 100%;
            color: #777;
            line-height: 1.8;
        }

        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}
    </style>
</head>
<body>
    <!-- About Us Section -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h3 class="w3-center">ABOUT US</h3>
        <p class="w3-center"><em>Connecting Travelers, Sharing Stories</em></p>
        <p>
            Welcome to Travelly, a platform where your adventures come alive. Whether you're exploring the world or dreaming of your next journey, Travelly empowers you to share your travel stories and connect with fellow explorers. Our mission is to create a vibrant community of travelers who inspire and learn from one another. Share blogs, tips, and locations, and let’s chart the map of discovery together. Travelly is your gateway to a world of endless adventure!
        </p>
        <div class="w3-row">
            <div class="w3-col m6 w3-center w3-padding-large">
                <img src="<?php echo e(asset('images/about_us.jpg')); ?>" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Travelly Team" width="500">
            </div>
            <div class="w3-col m6 w3-padding-large">
                <p>
                    We started this journey with a simple belief: every travel story matters. Whether it's a hidden gem, an iconic destination, or a unique experience, your story can inspire others. Travelly is designed to make sharing easy and engaging. So pack your bags, and let's embark on this journey together.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lisorthman/Downloads/Travelly/resources/views/Pages/about.blade.php ENDPATH**/ ?>