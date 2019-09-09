{{-- {!! Html::script('assets/node_modules/jquery/dist/jquery.min.js') !!} --}}
{!! Html::script('js/app.js') !!}
{!! Html::script('assets/vendors/hashtag/js/autosize.min.js') !!}
{!! Html::script('assets/vendors/hashtag/js/jquery.hashtags.js') !!}
{!! Html::script('assets/node_modules/popper.js/dist/umd/popper.min.js') !!}
{!! Html::script('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') !!}
{!! Html::script('assets/node_modules/pace-progress/pace.min.js') !!}
{!! Html::script('assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') !!}
{!! Html::script('assets/node_modules/@coreui/coreui/dist/js/coreui.min.js') !!}
{!! Html::script('assets/vendors/DataTables/datatables.min.js') !!}
{!! Html::script('assets/js/sweetalert.js') !!}
{!! Html::script('assets/js/select2.min.js') !!}
{!! Html::script('assets/vendors/ckeditor/ckeditor.js') !!}
{!! Html::script('assets/vendors/upload/upload.js') !!}
{!! Html::script('assets/vendors/slider/slider.js') !!}
{!! Html::script('assets/javascript/main.js') !!}
@yield('js')
@yield('js_modal')
@include('sweetalert::alert')