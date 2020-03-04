<?php 

    $gender = $firstname = $lastname = $email =$country =$city =$subject = $message = "";
    $genderError = $firstnameError = $lastnameError = $emailError =$countryError =$cityError =$subjectError = $messageError = "";
    $isSucces = false;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = verifyInput($_POST["firstname"]);
        $lastname = verifyInput($_POST["lastname"]);
        $email = verifyInput($_POST["email"]);
        $city = verifyInput($_POST["city"]);
        $message= verifyInput($_POST["message"]);
        $isSucces = true;
        
        // if($gender != "Madame" || $gender != "Monsieur")
        // {
        //   $genderError = "T'es binaire ? ";
        // }
        if (!isString($lastname))
        {
          $lastnameError = "Entre ton nom";
          $isSucces = false;
        }
        if (!isString($firstname))
        {
          $firstnameError = "Entre ton prénom";
          $isSucces = false;
        }
        
        if(!isEmail($email))
        {
          $emailError = "Email invalide";
          $isSucces = false;
        }
        if (!isString($city))
        {
          $cityError = "Dans quelle ville habites-tu?";
          $isSucces = false;
        }
        if (!isString($message))
        {
          $messageError = "N'oublie pas d'entrer ton message";
          $isSucces = false;
        }
        if ($isSucces)
        {
          //envoie email
        }
      



    }
    
    function isString($var){
      return filter_var($var,FILTER_SANITIZE_STRING);
    }
  
    function isEmail($var){
      $var = filter_var($var,FILTER_SANITIZE_EMAIL);
      $var =  filter_var($var,FILTER_VALIDATE_EMAIL);
      return $var;
    }
    
    function verifyInput($var)
    {
      $var = trim ($var);
      $var = stripslashes($var);
      $var = strip_tags($var);
      $var = htmlspecialchars($var);
      return $var;
    }

?>




<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/php/form.php">
  <link rel="stylesheet" href="assets/css/webfonts/bellota_regular_macroman/stylesheet.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script defer src="assets/js/script.js"></script>

  <title>Hackers Poulette</title>
</head>

<!-- Body -->

<body>
<div class="animation-area">
      <ul class="box-area">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Hackers Poulette</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

    
  <!--Jumbotron-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <img src="assets/img/logopoulette.png" alt="logo">
      <p class="lead">Enseigner, apprendre et créer avec Raspberry Pi.</p>
    </div>
  </div>
  
  <!-- section articles -->
<main class="container product ">
<div class="row h-50 justify-content-md-center justify-content-md-between mb-4">
<article class="col-md-3 ">
<div class="card mb-4">
<img class="card-img-top"
src="https://www.raspberrypi.org/homepage-9df4b/static/1a8c2dea858d9a09b7382f569582a8c3/052d8/76d43bab-d6e5-479f-a31e-bea771589ed1_uk_white-.jpg"
alt="Card image cap">
<div class="card-body text-center mb-2">
<h5>Raspberry Pi keyboard</h5>
<button>+</button>
</div>
</div>
</article>

  <article class="col-md-3  ">
    <div class="card mb-4">
      <img class="card-img-top"
        src="https://www.raspberrypi.org/homepage-9df4b/static/b74d537a2af374e986f6d3d8dc3640cc/052d8/1b7d602e46d47ed9f540f364bb3fbf1985b10164_red_white-mouse.jpg"
        alt="Card image cap">
      <div class="card-body text-center ">
        <h5>Raspberry Pi mouse</h5>
        <button>+</button>
      </div>
    </div>
  </article>

  <article class="col-md-3  ">
    <div class="card ">
      <img class="card-img-top"
        src="https://www.raspberrypi.org/homepage-9df4b/static/70a9c24e177931c573bbd0ffbe83285d/052d8/fee0c9fc6b839b879f64dc6e645d1b7b6b4b643a_770a9314-1.jpg"
        alt="Card image cap">
      <div class="card-body text-center ">
        <h5>Raspberry Pi TV HAT</h5>
        <button>+</button>
      </div>
    </div>
  </article>

</div>
<div class=" row h-50 justify-content-md-center justify-content-md-between">
  <article class="col-md-3  ">
    <div class="card mb-4">
      <img class="card-img-top"
        src="https://www.raspberrypi.org/homepage-9df4b/static/8875c8b45499606103f45bb94a9d1902/052d8/94e326f3-1b92-450c-9fd5-23183797d30c_desktop%2Bkit%2Bcontents.jpg"
        alt="Card image cap">
      <div class="card-body text-center ">
        <h5>Raspberry Camera Module V2</h5>
        <button>+</button>
      </div>
    </div>
  </article>
  <article class="col-md-3   ">
    <div class="card mb-4">
      <img class="card-img-top"
        src="https://www.raspberrypi.org/homepage-9df4b/static/1be6f5c5c956bd6b0f2fe844ac9a1a29/052d8/b40e688ee64045b006cfe7875da3c42eb2d4bfe1_3a-1-1633x1080.jpg"
        alt="Card image cap">
      <div class="card-body text-center ">
        <h5>Raspberry Pi 3 Model A+</h5>
        <button>+</button>
      </div>
    </div>
  </article>
  <article class="col-md-3   ">
    <div class="card ">
      <img class="card-img-top"
        src="https://www.raspberrypi.org/homepage-9df4b/static/b1d5a4a2c633594b831a9c5317686208/052d8/3badd41e-0642-4ae9-b2a8-fdc89c866e5f_MAG22%2B3rd%2B(open).jpg"
        alt="Card image cap">
      <div class="card-body text-center ">
        <h5>Official Beginner's Guide</h5>
        <button>+</button>
      </div>
    </div>
  </article>
