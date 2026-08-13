<?php
session_start();
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]==='POST') {
    $email=$_POST["email"];
    $pass=$_POST["password"];

    $sql=$conn->prepare("select password,name from users where email=?");
    $sql->bind_param('s',$email);
    $sql->execute();
    $sql->bind_result($password,$name);
    $sql->fetch();

    if (password_verify($pass,$password)) {
        $_SESSION['name']=$name;
        header("location:dashboard.php");
    }
}
?>
<!doctype html>

<html lang="en" data-bs-theme="light">

<head>
    <title>Login</title>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous"
>

<style>
    body {
        background-color: #f2f4f7;
    }

    .register-card {
        width: 450px;
        max-width: 95%;
        border: none;
        border-radius: 16px;
    }

    .register-title {
        font-weight: 600;
    }

    .form-control {
        padding: 12px;
        border-radius: 8px;
    }

    .form-control:focus {
        box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
    }

    .register-btn {
        padding: 12px;
        border-radius: 8px;
        font-weight: 500;
    }
</style>


</head>

<body>

<main class="min-vh-100 d-flex align-items-center justify-content-center">

    <form class="register-card bg-white shadow-lg p-4 p-md-5" method="POST">

        <div class="text-center mb-4">
            <h1 class="register-title mb-2">Login Account</h1>
           
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">
                Email
            </label>

            <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                placeholder="Enter your email"
                required
            >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">
                Password
            </label>

            <input
                type="password"
                class="form-control"
                name="password"
                id="password"
                placeholder="Enter your password"
                required
            >
        </div>

        <button
            type="submit"
            class="btn btn-primary w-100 register-btn"
        >
            Login
        </button>

    </form>

</main>

<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXKX/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"
></script>


</body>

</html>
