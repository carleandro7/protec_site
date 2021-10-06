<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso[]|\Cake\Collection\CollectionInterface $cursos
 */
?>
<div class="cursos index content">
    <?= $this->Html->link(__('New Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cursos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tituloprincipal') ?></th>
                    <th><?= $this->Paginator->sort('subtituloprincipal') ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('turno') ?></th>
                    <th><?= $this->Paginator->sort('valorintegral') ?></th>
                    <th><?= $this->Paginator->sort('valordesconto') ?></th>
                    <th><?= $this->Paginator->sort('duracao') ?></th>
                    <th><?= $this->Paginator->sort('icone') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('subtitulo') ?></th>
                    <th><?= $this->Paginator->sort('imagem') ?></th>
                    <th><?= $this->Paginator->sort('tituloinstituicao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso): ?>
                <tr>
                    <td><?= $this->Number->format($curso->id) ?></td>
                    <td><?= h($curso->tituloprincipal) ?></td>
                    <td><?= h($curso->subtituloprincipal) ?></td>
                    <td><?= h($curso->curso) ?></td>
                    <td><?= h($curso->turno) ?></td>
                    <td><?= h($curso->valorintegral) ?></td>
                    <td><?= h($curso->valordesconto) ?></td>
                    <td><?= h($curso->duracao) ?></td>
                    <td><?= h($curso->icone) ?></td>
                    <td><?= h($curso->titulo) ?></td>
                    <td><?= h($curso->subtitulo) ?></td>
                    <td><?= h($curso->imagem) ?></td>
                    <td><?= h($curso->tituloinstituicao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $curso->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curso->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>
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
