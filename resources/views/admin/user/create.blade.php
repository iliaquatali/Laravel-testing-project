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
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin::Title-->
                                    <h1 class="font-weight-normal ms-2">Create User</h1>
                                    <!--end::Title-->
                                </div>
                                <!--end::Page title-->
                            </div>
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
                                        <form action="{{ route('user.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Name
                                                    </label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Name">
                                                    @if ($errors->has('name'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('name') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Email
                                                    </label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Email">
                                                    @if ($errors->has('email'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('email') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Password
                                                    </label>
                                                    <input type="password" class="form-control " name="password"
                                                        placeholder="Password">
                                                    @if ($errors->has('password'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('password') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Phone
                                                        Number</label>
                                                    <input type="text" class="form-control " name="phone_number"
                                                        placeholder="123456">
                                                    @if ($errors->has('phone'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('phone') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Gender
                                                    </label>
                                                    <select class="form-select" data-control="select2" name="gender"
                                                        data-placeholder="Select an Gender">
                                                        <option></option>
                                                        <option value="male">Male</option>
                                                        <option value="female">FeMale</option>
                                                    </select>
                                                    @if ($errors->has('gender'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('gender') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label
                                                        class="col-lg-6 col-form-label required fw-bold fs-6">Address</label>
                                                    <input type="text" class="form-control " name="address"
                                                        placeholder="Address">
                                                    @if ($errors->has('address'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('address') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label
                                                        class="col-lg-6 col-form-label required fw-bold fs-6">City</label>
                                                    <input type="text" class="form-control " name="city"
                                                        placeholder="City">
                                                    @if ($errors->has('city'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('city') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <label
                                                        class="col-lg-6 col-form-label required fw-bold fs-6">Country</label>
                                                    <input type="text" class="form-control " name="country"
                                                        placeholder="Country">
                                                    @if ($errors->has('country'))
                                                        <div class="text-danger">
                                                            {{ $errors->first('country') }}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-end mt-4">
                                                <a href="{{ url()->previous() }}" class="btn btn-light me-5">Cancel</a>
                                                <button type="submit" class="btn btn-primary">
                                                    <span class="indicator-label">Save</span>
                                                </button>
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
