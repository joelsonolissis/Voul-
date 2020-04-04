<?php

  require_once("conecta.php");


  $sql = $db->prepare("SELECT * FROM super_mercados");
  $sql->execute();
    $sql1 = $db->prepare("SELECT * FROM categoria");
  $sql1->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Voulá | Painel Administrativo</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat|Noto+Sans|Open+Sans|PT+Sans|PT+Sans+Narrow|Poppins|Quicksand|Raleway|Roboto|Roboto+Mono|Roboto+Slab|Shrikhand|Slabo+27px|Source+Sans+Pro|Tajawal|Titillium+Web|Ubuntu" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="csspainel.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
        <link rel="stylesheet" type="text/css" href="animate.css">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
</head>
<body>
	<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3>Controle // Voulá </h3>
        </h3>
      </div>

      <ul class="list-unstyled components">
        <p>Lista:</p>
        <li class="active">
          <a href="produtos.php">Produtos</a>

        </li>
        <li>
          <a href="#menu">Pedidos</a>


        </li>
        <li>
          <a href="#menu">Reclamações</a>
        </li>
        <li>
          <a href="#">Usuários</a>
        </li>
        <li>
          <a href="#">Acerca</a>
        </li>
        <li>
          <a href="#">contacto</a>
        </li>


      </ul>


    </nav>

    <!-- Page Content Holder -->
    <div id="content">

      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i> 
                                <span>Painel de Controle</span>
                            </button>
                            
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Page</a></li>
            </ul>
          </div>
        </div>
      </nav>


    </div>
  </div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {


      $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
  </script>
<section id="formulario">
<form method="POST" action="inserirprod.php">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Nome:</span>
  </div>
  <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" id="nome">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Super mercado</label>
  </div>
  <select class="custom-select" id="se" name="se">
    <option selected>Escolher...</option>
     <?php while($super = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
    <option  value="<?php echo $super['nome']; ?>">

    	<?php 
        echo $super['nome'];  

        ?>
    	
    </option>
    <?php } ?>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="preco">
  <div class="input-group-append">
    <span class="input-group-text">Kz</span>
  </div>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">$ - promocional</span>
  </div>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="promo">
  <div class="input-group-append">
    <span class="input-group-text">Kz</span>
  </div>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Categoria</label>
  </div>
  <select class="custom-select" id="se1" name="se1">
    <option selected>Escolher...</option>
     <?php while($super1 = $sql1->fetch(PDO::FETCH_ASSOC)) { ?>
    <option  value="<?php echo $super1['nome']; ?>">

    	<?php 
        echo $super1['nome'];  

        ?>
    	
    </option>
    <?php } ?>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Carregar</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" id="foto">
    <label class="custom-file-label" for="inputGroupFile01">Escolha o arquivo</label>
  </div>
</div>
<button class="btn btn-lg btn-primary btn-block click-animations new-section" id="entrar" type="submit" name="entrar">Guardar</button>
</form>
</section>
</body>
</html>