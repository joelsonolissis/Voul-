<?php
require_once("conecta.php");
$linha = $db->query("SELECT count(*) FROM produtos")->fetchColumn();
 $sql="SELECT * FROM produtos"; 
            

     $verifica = $db->query($sql);
          
?>

<!DOCTYPE html>
<html>
<head>
	<title>Voulá | Painel Administrativo</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat|Noto+Sans|Open+Sans|PT+Sans|PT+Sans+Narrow|Poppins|Quicksand|Raleway|Roboto|Roboto+Mono|Roboto+Slab|Shrikhand|Slabo+27px|Source+Sans+Pro|Tajawal|Titillium+Web|Ubuntu" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="cssprodutos.css">
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
          <a href="#menu">Produtos</a>

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
    <div id="content">

      <nav class="navbar navbar-default">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i> 
                                <span>Painel de Controle</span>
                            </button>
                            <p>Total de produtos: <?php echo $linha;  ?> </p>
          </div>
          	<a href="addprodutos.php"><button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" href="addprodutos.php">
                                <i class="glyphicon glyphicon-align-left"></i> 
                                <span>Adicionar novo produto</span>
                            </button></a>
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
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">⌕</span>
  </div>
  <input type="text" class="form-control" placeholder="Pesquise" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div id="tabela">
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Super mercado</th>
      <th scope="col">Preço promocional</th>
       <th scope="col">Categoria</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($verifica as $row){ ?>
  	<tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['nome'];?></td>
      <td><?php echo $row['preco'];?></td>
      <td><?php echo $row['mercado'];?></td>
      <td><?php echo $row['promocional'];?></td>
      <td><?php echo $row['categoria'];?></td>

    </tr>
    <?php } ?>
     </tbody>
</table>
</div>
</body>
</html>