<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cidade $cidade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cidade'), ['action' => 'edit', $cidade->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cidade'), ['action' => 'delete', $cidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cidades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cidade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cidades view content">
            <h3><?= h($cidade->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Texto') ?></th>
                    <td><?= h($cidade->texto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($cidade->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cidade->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
