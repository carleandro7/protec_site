

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">PROTEC</h5>
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
              <div class="form-label-group" style="margin-bottom: 25px">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required autofocus>
              
              </div>

              <div class="form-label-group" style="margin-bottom: 25px">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                
              </div>

              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" style="margin-bottom: 25px" type="submit">Entrar</button>
              
             
            <?php echo $this->Form->end(); ?>   
              <br>

              <?= $this->Flash->render() ?>
          </div>
        </div>
      </div>
    </div>
  </div>