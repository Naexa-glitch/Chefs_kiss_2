<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's kiss</title>


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
    
    <header>

        <nav class="navbar-left align-menu mt-5 gap-5 ">

            <div class="logo">
            <img class="mr-auto pr-5" src="./imgs/logo.png" alt="Logo">
            </div>

            <ul class="align-menu gap-5 mt-4 ms-5">

                <li class="top-nav-item "><a class="top-nav-link" href="home.html" aria-disabled="true">Home</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="categories.html">Categories</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="home.html">About</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="login.html">Login</a></li>
                <li class="top-nav-item"> <p class="rectangle mt-4 ms-5">Search</p> </li>
                <li class="top-nav-item"> <img class="mt-2 me-5" src="./imgs/lupa.png" alt="lupa"></li>

            </ul>

        </nav>

	</header>


        <div class="align-right mt-3">

            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>

        </div>    

        <div class="mt-5 text-center">

            <img class="img-fluid" src="./imgs/user.png" alt="user">

            <h1 class="title-xxlg mt-3 text-orange">User</h1>

        </div>
    
        <section class="inner-bg mt-5 pt-5 pb-5 row">
            <h3 class="title-xlg text-orange">Created recipes</h3>

            <a href="#" class=" top-nav-more">
                <p class="align-right me-4 text-gray">See more</p>
            </a>

            <section class="container align-menu mt-1 gap-5">
                <section>
                <a href="#"><img class="img-fluid m-auto curved-borders" src="./imgs/mac.jpg" alt="Sopa"></a> 
                    <p class="title-md text-gray mt-3 ms-3">Mac and cheese</p> 
                </section>
                <section>
                    <a href="#"><img class="img-fluid m-auto curved-borders" src="./imgs/chicken_pie.jpg" alt="Burger"></a>
                    <p class="title-md text-gray mt-3 ms-3 ">Chicken pie</p>

                </section>
                <section>
                    <a href="#"><img class="m-auto curved-borders img-fluid" src="./imgs/grilled_chicken.jpg" alt="Omelette"></a>
                    <p class="title-md text-gray mt-3 ms-3 opacity-60">Grilled chicken</p>
                </section>
            </section>
        </section>
    

    <section class="inner-bg mt-5 pt-5 pb-5 row">
        <h3 class="title-xlg text-orange">Trending</h3>

        <a href="#" class=" top-nav-more">
            <p class="align-right me-4 text-gray ">See more</p>
        </a>

        <section class="container align-menu mt-1 gap-5">
            <section>
            <a href="#"><img class="img-fluid m-auto curved-borders" src="./imgs/fries.jpg" alt="Sopa"></a> 
                <p class="title-md text-gray mt-3 ms-3">Fried potatoes</p> 
            </section>
            <section>
                <a href="#"><img class="img-fluid m-auto curved-borders" src="./imgs/fetuccine.jpg" alt="Burger"></a>
                <p class="title-md text-gray mt-3 ms-3 ">Fetuccine</p>

            </section>
            <section>
                <a href="#"><img class="img-fluid m-auto curved-borders" src="./imgs/tomato_soup.jpg" alt="Omelette"></a>
                <p class="title-md text-gray mt-3 ms-3 opacity-60">Tomato soup</p>
            </section>
        </section>
    </section>

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
    
</body>
</html>