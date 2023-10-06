<?= $this->extend('layout/admin/admin_layout') ?>
<?= $this->section('content') ?>
<form action="" method="post" id="text-editor" style="margin: 6% 6% 6% 6%">
	<input type="hidden" name="id" value="<?= $lv['id'] ?>">
	<div class="form-group">
		<label for="title"> Nama</label>
		<input type="text" name="nama" class="form-control" value="<?= $lv['nama'] ?>" required>
	</div>
	<div class="form-group">
		<label for="title"> email</label>
		<input type="text" name="email" class="form-control" value="<?= $lv['email'] ?>" required>
	</div>
	<div class="form-group">
		<label for="title"> No.Hp</label>
		<input type="text" name="no" class="form-control" value="<?= $lv['no'] ?>" required>
	</div>
	<div class="form-group">
		<label for="title"> Berita</label>
		<input type="text" name="berita" class="form-control" value="<?= $lv['berita'] ?>" required>
	</div>
	<div class="form-group">
		<button type="submit" name="status" value="Send" class="btn btn-primary">Send</button>
	</div>

</form>
<?= $this->endSection()?>