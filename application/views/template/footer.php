        
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>" crossorigin="anonymous"></script>

        <!-- Data Tables -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.11.4/af-2.3.7/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/sb-1.3.1/sp-1.4.0/datatables.min.js"></script>

        <script>
            $(document).ready(function() {
            $('#lista').DataTable(
                {
                    language: {
                        "url":"cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                    },
                    dom:'Bfrtip',
                    buttons:[
                        'pdf',
                        'excel',
                        'print'
                    ]
                }
            );
            } );
        </script>

    </body>
</html>
