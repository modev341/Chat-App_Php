<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Platchat:Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column"> 
  <header class="mb-auto"><br>
    <div>
   <h3 class="float-md-start mb-0"  href="Apropos.php"> PLATCHAT <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
</svg> </h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        <a class="nav-link" href="login.php">Se connecter</a>
        <a class="nav-link" href="signup.php">S'nscrire</a>
         <a class="nav-link" href="Apropos.php">A propos</a>
        
        
       
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Bienvenue sur Platchat </h1><br>
    <p class="lead"> PlatChat est une plateforme de chat en ligne.
      PlatChat offre un moyen simple pour  rester en contact avec vos amis et vos proches.
    </p><br>
    <p class="lead">
      <a href="signup.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">S'inscrire</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50"> 
     <p>
     <a  href="https://www.facebook.com" class="fa fa-facebook"></a>
         <a  href="https://www.twitter.com" class="fa fa-twitter"></a>
         <a   href="https://www.instagram.com" class="fa fa-instagram"></a>
        </p>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
  </body>
</html>