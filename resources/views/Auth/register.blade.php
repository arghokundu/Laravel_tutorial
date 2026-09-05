<!DOCTYPE html>
<html lang="en" data-theme="light" data-bs-theme="light">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="User Registration">

    <title>Register | AdminHub</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

</head>

<body class="bg-light">

    <div class="container">

        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-12 col-sm-10 col-md-8 col-lg-5">

                <div class="card border-0 shadow-sm rounded-3">

                    <!-- Card Header -->
                    <div class="card-header bg-white text-center border-0 pt-4">

                        <h3 class="fw-bold text-dark mb-1">
                            Register User
                        </h3>

                        <p class="text-muted small mb-0">
                            Create your account
                        </p>

                    </div>


                    <!-- Card Body -->
                    <div class="card-body p-4">

                        <form action="#" method="POST">

                            @csrf


                            <!-- Name -->
                            <div class="mb-3">

                                <label for="name" class="form-label fw-semibold">

                                    Name

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-person"></i>
                                    </span>

                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}" placeholder="Enter your name">

                                </div>

                                {{-- @error('name') --}}
                                <span class="text-danger small">
                                    {{-- {{ $message }} --}}
                                </span>
                                {{-- @enderror --}}

                            </div>


                            <!-- Email -->
                            <div class="mb-3">

                                <label for="email" class="form-label fw-semibold">

                                    Email

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-envelope"></i>
                                    </span>

                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email') }}" placeholder="Enter your email">

                                </div>

                                {{-- @error('email') --}}
                                <span class="text-danger small">
                                    {{-- {{ $message }} --}}
                                </span>
                                {{-- @enderror --}}

                            </div>


                            <!-- Password -->
                            <div class="mb-3">

                                <label for="password" class="form-label fw-semibold">

                                    Password

                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-lock"></i>
                                    </span>

                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Enter password">

                                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword(
                                            'password','passwordIcon')">
                                        <i id="passwordIcon" class="bi bi-eye">
                                        </i>
                                    </button>
                                </div>
                                {{-- @error('password') --}}
                                <span class="text-danger small">
                                    {{-- {{ $message }} --}}
                                </span>
                                {{-- @enderror --}}
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-semibold">
                                    Confirm Password
                                </label>

                                <div class="input-group">
                                    <span class="input-group-text bg-light">
                                        <i class="bi bi-lock-fill"></i>
                                    </span>

                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control" placeholder="Confirm password">

                                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword(
                                            'password_confirmation',
                                            'confirmPasswordIcon')">
                                        <i id="confirmPasswordIcon" class="bi bi-eye">
                                        </i>
                                    </button>
                                </div>
                                {{-- @error('password_confirmation') --}}
                                <span class="text-danger small">
                                    {{-- {{ $message }} --}}
                                </span>
                                {{-- @enderror --}}
                            </div>
                            <!-- Register Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary py-2 fw-semibold">
                                    <i class="bi bi-person-plus me-2"></i>
                                    Register
                                </button>
                            </div>
                        </form>
                        <!-- Login Link -->
                        <div class="text-center mt-4">
                            <span class="text-muted small">
                                Already have an account?
                            </span>
                            <a href="/login" class="text-decoration-none fw-semibold small">
                                Login
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Copyright -->
                <div class="text-center mt-3">
                    <small class="text-muted">
                        © {{ date('Y') }} AdminHub. All rights reserved.
                    </small>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


    <!-- Password Toggle -->

    <script>
    function togglePassword(inputId, iconId) {
        const input = document.getElementById(inputId);

        const icon = document.getElementById(iconId);


        if (input.type === "password") {
            input.type = "text";

            icon.classList.remove("bi-eye");

            icon.classList.add("bi-eye-slash");
        } else {
            input.type = "password";

            icon.classList.remove("bi-eye-slash");

            icon.classList.add("bi-eye");
        }
    }
    </script>

</body>

</html>