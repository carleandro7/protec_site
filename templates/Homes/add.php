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
            <?= $this->Html->link(__('List Homes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="homes form content">
            <?= $this->Form->create($home) ?>
            <fieldset>
                <legend><?= __('Add Home') ?></legend>
                <?php
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('curso');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('mensagembtn');
                    echo $this->Form->control('valor');
                    echo $this->Form->control('desconto');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
