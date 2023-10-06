<?= $this->extend('layout/user/user_layout')?>

<?= $this->section('content')?>

	<header class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col=md-12">
					<h1 class="h1">News</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container" style="margin-bottom: 10%">
		<?php foreach($newses as $news) : ?>
		<div class="row" >
			<div class="col-md-12 mb-2 card">
				<div class="card-body">
					<h5 class="h5"><a href="<?= base_url('news') ?>/<?= $news['slug'] ?>"> <?= $news['title']  ?></a></h5>
					<p><?= substr($news['content'],0, 120) ?></p>
				</div>
			</div>
		</div>
	<?php endforeach?>
	</div>

	<?= $pager->links('newses', 'adminNews_pag') ?>


<?= $this->endSection()?>
