
<div class="row top-adm">
        <div class="col-lg-12">
            <h2 class="page-header">
                Novo Usuário
            </h2>
        </div>
</div>
<div class="clientes form">
    <?php echo $this->Form->create($user, array("role" => "form")); ?>
        <fieldset>
            <div class="row">
                <div class="col-lg-6 form-group">  
                    <?php echo $this->Form->control('nome', array("label"=>"Nome","class" => "form-control")); ?>
                </div>
                <div class="col-lg-6 form-group">  
                    <?php echo $this->Form->control('email', array("label"=>"Email","class" => "form-control", "type"=>"email")); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 form-group">  
                    <?php echo $this->Form->control('password', array("label"=>"Senha","class" => "form-control", "type"=>"password")); ?>
                </div>
            </div>
            
       
        </fieldset>
        <button type="submit" class="btn btn-primary marginrodape">Salvar Usuário</button>
    <?php echo $this->Form->end(); ?>                            
</div>
