	{!! Html::script('resources/admin/bower_components/jquery/js/jquery.min.js') !!}
	{!! Html::script('resources/admin/bower_components/jquery-ui/js/jquery-ui.min.js') !!}

	{!! Html::script('resources/admin/bower_components/popper.js/js/popper.min.js') !!}
	{!! Html::script('resources/admin/bower_components/bootstrap/js/bootstrap.min.js') !!}

	{!! Html::script('resources/admin/assets/pages/waves/js/waves.min.js') !!}
	{!! Html::script('resources/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') !!}
	{!! Html::script('resources/admin/assets/js/pcoded.min.js') !!}
	{!! Html::script('resources/admin/assets/js/vertical/vertical-layout.min.js') !!}
	{!! Html::script('resources/admin/assets/js/script.min.js') !!}

	{!! Html::script('resources/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
	{!! Html::script('resources/admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') !!}
	{!! Html::script('resources/admin/assets/pages/data-table/js/jszip.min.js') !!}
	{!! Html::script('resources/admin/assets/pages/data-table/js/pdfmake.min.js') !!}
	{!! Html::script('resources/admin/assets/pages/data-table/js/vfs_fonts.js') !!}
	{!! Html::script('resources/admin/bower_components/datatables.net-buttons/js/buttons.print.min.js') !!}
	{!! Html::script('resources/admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js') !!}
	{!! Html::script('resources/admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') !!}
	{!! Html::script('resources/admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') !!}
	{!! Html::script('resources/admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') !!}

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.28/dist/sweetalert2.all.min.js"></script>

    <script>
        function sendRequest(url,data,method,cb) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            opts={};
            opts.url=url;
            if (data) opts.data=data;
            opts.method=method;
            opts.complete=cb;
            $.ajax(opts);
        }

        function sendRequestFile(url,data,method,cb) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            opts={};
            opts.cache = false;
            opts.contentType = false;
            opts.async = true;
            opts.processData = false;
            opts.url=url;
            if (data) opts.data=data;
            opts.method=method;
            opts.complete=cb;
            $.ajax(opts);
        }
    </script>

	@include('sweetalert::alert')

	@yield('js')
