<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Curso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursos view content">
            <h3><?= h($curso->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tituloprincipal') ?></th>
                    <td><?= h($curso->tituloprincipal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtituloprincipal') ?></th>
                    <td><?= h($curso->subtituloprincipal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= h($curso->curso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Turno') ?></th>
                    <td><?= h($curso->turno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valorintegral') ?></th>
                    <td><?= h($curso->valorintegral) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valordesconto') ?></th>
                    <td><?= h($curso->valordesconto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duracao') ?></th>
                    <td><?= h($curso->duracao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Icone') ?></th>
                    <td><?= h($curso->icone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($curso->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtitulo') ?></th>
                    <td><?= h($curso->subtitulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagem') ?></th>
                    <td><?= h($curso->imagem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tituloinstituicao') ?></th>
                    <td><?= h($curso->tituloinstituicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($curso->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Texto') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($curso->texto)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Textoinstituicao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($curso->textoinstituicao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
