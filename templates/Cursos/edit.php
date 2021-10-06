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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $curso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursos form content">
            <?= $this->Form->create($curso) ?>
            <fieldset>
                <legend><?= __('Edit Curso') ?></legend>
                <?php
                    echo $this->Form->control('tituloprincipal');
                    echo $this->Form->control('subtituloprincipal');
                    echo $this->Form->control('curso');
                    echo $this->Form->control('turno');
                    echo $this->Form->control('valorintegral');
                    echo $this->Form->control('valordesconto');
                    echo $this->Form->control('duracao');
                    echo $this->Form->control('icone');
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('subtitulo');
                    echo $this->Form->control('texto');
                    echo $this->Form->control('imagem');
                    echo $this->Form->control('tituloinstituicao');
                    echo $this->Form->control('textoinstituicao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
