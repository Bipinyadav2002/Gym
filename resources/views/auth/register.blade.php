<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Velonic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully responsive admin theme" name="description" />
    <meta content="Techzaa" name="author" />
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <script src="{{ asset('public/assets/js/config.js') }}"></script>
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <!-- Left Image -->
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{ asset('public/assets/images/auth-img.jpg') }}" alt=""
                                    class="img-fluid rounded h-100">
                            </div>

                            <!-- Register Form -->
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div class="auth-brand p-4">
                                        <a href="{{ url('/') }}" class="logo-light">
                                            <img src="{{ asset('public/assets/images/logo.png') }}" alt="logo"
                                                height="22">
                                        </a>
                                        <a href="{{ url('/') }}" class="logo-dark">
                                            <img src="{{ asset('public/assets/images/logo-dark.png') }}" alt="dark logo"
                                                height="22">
                                        </a>
                                    </div>

                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20">Free Sign Up</h4>
                                        <p class="text-muted mb-3">Create your account below</p>

                                        <!-- Laravel Register Form -->
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <!-- Full Name -->
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ old('name') }}" required autofocus
                                                    placeholder="Enter your name">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger small" />
                                            </div>

                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ old('email') }}" required
                                                    placeholder="Enter your email">
                                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger small" />
                                            </div>

                                            <!-- Password -->
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" required placeholder="Enter your password">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger small" />
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control" id="password_confirmation"
                                                    name="password_confirmation" required
                                                    placeholder="Re-enter your password">
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger small" />
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="terms"
                                                        required>
                                                    <label class="form-check-label" for="terms">
                                                        I accept <a href="#" class="text-muted">Terms and
                                                            Conditions</a>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </form>
                                        <!-- end form -->

                                        <div class="text-center mt-4">
                                            <p class="text-muted fs-16 mb-1">Or sign up with</p>
                                            <div class="d-flex gap-2 justify-content-center mt-3">
                                                <a href="#" class="btn btn-soft-primary"><i
                                                        class="ri-facebook-circle-fill"></i></a>
                                                <a href="#" class="btn btn-soft-danger"><i
                                                        class="ri-google-fill"></i></a>
                                                <a href="#" class="btn btn-soft-info"><i
                                                        class="ri-twitter-fill"></i></a>
                                                <a href="#" class="btn btn-soft-dark"><i
                                                        class="ri-github-fill"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end form col -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-dark fw-bold ms-1 text-decoration-underline">
                            Log In
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-alt fw-medium">
        <span class="text-dark-emphasis">
            <script>
                document.write(new Date().getFullYear())
            </script> © Velonic - Theme by Techzaa
        </span>
    </footer>

    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
</body>

</html>
