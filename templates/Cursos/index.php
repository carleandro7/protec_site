


<div class="categdespesas top-adm">
      <h2>Cursos</h2>
      <?= $this->Html->link(__('Novo Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <div class="table-responsive">
      <table class="table table-hover table-striped" cellpadding="0" cellspacing="0">
          <thead>
          <tr>
                    <th><?= $this->Paginator->sort('id', "COD") ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('subtituloprincipal', 'Subtítulo') ?></th>
                   
                    
          <th colspan="3"></th>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($cursos as $curso): ?>
                    <tr>
                    <td><?= $this->Number->format($curso->id) ?></td>
                    <td><?= h($curso->curso) ?></td>
                    <td><?= h($curso->subtituloprincipal) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Alterar'), ['action' => 'edit', $curso->id]) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $curso->id], ['confirm' => __('Deseja excluir o registro # {0}?', $curso->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
      </table>
  </div>



</div>


<?= $this->Element('pagination') ?>