<?= $this->extend('layout/admin/admin_layout') ?>
<?= $this->section('content') ?>

<table class="table" style="margin : 6% 6% 6% 0%" name="newses">
	<thead>
		<tr>
			<th>#</th>
			<th>title</th>
			<th>status</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($newses as $news) : ?>
			<tr>
				<td><?= $no ?></td>
				<td>
					<STRONG><?= $news['title'] ?></STRONG><br>
					<small class="text-muted"> <?= $news['created_at'] ?></small>
				</td>
				<td>
					<?php if ($news['status'] === 'published') : ?>
						<small class="text-success"><?= $news['status'] ?></small>
					<?php else : ?>
						<small class="text-muted"><?= $news['status'] ?></small>
					<?php endif ?>
				</td>
				<td>
					<a href="<?= base_url('admin/news/' . $news['id'] . '/preview') ?>" class="btn btn-sm btn-outline-secondary">Preview</a>
					<a href="<?= base_url('admin/news/' . $news['id'] . '/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
					<a href="#" class="btn btn-sm btn-outline-danger" onclick="confirmToDelete(this)" data-href="<?= base_url('admin/news/' . $news['id'] . '/delete') ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		endforeach ?>
	</tbody>

</table>
<center><a class="btn btn-primary " style="margin-bottom: 10%" href="<?= site_url('admin/news/new') ?>"> Tambah Berita</a></center>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h2 class="h2"> are you sure?</h2>
				<p>data akan dihapus selamanya</p>
			</div>
			<div class="modal-footer">
				<a href="#" role="button" id="delete-button" class="btn btn-danger"> Delete</a>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<?= $pager->links('newses', 'adminNews_pag') ?>
<script>
	function confirmToDelete(el) {
		$("#delete-button").attr("href", el.dataset.href);
		$("#confirm-dialog		").modal('show');
	}
</script>
<?= $this->endSection() ?>