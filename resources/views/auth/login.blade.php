<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Laravel Login Page styled with Velonic theme" name="description" />
    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('public/assets/js/config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden">
                        <div class="row g-0">
                            <!-- Left Side Image -->
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="{{ asset('public/assets/images/auth-img.jpg') }}" alt="Auth Image"
                                    class="img-fluid rounded h-100">
                            </div>

                            <!-- Right Side Login Form -->
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
                                        <h4 class="fs-20">Sign In</h4>
                                        <p class="text-muted mb-3">Enter your email and password to access your account.
                                        </p>

                                        <!-- Laravel Login Form -->
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <!-- Email -->
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email address</label>
                                                <input type="email" name="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" required autofocus
                                                    placeholder="Enter your email">
                                                @error('email')
                                                    <span class="invalid-feedback d-block"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            <div class="mb-3">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}"
                                                        class="text-muted float-end">
                                                        <small>Forgot your password?</small>
                                                    </a>
                                                @endif
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    required placeholder="Enter your password">
                                                @error('password')
                                                    <span class="invalid-feedback d-block"
                                                        role="alert">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Remember Me -->
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="remember_me"
                                                        name="remember">
                                                    <label class="form-check-label" for="remember_me">Remember
                                                        me</label>
                                                </div>
                                            </div>

                                            <!-- Submit -->
                                            <div class="mb-0 text-start">
                                                <button class="btn btn-soft-primary w-100" type="submit">
                                                    <i class="ri-login-circle-fill me-1"></i>
                                                    <span class="fw-bold">Log In</span>
                                                </button>
                                            </div>

                                            <!-- Social Login Buttons -->
                                            <div class="text-center mt-4">
                                                <p class="text-muted fs-16">Sign in with</p>
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
                                        </form>
                                        <!-- end form -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Signup Link -->
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-dark-emphasis">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-dark fw-bold ms-1 text-decoration-underline">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer footer-alt fw-medium text-center">
        <span class="text-dark">
            <script>
                document.write(new Date().getFullYear())
            </script> © {{ config('app.name') }} - Theme by Techzaa
        </span>
    </footer>

    <!-- JS -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
</body>

</html>
