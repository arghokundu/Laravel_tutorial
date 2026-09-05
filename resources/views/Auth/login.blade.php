<!DOCTYPE html>
<html lang="en" data-theme="light" data-bs-theme="light">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="User Login">

    <title>Login | AdminHub</title>


    <!-- Google Fonts -->

    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">


    <!-- Bootstrap 5.3.3 -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- Common CSS -->

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/common.css') }}">

</head>


<body class="bg-light">


    <div class="container">

        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-12 col-sm-10 col-md-8 col-lg-5">


                <!-- Card -->

                <div class="card border-0 shadow-sm rounded-3">


                    <!-- Header -->

                    <div class="card-header bg-white text-center border-0 pt-4">

                        <h3 class="fw-bold text-dark mb-1">
                            Welcome Back
                        </h3>

                        <p class="text-muted small mb-0">
                            Login to your account
                        </p>

                    </div>


                    <!-- Body -->

                    <div class="card-body p-4">


                        <!-- Success Message -->

                        @if(session('success'))

                            <div class="alert alert-success alert-dismissible fade show">

                                <i class="bi bi-check-circle me-2"></i>

                                {{ session('success') }}

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert">
                                </button>

                            </div>

                        @endif


                        <!-- Error Message -->

                        @if(session('error'))

                            <div class="alert alert-danger">

                                <i class="bi bi-exclamation-circle me-2"></i>

                                {{ session('error') }}

                            </div>

                        @endif


                        <form action="#" method="POST">
                            @csrf


                            <!-- Email -->

                            <div class="mb-3">

                                <label
                                    for="email"
                                    class="form-label fw-semibold">

                                    Email

                                </label>


                                <div class="input-group">

                                    <span class="input-group-text bg-light">

                                        <i class="bi bi-envelope"></i>

                                    </span>


                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        value="{{ old('email') }}"
                                        placeholder="Enter your email"
                                        autocomplete="email"
                                        required>

                                </div>


                                @error('email')

                                    <div class="text-danger small mt-1">

                                        <i class="bi bi-exclamation-circle me-1"></i>

                                        {{ $message }}

                                    </div>

                                @enderror

                            </div>


                            <!-- Password -->

                            <div class="mb-3">

                                <label
                                    for="password"
                                    class="form-label fw-semibold">

                                    Password

                                </label>


                                <div class="input-group">

                                    <span class="input-group-text bg-light">

                                        <i class="bi bi-lock"></i>

                                    </span>


                                    <input
                                        type="password"
                                        name="password"
                                        id="loginPassword"
                                        class="form-control"
                                        placeholder="Enter your password"
                                        autocomplete="current-password"
                                        required>


                                    <button
                                        type="button"
                                        class="btn btn-outline-secondary"
                                        onclick="togglePassword(
                                            'loginPassword',
                                            'loginPasswordIcon'
                                        )">

                                        <i
                                            id="loginPasswordIcon"
                                            class="bi bi-eye">
                                        </i>

                                    </button>

                                </div>


                                @error('password')

                                    <div class="text-danger small mt-1">

                                        <i class="bi bi-exclamation-circle me-1"></i>

                                        {{ $message }}

                                    </div>

                                @enderror

                            </div>


                            <!-- Remember / Forgot -->

                            <div
                                class="d-flex justify-content-between align-items-center mb-4">


                                <div class="form-check">

                                    <input
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        class="form-check-input">


                                    <label
                                        for="remember"
                                        class="form-check-label small">

                                        Remember me

                                    </label>

                                </div>


                                <a
                                    href="#"
                                    class="small text-decoration-none">

                                    Forgot Password?

                                </a>


                            </div>


                            <!-- Login Button -->

                            <div class="d-grid">

                                <button type="submit" class="btn btn-primary py-2 fw-semibold">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>
                                    Login
                                </button>

                            </div>


                        </form>


                        <!-- Register -->

                        <div class="text-center mt-4">

                            <span class="text-muted small">

                                Don't have an account?

                            </span>


                            <a
                                href="/register"
                                class="text-decoration-none fw-semibold small">

                                Register

                            </a>

                        </div>


                    </div>

                </div>


                <!-- Copyright -->

                <div class="text-center mt-3">

                    <small class="text-muted">

                        © {{ date('Y') }} AdminHub.
                        All rights reserved.

                    </small>

                </div>


            </div>

        </div>

    </div>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- Password Toggle -->

    <script>

        function togglePassword(inputId, iconId)
        {
            const input = document.getElementById(inputId);

            const icon = document.getElementById(iconId);


            if (input.type === "password")
            {
                input.type = "text";

                icon.classList.remove("bi-eye");

                icon.classList.add("bi-eye-slash");
            }
            else
            {
                input.type = "password";

                icon.classList.remove("bi-eye-slash");

                icon.classList.add("bi-eye");
            }
        }

    </script>


</body>

</html>