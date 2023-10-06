<?= $this->extend('layout/admin/admin_layout')?>

<?= $this->section('content')?>
<div style="margin: 5%">
<form action="" method="post" id="text-editor">
	<div class="form-group">
		<label for="author"> Author</label>
		<input type="text" name="author" class="form-control" required>
	</div>
	<div class="form-group">
		<label for="title"> Title</label>
		<input type="text" name="title" class="form-control" required>
	</div>
	<div class="form-group">
		<textarea name="content" class="form-control" cols="30" rows="10" > </textarea>
	</div>
	<div class="form-group">
		<button type="submit" name="status" value="published" class="btn btn-primary">Published</button>
		<button type="submit" name="status" value="draft" class="btn btn-secondary">Save to draft</button>
	</div>

</form>
</div>
<?= $this->endSection()?>