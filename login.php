<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    /* 🌌 Background */
    body {
        min-height: 100vh;
        background: linear-gradient(135deg, #eef2f7, #d9e2ec);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
    }

    /* Main Card */
    .auth-wrapper {
        width: 900px;
        border-radius: 20px;
        overflow: hidden;
        display: flex;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        background: #fff;
    }

    /* LEFT FORM */
    .auth-left {
        width: 50%;
        padding: 50px;
        background: linear-gradient(135deg, #ffffff, #f8fafc);
    }

    .brand {
        font-size: 14px;
        padding: 6px 12px;
        border-radius: 20px;
        background: #f1f5f9;
        display: inline-block;
        margin-bottom: 20px;
    }

    .auth-left h3 {
        font-weight: 600;
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
        border: none;
        background: #f1f5f9;
    }

    .form-control:focus {
        box-shadow: none;
        background: #e2e8f0;
    }

    /* Error */
    .error {
        color: red;
        font-size: 13px;
    }

    /* Button */
    .btn-submit {
        background: #facc15;
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 500;
    }

    .btn-submit:hover {
        background: #eab308;
    }

    /* Social */
    .social-btn {
        border-radius: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        background: #fff;
    }

    /* Password toggle */
    .password-toggle {
        position: absolute;
        right: 15px;
        top: 12px;
        cursor: pointer;
    }

    /* RIGHT IMAGE */
    .auth-right {
        width: 50%;
        position: relative;
        background: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d') center/cover;
    }

    .auth-right::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.2), transparent);
    }

    /* Floating Card */
    .floating-card {
        position: absolute;
        bottom: 30px;
        left: 30px;
        background: #fff;
        padding: 15px;
        border-radius: 12px;
        width: 180px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        font-size: 12px;
    }

    /* Responsive */
    @media(max-width:768px) {
        .auth-wrapper {
            flex-direction: column;
            width: 95%;
        }

        .auth-left,
        .auth-right {
            width: 100%;
        }

        .auth-right {
            height: 250px;
        }
    }
    </style>
</head>

<body>

    <div class="auth-wrapper">

        <!-- LEFT LOGIN -->
        <div class="auth-left">
            <div class="brand">Crextio</div>

            <h3>Welcome Back</h3>
            <p class="text-muted mb-4">Login to continue</p>

            <form id="loginForm">

                <input type="email" id="email" class="form-control mb-2" placeholder="Email">
                <div class="error mb-2" id="emailError"></div>

                <div class="position-relative">
                    <input type="password" id="password" class="form-control mb-2" placeholder="Password">
                    <i class="bi bi-eye password-toggle" onclick="togglePassword()"></i>
                </div>
                <div class="error mb-2" id="passwordError"></div>

                <button type="submit" class="btn btn-submit w-100 mb-3">Login</button>

            </form>

            <div class="text-center mb-3">or</div>

            <div class="d-flex gap-2">
                <button class="social-btn w-50">
                    <i class="bi bi-apple"></i> Apple
                </button>
                <button class="social-btn w-50">
                    <i class="bi bi-google"></i> Google
                </button>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="auth-right">
            <div class="floating-card">
                <strong>Daily Meeting</strong>
                <div>22 - 29 March</div>
                <small>09:00 AM</small>
            </div>
        </div>

    </div>

    <script>
    /* Password toggle */
    function togglePassword() {
        let input = document.getElementById("password");
        let icon = document.querySelector(".password-toggle");

        if (input.type === "password") {
            input.type = "text";
            icon.classList.replace("bi-eye", "bi-eye-slash");
        } else {
            input.type = "password";
            icon.classList.replace("bi-eye-slash", "bi-eye");
        }
    }

    /* Validation */
    document.getElementById("loginForm").addEventListener("submit", function(e) {
        e.preventDefault();

        let email = document.getElementById("email");
        let password = document.getElementById("password");

        let emailError = document.getElementById("emailError");
        let passwordError = document.getElementById("passwordError");

        let valid = true;

        // Email validation
        if (email.value === "") {
            emailError.innerText = "Email is required";
            valid = false;
        } else if (!email.value.includes("@")) {
            emailError.innerText = "Enter valid email";
            valid = false;
        } else {
            emailError.innerText = "";
        }

        // Password validation
        if (password.value === "") {
            passwordError.innerText = "Password is required";
            valid = false;
        } else if (password.value.length < 6) {
            passwordError.innerText = "Minimum 6 characters";
            valid = false;
        } else {
            passwordError.innerText = "";
        }

        if (valid) {
            alert("Login successful ✅");
        }
    });
    </script>

</body>

</html>