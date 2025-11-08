<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Recover Password | {{ config('app.name', 'Velonic') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Reset your password securely" name="description" />
    <meta content="Techzaa" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/assets/images/gym-logo-1.jpg') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('public/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        body.authentication-bg {
            background: url('{{ asset('public/assets/images/gym-background-3.jpg') }}') center center / cover no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .card {
            backdrop-filter: blur(6px);
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
        }

        .footer {
            color: #fff;
        }

        .auth-brand img {
            height: 70px;
            object-fit: contain;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-soft-primary {
            background-color: #0d6efd1a;
            border: 1px solid #0d6efd40;
            color: #0d6efd;
        }

        .btn-soft-primary:hover {
            background-color: #0d6efd;
            color: #fff;
        }
    </style>
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <!-- Left Image -->
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{ asset('public/assets/images/gym-img-3.jpg') }}" alt="Gym Reset Image"
                                    class="img-fluid h-100 rounded-start object-fit-cover">
                            </div>

                            <!-- Forgot Password Form -->
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand text-center mt-4">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('public/assets/images/gym-logo-1.jpg') }}" alt="Gym Logo">
                                        </a>
                                    </div>

                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20 fw-semibold text-dark mb-2">Forgot Password?</h4>
                                        <p class="text-muted mb-4">
                                            Enter your email address and we’ll send you a link to reset your password.
                                        </p>

                                        <!-- Session Status -->
                                        <x-auth-session-status class="mb-4 text-success fw-semibold"
                                            :status="session('status')" />

                                        <!-- Laravel Password Reset Form -->
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ old('email') }}" required autofocus
                                                    placeholder="Enter your email">
                                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger small" />
                                            </div>

                                            <div class="d-grid mb-0">
                                                <button class="btn btn-soft-primary fw-semibold" type="submit">
                                                    <i class="ri-loop-left-line me-1 fw-bold"></i>
                                                    Reset Password
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end form col -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Login Link -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-white">
                        Back to
                        <a href="{{ route('login') }}" class="text-white fw-bold text-decoration-underline ms-1">
                            Log In
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer footer-alt fw-medium text-center mt-4">
        <span class="text-white">
            &copy; <script>document.write(new Date().getFullYear())</script>
            {{ config('app.name', 'Velonic') }} - Theme by Techzaa
        </span>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
</body>

</html>
