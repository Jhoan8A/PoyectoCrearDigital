<nav class="navbar navbar-default" >
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><b>Electivas Crear Digital</b></a>
  </div>

  <!-- los links del nav -->
  <div class="collapse navbar-collapse navbar-ex1-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["user_id"])):?>
      
    <?php else:?>
      <li><a href="./resgistromaterias.php">Registrar Materias</a></li>
      <li><a href="./modificarmaterias.php">Modificar Materias</a></li>
      <li><a href="./borrarmaterias.php">Borrar Materias</a></li>
      <li><a href="./php/logout.php">SALIR</a></li>
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>

