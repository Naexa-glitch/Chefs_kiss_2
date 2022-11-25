!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

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
<!--HEADER START-->
    <header>

        <nav class="navbar-left align-menu mt-5 d-flex gap-5 ">

            <div class="logo">
            <img class="mr-auto pr-5" src="./imgs/logo.png" alt="Logo">
            </div>

            <ul class="align-menu gap-5 mt-4 ms-5">

                <li class="top-nav-item "><a class="top-nav-link" href="home.html" aria-disabled="true">Home</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="categories.html">Categories</a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="home.html">About </a></li>
                <li class="top-nav-item"><a class="top-nav-link" href="login.html">Login</a></li>
                <li class="top-nav-item"> <p class="rectangle mt-4 ms-5">Search</p> </li>
                <li class="top-nav-item"> <img class="mt-2 me-5" src="./imgs/lupa.png" alt="lupa"></li>

            </ul>
        </nav>
	</header>
<!--HEADER END-->


<div class="wrapper">
    <h1 class="title-xlg text-orange mt-5 mb-5 text-center">WELCOME </h1>
    <form class="form-signin">
            <input type="text" class="form-control mb-3" name="fullname" placeholder="Full name" required="" autofocus="" />
            <input type="text" class="form-control mb-3" name="email" placeholder="Email Address" required="" />
            <input type="text" class="form-control mb-3" name="username" placeholder="Username" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
            <input type="password" class="form-control" name="password" placeholder="Confirm Password" required="" />

            <div class="d-grid d-md-block">
        <button class="btn btn-danger" type="submit">Sign up</button>
 
            </div>
            <div class="mt-2">
        <a href="#" class="text-gray mt-2">Already have an account? <span> Login </span></a>
            </div>
    </form>
</div>

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