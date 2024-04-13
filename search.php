<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="./assets/img/favicon.png" />
    <style>
        body {
            font-family: 'Dosis', sans-serif;
        }

        .form-container {
            width: 100%;
            margin: 0 auto;
            padding: 0px;
            background-color: #ffffff;
            border: 2px solid #980000;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            height: 150px;
        }

        table {
            border-collapse: collapse;
            
        }

        .heading {
            background-color: #980000;
            height: 50px;
            width: 100%;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            color: white;
            font-size: 40px;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .form1 {
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border: 2px solid #980000;
        }

        tr:nth-child(even) {
            
        }

        label,
        input {
            margin: 15px 5px 20px 10px;

        }

        label {
            margin: 15px 5px 20px 10px;
            color: #980000;
            font-size: 20px;
            font-family: 'Dosis', sans-serif;
        }

        select {
            padding: 8px;
            border: 2px solid #980000;

            border-radius: 5px;
        }

        input[type="text"] {

            padding: 8px;
            border: 2px solid #980000;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #980000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff0000;
        }
    </style>
    <!--Bootstrap and other Links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--Styles-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/less/layout.less" />
</head>

<body>
    <?php
    $district = $_POST['district'];
    $taluka = $_POST['taluka'];
    $blood_availiblity = $_POST['blood_availiblity'];
    ?>
    <div class="preload">
        <img src="./assets/img/blooddrop.gif" alt="Loading">
    </div>
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

    <div class="form-container">
        <div class="heading">
            Search For Blood Availability


        </div>
    
        <div class="form1">
            <form action="search.php" method="post">
                <label for="district">District:-</label>
                <select id="selectDistrict" name="district" required>
                    <option value="">Not selected</option>
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

                <label for="taluka">Taluka:-</label>
                <select id="selectTaluka" name="taluka" disabled required>
                    <option value="none">Select Taluka</option>

                </select>

                <label for="    ">Blood Group:-</label>
                <input type="text" name="blood_availiblity"
                    value="<?php echo isset($_POST['blood_availiblity']) ? $_POST['blood_availiblity'] : ''; ?>"
                    required>

                <input class="" type="submit" value="Search">
            </form>
        </div>
    </div>

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
            echo '<table class="table table-hover">';
            echo ' <thead class="thead-dark">
            <tr class="">
                <th scope="col">Hospital Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Blood Group</th>
                <th scope="col">Blood Availability</th>
                <th scope="col">District</th>
                <th scope="col">Taluka</th>
                <th scope="col">Category</th>
              </tr>
              </thead><tbody>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr scope="row">';
                echo "<td>" . $row['bank_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['mobile_number'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo '<td> <span class="badge badge-info">' . $row['blood_group'] . ' </span> </td>';
                echo "<td>" . $row['availability'] . "</td>";
                echo "<td>" . $row['district'] . "</td>";
                echo "<td>" . $row['taluka'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "</tr> ";
            }

            echo '</tbody></table>';
        } else {
            echo '<div class="alert alert-danger text-center" role="alert">
                    No data available. Select for another Location, Or check for right Bood Group (A+, )
                </div>';
        }


        $mysqli->close();
    }
    ?>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/waypoints-sticky.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/jquery.stellar.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/venobox.min.js"></script>
    <script src="./assets/js/custom-scripts.js"></script>


</body>

</html>