<!DOCTYPE html>
<html>
<head>
    <title>Users - Admin Panel</title>

    <link rel="stylesheet"
          href="<?php echo base_url('assets/admin/css/admin.css'); ?>">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
        }

        .sidebar {
            position: fixed;
            width: 240px;
            height: 100vh;
            background: #1e293b;
            color: white;
            padding: 25px 15px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 35px;
            font-size: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 13px 15px;
            margin-bottom: 8px;
            border-radius: 6px;
        }

        .sidebar a:hover {
            background: #334155;
        }

        .sidebar .active {
            background: #007bff;
        }

        .logout {
            margin-top: 30px;
            background: #dc3545;
        }

        .main {
            margin-left: 240px;
            padding: 30px;
        }

        .topbar {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .topbar h1 {
            margin-bottom: 5px;
        }

        .table-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #1e293b;
            color: white;
        }

        tr:hover {
            background: #f5f5f5;
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<?php $this->load->view('admin/sidebar'); ?>


<!-- Main -->
<div class="main">

    <div class="topbar">
        <h1>Users</h1>
        <p>Registered users of Tour Travel Agency</p>
    </div>

    <div class="table-box">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    
                    <th>Phone</th>
                </tr>
            </thead>

            <tbody>

                <?php if (!empty($users)) { ?>

                    <?php foreach ($users as $user) { ?>

                        <tr>

                            <td>
                                <?php echo $user->id; ?>
                            </td>

                            <td>
                                <?php echo $user->name; ?>
                            </td>

                            <td><?php echo $user->mobile; ?></td>

                        </tr>

                    <?php } ?>

                <?php } else { ?>

                    <tr>
                        <td colspan="4">
                            No users found.
                        </td>
                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>