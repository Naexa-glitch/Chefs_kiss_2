<?php

$status = true; //boolean
$name = "string"; //string
$val = 1234; //number 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Kiss</title>

    <!--Google fonts Source sans pro-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&family=Source+Sans+Pro&display=swap" rel="stylesheet">

    <!--Google fonts Source serif pro-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&family=Source+Sans+Pro&family=Source+Serif+Pro:wght@200;400&display=swap" rel="stylesheet">

    <!--Bootstrap-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    <!--css-->

    <link rel="stylesheet" href="./css/chefskiss.css">

</head>
<body class="container">

<form action="response.php" method="post">

    <header>

        <nav id="main-nav" class="navbar-left align-menu mt-5 gap-5 ">

            <div class="logo">  
            <img class="mr-auto pr-5" src="./imgs/logo.png" alt="Logo">
            </div>

            <ul class="align-menu gap-5 mt-4 ms-5">

                <li class="top-nav-item "><a class="top-nav-select" href="home.php" aria-disabled="true">Home</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="categories.php">Categories</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="home.php">About </a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="login.php">Login</a></li>
                <li class="top-nav-item"> <p class="rectangle mt-4 ms-5">Search</p> </li>
                <li class="top-nav-item"> <img class="mt-2 me-5" src="./imgs/lupa.png" alt="lupa"></li>

            </ul>
        </nav>
	</header>
        

		<section class="row">
			<section class="col-md pt-5 mt-5">
				<h1 class="title-xlg ms-4 mt-5 text-orange">WELCOME!</h1>
				<p class="text-content text-center opacity-60 mt-5 mb-5 px-5 me-5">Here you'll find any possible recipe to your heart contents, from desserts, to dinners and even apperitives. If you want to keep a recipe just sign up with us and save it in your account so you can see it everytime you want to.</p>
			</section>
			<section class="col-md">
				<img class="img-fluid m-auto mt-5 me-5" src="./imgs/salad.jpg" alt="salad">
			</section>
		</section>
		
		<section class="row">
			<img class="mt-5 mb-5 img-fluid" src="./imgs/linea.png" alt="linea">
		</section>

        <section class="row text-center">

            <section class="inner-bg mt-5 pt-5 pb-5 row">

                <h2 class="title-xlg text-orange text-center mt-5 me-3 mb-5">What's new</h2>

                <section class="container-fluid align-menu mt-1 gap-3 d-flex justify-content-around">
                    <section>
                    <a href="#"><img class="img-fluid m-auto round" src="./imgs/hamburguer.jpg" alt="hamburguer"></a> 
                        <p class="title-rg mt-3 ms-1">The burger steak house but better</p> 
                    </section>
                    <section>
                        <a href="#"><img class="img-fluid m-auto round" src="./imgs/pancake.jpg" alt="pancake"></a>
                        <p class="title-rg mt-3 ms-1">Healthy pancakes to eat delicious, without remorse</p>
    
                    </section>
                    <section>
                        <a href="#"><img class="img-fluid m-auto round" src="./imgs/chicken.jpg" alt="chicken"></a>
                        <p class="title-rg mt-3 ms-1">Chicken wings you won't stop eating</p>
                    </section>
                </section>
            </section>
        </section>

        <section class="inner-bg mt-2 pt-5 pb-5 row">
            <h3 class="title-xlg mb-5 text-orange">Trending</h3>


            <section class="container align-menu mt-1 gap-3 d-flex justify-content-around">
                <section>
                <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/sopa.jpg" alt="Sopa"></a> 
                    <p class="title-md text-gray mt-3 ms-3">Sopa azteca</p> 
                </section>
                <section>
                    <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/burger.jpg" alt="Burger"></a>
                    <p class="title-md text-gray mt-3 ms-3">Burger</p>

                </section>
                <section>
                    <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/omelette.jpg" alt="Omelette"></a>
                    <p class="title-md text-gray mt-3 ms-3">Omelette</p>
                </section>
            </section>

            <section class="container align-menu mt-1 gap-3 d-flex justify-content-around mt-4">
                <section>
                <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/salmon.jpg" alt="Salmon"></a> 
                    <p class="title-md text-gray mt-3 ms-3">Salmon</p> 
                </section>
                <section>
                    <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/pollo-thai.jpg" alt="thai chicken"></a>
                    <p class="title-md text-gray mt-3 ms-3">thai-chicken</p>

                </section>
                <section>
                    <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/pescadoyensalada.jpg" alt="Fish & salad"></a>
                    <p class="title-md text-gray mt-3 ms-3">Fish & salad</p>
                </section>
            </section>

            <section class="container align-menu mt-1 gap-3 d-flex justify-content-around">
                <section>
                <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/macarones.jpg" alt="Macarons"></a> 
                    <p class="title-md text-gray mt-3 ms-3">Macarons</p> 
                </section>
                <section>
                    <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/guisado.jpg" alt="Stew"></a>
                    <p class="title-md text-gray mt-3 ms-3">Stew</p>

                </section>
                <section>
                    <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/bitterballen.jpg" alt="Bitterballen"></a>
                    <p class="title-md text-gray mt-3 ms-3">Bitterballen</p>
                </section>
            </section>

            <section class="container align-menu mt-1 gap-3 d-flex justify-content-around mt-4">
                <section>
                <a href="#"><img class="img-fluid m-auto curved-borders img-column" src="./imgs/steak-meat.jpg" alt="Steak meat"></a> 
                    <p class="title-md text-gray mt-3 ms-3">Steak meat</p> 
                </section>
            </section>


        </section>

        </form>

</body>


<!-- FOOTER START -->
<footer>
    <div class="footer row justify-content-around">
        <div class="contain ">
                <div class="col social mt-5">
            <ul>
                <li><img src="./imgs/facebook.png" width="32" style="width: 32px;"></li>
                <li><img src="./imgs/insta-logo.png" width="32" style="width: 32px;"></li>
                <li><img src="./imgs/youtube.png" width="32" style="width: 32px;"></li>
                <li><h1 class="title-rg text-white mt-4 mb-2">Chef's Kiss© 2022</h1></li>
            </ul>
        </div>
        
        <section class="row justify-content-end">
            <div class="col-4 mt-5">
                <img class="img-fluid" src="./imgs/googleplay.png">
            </div>  
    
            <div class="col-4 mt-5">
                <img class="img-fluid" src="./imgs/appstore.png">
            </div>  
        <div class="clearfix"></div>
        </section>
    </footer>
    <!-- END OF FOOTER -->

</html>