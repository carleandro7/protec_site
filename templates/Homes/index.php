<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Home[]|\Cake\Collection\CollectionInterface $homes
 */
?>
<div class="homes index content">
    <?= $this->Html->link(__('New Home'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Homes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cidade') ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('mensagembtn') ?></th>
                    <th><?= $this->Paginator->sort('valor') ?></th>
                    <th><?= $this->Paginator->sort('desconto') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($homes as $home): ?>
                <tr>
                    <td><?= $this->Number->format($home->id) ?></td>
                    <td><?= h($home->cidade) ?></td>
                    <td><?= h($home->curso) ?></td>
                    <td><?= h($home->tipo) ?></td>
                    <td><?= h($home->mensagembtn) ?></td>
                    <td><?= h($home->valor) ?></td>
                    <td><?= h($home->desconto) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $home->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $home->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $home->id], ['confirm' => __('Are you sure you want to delete # {0}?', $home->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
