    <?php include "cabecalho.php" ?>
    <body>
        <nav class="nav-extended purple lighten-3">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right">
                    <li><a href="galeria.php">Galeria</a></li>
                    <li><a href="badges.html">Cadastrar</a></li>
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
            </div>
        </nav>

        <div class="row">
            <div class="col s6 offset-s3">
                <div class="card ">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>
                        <!-- Input titulo -->    
                        <div class="row">
                            <div class="input-field col s12">
                                <input  id="titulo" type="text" class="validate"require>
                                <label for="titulo">Titulo do Filme</label>                       
                            </div>
                        </div>   
                        
                        <!-- Input sinopse --> 
                        <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Input nota --> 
                    <div class="row">
                            <div class="input-field col s4">
                                <input  id="nota" type="number" step=".1" min=0 max=10 class="validate"  require>
                                <label for="nota">Nota</label>                       
                            </div>
                    </div>   


                    <!-- Input capa -->
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn purple lighten-2 black-text">
                                <span>POSTER</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn purple">Confirmar</a>
                </div>
            </div>
        </div>
    
    </body>
</html>