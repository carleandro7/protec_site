



<div class="categdespesas top-adm">
      <h2>Usuários</h2>
      <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <div class="table-responsive">
      <table class="table table-hover table-striped" cellpadding="0" cellspacing="0">
          <thead>
          <tr>
                    <th><?= $this->Paginator->sort('id', "COD") ?></th>
                    <th><?= $this->Paginator->sort('nome',"Nome") ?></th>
                    <th><?= $this->Paginator->sort('Email') ?></th>
                    
          <th colspan="2"></th>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($users as $user): ?>
                    <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->nome) ?></td>
                    <td><?= h($user->email) ?></td>
                    
                        <td class="actions">
                            <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Deseja excluir o registro # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
      </table>
  </div>



</div>


<?= $this->Element('pagination') ?>