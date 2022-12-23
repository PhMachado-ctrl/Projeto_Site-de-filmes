<?php include "cabecalho.php" ?>

<?php
  $filme1 = [
    "titulo" => "Vingadores", 
    "nota" => 8.6,
    "sinopse" => "",
    "poster" => ""
  ];
?>

<body>
<nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>Crorocine</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab disabled"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>



  <div class="row">
    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>  8,3
          </p>
          <span class="card-title"><?php echo $filme1["titulo"]?></span>
          
          <p>Após os eventos devastadores de "Vingadores: Guerra Infinita", o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.</p>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.themoviedb.org/t/p/w300/4aLjHD7sfMzEXin4qa7v6AJYo9R.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>  9,7
          </p>
          <span class="card-title">Top Gun: Maverick</span>

          <p>Depois de mais de 30 anos de serviço como um dos principais aviadores da Marinha, Pete "Maverick" Mitchell está de volta, rompendo os limites como um piloto de testes corajoso. No mundo contemporâneo das guerras tecnológicas, Maverick enfrenta drones e prova que o fator humano ainda é essencial.</p>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.themoviedb.org/t/p/original/9z256FFPDsL7kSVJ9oyLELaN1ph.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>  6,8
          </p>
          <span class="card-title">Adão Negro </span>
          
          <p>Quase 5.000 anos depois de ter sido concedido com os poderes onipotentes dos deuses egípcios - e de ter sido preso, - Adão Negro se ergue de seu túmulo, pronto para trazer sua justiça ao mundo moderno.</p>
        </div>
      </div>
    </div>

    <div class="col s3">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.themoviedb.org/t/p/original/tH64gzAHDFg7EFcgfkkZyHdGM5P.jpg">
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
        </div>
        <div class="card-content">
          <p class="valign-wrapper">
            <i class="material-icons amber-text">star</i>  9,0
          </p>
          <span class="card-title">Mad Max: Estrada da Fúria </span>
          
          <p>Em um mundo apocalíptico, Max Rockatansky acredita que a melhor forma de sobreviver é não depender de ninguém. Porém, após ser capturado pelo tirano Immortan Joe e seus rebeldes, Max se vê no meio de uma guerra mortal, iniciada pela imperatriz Furiosa que tenta salvar um grupo de garotas. Também tentando fugir, Max aceita ajudar Furiosa. Dessa vez, o tirano Joe está ainda mais implacável pois teve algo insubstituível roubado.</p>
        </div>
      </div>
    </div>


  </div>

  
    
</body>
</html>