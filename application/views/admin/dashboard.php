<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.css'); ?>">
    <title>Admin Dashboard - Tour Travel Agency</title>

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

        .logout {
            margin-top: 30px;
            background: #dc3545;
        }

        .logout:hover {
            background: #b02a37 !important;
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
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .topbar h1 {
            color: #222;
            font-size: 26px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .card h3 {
            color: #666;
            margin-bottom: 12px;
            font-size: 15px;
        }

        .card p {
            font-size: 30px;
            font-weight: bold;
            color: #007bff;
        }

        .recent {
            margin-top: 25px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .recent h2 {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<?php $this->load->view('admin/sidebar'); ?>


<!-- Main Content -->
<div class="main">

    <div class="topbar">
        <h1>Dashboard</h1>
        <p>Welcome to Tour Travel Agency Admin Panel</p>
    </div>


    <!-- Dashboard Cards -->
    <div class="cards">

        <div class="card">
            <h3>Total Users</h3>
            <p><?php echo isset($total_users) ? $total_users : 0; ?></p>
        </div>

        <div class="card">
            <h3>Total Hotels</h3>
            <p><?php echo isset($total_hotels) ? $total_hotels : 0; ?></p>
        </div>

        <div class="card">
            <h3>Total Bookings</h3>
            <p><?php echo isset($total_bookings) ? $total_bookings : 0; ?></p>
        </div>

        <div class="card">
            <h3>Total Packages</h3>
            <p><?php echo isset($total_packages) ? $total_packages : 0; ?></p>
        </div>

    </div>


    <!-- Recent Bookings -->
    <!-- Recent Bookings -->
    <div class="recent">

        <h2>Recent Bookings</h2>

        <?php if (!empty($recent_bookings)) { ?>

            <table style="width:100%; border-collapse:collapse;">

                <tr>
                    <th style="padding:12px; border:1px solid #ddd; text-align:left;">ID</th>
                    <th style="padding:12px; border:1px solid #ddd; text-align:left;">Hotel</th>
                    <th style="padding:12px; border:1px solid #ddd; text-align:left;">Booking Name</th>
                    <th style="padding:12px; border:1px solid #ddd; text-align:left;">Start Date</th>
                    <th style="padding:12px; border:1px solid #ddd; text-align:left;">End Date</th>
                    <th style="padding:12px; border:1px solid #ddd; text-align:left;">People</th>
                    <th style="padding:12px; border:1px solid #ddd; text-align:left;">Price</th>
                </tr>

                <?php foreach ($recent_bookings as $booking) { ?>

                    <tr>
                        <td style="padding:12px; border:1px solid #ddd;">
                            <?php echo $booking->id; ?>
                        </td>

                        <td style="padding:12px; border:1px solid #ddd;">
                            <?php echo $booking->hotelName; ?>
                        </td>

                        <td style="padding:12px; border:1px solid #ddd;">
                            <?php echo $booking->bookingName; ?>
                        </td>

                        <td style="padding:12px; border:1px solid #ddd;">
                            <?php echo $booking->startDate; ?>
                        </td>

                        <td style="padding:12px; border:1px solid #ddd;">
                            <?php echo $booking->endDate; ?>
                        </td>

                        <td style="padding:12px; border:1px solid #ddd;">
                            <?php echo $booking->peopleValue; ?>
                        </td>

                        <td style="padding:12px; border:1px solid #ddd;">
                            ₹<?php echo $booking->price; ?>
                        </td>
                    </tr>

                <?php } ?>

            </table>

        <?php } else { ?>

            <p>No bookings available yet.</p>

        <?php } ?>

    </div>

</div>

</body>
</html>