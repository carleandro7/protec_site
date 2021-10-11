<div class="paginator text-center">
    <ul class="pagination justify-content-center">
        <?php
        $this->Paginator->setTemplates([
            'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
            'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
        ]);
        ?>

        <?= $this->Paginator->prev(__('<<')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('>>')) ?>

    </ul>
    <p style="color: #000;" class="h6">
	<?= $this->Paginator->counter( __('Página {{page}} de {{pages}}, mostrando {{current}} registro de {{count}} no total, começando no {{start}}, terminando em {{end}}' ));
	?>	</p>
</div>