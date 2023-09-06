<!-- jQuery -->
<script src="{{ asset('Admin/plugins') }}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('Admin/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('Admin/plugins') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/jszip/jszip.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('Admin/plugins') }}/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('Admin/dist') }}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('Admin/dist') }}/js/demo.js"></script>
{{-- Sweet Alert 2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('.delete').click(function() {
        var rencanaid = $(this).attr('data-id');
        var norencana = $(this).attr('data-no');
        Swal.fire({
            title: 'Yakin ?',
            text: "ingin menghapus data nomor " + norencana + " ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deleterencana/" + rencanaid + ""
            }
        });
    });
    
    $('.deleteP').click(function() {
        var pengaduanid = $(this).attr('data-id');
        var nopengaduan = $(this).attr('data-no');
        Swal.fire({
            title: 'Yakin ?',
            text: "ingin menghapus data nomor " + nopengaduan + " ",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletepengaduan/" + pengaduanid + ""
            }
        });
    });
</script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
