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

.package-table {
    width: 100%;
    border-collapse: collapse;
    background: #fff;
}

.package-table th,
.package-table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
}

.package-table th {
    background: #1e293b !important;
    color: white !important;
    font-weight: 600;
}

.package-table tr:hover {
    background: #f9f9f9;
}
</style>

<div class="admin-page">

    <h2>Tour Packages</h2>

    <table class="package-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Package Name</th>
                <th>Destination</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

        <?php if (!empty($packages)) { ?>

            <?php foreach ($packages as $package) { ?>

                <tr>
                    <td><?php echo $package->id; ?></td>
                    <td><?php echo $package->package_name; ?></td>
                    <td><?php echo $package->destination; ?></td>
                    <td><?php echo $package->duration; ?></td>
                    <td>₹<?php echo $package->price; ?></td>
                    <td><?php echo $package->description; ?></td>
                    <td><?php echo $package->status; ?></td>
                </tr>

            <?php } ?>

        <?php } else { ?>

            <tr>
                <td colspan="7">No packages found.</td>
            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>