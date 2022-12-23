<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="font-weight-normal text-muted ms-2">Users</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->

                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">

                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                            data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">

                            <!--begin::Main column-->
                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                <!--begin::General options-->
                                <div class="card card-flush py-4">
                                    <!--begin::Card body-->
                                    <!--begin::Table widget 7-->
                                    <div class="card card-flush h-xl-100">
                                        <!--begin::Header-->
                                        <div class="card-header pt-7">
                                            <!--begin::Title-->
                                            <h1 class="card-title align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Users List</span>
                                            </h1>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="align-items-center">

                                                <!--begin::Primary button-->
                                                <a href="{{ route('user.create') }}" class="btn btn-success">
                                                    <i class="fa-solid fa-user-plus"></i>
                                                    Add User

                                                </a>

                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                    </div>
                                    <!--end::Meta options-->
                                    <div class="card-header ">

                                        <div class="d-flex flex-stack flex-wrap gap-4">
                                            <!--begin::Search-->
                                            <div class="position-relative my-1">
                                                <span
                                                    class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223"
                                                            width="8.15546" height="2" rx="1"
                                                            transform="rotate(45 17.0365 15.1223)" fill="currentColor">
                                                        </rect>
                                                        <path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon--> 
                                                <input type="text" data-kt-table-widget-4="search" wire:model="term"
                                                    class="form-control w-150px fs-7 ps-12" placeholder="Search">
                                            </div>
                                            <!--end::Search-->
                                        </div>

                                    </div>

                                    <div class="card-body pt-0">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5"
                                            id="kt_ecommerce_report_customer_orders_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                    <th>
                                                        S:NO</th>
                                                    <th>
                                                        Name</th>

                                                    <th>
                                                        Email
                                                    </th>
                                                    <th>
                                                        Phone Number</th>
                                                    <th>
                                                        Gender</th>
                                                    <th>
                                                        Address
                                                    </th>
                                                    <th>City</th>
                                                    <th>country</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($users as $user)
                                                    
                                                <tr>
                                                    <td> {{ $loop->index + 1 }} </td>
                                                    <td> {{ $user->name}} </td>
                                                    <td> {{ $user->email }} </td>
                                                    <td> {{ $user->phone_number }} </td>
                                                    <td> {{ $user->gender }} </td>
                                                    <td> {{ $user->address }} </td>
                                                    <td> {{ $user->city }} </td>
                                                    <td> {{ $user->country }} </td>

                                                    <td>
                                                        <div class="d-flex justify-start-center gap-5">

                                                            <a href="{{route('user.update', $user->id)}}" class="action-btns1"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="Edit"
                                                                aria-label="Edit">
                                                                <i class="fas fa-edit text-primary "></i>
                                                            </a>

                                                            <a href="{{route('user.delete', $user->id)}}" class="action-btns1 "
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="" data-bs-original-title="Delete"
                                                                aria-label="Delete">
                                                                <i class="fas fa-trash text-danger "></i>
                                                            </a>

                                                        </div>
                                                    </td>

                                                    <!--end::Action=-->
                                                </tr>
                                                @endforeach

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                </div>
                                <!--end::Main column-->
                        </form>
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