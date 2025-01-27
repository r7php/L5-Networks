

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Filmes</title>
    <link rel="shortcut icon" href="<?php echo BASE_URL?>assets/logo/logo.ico" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

 <script type="text/javascript" src="assets/js/jq.js"></script>

    
</head>

<body data-base-url="<?php echo BASE_URL; ?>">
    <style>
  body{
    background: black;
  }
  .date{
    color: red ;
  }
  .card-title{
    color: white;
    font-weight: 700;
  }
   .image-container {
      overflow: hidden; /* Para evitar que a imagem extrapole o container */
      width: 300px; /* Largura do container */
      height: 400px; /* Altura do container */
      border-radius: 10px; /* Borda arredondada (opcional) */
      transition: all 0.3s ease-in-out; /* Suaviza a transição */
    }

    .image-container img {
      width: 100%; /* Faz a imagem ocupar todo o container */
      height: 100%;
      object-fit: cover; /* Mantém o aspecto da imagem */
      transition: transform 0.3s ease-in-out; /* Suaviza o zoom */
    }

    /* Efeito de zoom ao passar o mouse */
    .image-container:hover img {
      transform: scale(1.2); /* Amplia a imagem em 20% */
    }
    .space{
      height: 100px;
    }
</style>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">PobreFlx</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Filmes</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Series</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
        </ul>
      </div>
    </div>
  </nav>


<?php 
	
	$this->loadViewTemplate($viewName, $viewData);	

?>
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="<?php echo BASE_URL?>assets/js/teste.js" type="text/javascript"></script>
 <script type="text/javascript" src="<?php echo BASE_URL?>assets/js/feedback.js"></script>
 <script type="text/javascript" src="<?php echo BASE_URL?>assets/js/cadastro_feed.js"></script>
 <script type="text/javascript" src="<?php echo BASE_URL?>assets/js/lancarFeed.js"></script>
 

</body>
</html>