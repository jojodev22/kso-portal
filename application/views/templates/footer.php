<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        ©<script>
        document.write(new Date().getFullYear())
        </script>, made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
      </div>
      <div class="d-none d-lg-inline-block">
        <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
        <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
        <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link">Support</a>
      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        
  </div>
  <!-- / Layout wrapper -->
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="<?= base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?= base_url() ?>/assets/vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?= base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="<?= base_url() ?>/assets/js/main.js"></script>
  

  <!-- Page JS -->
  <script src="<?= base_url() ?>/assets/js/dashboards-analytics.js"></script>
  
  <!-- Place this tag before closing body tag for github widget button. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Datatables -->
  <!-- <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script> -->
  <!-- <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap4.min.js"></script> -->

  <!-- Datatables -->
  <script src="<?= base_url(); ?>assets/datatables/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>assets/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
        var table = $('#datatable').DataTable({
            buttons: ['copy', 'csv', 'print', 'excel'],
            dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
            columnDefs: [{
                targets: -1,
                orderable: false,
                searchable: false
            }]
        });

        table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#tangal').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
        }

        $('#tanggal').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Hari ini': [moment(), moment()],
                'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
                '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
                'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
            }
        }, cb);

        cb(start, end);

        $('[data-toggle="tooltip"]').tooltip();

        var table = $('.datatable').DataTable({
            buttons: ['copy', 'csv', 'print', 'excel'],
            dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            columnDefs: [{
                targets: -1,
                orderable: false,
                searchable: false
            }]
        });

        table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');

        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4'
        });
    });
  </script>
  
</body>

</html>

<!-- beautify ignore:end -->