
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
  </head>

  <body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                    <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                  </a>
                  <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-fluid">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-8">
                                    <input id="name" type="text"
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- <div class="form-group row mb-3">
                                <label for="username"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                                <div class="col-md-8">
                                    <input id="username" type="text"
                                        class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                        name="username" value="{{ old('username') }}" required>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}

                            <div class="form-group row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="alamat"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                                <div class="col-md-8">
                                    <input id="alamat" type="text"
                                        class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}"
                                        name="alamat" value="{{ old('alamat') }}" required>
                                    @if ($errors->has('alamat'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="gender"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-md-8">
                                    <select id="gender"
                                        class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                        name="gender" required>
                                        <option value="male"{{ old('gender') == 'male' ? ' selected' : '' }}>Male
                                        </option>
                                        <option value="female"{{ old('gender') == 'female' ? ' selected' : '' }}>Female
                                        </option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="phone_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                <div class="col-md-8">
                                    <input id="phone_number" type="text"
                                        class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"
                                        name="phone_number" value="{{ old('phone_number') }}" required>
                                    @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="ktp_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('KTP Number') }}</label>
                                <div class="col-md-8">
                                    <input id="ktp_number" type="text"
                                        class="form-control{{ $errors->has('ktp_number') ? ' is-invalid' : '' }}"
                                        name="ktp_number" value="{{ old('ktp_number') }}" required>
                                    @if ($errors->has('ktp_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ktp_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="ktp_photo"
                                    class="col-md-4 col-form-label text-md-right">{{ __('KTP Photo') }}</label>
                                <div class="col-md-8">
                                    <input id="ktp_photo" type="file"
                                        class="form-control{{ $errors->has('ktp_photo') ? ' is-invalid' : '' }}"
                                        name="ktp_photo" required>
                                    @if ($errors->has('ktp_photo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ktp_photo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-8">
                                    <input id="password" type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


  </body></html>
