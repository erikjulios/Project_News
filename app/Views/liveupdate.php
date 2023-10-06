<?= $this->extend('layout/user/user_layout')?>

<?= $this->section('content')?>
<div style="margin: 5% 6% 6% 6%">
    <h2 >Live Update</h2>
<form action="<?= site_url('create_liveupdate')?>" method="post" >
    <div class="form-group">
        <label for="nama"> Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email"> Email</label>
        <input type="text" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="no"> No.Hp</label>
        <input type="text" name="no" class="form-control" required>
    </div>
    <div class="form-group">
        <textarea name="berita" class="form-control" cols="30" rows="10" > </textarea>
    </div>
    <div class="form-group">
        <button type="submit" value="send" class="btn btn-primary">Send</button>
    </div>

</form>
</div>
<?= $this->endSection()?>