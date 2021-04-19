<header class="text-center p-4">
  <h1>Tambah User Baru</h1>
</header>
<main class="col-sm-8 mx-auto">
  <form action="<?= base_url('Mahasiswa/input') ?>" method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input class="form-control" maxlength="10" type="text" name="username" id="username" placeholder="Maksimal 10 karakter">
    </div>
    <div class="form-group">
      <label for="pass">Password</label>
      <input class="form-control" type="password" name="pass" id="pass">
    </div>
    <div class="form-group">
      <label for="grup">Grup user</label>
      <select id="grup" class="form-control" name="grup" required>
        <option value="0">Pilih Grup User..</option>
        <option value="1">Admin</option>
        <option value="2">User</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary float-right" value="Simpan">
    <a href="index" class="btn text-danger float-right">Batal</a>
  </form>
</main>