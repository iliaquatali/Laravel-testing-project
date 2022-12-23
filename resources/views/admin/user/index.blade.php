@extends('admin.layout.master')
<!--begin::Header-->
@section('top_nav')
    @include('admin.layout.top_nav')
@endsection
<!--end::Header-->
<!--begin::Sidebar-->
@section('left_side_nav')
    @include('admin.layout.left_side_nav')
@endsection
@livewireStyles

<!--end::Sidebar-->
<!--begin::Main-->
@section('main_content')
    <livewire:user-search>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    @include('admin.layout.footer')
    <!--end::Footer-->
    </div>
    @livewireScripts

@endsection
<!--end:::Main-->
