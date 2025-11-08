<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | {{ config('app.name', 'Velonic') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Gym registration page with Velonic theme" name="description" />
    <meta content="Techzaa" name="author" />

    <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <script src="{{ asset('public/assets/js/config.js') }}"></script>

    <!-- App CSS -->
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom Page Style -->
    <style>
        body.authentication-bg {
            background: url('{{ asset('public/assets/images/gym-background-2.jpg') }}') center center / cover no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .card {
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.85);
            border-radius: 15px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
        }

        .footer {
            color: #fff;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
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
                            <!-- Left Side Image -->
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="{{ asset('public/assets/images/gym-img-2.jpg') }}" alt="Gym Illustration"
                                    class="img-fluid h-100 object-cover rounded-start">
                            </div>

                            <!-- Register Form -->
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <!-- Logo -->
                                    <div class="auth-brand text-center mt-4">
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('public/assets/images/gym-logo-1.jpg') }}" alt="Gym Logo"
                                                height="80" class="mb-2">
                                        </a>
                                    </div>

                                    <!-- Form -->
                                    <div class="p-4 my-auto">
                                        <h4 class="fs-20 fw-semibold mb-2 text-dark">Free Sign Up</h4>
                                        <p class="text-muted mb-4">Create your account below</p>

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
                                                <label for="email" class="form-label">Email Address</label>
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

                                            <!-- Terms -->
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="terms"
                                                        required>
                                                    <label class="form-check-label" for="terms">
                                                        I accept <a href="#" class="text-primary">Terms and
                                                            Conditions</a>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="d-grid mb-0">
                                                <button class="btn btn-primary fw-semibold" type="submit">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </form>

                                        <!-- Social Buttons -->
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
                                    <!-- end form -->
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Login Link -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-white">
                        Already have an account?
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
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> {{ config('app.name', 'Velonic') }} - Theme by Techzaa
        </span>
    </footer>

    <!-- JS -->
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
</body>

</html>
