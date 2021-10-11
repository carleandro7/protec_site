



<div class="categdespesas top-adm">
      <h2>CARDs</h2>
      <?= $this->Html->link(__('Novo Card'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <div class="table-responsive">
      <table class="table table-hover table-striped" cellpadding="0" cellspacing="0">
          <thead>
          <tr>
                    <th><?= $this->Paginator->sort('id', "COD") ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                   
                    
          <th colspan="3"></th>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($homes as $home): ?>
                    <tr>
                    <td><?= $this->Number->format($home->id) ?></td>
                    <td><?= h($home->curso) ?></td>
                    <td><?= h($home->status) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $home->id]) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $home->id], ['confirm' => __('Deseja excluir o registro # {0}?', $home->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
      </table>
  </div>



</div>


<?= $this->Element('pagination') ?>