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
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="font-weight-normal ms-2">Users List</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Page title-->
                    </div>
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
                                                <tr class="text-center fw-bold fs-7 text-uppercase gs-0">
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>Gender</th>
                                                    <th> Address</th>
                                                    <th>City</th>
                                                    <th>country</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td> {{ $user->id }} </td>
                                                        <td> {{ $user->name }} </td>
                                                        <td> {{ $user->email }} </td>
                                                        <td> {{ $user->phone_number }} </td>
                                                        <td> {{ $user->gender }} </td>
                                                        <td> {{ $user->address }} </td>
                                                        <td> {{ $user->city }} </td>
                                                        <td> {{ $user->country }} </td>
                                                        <td>
                                                            <a href="{{ route('user.edit', $user->id) }}"
                                                                class="btn btn-icon btn-success btn-sm me-1">
                                                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" data-bs-toggle="modal"
                                                                        data-bs-target="#modalIddd" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
                                                            <a href="{{ route('user.delete', $user->id) }}"
                                                                class="btn btn-icon btn-danger  btn-sm">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                <span class="svg-icon svg-icon-3">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" data-bs-toggle="modal"
                                                                        data-bs-target="#modalIdd" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                            fill="currentColor"></path>
                                                                        <path opacity="0.5"
                                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                            fill="currentColor"></path>
                                                                        <path opacity="0.5"
                                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
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
