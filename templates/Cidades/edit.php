

<div class="row top-adm">
        <div class="col-lg-12">
            <h2 class="page-header">
                Alterar Cidade
            </h2>
        </div>
</div>
<div class="clientes form">
    <?php echo $this->Form->create($cidade, array("role" => "form", 'type' => 'file')); ?>
        <fieldset>
            <div class="row">
                <div class="col-lg-10 form-group">  
                    <label for="nome" class="control-label">Texto</label> 
                    <?php echo $this->Form->input('texto', array("class" => "form-control")); ?>
                </div>
                <div class="col-lg-2 form-group">  
                    <?php echo $this->Form->control('status', array("class" => "form-control",'options' => array('Ativo' => 'Ativo', 'Desativo' => 'Desativo'))); ?>
                </div>
            </div>
     
       
        </fieldset>
        <button type="submit" class="btn btn-primary marginrodape">Salvar</button>
    <?php echo $this->Form->end(); ?>                            
</div>

