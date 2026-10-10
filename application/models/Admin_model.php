<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_total_hotels()
    {
        return $this->db->count_all('hotels');
    }

    public function get_total_users()
    {
        return $this->db->count_all('users');
    }

    public function get_all_users()
    {
        return $this->db->get('users')->result();
    }

    public function get_all_hotels()
    {
        return $this->db->get('hotels')->result();
    }

    public function get_all_bookings()
    {
        return $this->db->get('book')->result();
    }

    public function get_total_packages()
    {
        return $this->db->count_all('packages');
    }

    public function get_all_packages()
    {
        return $this->db->get('packages')->result();
    }

    public function get_total_bookings()
    {
        return $this->db->count_all('book');
    }

    public function get_recent_bookings()
    {
        return $this->db
                    ->order_by('id', 'DESC')
                    ->limit(5)
                    ->get('book')
                    ->result();
    }

}