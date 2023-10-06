<?= $this->extend('layout/user/user_layout')?>

<?= $this->section('content')?>

	<div style="margin: 10% 6% 10% 6%">
		

	<h2 class="h2"><?= $news['title'] ?> </h2>
	<div class="mb-5 ">
		<span><?= $news['created_at'] ?></span>
	</div>
	<div><?= $news['content'] ?></div>
	</div>
<?= $this->endSection()?>