<?= $this->extend('layout/admin/admin_layout') ?>
<?= $this->section('content') ?>

<table class="table" style="margin : 6% 6% 6% 0%">
	<thead>
		<tr>
		<th>#</th>
		<th>Nama</th>
		<th>Email</th>
		<th>NoHp</th>
		<th>Berita</th>
		<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($live as $x) : ?>
			<tr>
				<td><?= $x['id'] ?></td>
				<td>
					<p><?= $x['nama'] ?></p><br>
				</td>
				<td>
					<p><?= $x['email'] ?></p><br>
				</td>
				<td>
					<p><?= $x['no'] ?></p><br>
				</td>
				<td>
					<p><?= $x['berita'] ?></p><br>
				</td>
				<td>
					<a href="<?= base_url('admin/liveupdate/'.$x['id'].'/edit')?>" class="btn btn-sm btn-outline-secondary" >Edit</a>
					<a href="#" class="btn btn-sm btn-outline-danger"  onclick="confirmToDelete(this)" data-href="<?= base_url('admin/liveupdate/' . $x['id'] . '/delete') ?>" >Delete</a>
				</td>
			</tr>
		<?php endforeach?>
	</tbody>

</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h2 class="h2"> are you sure?</h2>
				<p>data akan dihapus selamanya</p>
			</div>
			<div class="modal-footer">
				<a href="#" role="button" id="delete-button" class="btn btn-danger"> Delete</a>
				<button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancel</button>
			</div>
		</div>
	</div>
</div>

<?= $pager->links('newses', 'adminNews_pag') ?>

<script>
	function confirmToDelete(el){
		$("#delete-button").attr("href", el.dataset.href);
		$("#confirm-dialog").modal('show');
	}
</script>
<?= $this->endSection()?>