</div>
</main>

  <!-- formulaire   -->
  <form class="container" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="form-group col-md-12 text-center">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender1" value="Madame" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Madame"  ) echo "checked='checked'"; ?>>
        <label class="form-check-label" for="gender1">Madame</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="gender2" value="Monsieur" <?php if(isset($_POST['gender']) && $_POST['gender'] == "Monsieur") echo "checked='checked'"; ?>>
        <label class="form-check-label" for="gender2">Monsieur</label>
      </div>
    </div>
    <p class="text-center"><?php echo $genderError?></p>
    


    <div class="form-row mt-4">
      <div class="form-group col-md-6">
        <label for="inputNom">Nom</label>
        <input type="text" name="lastname" class="form-control" id="inputNom" value="<?php echo $lastname ;?>">
        <p><?php echo $lastnameError;?></p>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPrenom">Prénom</label>
        <input type="text" class="form-control" name="firstname" id="inputPrenom" value="<?php echo $firstname ;?>">
        <p><?php echo $firstnameError;?></p>
      </div>
    </div>

    <div class="row">
      <div class="form-group mt-4 col-md-12">
        <label for="inputEmail">Email</label>
        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="email@hotmail.com" value="<?php echo $email ;?>">
        <p><?php echo $emailError;?></p>
      </div>
    </div>

    <div class="form-row  ">
      <div class="form-group col-md-6 mt-4">
        <label for="inputPays">Pays</label>
        <select name="country" id="inputPays" class="form-control"  value="<?php echo $country ?>">
          <optgroup label="Europe">
            <option  <?php if(isset($_POST['country']) && $_POST['country'] == "Belgique") echo "selected='selected'"; ?> >Belgique</option>
            <option <?php if(isset($_POST['country']) && $_POST['country'] == "France") echo "selected='selected'"; ?> >France</option>
            <option <?php if(isset($_POST['country']) && $_POST['country'] == "Suisse") echo "selected='selected'"; ?> >Suisse</option>
            <option <?php if(isset($_POST['country']) && $_POST['country'] == "Luxembourg") echo "selected='selected'"; ?> >Luxembourg</option>
          </optgroup>
        </select>
      </div>

      <div class="form-group col-md-6 mt-4">
        <label for="inputCity">City</label>
        <input type="text" name ="city" class="form-control" id="inputCity" value="<?php echo $city ?>">
        <p><?php echo $cityError?></p>
      </div>
    </div>

    <div class="form-row  ">
      <div class="form-group col-md-12 py-0">
        <label for="subject">Sujet</label>
        <select name ="subject" id="subject" class="form-control" value="<?php echo $subject ?>">
          <optgroup label="Technique">
            <option value="reclamation">Réclamation</option>
            <option value="remboursement">Remboursement</option>
            <option value="technique-autres">Autres ...</option>
          </optgroup>
          <optgroup label="Achat">
            <option value="lieu-vente">Lieu de vente</option>
            <option value="transport">Transport</option>
            <option value="achat-autres">Autres ...</option>
          </optgroup>
        </select>
      </div>
    </div>


    <div class="form-group col-md-12 mt-4 p-0">
      <div class="form-group">
        <label for="message">Votre Message:</label>
        <textarea class="form-control" style="height: 200px;" rows="14" id="message" placeholder="Votre texte ici ..."
          name="message"  ><?php echo $message ?></textarea>
      </div>
      <p><?php echo $messageError?></p>
    </div>
    <input type="submit" class="btn btn-primary col-2 text-center pull-right" value="Envoyer">

    <p style="display:<?php if( $isSucces){echo "block";}else{echo"none";}?>">Votre message à bien été envoyé</p>
  </form>

  <!-- footer  -->
  <footer class="container text-center ">
    <div class="social-buttons">
      <a href="#"><i class="fa fa-facebook-f fa-3x"></i></a>
      <a href="#"><i class="fa fa-twitter fa-3x"></i></a>
      <a href="#"><i class="fa fa-envelope fa-3x"></i></a>
      <a href="#"><i class="fa fa-github fa-3x"></i></a>
      <a href="#"><i class="fa fa-linkedin fa-3x"></i></a>
      <a href="#"><i class="fa fa-google-plus fa-3x"></i></a>
    </div>
    </div>
  </footer>


</body>

</html>