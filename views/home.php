

   <div class="container mt-5">
        <div class="row g-4" id="cards-container">
            <!-- Os cards serão gerados dinamicamente aqui -->
        </div>
    </div>

    <script>
        $(document).ready(function () {
        $.ajax({
        url: "http://localhost/filmes/api/buscar_filme", 
        dataType: "json",
        type: 'GET',
        success: function (response) {
               let img = '';
               let dt = response['results'];
               dt.forEach(function(filme){
                filme['fields']['title']
                let url_filme = filme['fields']['url'].match(/\/(\d+)$/);
                let title = filme['fields']['title'];
                let release_date = filme['fields']['release_date'].substring(0, 4); 
               
                if(title == 'A New Hope'){
                  img = 'https://m.media-amazon.com/images/S/pv-target-images/4a48991096eef46e47ecb17a0a677c46d7d7607aedaec7b67447645bee668816.jpg';
                }else if(title == 'The Empire Strikes Back'){
                  img = 'https://play-lh.googleusercontent.com/CVjXDRl_cWclSbas_w3w3JNkNF8dGxhO7intuVq44t1Kho6CTz-l9r0RIBv69de0IjKK';
                }else if(title=='Return of the Jedi'){
                  img='https://upload.wikimedia.org/wikipedia/pt/thumb/b/b2/ReturnOfTheJediPoster1983.jpg/250px-ReturnOfTheJediPoster1983.jpg';
                }else if(title == 'The Phantom Menace'){
                  img = 'https://lumiere-a.akamaihd.net/v1/images/image_33685209.jpeg?region=0,0,540,810';
                }else if(title == 'Attack of the Clones'){
                  img='https://upload.wikimedia.org/wikipedia/pt/6/63/Star_Wars_The_Clone_Wars.jpg';
                }else{
                 img='https://upload.wikimedia.org/wikipedia/pt/5/58/Star_Wars_Epis%C3%B3dio_III_A_Vingan%C3%A7a_dos_Sith.jpg';
                }

                const card = `
                    <div class="col-md-4">
                    <div class='image-container'><a href='detalhes/?id=${url_filme[1]}&&img=${img}'><img src='${img}'></a></div>
                    <h5 class="card-title" >${title}</h5>
                    <p class='date'>${release_date}</p>
                    <button class="btn btn-primary">Detalhes</button>
                    </div>
                                
                `;

                $('#cards-container').append(card);

              });

        },
        error: function (xhr, status, error) {
            console.error("Error:", error); 
        }
        });

             });
    </script>

    <div class="space"></div>

  <footer class="bg-dark text-white text-center py-3">
    <p>© 2025 Catálogo de Filmes. Todos os direitos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
