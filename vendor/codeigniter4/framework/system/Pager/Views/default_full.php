<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination">
		<?php if ($pager->hasPreviousPage()) : ?>
			<li>
				<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
					<span aria-hidden="true"><i class="fa fa-fast-backward"></i></span>
				</a>
			</li>
			<li>
				<a href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
					<span aria-hidden="true"><i class="fa fa-arrow-circle-left"></i></span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li <?= $link['active'] ? 'class="active"' : '' ?>>
				<a href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNextPage()) : ?>
			<li>
				<a href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
					<span aria-hidden="true"><i class="fa fa-arrow-circle-right"></i></span>
				</a>
			</li>
			<li>
				<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
					<span aria-hidden="true"><i class="fa fa-fast-forward"></i></span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>