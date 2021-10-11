<div class="row top-adm">
        <div class="col-lg-12">
            <h2 class="page-header">
                Novo Curso
            </h2>
        </div>
</div>
<div class="clientes form">
    <?php echo $this->Form->create($curso, array("role" => "form", 'type' => 'file')); ?>
        <fieldset>
            <div class="row">
                <div class="col-lg-6 form-group">  
                    <label for="nome" class="control-label">Título principal</label> 
                    <?php echo $this->Form->input('tituloprincipal', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-6 form-group">  
                    <label for="nome" class="control-label">Subtítulo principal</label> 
                    <?php echo $this->Form->input('subtituloprincipal', array("class" => "form-control")); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 form-group">  
                    <label for="nome" class="control-label">Curso</label> 
                    <?php echo $this->Form->input('curso', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-3 form-group">  
                    <label for="nome" class="control-label">Turno</label> 
                    <?php echo $this->Form->input('turno', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-3 form-group">  
                    <label for="nome" class="control-label">Valor integral</label> 
                    <?php echo $this->Form->input('valorintegral', array("class" => "form-control")); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 form-group">  
                    <label for="nome" class="control-label">Valor com desconto</label> 
                    <?php echo $this->Form->input('valordesconto', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-3 form-group">  
                    <label for="nome" class="control-label">Duração</label> 
                    <?php echo $this->Form->input('duracao', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-6 form-group">  
                    <label for="nome" class="control-label">Título do Texto</label> 
                    <?php echo $this->Form->input('titulo', array("class" => "form-control")); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 form-group">  
                    <label for="nome" class="control-label">Subtítulo do Texto</label> 
                    <?php echo $this->Form->input('subtitulo', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-3 form-group">  
                    <label for="nome" class="control-label">Título da Instituição</label> 
                    <?php echo $this->Form->input('tituloinstituicao', array("class" => "form-control")); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 form-group">   
                    <label for="arquivo" class="control-label">Icone da Instituição</label> 
                    <?php echo $this->Form->control('arquivo1',array("label"=> "", "id"=>"arquivo", 'type'=> 'file')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 form-group">   
                    <label for="arquivo" class="control-label">Imagem do texto</label> 
                    <?php echo $this->Form->control('arquivo2',array("label"=> "", "id"=>"arquivo2", 'type'=> 'file')); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 form-group">  
                    <label for="editora" class="control-label">Texto Principal</label> 
                    <textarea name="texto" id="editora" class="input text reqired" >
                        <p><font color="#800080"></font><br/>
                    </textarea>
                </div>
            </div>  
            <div class="row">
                <div class="col-lg-12 form-group">  
                    <label for="editord" class="control-label">Texto da Instituição</label> 
                    <textarea name="textoinstituicao" id="editord" class="input text reqired" >
                        <p><font color="#800080"></font><br/>
                    </textarea>
                </div>
            </div>  
     
       
        </fieldset>
        <button type="submit" class="btn btn-primary marginrodape">Salvar</button>
    <?php echo $this->Form->end(); ?>                            
</div>

