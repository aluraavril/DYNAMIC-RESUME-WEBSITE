<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'midoofy' && $password === 'turon') {
        $_SESSION['admin_logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.95);
            /* Added semi-transparent white background for visibility */
        }

        .btn-primary {
            background: #667eea;
            border: none;
        }

        .btn-primary:hover {
            background: #5a6fd8;
        }
    </style>
</head>

<body>
    <div class="card p-4" style="width: 400px;">
        <h2 class="text-center mb-4 text-dark">Admin Login</h2> <!-- Changed text color to dark for better contrast -->
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label text-dark">Username</label> <!-- Changed to text-dark -->
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-dark">Password</label> <!-- Changed to text-dark -->
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="index1.php" class="text-dark">Back to Portfolio</a> <!-- Changed to text-dark -->
        </div>
    </div>
</body>

</html>