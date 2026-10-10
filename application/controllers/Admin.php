<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == 'admin' && $password == '12345') {

            $this->session->set_userdata('admin_logged_in', true);

            redirect('admin/dashboard');

        } else {

            echo "<script>
                    alert('Invalid Username or Password');
                    window.location.href='" . base_url('admin') . "';
                </script>";
        }
    }

    public function dashboard()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data['total_hotels'] = $this->Admin_model->get_total_hotels();
        $data['total_users'] = $this->Admin_model->get_total_users();
        $data['total_bookings'] = $this->Admin_model->get_total_bookings();
        $data['total_packages'] = $this->Admin_model->get_total_packages();
        $data['recent_bookings'] = $this->Admin_model->get_recent_bookings();

        $this->load->view('admin/dashboard', $data);
    }

    public function users()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data['users'] = $this->Admin_model->get_all_users();

        $this->load->view('admin/users', $data);
    }

    public function hotels()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data['hotels'] = $this->Admin_model->get_all_hotels();

        $this->load->view('admin/hotels', $data);
    }

    public function bookings()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data['bookings'] = $this->Admin_model->get_all_bookings();

        $this->load->view('admin/bookings', $data);
    }

    public function reports()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data['total_users'] = $this->Admin_model->get_total_users();
        $data['total_hotels'] = $this->Admin_model->get_total_hotels();
        $data['total_bookings'] = $this->Admin_model->get_total_bookings();

        $this->load->view('admin/reports', $data);
    }

    public function packages()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('admin');
        }

        $data['packages'] = $this->Admin_model->get_all_packages();

        $this->load->view('admin/packages', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('admin');
    }
}