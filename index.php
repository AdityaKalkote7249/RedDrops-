<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Homepage - Red Drops</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Red Drop">
    <link rel="shortcut icon" href="./assets/img/favicon.png" />

    <!--Bootstrap and other Links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--Styles-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/less/layout.less" />
    <style>
        .navbar-right li a.active {
    color: #980000; /* Change color for active link */
}

    </style>

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/jquery.stellar.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>

    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/waypoints-sticky.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>

    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/custom-scripts.js"></script>
    <script src="./assets/js/main.js"></script>

</head>

<body>
    <div class="preload">
        <img src="./assets/img/blooddrop.gif" alt="Loading">
    </div>

    <!--Header-->

    <header class="main-header clearfix">
        <section class="header-wrapper navgiation-wrapper">
            <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.php"><img src="./assets/img/rops (297 x 69 px).jpg"
                                alt="Red Drops"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="./index.php" class="active">Home</a></li>
                            <li><a href="./about.php">About Us</a></li>
                            <li><a href="./faq.html">FAQ</a></li>
                            <li><a href="./gallery.html">Gallery</a></li>
                            <li><a href="./contactusfinal.php">Contact Us</a></li>

                            <?php
                            session_start();
                            if (isset($_SESSION['user_data'])) {
                                // User is logged in
                                $user_data = $_SESSION['user_data'];
                                $user_image = $user_data['image_path'];
                                $user_name = $user_data['f_name'];

                                echo ' <li><a href="./addbloodbankfinal.php">Add Blood Bank</a></li>';

                                echo '<li>
                                <a href="./profile.php" class="profile" style="margin-top: -1rem;"> 
                                    <img src="' . $user_image . ' " alt="" srcset="" class="img-fluid  " width="45px">
                                </a>
                            </li>';
                                echo '  <li>
                                <a href="">
                                    <label for="img" class="m-auto mb-4"> ' . $user_name . '</label>
                                </a>
                            </li>';
                                echo '<li  ><a href="./logout.php"><i class="fa fa-sign-out"></i></a></li>';
                            } else {
                                // User is not logged in
                                echo '<li><a href="./signup.php">Register</a></li>';
                                echo '<li><a href="./login.php">Login</a></li>';

                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header>



    <!--Form and Red Drops-->
    <section class="section-banner" data-bg_img="./assets/img/bg-1.jpg" data-bg_color="#111111" data-bg_opacity="0.4">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="banner-content">
                        <div class="text-box">
                            <h1>RED <span>DR0PS</span></h1>
                        </div>
                        <div class="blood">
                            <h1>RED <span>DR0PS</span></h1>
                        </div>
                        <div class="lookb">
                            <span class="lookdonor">LOOKING FOR </span><span class="lookdonor2">BLOOD BANK ?</span>
                        </div>
                    </div>
                    <div class="donor-form">
                        <form action="search.php" method="post">
                            <label for="district">District:-</label>
                            <select id="selectDistrict" name="district" required placeholder="select" >
                                <option value="none" selected disabled>Select Dist.</option>
                                <option value="Ahmednagar">Ahmednagar</option>
                                <option value="Akola">Akola</option>
                                <option value="Amravati">Amravati</option>
                                <option value="Aurangabad">Aurangabad</option>
                                <option value="Beed">Beed</option>
                                <option value="Bhandara">Bhandara</option>
                                <option value="Buldhana">Buldhana</option>
                                <option value="Chandrapur">Chandrapur</option>
                                <option value="Dhule">Dhule</option>
                                <option value="Gadchiroli">Gadchiroli</option>
                                <option value="Gondia">Gondia</option>
                                <option value="Hingoli">Hingoli</option>
                                <option value="Jalgaon">Jalgaon</option>
                                <option value="Jalna">Jalna</option>
                                <option value="Kolhapur">Kolhapur</option>
                                <option value="Latur">Latur</option>
                                <option value="Mumbai">Mumbai</option>

                                <option value="Nagpur">Nagpur</option>
                                <option value="Nanded">Nanded</option>
                                <option value="Nandurbar">Nandurbar</option>
                                <option value="Nashik">Nashik</option>
                                <option value="Osmanabad">Osmanabad</option>
                                <option value="Palghar">Palghar</option>
                                <option value="Parbhani">Parbhani</option>
                                <option value="Pune">Pune</option>
                                <option value="Raigad">Raigad</option>
                                <option value="Ratnagiri">Ratnagiri</option>
                                <option value="Sangli">Sangli</option>
                                <option value="Satara">Satara</option>
                                <option value="Sindhudurg">Sindhudurg</option>
                                <option value="Solapur">Solapur</option>
                                <option value="Thane">Thane</option>
                                <option value="Wardha">Wardha</option>
                                <option value="Washim">Washim</option>
                                <option value="Yavatmal">Yavatmal</option>
                            </select>

                            <label for="taluka">Taluka</label>
                            <select id="selectTaluka" name="taluka" disabled required>
                                <option value="none">Select Taluka</option>


                            </select>

                            <label for="blood_availiblity">Blood Group</label>
                            <input type="text" name="blood_availiblity" placeholder="A+,B+,O-.... "
                                value="<?php echo isset($_POST['blood_availiblity']) ? $_POST['blood_availiblity'] : ''; ?>"
                                required>

                            <button type="submit" class="btn btn-primary" value="Search">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Counter 1-->
    <section class="section-content-block section-secondary-bg">
        <div class="container">
            <div class="counters row wow fadeIn">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <div class="counter-block-2 text-center">
                        <i class="fa-solid fa-user-nurse icon"></i>
                        <span class="counter">2578</span>
                        <h4 class="text-capitalize">Donors Registered</h4>
                    </div>
                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <div class="counter-block-2 text-center">
                        <i class="fa-solid fa-kit-medical icon"></i>
                        <span class="counter">3568</span>
                        <h4 class="text-capitalize">Blood Units Collected</h4>
                    </div>
                </div><!--  end .col-lg-3  -->
            </div>
        </div>
    </section>

    <!--Learn About Donation-->
    <section>
        <div class="container-fluid">
            <div class="row wow fadeInUp animated text-center" style="visibility: visible; animation-name: fadeInUp;">
                <div class='col-md-12 typeHeading'>
                    <span style="color:#980000;">Learn About Donation</span><br><br>
                </div>
                <div class="col-sm-6">
                    <img style="margin-right: 75px;" src="./assets/img/donationFact.png"
                        alt='One Donation Can save upto three lives'>
                    <p>After donating blood, the body works to replenish the blood
                        loss.This stimulates the production of new blood cells and in turn, helps in maintaining good
                        health.
                    <p>
                </div>

                <div class='col-sm-6' align="center">
                    <table class="table table-responsive  ">
                        <tbody>
                            <tr>
                                <th colspan="3" style='color:white;background-color:#980000;'>Compatible Blood
                                    Type
                                    Donors</th>
                            </tr>
                            <tr>
                                <td><b>Blood Type</b></td>
                                <td><b>Donate Blood To</b></td>
                                <td><b>Receive Blood From</b></td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>A+</b></span></td>
                                <td>A+ AB+</td>
                                <td>A+ A- O+ O-</td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>O+</b></span></td>
                                <td>O+ A+ B+ AB+</td>
                                <td>O+ O-</td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>B+</b></span></td>
                                <td>B+ AB+</td>
                                <td>B+ B- O+ O-</td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>AB+</b></span></td>
                                <td>AB+</td>
                                <td>Everyone</td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>A-</b></span></td>
                                <td>A+ A- AB+ AB-</td>
                                <td>A- O-</td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>O-</b></span></td>
                                <td>Everyone</td>
                                <td>O-</td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>B-</b></span></td>
                                <td>B+ B- AB+ AB-</td>
                                <td>B- O-</td>
                            </tr>
                            <tr>
                                <td><span style="color: #980000;"><b>AB-</b></span></td>
                                <td>AB+ AB-</td>
                                <td>AB- A- B- O-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!--Donation Process-->
    <section class="section-content-block section-process">
        <div class="container-fluid">
            <div class="row section-heading-wrapper">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading no-img-separator"><span>Donation</span> Process</h2>
                    <p class="section-subheading">The donation process from the time you arrive center until
                        the time
                        you leave.</p>
                </div>
            </div>

            <div class="row wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="./assets/img/registration.jpg" alt="process">
                            <div class="step">
                                <h3>1</h3>
                            </div>
                        </figure>
                        <article class="process-info">
                            <h2>Registration</h2>
                            <p>You need to complete a very simple registration form. Which contains all
                                required contact
                                information to enter in the donation process.</p>
                        </article>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="./assets/img/screen1.jpg" alt="process">
                            <div class="step">
                                <h3>2</h3>
                            </div>
                        </figure>
                        <article class="process-info">
                            <h2>Screening</h2>
                            <p>A drop of blood from your finger will take for simple test to ensure that
                                your blood iron
                                levels are proper enough for donation process.</p>
                        </article>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="./assets/img/process_34.jpg" alt="process">
                            <div class="step">
                                <h3>3</h3>
                            </div>
                        </figure>
                        <article class="process-info">
                            <h2>Donation</h2>
                            <p>After ensuring and passed screening test successfully you will be directed to
                                a donor bed
                                for donation. It will take only 6-10 minutes.</p>
                        </article>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="process-layout">
                        <figure class="process-img">
                            <img src="./assets/img/process_44.jpg" alt="process">
                            <div class="step">
                                <h3>4</h3>
                            </div>
                        </figure>
                        <article class="process-info">
                            <h2>Refreshment</h2>
                            <p>You can also stay in sitting room until you feel strong enough to leave our
                                center. You
                                will receive awesome drink from us in donation zone. </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION CTA  -->

    <section class="cta-section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <h2>We are ready to work for people 24×7</h2><br>
                    <p>
                        You can give blood at any blood bank all over the maharashtra.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--  GALLERY CONTENT  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center no-img-separator">
                    <h2>CAMPAIGN GALLERY</h2>
                    <span class="heading-separator heading-separator-horizontal"></span>
                    <h4>Our prestigious voluntary work on campaigns by the team</h4>
                </div>


            </div>

        </div>

        <div class="container wow fadeInUp">

            <div class="no-padding-gallery gallery-carousel owl-carousel" data-items='3'>

                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g13.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g13.jpg" alt="gallery image" />

                    </figure>

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g14.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g14.jpg" alt="gallery image" />

                    </figure>

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g15.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g15.jpg" alt="gallery image" />

                    </figure>

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g16.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g16.jpg" alt="gallery image" />

                    </figure>

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g17.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g17.jpg" alt="gallery image" />

                    </figure>

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g18.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g18.jpg" alt="gallery image" />

                    </figure>

                </a>

                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g19.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g19.jpg" alt="gallery image" />

                    </figure>

                </a>
                <a class="gallery-light-box xs-margin" data-gall="myGallery" href="./assets/img/g20.jpg">

                    <figure class="gallery-img">

                        <img src="./assets/img/g20.jpg" alt="gallery image" />

                    </figure>

                </a>

            </div>

        </div>

    </section>

    <!--Counter_2-->
    <section class="section-content-block section-secondary-bg">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-heartbeat icon"></i>
                        <span class="counter">2578</span>
                        <h4 class="text-capitalize">Successfull Blood Donation Campaigns</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa-solid fa-user-nurse icon"></i>
                        <span class="counter">3235</span>
                        <h4 class="text-capitalize">Happy Donors</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-users icon"></i>
                        <span class="counter">3568</span>
                        <h4 class="text-capitalize">Happy Recipient</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="counter-block-1 text-center">
                        <i class="fa fa-trophy icon"></i>
                        <span class="counter">1364</span>
                        <h4 class="text-capitalize">Total Awards</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2><b>Red Drops</b></h2>
                    <p class="text-justify">The Red Drops is a platform designed to connect blood donors with
                        individuals in need of blood transfusions. The purpose of this project is to streamline the
                        process of finding and requesting blood donations, making it easier for those in critical need
                        to locate compatible donors quickly..</p>
                </div>


                <div class="quick col-xs-6 col-md-3">
                    <h6><b>Quick Links</b></h6>
                    <ul class="footer-links">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contactusfinal.php">Contact Us</a></li>
                        <li><a href="adminlogin.php">Admin</a></li>
                        <li><a href="login.php">SignUp/Login</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by
                        <a class="drops" href="#">Red Drops</a> | <a class="privacy" target="_blank"
                            href="Privacy_Policy.pdf">Privacy
                            Policy</a>
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="btn btn-m btn-danger square position-fixed bottom-0 end-0 translate-middle d-none"
            onclick="scrollToTop()" id="back-to-up"><i class="fas fa-chevron-up" style="color: #980000;"></i></a>
    </footer>
    <!-- Footer -->
    <!--Back To Top-->


   
    <!--For selecting district-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const selectDistrict = document.getElementById('selectDistrict');
            const selectTaluka = document.getElementById('selectTaluka');

            const talukas = {
                Beed: ['Beed', 'Ashti', 'Patoda', 'Shirur-kasar', 'Georai', 'Majalgaon', 'Wadwani', 'Kaij', 'Dharur', 'Parli', 'Ambejogai'],
                Aurangabad: ['Aurangabad', 'Kannad', 'Soegaon', 'Sillod', 'Phulambri', 'Khuldabad', 'Vaijapur', 'Gangapur', 'Paithan'],
                Jalna: ['Jalna', 'Bhokardan', 'Jafrabad ', 'Badnapur', 'Ambad ', 'Ghansawangi ', 'Partur ', 'Mantha'],
                Parbhani: ['Parbhani', 'Sonpeth', 'Gangakhed', 'Palam', 'Purna', 'Sailu', 'Jintur', 'Manwath', 'Pathri'],
                Hingoli: ['Hingoli', 'Sengaon', 'Kalamnuri', 'Basmath', 'Aundha Nagnath '],
                Nanded: ['Nanded', 'Ardhapur', 'Mudkhed', 'Bhokar', 'Umri', 'Loha', 'Kandhar', 'Kinwat', 'Himayatnagar', 'Hadgaon', 'Mahur', 'Deglur', 'Mukhed', 'Dharmabad', 'Biloli', 'Naigaon'],
                Yavatmal: ['Yavatmal', 'Arni', 'Babhulgaon', 'Kalamb', 'Darwha', 'Digras', 'Ner', 'Pusad', 'Umarkhed', 'Mahagaon', 'Kelapur', 'Ralegaon', 'Ghatanji', 'Wani', 'Maregaon', 'Zari Jamani'],
                Chandrapur: ['Chandrapur', 'Saoli', 'Mul', 'Ballarpur', 'Pombhurna', 'Gondpimpri', 'Warora', 'Chimur', 'Bhadravati', 'Bramhapuri ', 'Nagbhid ', 'Sindewahi', 'Rajura', 'Korpana', 'Jivati'],
                Gadchiroli: ['Gadchiroli', 'Dhanora', 'Chamorshi', 'Mulchera', 'Desaiganj', 'Armori', 'Kurkheda', 'Korchi', 'Aheri', 'Bhamragad', 'Sironcha'],
                Ahmednagar: ['Ahmednagar', 'Shevgaon', 'Pathardi', 'Parner', 'Sangamner', 'Kopargaon', 'Akole', 'Shrirampur', 'Nevasa', 'Rahata', 'Rahuri', 'Shrigonda', 'Karjat', 'Jamkhed'],
                Akola: ['Akola', 'Akot', 'Telhara', 'Balapur', 'Patur', 'Murtajapur', 'Barshitakli'],
                Kolhapur: ['Kolhapur', 'Karvir', 'Panhala', 'Shahuwadi', 'Kagal', 'Hatkanagale', 'Shirol', 'Radhanagri', 'Gaganbawada', 'Bhudargad', 'Gadhinglaj', 'Chandgad', 'Ajra'],
                Sangli: ['Sangli', 'Miraj', 'kvathe-Mahankal', 'Tasgaon', 'Jat', 'Walwa', 'Shirala', 'Khanapur', 'Atpadi', 'Palus', 'Kadegaon'],
                Satara: ['Satara', 'Jaoli', 'Koregaon', 'Wai', 'Mahabaleshwar', 'Khandala', 'Phaltan', 'Maan', 'Khatav', 'Patan', 'Karad'],
                Pune: ['Pune', 'Haveli', 'Khed', 'Junnar', 'Ambegaon', 'Maval', 'Mulshi', 'Shirur', 'Saswad', 'Velhe', 'Bhor', 'Baramati', 'Indapur', 'Daund'],
                Solapur: ['Solapur', 'Barshi', 'Akkalkot', 'Madha', 'Karmala', 'Pandharpur', 'Mohol', 'Malshiras', 'Sangole', 'Mangalvedhe'],
                Osmanabad: ['Osmanabad', 'Tuljapur', 'Bhum', 'Paranda', 'Washi', 'Kalamb', 'Lohara', 'Umarga'],
                Latur: ['Latur', 'Udgir', 'Renapur', 'Ahmedpur', 'Jalkot', 'Chakur', 'Shirur', 'Ausa', 'Nilanga', 'Deoni'],
                Gondia: ['Gondia', 'Tirora', 'Goregaon', 'Arjuni Morgaon', 'Amgaon', 'Salekasa', 'Sadak Arjuni', 'Deori'],
                Bhandara: ['Bhandara', 'Tumsar', 'Pauni', 'Mohadi', 'Sakoli', 'Lakhni', 'Lakhandur'],
                Nagpur: ['Nagpur', 'Kamptee', 'Hingna', 'Narkhed', 'Kalameshwar', 'Ramtek', 'Mouda', 'Parseoni', 'Umred', 'Kuhi', 'Bhiwapur'],
                Wardha: ['Wardha', 'Deoli', 'Seloo', 'Arvi', 'Ashti', 'Karanja', 'Hinganghat', 'Samudrapur'],
                Amravati: ['Amravati', 'Bhatukali', 'Nandgaon', 'Dharni', 'Chikhaldara', 'Achalpur', 'Chandurbazar', 'Morshi', 'Warud', 'Daryapur', 'Anjangaon-Surji', 'Chandur', 'Dhamangaon', 'Tiosa'],
                Washim: ['Washim', 'Malegaon', 'Risod', 'Mangrulpir', 'Karanj', 'Manora'],
                Buldhana: ['Buldhana', 'Chikhli', 'Deulgaon Raja', 'Jalgaon Jamod', 'Sangrampur', 'Malkapur', 'Motala', 'Nandura', 'Khamgaon', 'Shegaon', 'Mehkar', 'Sindkhed Raja', 'Lonar'],
                Jalgaon: ['Jalgaon', 'Jamner', 'Erandol', 'Dharangaon', 'Bhusawal', 'Raver', 'Muktainagar', 'Bodwad', 'Yawal', 'Amalner', 'Parola', 'Chopda', 'Pachora', 'Bhadgaon', 'Chalisgaon'],
                Dhule: ['Dhule', 'Sakri', 'Sindkheda', 'Shirpur'],
                Nandurbar: ['Nandurbar', 'Navapur', 'Shahada', 'Taloda', 'Akkalkuwa', 'Akrani'],
                Nashik: ['Nashik', 'Igatpuri', 'Dindori', 'Peth', 'Trimbakeshwar', 'Kalwan', 'Deola', 'Surgana', 'Baglan', 'Malegaon', 'Nandgaon', 'Chandwad', 'Niphad', 'Sinnar', 'Yeola'],
                Palghar: ['Palghar', 'Vasai', 'Dahanu', 'Talasari', 'Jawhar', 'Mokhada', 'Wada', 'Vikramgad'],
                Thane: ['Thane', 'Kalyan', 'Murbad', 'Bhiwandi', 'Shahapur', 'Ulhasnagar', 'Ambarnath'],
                Mumbai: ['Mumbai', 'Kurla', 'Andheri', 'Borivali'],
                Raigad: ['Raigad', 'Pen', 'Alibaug', 'Murud', 'Panvel', 'Uran', 'Karjat', 'Khalapur', 'Mangaon', 'Tala', 'Roha', 'Sudhagad', 'Mahad', 'Poladpur', 'Shrivardhan', 'Mhasla'],
                Ratnagiri: ['Ratnagiri', 'Sangameshwar', 'Lanja', 'Rajapur', 'Chiplun', 'Guhagar', 'Dapoli', 'Mandangad', 'Khed'],
                Sindhudurg: ['Sindhudurg', 'Kankavli', 'Vaibhavwadi', 'Devgad', 'Malvan', 'Sawantwadi', 'Kudal', 'Vengurla', 'Dodamarg'],
            };

            function populateTalukas(district) {
                selectTaluka.innerHTML = '<option value="none">Select Taluka</option>';
                if (district !== 'none' && talukas[district]) {
                    talukas[district].forEach((talukaName) => {
                        const option = document.createElement('option');
                        option.value = talukaName;
                        option.textContent = talukaName;
                        selectTaluka.appendChild(option);
                    });
                    selectTaluka.disabled = false;
                } else {
                    selectTaluka.disabled = true;
                }
            }

            selectDistrict.addEventListener('change', function () {
                const selectedDistrict = selectDistrict.value;
                populateTalukas(selectedDistrict);
            });


            const selectedDistrict = '<?php echo isset($_POST['district']) ? $_POST['district'] : 'Not selected'; ?>';
            const selectedTaluka = '<?php echo isset($_POST['taluka']) ? $_POST['taluka'] : 'Select Taluka'; ?>';
            const selectedBloodGroup = '<?php echo isset($_POST['blood_availiblity']) ? $_POST['blood_availiblity'] : ''; ?>';
            selectDistrict.value = selectedDistrict;
            populateTalukas(selectedDistrict);
            selectTaluka.value = selectedTaluka;
        });
    </script>


    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mysqli = new mysqli("localhost", "root", "", "bdm");
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
        $selectedDistrict = $_POST['district'];
        $selectedTaluka = $_POST['taluka'];
        $selectedBloodGroup = $_POST['blood_availiblity'];
        $query = "SELECT bi.bank_name, bi.email, bi.mobile_number, bi.address, bd.blood_group, 
        bd.availability, bi.district, bi.taluka, bi.category 
          FROM bank_info bi
          JOIN blood_details bd ON bi.bb_un = bd.bb_un
          WHERE bi.district = '$selectedDistrict' 
          AND bi.taluka = '$selectedTaluka' 
          AND bd.blood_group = '$selectedBloodGroup'";
        $result = $mysqli->query($query);
        if (!$result) {
            die("Query failed: " . $mysqli->error);
        }

        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr>
                <th>Hospital Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Blood Group</th>
                <th>Blood Availability</th>
                <th>District</th>
                <th>Taluka</th>
                <th>Category</th>
              </tr>';

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['bank_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobile_number'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['blood_group'] . "</td>";
                echo "<td>" . $row['availability'] . "</td>";
                echo "<td>" . $row['district'] . "</td>";
                echo "<td>" . $row['taluka'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "</tr>";
            }

            echo '</table>';
        } else {
            echo "<table>";
            echo '<tr>
        <th>Hospital Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Blood Group</th>
        <th>Blood Availability</th>
        <th>District</th>
        <th>Taluka</th>
        <th>Category</th>
       
      </tr>';
            echo '<tr>
                    <td colspan="9" style="text-align: center; color:black; font-weight: bold; font-family:"Dosis",
                    sans-serif; font-size:20px" >No data available. Select for another Location</td>
                </tr>';

            echo "</table>";
        }


        $mysqli->close();
    }
    ?>

</body>

</html>