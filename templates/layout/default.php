


<!DOCTYPE html>
<html>
<head>
    <title>Bolsas Protec</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="imagem/png" href="<?=  $this->Url->webroot .'/img/logo.png'?>" />

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css('bootstrap.min');?>
    <?= $this->Html->css('site/scaffold');?>
    <link href='https://fonts.googleapis.com/css?family=Syne' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?= $this->fetch('script') ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color: #007AD5">

<div class="container-fluid menu">

  <nav class="navbar navbar-expand-lg  navbar-light menu">
        <a href="https://api.whatsapp.com/send?phone=558633035002&text=Olá, gostaria de uma bolsa" class="navbar-brand whatsapp-text" target="_blank">
        <i class="fa fa-whatsapp whatsapp-text"></i> <b class="whatsapp-text-blue">Fale conosco</b>
        </a>
        
    <a class="navbar-brand logo" href="/"><?php echo $this->Html->image("PROTEC1.png", array("class" => "logo")); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto font-menu">
      
      </ul>
      <form class="form-inline my-5 my-lg-0 space-rigth">
        <div class="input-group">
          <div class="form-control search"> <input type="text" class="search-input" placeholder="Buscar" name="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Buscar'"> <a href="#" class="search-icon"  > <i class="fa fa-search"></i> </a> </div>
        </div>
      </form>
      <a class="space-rigth" target="_blank" href="https://www.instagram.com/maltafaculdade/?hl=pt-br"><i class="fa fa-instagram" style="font-size:48px;color:#00298b"></i></a>
      <a class="space-rigth" target="_blank" href="https://www.facebook.com/maltafaculdade"><i class="fa fa-facebook-official" style="font-size:48px;color:#00298b"></i></a>
    </div>
  </nav>
</div>
<!--Carousel -->

            
            <?= $this->fetch('content') ?>

  <!--Rodaper -->
  <div class="container-fluid">
    <div class="row footer-pagina">
      <div class="col-lg-3 col-md-4 col-sm-12 margin-top-bottom-footer">
              <a class="space-rigth-footer" target="_blank" href="https://www.instagram.com/maltafaculdade/?hl=pt-br"><i class="fa fa-instagram" style="font-size:48px;color:#fff"></i></a>
              <a class="space-rigth-footer" target="_blank" href="https://www.facebook.com/maltafaculdade"><i class="fa fa-facebook-official" style="font-size:48px;color:#fff"></i></a>
      </div>
      <div class="col-lg-6 col-md-4 col-sm-12 margin-top-bottom-footer">
        <?php echo $this->Html->image("PROTEC3.png", array("class" => "img-fluid logo-rodape")); ?>
        <div class="row ">
            <div class="direitos-reservados-footer" >
              &copy;<?php echo date("Y"); ?> PROTEC. Todos os direitos reservados.
            </div>  
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-12 margin-top-bottom-footer detalhes-footer">
         
          <div class="row">
            <div class="lema-footer" >
              <b>MAIS INFORMAÇÕES</b><br>
              (86) 9 0000-0000 <br>
              (86) 3300-0000 <br>
              atendimento@protec.com.br
            </div>
          </div>
          
      </div>
    </div>
  </div>


  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <?php echo $this->Html->script('bootstrap.min');?>
    <script>
       const searchButton = document.getElementById('search-button');
      const searchInput = document.getElementById('search-input');
      searchButton.addEventListener('click', () => {
        const inputValue = searchInput.value;
        alert(inputValue);
      });
    </script> 
     <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
</body>
</html>
