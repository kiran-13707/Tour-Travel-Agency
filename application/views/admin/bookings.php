<!-- <?php $this->load->view('layout/header'); ?> -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.css'); ?>">

<?php $this->load->view('admin/sidebar'); ?>

<style>
.admin-page {
    padding: 30px;
    margin-left: 240px;
}

.admin-page h2 {
    margin-bottom: 20px;
}

.booking-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    font-size: 14px;
}

.booking-table th,
.booking-table td {
    padding: 12px 10px;
    border: 1px solid #ddd;
    text-align: left;
    white-space: nowrap;
}

.booking-table th {
    background: #1e293b !important;
    color: white !important;
    font-weight: 600;
}

.booking-table tr:hover {
    background: #f9f9f9;
}

.table-wrapper {
    overflow-x: auto;
}
</style>

<div class="admin-page">

    <h2>Bookings</h2>

    <div class="table-wrapper">

        <table class="booking-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hotel</th>
                    <th>Booking Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>People</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>User ID</th>
                    <th>Created At</th>
                </tr>
            </thead>

            <tbody>

            <?php if (!empty($bookings)) { ?>

                <?php foreach ($bookings as $booking) { ?>

                    <tr>
                        <td><?php echo $booking->id; ?></td>

                        <td>
                            <?php echo $booking->hotelName; ?>
                        </td>

                        <td>
                            <?php echo $booking->bookingName; ?>
                        </td>

                        <td>
                            <?php echo $booking->bookingEmail; ?>
                        </td>

                        <td>
                            <?php echo $booking->bookingPhone; ?>
                        </td>

                        <td>
                            <?php echo $booking->startDate; ?>
                        </td>

                        <td>
                            <?php echo $booking->endDate; ?>
                        </td>

                        <td>
                            <?php echo $booking->peopleValue; ?>
                        </td>

                        <td>
                            ₹<?php echo $booking->price; ?>
                        </td>

                        <td>
                            <?php echo $booking->discount; ?>%
                        </td>

                        <td>
                            <?php echo $booking->userID; ?>
                        </td>

                        <td>
                            <?php echo $booking->create_at; ?>
                        </td>
                    </tr>

                <?php } ?>

            <?php } else { ?>

                <tr>
                    <td colspan="12">No bookings found.</td>
                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>