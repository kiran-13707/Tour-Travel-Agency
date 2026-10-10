<!----------------------------------- header ------------------------------------->
<?php $this->load->view('layout/header');?>

<!----------------------------------- main content ------------------------------->

<style>
    .hotelBook {
        width: 90%;
        position: relative;
        margin: 10px auto;
        /* border: 1px solid #000; */
    }
    .hotelBook .hotelContent {
        display: flex;
    }
    .hotelBook .hotelContent img {
        width: 480px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgb(0,0,0,.2);
        border: 5px solid #fff;
        margin-right: 20px;
    }
    .hotelBook .hotelContent .rightImages img {
        width: 240px;
    } 
    .hotelBook .hotelContent .rightRating {
        width: calc(100% - 720px);
        border: 1px solid lightgrey;
        border-radius: 20px;
        padding: 6px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .hotelBook .hotelContent .rightRating h5 {
        white-space: nowrap;
        width: 80%;
        margin: 7px 0;
        box-shadow: 0 0 20px rgb(0,0,0,.08);
        padding: 18px;
        border-radius: 10px;
    }
    .hotelBook .hotelContent .rightRating h5 span {
        margin-bottom: 20px;
        box-shadow: 0 0 20px rgb(0,0,0,.08);
        padding: 9px 22px;
        border-radius: 10px;
        margin-right: 10px;
    }
    .hotelBook .contentSec {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .hotelBook .contentSec .contentSecLeft {
        width: calc(100% - 250px);
    }
    .hotelBook .contentSec .contentSecLeft .hotelAmenities {
        display: flex;
        align-items: center;
    }
    .hotelBook .contentSec .contentSecLeft .hotelAmenities li {
        margin: 0 10px;
    }
    .hotelBook .contentSec .contentSecRight {
        width: 250px;
    }
    .hotelBook .contentSec .contentSecRight iframe {
        border-radius: 20px;
        box-shadow: 0 0 20px rgb(0,0,0,.08);
        width: 90%;
        height: 200px;
        float: right;
        margin-top: 20px;
    }
    .hotelBook .BookingDetails {
        padding: 20px;
        border: 1px solid lightgrey;
        border-radius: 20px;
        width: 70%;
    }
    .hotelBook .BookingDetails .hotelBookContent {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .hotelBook .BookingDetails .hotelBookContent img {
        width: 90px;
        height: 90px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgb(0,0,0,.1);
    }
    .hotelBook .BookingDetails .hotelBookContent .contents h4,
    .hotelBook .BookingDetails .hotelBookContent .contents h5,
    .hotelBook .BookingDetails .hotelBookContent .contents h6 {
        margin: 0;
        margin-bottom: 10px;
}
    .hotelBook .BookingDetails .hotelBookContent .contents h5 i {
        color: orange;

    }
    .hotelBook .BookingDetails .hotelBookContent .contents span {
        padding: 2px 14px;
        border: 1px solid lightgrey;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: #fff;
        margin: 0 15px;
    }
    .hotelBook .BookingDetails .hotelBookCheckIN-out {
        width: 100%;
        display: flex;
        align-items: center;
        background: #f2f2f2;
        border-top: 1px solid gray;
        margin-top: 15px;
    } 
    .hotelBook .BookingDetails .hotelBookCheckIN-out .checkIN {
        margin-right: 10px;
        padding: 14px 17px;
        white-space: nowrap;
    }
    .hotelBook .BookingDetails .hotelBookCheckIN-out .checkIN,
    .hotelBook .BookingDetails .hotelBookCheckIN-out p {
        font-size: 13px;
    }
    .hotelBook .BookingDetails .hotelBookCheckIN-out .checkIN h6 {
        font-size: 13px;
        font-weight: 500;
        margin: 5px 0;
    }
    .hotelBook .BookingDetails .hotelBookCheckIN-out .checkIN h6 span {
        font-size: 16px;
        font-weight: 600;
        color: #000;
    }
    .hotelBook .BookingDetails .hotelBookCheckIN-out .night {
        padding: 2px 14px;
        border: 1px solid lightgrey;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: #fff;
        margin: 0 15px;
        white-space: nowrap;
    }
    .hotelBook .BookingDetails .hotelBookCheckIN-out .checkIN2 span {
        color: #2f2f2f;
    }
    .hotelBook .BookingDetails .hotelBookCheckIN-out .checkIN2 span b {
        color: #000;
    }
    .guestTitle {
        margin-top: 20px;
        margin-bottom: 15px;
    }

    .guestDetails {
        width: 70%;
        display: flex;
        align-items: flex-end;
        gap: 10px;
        margin-bottom: 30px;
    }

    .guestField {
        flex: 1;
    }

    .guestField label {
        display: block;
        font-size: 13px;
        font-weight: 500;
        margin-bottom: 7px;
    }

    .guestField input {
        width: 100%;
        height: 38px;
        padding: 8px 12px;
        border: 1px solid lightgrey;
        border-radius: 8px;
        outline: none;
        box-sizing: border-box;
    }

    .guestField input:focus {
        border-color: #159ca3;
    }

    #bookNow {
        width: 210px;
        height: 38px;
        border: none;
        border-radius: 8px;
        background: #159ca3;
        color: white;
        cursor: pointer;
    }

    #bookNow:hover {
        background: #12868c;
    }
    .hotelAmenities {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px 20px;
    max-height: 180px;
    overflow-y: auto;
    }

    .hotelAmenities li {
    list-style: none;
    font-size: 14px;
    }
</style>

<!-------------------------------------- Hotel Book ------------------------------>
<?php

    $urlData = explode('?', $_SERVER['QUERY_STRING']);

    $hotelID  = $urlData[0] ?? '';
    $city     = $urlData[1] ?? '';
    $startDate = $urlData[2] ?? '';
    $endDate   = $urlData[3] ?? '';
    $people    = $urlData[4] ?? '1';

    /* Get selected hotel from database */
    $hotel = $this->db
        ->where('id', $hotelID)
        ->get('hotels')
        ->row_array();

    /* If hotel not found */
    if (empty($hotel)) {
        echo "<h3 style='text-align:center;'>Hotel not found</h3>";
        exit;
    }

    /* Calculate nights */
    $nights = 1;

    if (!empty($startDate) && !empty($endDate)) {
        $start = new DateTime($startDate);
        $end = new DateTime($endDate);
        $nights = $start->diff($end)->days;

        if ($nights <= 0) {
            $nights = 1;
        }
    }

?>
<div class="hotelBook">

    <!-- ================= HOTEL IMAGES ================= -->

    <div class="hotelContent">

        <?php
            $mainImage = $hotel['poster'];

            $roomImages = explode(',', $hotel['room_addHotelimages']);

            $image1 = trim($roomImages[0] ?? '');
            $image2 = trim($roomImages[1] ?? '');
        ?>

        <img id="mainHotelImage"
            src="<?php echo base_url('assets/img/Hotel_images/' . $mainImage); ?>"
            alt="<?php echo $hotel['name']; ?>">

        <div class="rightImages">

            <img id="hotelImage1"
                src="<?php echo base_url('assets/img/Hotel_images/' . $image1); ?>"
                alt="<?php echo $hotel['name']; ?>">

            <img id="hotelImage2"
                src="<?php echo base_url('assets/img/Hotel_images/' . $image2); ?>"
                alt="<?php echo $hotel['name']; ?>">

    </div>

        <div class="rightRating">

            <h5>
                <span><?php echo $hotel['rate']; ?></span>
                Very Good
            </h5>

            <h5>
                
                <span><?php echo $hotel['room']; ?></span>
                Room Left

            </h5>

            <h5>
                <span><?php echo $hotel['mrp']; ?></span>
                Rs / night
            </h5>

            <h5>
                <span><?php echo $hotel['discount']; ?></span>
                % Discount
            </h5>

        </div>

    </div>


    <!-- ================= AMENITIES + DESCRIPTION + MAP ================= -->

    <div class="contentSec">

        <div class="contentSecLeft">

            <h4>Amenities</h4>

            <div class="hotelAmenities">
            <?php
                $amenities = explode(',', $hotel['services']);
                foreach ($amenities as $amenity) {
                echo '<li>' . htmlspecialchars(trim($amenity)) . '</li>';
                }
            ?>
            </div>
            <h4>Description</h4>

            <p>
                <?php echo htmlspecialchars($hotel['description']); ?>
            </p>

        </div>


        <div class="contentSecRight">

            <iframe
                src="https://www.google.com/maps?q=<?php echo $hotel['lat']; ?>,<?php echo $hotel['log']; ?>&output=embed"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

    </div>


    <!-- ================= BOOKING DETAILS ================= -->
    
    <h4>Booking Details</h4>

 <div class="BookingDetails">

    <div class="hotelBookContent">

            <div class="contents">

                <h4><?php echo $hotel['name']; ?></h4>

                <h5>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>

                    <span>Couple Friendly</span>
                </h5>

                <h6><?php echo $hotel['location']; ?></h6>

            </div>

            <img
                src="<?php echo base_url('assets/img/Hotel_images/' . $hotel['poster']); ?>"
                alt="<?php echo $hotel['name']; ?>">

    </div>


    <div class="hotelBookCheckIN-out">

        <div class="checkIN">
            <label>CHECK IN</label>
            <h6><?php echo date('D', strtotime($startDate)); ?><span><?php echo date('d M Y', strtotime($startDate)); ?></span></h6>
            <p>12 PM</p>
        </div>

        <p class="night"><?php echo $nights; ?> Night</p>

        <div class="checkIN">
            <label>CHECK OUT</label>
            <h6><?php echo date('D', strtotime($endDate)); ?><span><?php echo date('d M Y', strtotime($endDate)); ?></span></h6>
            <p>12 PM</p>
        </div>

        <div class="checkIN2">
            <span><b><?php echo $nights; ?></b> Nights</span>
            <span><b><?php echo $people; ?></b> People</span>
            <span><b>1</b> Room</span>
        </div>

    </div>

 </div>

    <!-- ================= GUEST DETAILS ================= -->

        <h4 class="guestTitle">Guest Details</h4>

    <div class="guestDetails">

        <div class="guestField">
            <label>Name</label>
            <input type="text" id="bookingName" placeholder="Enter your name">
        </div>

        <div class="guestField">
            <label>Email</label>
            <input type="email" id="bookingEmail" placeholder="Enter your email">
        </div>

        <div class="guestField">
            <label>Mobile</label>
            <input type="number" id="bookingPhone" placeholder="Enter mobile number">
        </div>

        <button type="button" id="bookNow">
            Book Now
        </button>

    </div>
 <!-- </div> -->
 <script>

    document.getElementById("bookNow").addEventListener("click", function () {

        let bookingName = document.getElementById("bookingName").value.trim();
        let bookingEmail = document.getElementById("bookingEmail").value.trim();
        let bookingPhone = document.getElementById("bookingPhone").value.trim();

        if (bookingName == "" || bookingEmail == "" || bookingPhone == "") {
            alert("Please enter all guest details");
            return;
        }

        // URL mathi values levani
        let urlData = window.location.search.substring(1).split("?");

        let hotelID = urlData[0];
        let city = urlData[1];
        let startDate = urlData[2];
        let endDate = urlData[3];
        let peopleValue = urlData[4];

        // Temporary hotel details
        let hotelName = <?php echo json_encode($hotel['name']); ?>;
        let price = <?php echo json_encode($hotel['mrp']); ?>;
        let discount = <?php echo json_encode($hotel['discount']); ?>;

        // Login user ID
        let userID = <?php
            $userdata = $this->session->userdata('userdata');

            if (!empty($userdata['id'])) {
                echo $userdata['id'];
            } else {
                echo 0;
            }
        ?>;

        if (userID == 0) {
            alert("Please login first");
            return;
        }

        let data = {
            hotelID: hotelID,
            hotelName: hotelName,
            startDate: startDate,
            endDate: endDate,
            userID: userID,
            price: price,
            peopleValue: peopleValue,
            discount: discount,
            bookingName: bookingName,
            bookingEmail: bookingEmail,
            bookingPhone: bookingPhone
        };

        fetch("<?php echo base_url('Welcome/bookRoom'); ?>", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {

        console.log(result);

        if (result.message == "Booking successful") {

            alert("Booking successful");

        } else {

            alert("Booking failed: " + (result.error?.message || "Unknown error"));

        }

     })
        .catch(error => {

            console.log(error);
            alert("Something went wrong");

        });

    });

 </script>
</div>


<!------------------------------- footer ---------------------------------> 
    <?php $this->load->view('layout/footer');?> 
 