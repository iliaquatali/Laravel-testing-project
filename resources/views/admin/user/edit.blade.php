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
<!--end::Sidebar-->
<!--begin::Main-->

@section('main_content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin::Title-->
                                    <h1 class="font-weight-normal text-muted ms-2">User</h1>
                                    <!--end::Title-->

                                </div>
                                <!--end::Page title-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center gap-2 gap-lg-3">
                                    <!--begin::Filter menu-->

                                </div>
                                <!--end::Actions-->
                            </div>
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

                                <div class="d-flex align-items-center gap-2 gap-lg-3">

                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <div id="kt_app_content_container" class="app-container container-xxl">


                            <!--begin::Main column-->
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Create User</h2>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label required">Name
                                                        </label>
                                                        <input type="text" class="form-control" name="name" value="{{$user->name}}">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 ">
                                                    <div class="form-group">
                                                        <label class="form-label required">Email
                                                        </label>
                                                        <input type="email" class="form-control " name="email" value="{{$user->email}}">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 ">
                                                    <div class="form-group">
                                                        <label class="form-label required">Password
                                                        </label>
                                                        <input type="password" class="form-control " name="password">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label required">Phone Number
                                                            </span></label>
                                                        <input type="text" class="form-control " name="phone_number" value="{{$user->phone_number}}"
                                                            placeholder="123456">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label required">Gender
                                                        </label>
                                                        <select class="form-control" name="gender" value="{{$user->gender}}">
                                                            <option selected disabled>Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label required">Address
                                                            </span></label>
                                                        <input type="text" class="form-control " name="address" value="{{$user->address}}">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label required">City
                                                            </span></label>
                                                        <input type="text" class="form-control " name="city" value="{{$user->city}}">

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label required">Country
                                                            </span></label>
                                                        <input type="text" class="form-control " name="country" value="{{$user->country}}">

                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end pt-4">

                                                    <!--begin::Button-->
                                                    <button type="submit" class="btn btn-success">
                                                        <span class="indicator-label">Create User</span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <!--end::Meta options-->

                            </div>
                            <!--end::Main column-->

                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </div>


    <!--end::Content wrapper-->
    <!--begin::Footer-->
    @include('admin.layout.footer')
    <!--end::Footer-->
@endsection
<!--end:::Main-->
