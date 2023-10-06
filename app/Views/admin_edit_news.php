<?= $this->extend('layout/admin/admin_layout') ?>
<?= $this->section('content') ?>
<form action="" method="post" id="text-editor" style="margin: 6% 6% 6% 6%">
	<input type="hidden" name="id" value="<?= $news['id'] ?>">
	<div class="form-group">
		<label for="title"> Author</label>
		<input type="text" name="author" class="form-control" value="<?= $news['author'] ?>" required>
	</div>
	<div class="form-group">
		<label for="title"> Title</label>
		<input type="text" name="title" class="form-control" value="<?= $news['title'] ?>" required>
	</div>
	<div class="form-group">
		<textarea name="content" class="form-control" cols="30" rows="10"><?= $news['content'] ?></textarea>
	</div>
	<div class="form-group">
		<button type="submit" name="status" value="published" class="btn btn-primary">Published</button>
		<button type="submit" name="status" value="draft" class="btn btn-secondary">Save to draft</button>
	</div>

</form>
<?= $this->endSection() ?>