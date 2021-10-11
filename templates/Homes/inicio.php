<div class="homeprincipal" >
    <div class="row row-margin" >
        
        <div class="col-lg-12 titulocorpo titulocorpo_margin">
            <b>GANHE BOLSAS DE </b>
        </div>
    </div>
    <div class="row row-margin">
        <div class="col-lg-12  titulocorpo">
            <b>ESTUDO DE ATÉ</b><b class="titulocorpo_texto_maior"> 60%</b>
        </div>
    </div>
    <br>
    <div class="row row-margin" >
        <div class="col-lg-6 col-md-7 col-sm-12 curso-titulo">
        <?php echo $this->Html->image("tecnico.png", array("class" => "img-fluid")); ?> <b>CURSO TÉCNICO</b>
        </div>
    </div>
    <div class="row row-margin" >
        <div class="col-lg-6 col-md-7 col-sm-12 curso-titulo">
        <?php echo $this->Html->image("graduacao.png", array("class" => "img-fluid")); ?> <b>GRADUAÇÃO</b>
        </div>
    </div>
    <div class="row row-margin" >
        <div class="col-lg-6 col-md-7 col-sm-12 curso-titulo">
        <?php echo $this->Html->image("posgraduacao.png", array("class" => "img-fluid")); ?> <b>PÓS-GRADUAÇÃO</b>
        </div>
    </div>
    <div class="row row-margin" >
        <div class="col-lg-12">
            <hr class="linha-barra">
        </div>
    </div>
    <div class="row row-margin" >
        <div class="col-lg-6 col-md-6 col-sm-12 curso-titulo2">
            <b>Bolsas interessantes para você</b><br>
            <?php echo $this->Form->create($selectCidades, array("role" => "form")); ?>
                <fieldset>
            <div class="row" >
                <div class="col-lg-4 col-md-4 col-sm-12">
                    Mostrando: 
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12">
                    <select name="cidade" onchange="this.form.submit()" id="select-cidade" class="form-control" aria-label="Default select">
                    <?php foreach ($cidades as $cidade): ?>
                        <option <?= ($cidade->id == $select_cidade ? 'selected' : '') ?> value="<?= $cidade->id ?>"><?= $cidade->texto ?></option>
                    <?php endforeach; ?> 
                    </select>
                </div>
            </div>
        </div>
        </fieldset>
        <?php echo $this->Form->end(); ?>  
    </div>
    <div class="row row-margin " id="cursos-cards">
    <?php 
    if($select_cidade == 0){
        $select_cidade = $cidades->first()->id;
    }
    foreach ($homes as $home): 
        if($home->cidades_id == $select_cidade){?>
        <div class="col-lg-4 col-md-6 col-sm-12 box">
            <div class="curso-cards">
                <p class="card-cidade"> <?= $home->cidade->texto ?> </p>
                <h3><?= $home->curso ?></h3>
                <p class="card-tipocurso"><?= $home->tipo ?></p>
                <div class="row" >
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <a href="<?= $home->linkbtn ?>"><div class="inscreva"> <?= $home->mensagembtn ?> </div></a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 card-valores">
                            <b class="card-valor1"><?= $home->valor ?></b><br>
                            <b class="card-valor2"><?= $home->desconto ?> </b>
                    </div>
                </div>
            </div>
        </div>
    <?php } endforeach; ?>  
        

    </div>
</div>

<script>
    function reloadDIV () {
        var select_cidade = document.getElementById("select-cidade").value;
        alert(select_cidade);
        $('#cursos-cards').load(self);
    } 

    </script>