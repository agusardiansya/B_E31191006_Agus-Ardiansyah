<!DOCTYPE html>
<html lang="en">
<?= @$head ?>
<body id="page-top">

  <!-- Page wrapper -->
  <div class="wrapper d-flex">

    <!-- Sidebar -->
    <?= @$sidebar ?>
    <!-- Sidebar ends -->

    <!-- Content wrapper -->
    <div id="content-wrapper" class="flex-fill d-flex flex-column">

      <!-- Main content -->
      <div id="content">

        <!-- Topbar -->
        <?= @$topbar ?>
        <!-- Topbar ends -->

        <!-- Page content -->
        <?= @$content ?>
        <!-- Page content ends -->

      </div>
      <!-- Main content ends -->

      <!-- Footer -->
      <?= @$footer ?>
      <!-- Footer ends -->

    </div>
    <!-- Content wrapper ends -->

  </div>
  <!-- Page wrapper ends -->

  <!-- Scroll to top -->
  <a href="#page-top" class="scroll-to-top rounded">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel">Ready to leave?</h5>
          <button class="close" type="button" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">Select Logout below if you want to logout.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a href="login.html" class="btn btn-primary">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Plugin JS -->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom script -->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</body>
</html>