
<div class="container my-5">
  <h1 class="text-center mb-4">Detalhes do Filme</h1>
  <div class="row align-items-center">
    <!-- Coluna de Detalhes -->
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <p><strong>Nome:</strong> <span id="movie-name"></span></p>
          <p><strong>Nº Episódio:</strong> <span id="movie-episode"></span></p>
          <p><strong>Sinopse:</strong> <span id="movie-synopsis"></span></p>
          <p><strong>Data de Lançamento:</strong> <span id="movie-release-date"></span></p>
          <p><strong>Diretor(a):</strong> <span id="movie-director"></span></p>
          <p><strong>Produtor(es):</strong> <span id="movie-producers"></span></p>
          <p><strong>Personagens:</strong> <span id="movie-characters"></span></p>
          <p><strong>Idade do Filme:</strong> <span id="movie-age"></span></p>
        </div>
      </div>
    </div>
    <!-- Coluna da Imagem -->
    <div class="col-md-4 text-center">
      <img 
        src="<?php echo $_GET['img'] ?>" 
        class="img-fluid rounded" 
        style="max-height: 400px; object-fit: cover;"
      >
    </div>
  </div>
</div>



<script type="text/javascript">
    $(document).ready(function () {
       var url = window.location.href;
    var id = url.match(/[?&]id=([^&]+)/); 
   	console.log(id);



	});
</script>












<!-- 
<div class="container">
  <div class="row">
    <div class="col-sm">
       <div class="container my-5">
    <h1 class="text-center mb-4">Detalhes do Filme</h1>
    <div class="card">
      <div class="card-body">
        <p><strong>Nome:</strong> <span id="movie-name"></span></p>
        <p><strong>Nº Episódio:</strong> <span id="movie-episode"></span></p>
        <p><strong>Sinopse:</strong> <span id="movie-synopsis"></span></p>
        <p><strong>Data de Lançamento:</strong> <span id="movie-release-date"></span></p>
        <p><strong>Diretor(a):</strong> <span id="movie-director"></span></p>
        <p><strong>Produtor(es):</strong> <span id="movie-producers"></span></p>
        <p><strong>Personagens:</strong> <span id="movie-characters"></span></p>
        <p><strong>Idade do Filme:</strong> <span id="movie-age"></span></p>
      </div>
    </div>
</div>

 </div>

</div>
     <div class="row">
    <div class="col-sm">
    </div>
 
  </div>
</div>

 -->
