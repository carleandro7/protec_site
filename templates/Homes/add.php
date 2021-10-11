
<div class="row top-adm">
        <div class="col-lg-12">
            <h2 class="page-header">
                Novo CARD
            </h2>
        </div>
</div>
<div class="clientes form">
    <?php echo $this->Form->create($home, array("role" => "form", 'type' => 'file')); ?>
        <fieldset>
            <div class="row">
                <div class="col-lg-5 form-group">  
                    <?php echo $this->Form->control('cidade_id', array('options' => $cidades,"class" => "form-control")); ?>
                </div>
                <div class="col-lg-5 form-group">  
                    <label for="nome" class="control-label">Curso</label> 
                    <?php echo $this->Form->input('curso', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-2 form-group">  
                    <?php echo $this->Form->control('status', array("class" => "form-control",'options' => array('Ativo' => 'Ativo', 'Desativo' => 'Desativo'))); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 form-group">  
                    <label for="nome" class="control-label">Tipo</label> 
                    <?php echo $this->Form->input('tipo', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-5 form-group">  
                    <label for="nome" class="control-label">Mensagem do Button</label> 
                    <?php echo $this->Form->input('mensagembtn', array("class" => "form-control")); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 form-group">  
                    <label for="nome" class="control-label">Valor</label> 
                    <?php echo $this->Form->input('valor', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-3 form-group">  
                    <label for="nome" class="control-label">Valor com Desconto</label> 
                    <?php echo $this->Form->input('desconto', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-2 form-group">  
                    <?php echo $this->Form->control('ordem', array("class" => "form-control")); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 form-group">  
                    <label for="nome" class="control-label">Link do Button</label> 
                    <?php echo $this->Form->input('linkbtn', array("class" => "form-control")); ?>
                </div>
            </div>
     
       
        </fieldset>
        <button type="submit" class="btn btn-primary marginrodape">Salvar</button>
    <?php echo $this->Form->end(); ?>                            
</div>

