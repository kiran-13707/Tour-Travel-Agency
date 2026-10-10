<!-- <?php $this->load->view('layout/header'); ?> -->
<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/admin.css'); ?>">

<?php $this->load->view('admin/sidebar'); ?>

<style>
.admin-page {
    padding: 30px;
    margin-left: 250px;
}

.admin-page h2 {
    margin-bottom: 20px;
}

.hotel-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
}

.hotel-table th,
.hotel-table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.hotel-table th {
    background: #172033 !important;
    color: #fff !important;
    font-weight: bold;
}

.hotel-table tr:hover {
    background: #f9f9f9;
}
</style>

<div class="admin-page">

    <h2>Hotels</h2>

    <table class="hotel-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Hotel Name</th>
                <th>City</th>
                <th>Rate</th>
                <th>MRP</th>
                <th>Location</th>
            </tr>
        </thead>

        <tbody>

        <?php if (!empty($hotels)) { ?>

            <?php foreach ($hotels as $hotel) { ?>

                <tr>
                    <td><?php echo $hotel->id; ?></td>
                    <td><?php echo $hotel->name; ?></td>
                    <td><?php echo $hotel->city; ?></td>
                    <td><?php echo $hotel->rate; ?></td>
                    <td><?php echo $hotel->mrp; ?></td>
                    <td><?php echo $hotel->location; ?></td>
                </tr>

            <?php } ?>

        <?php } else { ?>

            <tr>
                <td colspan="6">No hotels found.</td>
            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>