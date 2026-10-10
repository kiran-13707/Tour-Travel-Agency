<!-- <?php $this->load->view('layout/header'); ?> -->

<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.css'); ?>">

<?php $this->load->view('admin/sidebar'); ?>

<style>
.admin-page {
    padding: 30px;
    margin-left: 240px;
}

.admin-page h2 {
    margin-bottom: 25px;
}

.report-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    width: 100%;
}

.report-card {
    width: 100%;
    padding: 25px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.report-card h3 {
    margin: 0 0 12px;
    font-size: 17px;
}

.report-card p {
    margin: 0;
    font-size: 28px;
    font-weight: bold;
    color: #007bff;
}
</style>

<div class="admin-page">

    <h2>Reports</h2>

    <div class="report-container">

        <div class="report-card">
            <h3>Total Users</h3>
            <p><?php echo $total_users; ?></p>
        </div>

        <div class="report-card">
            <h3>Total Hotels</h3>
            <p><?php echo $total_hotels; ?></p>
        </div>

        <div class="report-card">
            <h3>Total Bookings</h3>
            <p><?php echo $total_bookings; ?></p>
        </div>

    </div>

</div>