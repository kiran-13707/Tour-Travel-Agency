<?php
$current_page = $this->uri->segment(2);
?>

<style>
.admin-sidebar {
    position: fixed;
    width: 240px;
    height: 100vh;
    background: #1e293b;
    color: white;
    padding: 25px 15px;
    top: 0;
    left: 0;
}

.admin-sidebar h2 {
    text-align: center;
    margin-bottom: 35px;
    font-size: 20px;
    color: white;
}

.admin-sidebar a {
    display: block;
    color: white;
    text-decoration: none;
    padding: 13px 15px;
    margin-bottom: 8px;
    border-radius: 6px;
}

.admin-sidebar a:hover {
    background: #334155;
}

.admin-sidebar a.active {
    background: #3498db !important;
    color: white !important;
}

.admin-sidebar a.active:hover {
    background: #3498db !important;
    color: white !important;
}

.admin-sidebar a.logout-link {
    margin-top: 30px;
    background: #dc3545 !important;
    color: white !important;
}

.admin-sidebar a.logout-link:hover {
    background: #b02a37 !important;
}
</style>

<div class="admin-sidebar">

    <h2>Tour Travel<br>Admin</h2>

    <a href="<?php echo base_url('admin/dashboard'); ?>"
       class="<?php echo ($current_page == 'dashboard' || $current_page == '') ? 'active' : ''; ?>">
        Dashboard
    </a>

    <a href="<?php echo base_url('admin/users'); ?>"
       class="<?php echo ($current_page == 'users') ? 'active' : ''; ?>">
        Users
    </a>

    <a href="<?php echo base_url('admin/hotels'); ?>"
       class="<?php echo ($current_page == 'hotels') ? 'active' : ''; ?>">
        Hotels
    </a>

    <a href="<?php echo base_url('admin/bookings'); ?>"
       class="<?php echo ($current_page == 'bookings') ? 'active' : ''; ?>">
        Bookings
    </a>

    <a href="<?php echo base_url('admin/packages'); ?>"
       class="<?php echo ($current_page == 'packages') ? 'active' : ''; ?>">
        Tours / Packages
    </a>

    <a href="<?php echo base_url('admin/reports'); ?>"
       class="<?php echo ($current_page == 'reports') ? 'active' : ''; ?>">
        Reports
    </a>

    <a href="<?php echo base_url('admin/logout'); ?>"
       class="logout-link">
        Logout
    </a>

</div>