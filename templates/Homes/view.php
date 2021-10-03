<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Home $home
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Home'), ['action' => 'edit', $home->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Home'), ['action' => 'delete', $home->id], ['confirm' => __('Are you sure you want to delete # {0}?', $home->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Homes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Home'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="homes view content">
            <h3><?= h($home->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cidade') ?></th>
                    <td><?= h($home->cidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= h($home->curso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($home->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mensagembtn') ?></th>
                    <td><?= h($home->mensagembtn) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor') ?></th>
                    <td><?= h($home->valor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Desconto') ?></th>
                    <td><?= h($home->desconto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($home->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
