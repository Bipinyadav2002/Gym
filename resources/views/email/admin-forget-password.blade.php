<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Recover Password | {{ config('app.name', 'GymApp') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('public/assets/images/gym-logo-1.jpg') }}">
    <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        body.authentication-bg {
            background: url('{{ asset('public/assets/images/gym-background-3.jpg') }}') center center / cover no-repeat;
            background-attachment: fixed;
        }

        .card {
            backdrop-filter: blur(6px);
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
        }

        .auth-brand img {
            height: 70px;
            object-fit: contain;
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
    <div class="account-pages pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card p-4">
                        <div class="auth-brand text-center mb-4">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('public/assets/images/gym-logo-1.jpg') }}" alt="Gym Logo">
                            </a>
                        </div>
                        <h4 class="text-dark text-center mb-2">Forgot Password?</h4>
                        <p class="text-muted text-center mb-4">Enter your email to get reset link.</p>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-3 text-success" :status="session('status')" />

                        <!-- Forgot Password Form -->
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                                <x-input-error :messages="$errors->get('email')" class="mt-1 text-danger small" />
                            </div>
                            <div class="d-grid mb-0">
                                <button type="submit" class="btn btn-soft-primary">Reset Password</button>
                            </div>
                        </form>

                        <p class="text-center mt-3">Back to <a href="{{ route('login') }}" class="text-primary">Log
                                In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
</body>

</html>
