<footer class="footer pt-5">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-12">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Company</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Our Services</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Featured Categories</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Need Help</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Policy Info</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link pe-0 text-muted" target="_blank">Follow us on</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
</footer>
  </main>

  <script src="Assets/js/jquery-3.6.3.min.js"></script>
      <script src="Assets/js/bootstrap.bundle.min.js"></script>
      <script src="Assets/js/perfect-scrollbar.min.js"></script>
      <script src="Assets/js/smooth-scrollbar.min.js"></script>

      <!-- SweetAlert Notification JS link-->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <!-- custom JS link-->
      <script src="Assets/js/custom.js"></script>

      <!-- Alertify Js -->
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
      <script>

        <?php 
          if(isset($_SESSION['message'])) 
          { 
              ?>
              alertify.set('notifier','position', 'top-center');
              alertify.success('<?= $_SESSION['message']; ?>');
              <?php
              unset($_SESSION['message']); 
          } 
        ?>
        
      </script>

</body>
</html>