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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $home->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $home->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Homes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="homes form content">
            <?= $this->Form->create($home) ?>
            <fieldset>
                <legend><?= __('Edit Home') ?></legend>
                <?php
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('curso');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('mensagembtn');
                    echo $this->Form->control('valor');
                    echo $this->Form->control('desconto');
                    echo $this->Form->control('status');
                    echo $this->Form->control('ordem');
                    echo $this->Form->control('cidades_id');
                    echo $this->Form->control('linkbtn');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
