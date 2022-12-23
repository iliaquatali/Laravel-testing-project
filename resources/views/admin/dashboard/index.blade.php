@extends('admin.layout.master')
<!--begin::Header-->
@section('top_nav')
    @include('admin.layout.top_nav')
@endsection
<!--end::Header-->
<!--begin::Wrapper-->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Sidebar-->
    @section('left_side_nav')
        @include('admin.layout.left_side_nav')
    @endsection
    <!--end::Sidebar-->
    <!--begin::Main-->
    @section('main_content')
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            @include('admin.layout.footer')
            <!--end::Footer-->
        </div>
    @endsection
    <!--end:::Main-->
</div>
<!--end::Wrapper-->
