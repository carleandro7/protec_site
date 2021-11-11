<div class="homecurso"  >
    <div class="row row-margin" >    
        <div class="col-lg-12 titulocorpo-curso titulocorpo_margin">
            <b><?= $curso->tituloprincipal ?></b>
        </div>
        <div class="col-lg-10 barraamarela">
            <?php echo $this->Html->image("barraamarela.png", array("class" => "img-fluid")); ?></a>
        </div>
        <div class="col-lg-12 titulocorpo-curso ">
            <b><?= $curso->subtituloprincipal ?></b>
        </div>
        <div class="col-lg-12 subtitulocorpo-curso ">
            <b><?= $curso->curso ?></b>
        </div>
    </div>
    <div class="row row-margin" > 
       
        <div class="col-lg-2 col-md-3 col-sm-12 box">
            <div class="row" > 
                <div class="col-lg-12 curso-button">
                    <b>INSTITUIÇÃO</b>
                </div>
                <div class="col-lg-12 curso-button">
                <?php echo $this->Html->image("../imagens/".$curso->icone, array("class" => "img-fluid")); ?>
                </div>
            </div>        
        </div>
        <div class="col-lg-2 col-md-3 col-sm-12 box">
            <div class="row" > 
                <div class="col-lg-12 curso-button">
                    <b>MODALIDADE</b>
                </div>
                <div class="col-lg-12 curso-button">
                    <?= $curso->modalidade ?>
                </div>
                <div class="col-lg-16 curso-button">
                    <b>DURAÇÃO DO CURSO</b>
                </div>
                <div class="col-lg-12 curso-button">
                    <?= $curso->duracao ?>
                </div>
            </div>        
        </div>
        <div class="col-lg-2 col-md-3 col-sm-12 box">
            <div class="row" > 
                <div class="col-lg-12 curso-button">
                    <b>TURNO</b>
                </div>
                <div class="col-lg-12 curso-button">
                    <?= $curso->turno ?>
                </div>
            </div>        
        </div>
        <div class="col-lg-2 col-md-3 col-sm-12 box">
            <div class="row" > 
                <div class="col-lg-12 curso-button">
                    <b>VALOR INTEGRAL</b>
                </div>
                <div class="col-lg-12 curso-button">
                    <?= $curso->valorintegral ?>
                </div>
            </div>        
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12 box">
            <div class="row" > 
                <div class="col-lg-12 curso-button2">
                    <b>VALOR COM DESCONTO</b>
                </div>
                <div class="col-lg-12 curso-button3">
                <b><?= $curso->valordesconto ?></b>
                </div>
            </div>        
        </div>
       
        
    </div>

    <div class="row row-margin" >
        <div class="col-lg-12">
            <hr class="linha-barra">
        </div>
    </div>
    <div class="row row-margin" >
        <div class="col-lg-4 col-md-4 col-sm-12">
            <?php echo $this->Html->image("../imagens/".$curso->imagem, array("class" => "img-fluid")); ?></a>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="row" >
                <div class="col-lg-12 titulotexto-curso">
                   <b> <?= $curso->titulo ?>  </b>
                </div>
                <div class="col-lg-12 subtitulotexto-curso">
                    <b><?= $curso->subtitulo ?></b>
                </div>
                <div class="col-lg-12 texto-curso">
                    <p><?= $curso->texto ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-margin" >
        <div class="col-lg-12">
            <hr class="linha-barra">
        </div>
    </div>
    <div class="row row-margin" >
        <div class="col-lg-12 titulotexto-curso">
             <?= $curso->tituloinstituicao ?> 
        </div>
        <div class="col-lg-12 texto-curso">
            <?= $curso->textoinstituicao ?>
        </div>
    </div>
</div>