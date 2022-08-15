<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type='text/javascript' src='x3dom/x3dom.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <script type='text/javascript' src='http://www.x3dom.org/release/x3dom.js'></script>
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/release/x3dom.css'></link>
		
    </head>
<body>
	
    <!-- Navigation -->
    <?php include_once('./view/header.php') ?>
        
   

    <!--- Image Slider -->

    <div class="carousel-inner">
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>

            </ul>

            <div class="carousel-item active">
                <img src="home.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">COCA COLA</h1>
                    <h3>Free Gift Over £50</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">About Us</button>
                    <button type="button" class="btn btn-primary btn-lg">Products</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="ad.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2">things go better with Coke</h1>
                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
                </div>
            </div>

        </div>
    </div>






    <!--- Welcome Section -->

    <div class="container-fluid" padding>
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">How Will You Celebrate?</h1>
            </div>
            <hr>
            <div class="col-12">
                <p class="lead">Coke, Fanta and Sprite are bestsellers right now! We have something for everyone!</p>
            </div>
        </div>
		
    </div>
    <!--- Three Column Section -->
	<div class="container-fluid">
		<?php ini_set('memory_limit', '1024M'); ?>
	
		<?php include_once('./view/x3d_coke.php') ?>

		<?php include_once('./view/x3d_sprite.php') ?>

		<?php include_once('./view/x3d_fanta.php') ?>
    
		<hr class="my-4">
    </div>
    <!--- Jumbotron -->



    <div class="container-fluid">

        <div class="row jumbotron">
            <div class="col-xs-12 col-sm12 col-md-9 col-lg-9 col-xl-10">
                <p class="lead">Models were made in Blender then exported to x3d</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="view/swap.php"><button type="button" class="btn btn-secondary btn-lg">Shop By Drink Type</button></a>
            </div>
        </div>
    </div>

    <!---
    <script src="three.min.js"></script>
    <script src="GLTFLoader.js"></script>
    <script>
        let scene, camera, renderer;

        function init() {
            scene = new THREE.Scene();
            scene.background = new THREE.color(0xdddddd);
            camera = new THREE.PerspectiveCamera(40,window.innerWidth/window.innerHeight,1,5000);
            hlight = new THREE.AmbientLight (0x404040,100);
            scene.add(hlight);
            renderer = new THREE.WebGLRenderer({antialias:true});
            renderer.setSize(window.innerWidth,window.innerHeight);
            document.body.appendChild(renderer.domElement);

            let loader = new THREE.GLTFLoader();
            loader.load('fanta.glb', function(gltf){
                scene.add(gltf.scene);
                renderer.render(scene, camera);
            });
        }
        init();
    </script>
    -->
    <!--- Cards -->
    <div class="row test-center padding">

        <div class="card container-fluid padding text-black bg-info mb-3" style="max-width: 21rem;">
            <div class="card-header">Refer a Friend</div>
            <div class="card-body">
                <p>Refer a friend now and get £5 off your next purchase</p>
                <div class="fade show active" id="nav-home" style="padding-top: 5%; padding-bottom: 2%; padding-inline: 25%; " role="tabpanel" aria-labelledby="nav-home-tab"><a href="#" class="btn btn-primary">Refer Now</a></div>
            </div>
        </div>

        <div class="card container-fluid padding text-black bg-info mb-3" style="max-width: 21rem;">
            <div class="card-header">Whats your Favourite?</div>
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs text-black" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active text-black" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Coke</a>
                        <a class="nav-item nav-link text-black" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sprite</a>
                        <a class="nav-item nav-link text-black" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fanta</a>
                    </div>
                </nav>
                <div class="nav justify-content-center" id="nav-tabContent">
                    <div class="text-center paddingfade show active" id="nav-home" style="padding-top: 5%; padding-bottom: 2%; padding-inline: 25%;  " role="tabpanel" aria-labelledby="nav-home-tab"><a href="#" class="btn btn-primary">Explore Coke</a></div>
                    <div class="text-center padding fade" id="nav-profile" style="padding-top: 5%; padding-bottom: 2%; padding-inline: 25%; position: absolute; " role="tabpanel" aria-labelledby="nav-profile-tab"><a href="#" class="btn btn-primary">Enjoy Sprite</a></div>
                    <div class="text-center padding fade" id="nav-contact" style="padding-top: 5%; padding-bottom: 2%; padding-inline: 25%; position: absolute; " role="tabpanel" aria-labelledby="nav-contact-tab"><a href="#" class="btn btn-primary">Discover Fanta</a></div>
                </div>


            </div>
        </div>

        <div class="card container-fluid padding text-black bg-info mb-3" style="max-width: 21rem;">
            <div class="card-header">Register for an Account</div>
            <div class="card-body">
                <p>Register with us and recieve exclusive offers</p>
                <div class="fade show active" id="nav-home" style="padding-top: 5%; padding-bottom: 2%; padding-inline: 25%; " role="tabpanel" aria-labelledby="nav-home-tab"><a href="#" class="btn btn-primary">Join now!</a></div>
            </div>
        </div>
    </div>


    <!--- Connect -->

    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Connect</h2>
            </div>
            <div class="col-12 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!--- Footer -->

    <footer>
       <?php include_once('./view/footer.php') ?>
    </footer>


</body>
</html>


