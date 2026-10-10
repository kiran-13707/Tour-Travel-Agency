<!DOCTYPE html>
<html>
<head>
    <title>Admin Login - Tour Travel Agency</title>

    <link rel="stylesheet"
          href="<?php echo base_url('assets/admin/css/admin.css'); ?>">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f2f5f9;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 400px;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.12);
        }

        .login-box h1 {
            text-align: center;
            margin-bottom: 8px;
            color: #222;
        }

        .login-box .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        .login-btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 6px;
            background: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-btn:hover {
            background: #0056b3;
        }

        .admin-title {
            text-align: center;
            color: #007bff;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<div class="login-box">

    <div class="admin-title">
        TOUR TRAVEL AGENCY
    </div>

    <h1>Admin Login</h1>

    <p class="subtitle">
        Login to access Admin Panel
    </p>

    <form method="post"
          action="<?php echo base_url('admin/login'); ?>">

        <div class="form-group">
            <label>Username</label>
            <input type="text"
                   name="username"
                   placeholder="Enter username"
                   required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password"
                   name="password"
                   placeholder="Enter password"
                   required>
        </div>

        <button type="submit" class="login-btn">
            Login
        </button>

    </form>

</div>

</body>
</html>