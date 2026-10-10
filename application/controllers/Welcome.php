<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public $db;
	 public $session;

	public function index()
	{
		$this->load->view('index');
	}

	public function result()
	{
		$this->load->view('result');
	}

	public function book($hotelID = null, $city = null, $startDate = null, $endDate = null, $people = null){
		$hotel = $this->db
			->where('id', $hotelID)
			->get('hotels')
			->row_array();

		$data['hotel'] = $hotel;
		$data['startDate'] = $startDate;
		$data['endDate'] = $endDate;
		$data['people'] = $people;

		$this->load->view('book', $data);
	}
	public function hotelAmenities()
	{
		$inputData = json_decode(file_get_contents('php://input'), true);
		$city = $inputData['city'];

		$query = "SELECT services FROM hotels WHERE city = ?;";
		$result = $this->db->query($query , array($city))->result_array();

		if ($result) {
			echo json_encode([$result]);
		} else {
			echo json_encode(["status" => "error", "message" => "No amenities found for then given city"]);
		}
		
	}

	public function hotels()
	{
		$inputData = json_decode(file_get_contents('php://input'), true);
		// echo json_encode($inputData);

		if (empty($inputData['city'])) {
			echo json_encode(["status" => "error" , "message" => "city is required"]);
		}

		$amenities = isset($inputData['amenities']) ? $inputData['amenities'] : [];
		$price = isset($inputData['price']) ? $inputData['price'] : null;
		$rate = isset($inputData['rating']) ? $inputData['rating'] : null;
		$city = $inputData['city'];

		
		// Start query
		$query = "SELECT * FROM hotels WHERE city = ?";
		$queryPramas = [$city];
		
		// Add Amenities
		if (!empty($amenities)) {
			$likeConditions = [];

			foreach ($amenities as $aminty) {
				$likeConditions[] = "services LIKE ?";
				$queryPramas[] = '%' . $aminty . '%';
			}

			$query .= " AND (" . implode(" AND " , $likeConditions) . ")";
		}

		// ADD price

		if (!empty($price)) {
    		$query .= " AND mrp <= ?";
    		$queryPramas[] = $price;
		}
		

		
		// ADD Rate
		if (!empty($rate)) {
    		$query .= " AND rate <= ?";
    		$queryPramas[] = $rate;
	}

		$result = $this->db->query($query , $queryPramas)->result_array();

		if ($result) {
			echo json_encode([$result]);
		} else {
			echo json_encode(["status" => "error", "message" => "Data not found"]);
		}
		

	}

	public function bookRoom(){
		$inputData = json_decode(file_get_contents('php://input'), true);

		$data = [
			'hotelID'      => $inputData['hotelID'],
			'hotelName'    => $inputData['hotelName'],
			'startDate'    => $inputData['startDate'],
			'endDate'      => $inputData['endDate'],
			'userID'       => $inputData['userID'],
			'price'        => $inputData['price'],
			'peopleValue'  => $inputData['peopleValue'],
			'discount'     => $inputData['discount'],
			'bookingName'  => $inputData['bookingName'],
			'bookingEmail' => $inputData['bookingEmail'],
			'bookingPhone' => $inputData['bookingPhone']
		];

		$this->db->insert('book', $data);

		if ($this->db->affected_rows() > 0) {
			echo json_encode([
				'message' => 'Booking successful'
			]);
		} else {
			echo json_encode([
				'message' => 'Booking failed'
			]);
		}
	}
	
	
}
