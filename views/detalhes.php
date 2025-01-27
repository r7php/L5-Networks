
<?php 

$tempo_filme = $dados;//calculado no backend


?>


<div class="container my-5">
  
  <div class="row align-items-center" style="float: center;">

    <!-- Coluna de Detalhes -->
    <div class="col-md-8">
      <img 
        src="<?php echo $_GET['img'] ?>" 
        class="img-fluid rounded" 
        style="height: 400px; object-fit: cover; padding: 10px;"
      >
      <div class="card">
        <div class="card-body">
          <p><strong>Lançado à </strong> <span id="movie-release-date"><?php echo $tempo_filme; ?> Anos</span></p>
        </div>
      </div>
    </div>
    <!-- Coluna da Imagem -->
    <div class="col-md-4 text-center">
      
    </div>
  </div>
</div>



<script type="text/javascript">
    $(document).ready(function () {
      let baseUrl = $('body').data('base-url');
      var urlParams = new URLSearchParams(window.location.search);
      var id = urlParams.get('id');
    	
      $.ajax({

        url:baseUrl+"/api/buscarSinopse", 
        dataType: "json",
        method: "POST",
        data: {id:id},

        success: function (response) {
          console.log(response);
          let nome = response['fields']['title'];
          let Sinopse = response['fields']['opening_crawl'];
          let release_date = response['fields']['release_date'];
          let director = response['fields']['director'];
          let Produtor = response['fields']['producer'];
          let dt = response['fields'];
          let elenco = response['fields']['characters'];
          const card = `
                 <p><strong>Filme:</strong> <span id="movie-name">${nome}</span></p>
                  <p><strong>Data de Lançamento:</strong> <span id="movie-release-date">${release_date}</span></p>
                  <p><strong>Diretor(a):</strong> <span id="movie-director">${director}</span></p>
                  <p><strong>Produtor:</strong> <span id="movie-producers">${Produtor}</span></p>
                  <p><strong>Sinopse:</strong> <span id="movie-synopsis">${Sinopse}</span></p>
                `;
                $('.card-body').append(card);
                const cabT = `
                  <p><strong>Elenco:</strong> 
                `;
                $('.card-body').append(cabT);
                elenco.forEach(function(f){
                $.ajax({

                url:baseUrl+"/api/buscarElenco", 
                method: "POST",
                dataType: "json",
                data: {caminho:f},
                success: function (response2) {
                  let elenco = response2['fields']['name'];
                   const card2 = `
                  <span id="movie-characters">${elenco}</span></p>
                  `;
                  $('.card-body').append(card2);
                  },
                    error: function (xhr, status, error) {
                        console.error("Error:", error); 
                    }
                  });
                });

             

                // $('.card-body').append(card2);

             

        },
        error: function (xhr, status, error) {
            console.error("Error:", error); 
        }
        });



	});
</script>







