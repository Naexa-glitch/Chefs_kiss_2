<?php

    /*namespace Medoo;
    require 'Medoo.php';

    $database = new Medoo([
        // [required]
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'recipes',
        'username' => 'root',
        'password' => ''
    ]);*/

    require 'database.php';
    // array -> $items = [];
    if(isset($_POST)){
        //var_dump($_POST);
        $database->insert("tb_recipes", [
            "recipe_name" => $_POST["recipe"],
            "id_recipe_category" => $_POST["category"],
            "recipe_prep_time" => $_POST["prep time"],
            "recipe_cook_time" => $_POST["cook time"],
            "recipe_total_time" => $_POST["total time"],
            "recipe_yields" => $_POST["yields"],
            "id_recipe_complex" => $_POST["complex"],
            "is_featured" => $_POST["featured"],
            "recipe_description" => $_POST["description"],
            "recipe_ingredients" => $_POST["ingredients"],
            "recipe_img" => "recipe-placeholder.png"
        ]);

        header("location: recipes.php");
    }

?>

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
    
        <!--animations-->
    
        <link rel="stylesheet" href="./css/main.css">

</head>
<body class="container">

    <header>

        <nav id="main-nav" class="mobile-offcanvas navbar-left align-menu mt-5 gap-5 ">

            <div class="logo">
            <img class="mr-auto pr-5" src="./imgs/logo.png" alt="Logo">
            </div>

            <div class=""></div>

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

    <section class="row">
        <h1 class="title-xlg mt-5 ms-4 text-center text-orange">RECIPE INFO</h1>
        <section class="col-md pt-5 ">
            
            <img class="m-auto me-5 img-fluid" src="./imgs/placeholder.png" alt="placeholder">
            
        </section>
        <section class="col-md mt-5">

            <p for="namerecipe" class="title-sm">Name</p>
            <input id="namerecipe" type="text" class="rectangle-add" name="namerecipe"  required="" autofocus="" />
            <p class="mt-4 title-sm">Cooking time</p>
            <input type="text" class="rectangle-add" name="cooking time" required="" />
            <p class="mt-4 title-sm">Portions</p>
            <input type="text" class="rectangle-add" name="portions" required="" />
            <p class="mt-4 title-sm">Category</p>
            <input type="text" class="rectangle-add" name="category" required="" />
        </section>

        <section class="col-md mt-5">

            <p class="title-sm">Preparation time</p>
            <input type="text" class="rectangle-add" name="preparation time"  required="" autofocus="" />
            <p class="mt-4 title-sm">Total time</p>
            <input type="text" class="rectangle-add" name="total time" required="" />
            <p class="mt-4 title-sm">Complexity</p>
            <input type="text" class="rectangle-add" name="complexity" required="" />
            <p class="mt-4 title-sm">Date</p>
            <input type="text" class="rectangle-add" name="date" required="" />
    
        </section>
    </section>

    <section class="row mb-4">

        <section class="col-md mt-5">

            <p class="title-sm">Name</p>
            <input type="text" class="rectangle-add-big" name="name recipe"  required="" autofocus="" />
            <p class="mt-4 title-sm">Cooking time</p>
            <input type="text" class="rectangle-add-big" name="cooking time" required="" />
        
        </section>

        <section class="col-md mt-5 mr-5">

            <p class="title-sm">Preparation time</p>
            <input type="text" class="rectangle-add-big" name="preparation time"  required="" autofocus="" />
            <p class="mt-4 title-sm">Total time</p>
            <input type="text" class="rectangle-add-big" name="total time" required="" />
        
        </section>

    </section>

    <section class="row mb-5">
        <label class="checkbox">
            <input type="checkbox" value="Highlighted" id="Highlighted" name="Highlighted"> Highlighted
        </label>
    </section>
        <section class="col-md">
            <button class="btn btn-danger btn-lg btn-block" type="submit"> Submit</button>
        </section>
    

            <footer>
                <div class="footer row justify-content-around">
                    <div class="container">
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

                </div>

            </footer>
                <!-- END OF FOOTER -->
    
</body>
</html>