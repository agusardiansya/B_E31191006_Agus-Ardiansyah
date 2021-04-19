<main class="table-responsive">
  <a href="<?= base_url() ?>/mahasiswa/tambah" class="btn btn-success mb-3">Tambah data</a>
  <table class="table table-bordered table-striped shadow">
    <thead class="text-light bg-primary">
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Grup</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($user as $baris) : ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $baris->username ?></td>
          <td><?= $baris->grup ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</main>