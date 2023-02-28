<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="card-body">
        <form action="{{ route('employee.update') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Name
                    </label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                    @if ($errors->has('name'))
                        <div class="text-danger">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Email
                    </label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    @if ($errors->has('email'))
                        <div class="text-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Phone
                        Number</label>
                    <input type="text" class="form-control " name="phone_number" placeholder="Phone Number">
                    @if ($errors->has('phone_number'))
                        <div class="text-danger">
                            {{ $errors->first('phone_number') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Age
                    </label>
                    <input type="number" class="form-control " name="age" placeholder="Age">
                    @if ($errors->has('age'))
                        <div class="text-danger">
                            {{ $errors->first('age') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Gender
                    </label>
                    <select class="form-select form-control" data-control="select2" name="gender"
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
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Address</label>
                    <input type="text" class="form-control " name="address" placeholder="Address">
                    @if ($errors->has('address'))
                        <div class="text-danger">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">City</label>
                    <input type="text" class="form-control " name="city" placeholder="City">
                    @if ($errors->has('city'))
                        <div class="text-danger">
                            {{ $errors->first('city') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                    <label class="col-lg-6 col-form-label required fw-bold fs-6">Country</label>
                    <input type="text" class="form-control " name="country" placeholder="Country">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
