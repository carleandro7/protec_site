<!DOCTYPE html>
<html>
<head>
    <title>PROTEC</title>
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
<body>

            
            <?= $this->fetch('content') ?>
          
                

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <?php echo $this->Html->script('bootstrap.min');?>
    
</body>
</html>