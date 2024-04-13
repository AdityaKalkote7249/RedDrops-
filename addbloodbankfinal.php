<!DOCTYPE html>
<html lang="en">

<head>
  <!--styling links of css-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add blood bank</title>
  <link rel="shortcut icon" href="./assets/img/favicon.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./Font-Awesome/addbloodbankfinals.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--css link-->
  <link rel="stylesheet" href="assets\css\addbloodbankfinals.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</head>

<body>
  <!--Navbar-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="./index.php" class="logo">
                        <img src="./assets/img/rops (297 x 69 px).png" alt="" class="logo_img" >  
                    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <ul class="nav navbar-nav navbar-right">
                            <li class="text-dark m-auto"><a href="./index.php">Home</a></li>
                  
                            <?php
                            session_start();
                            if (isset($_SESSION['user_data'])) {
                                // User is logged in
                                $user_data = $_SESSION['user_data'];
                                $user_image = $user_data['image_path'];
                                $user_name = $user_data['f_name'];

                                echo '<li>
                                <a href="./profile.php" class="profile" style="margin-top: -1rem;" class="m-auto"> 
                                    <img src="'.$user_image.' " alt="" srcset="" class="img-fluid  " width="45px">
                                </a>
                            </li>';
                                echo '  <li>
                                <a href="./profile.php">
                                    <label for="img" class="m-auto mb-4"> '.$user_name.'</label>
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
        </ul>
      </div>
    </nav>
  </header>
  <!--end of navbar-->
  <!--Form of blood bank-->
  <main>
    <h1 align="center">Add your blood bank</h1>
    <form id="bloodBankForm" method="post" action="addbank.php" enctype="multipart/form-data">
      <div class="form1">
        <div class="heading">
          <h1 align="center">Blood bank location</h1>
        </div>
        <br>
        <div class="form">
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
            <option value="Mumbai City">Mumbai City</option>
            <option value="Mumbai Suburban">Mumbai Suburban</option>
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
          <label for="taluka">Select Taluka:</label>
          <select id="selectTaluka" name="taluka" disabled required>
            <option value="none">Select Taluka</option>
          </select>
          <label for="pincode">Pincode:</label>
          <input type="text" id="pincode" name="pincode" readonly>
        </div>
      </div>
      <div class="form2">
        <div class="heading2">
          <h1 align="center">Blood bank details</h1>
        </div>
        <div class="forms">
          <label for="hname">Hospital name:-</label>
          <input type="text" id="text-input" class="input1" style="color: #980000;" name="h_name" required>
          <p id="text-error" style="color: #980000; "></p>
        </div>
        <div class="group">
          <label for="contact" class="label1">Contact:-</label>
          <input type="number" name="mobileNumber" required class="input2" id="phone_number">
          <p id="phone-error" style="color: #980000; "></p>
          <label for="email">Email:-</label>
          <input type="email" name="email" required style="color: #980000; width:25%;">
        </div>
        <div class="group1">
          <label for="contact" class="label1">Blood Availiblity:-</label>
          <select class="none" required name="blood_availiblity">
            <option value="">Not selected</option>
            <option value="whole">Whole blood available</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="o+">O+</option>
            <option value="o-">O-</option>
            <option value="ab+">AB+</option>
            <option value="ab-">AB-</option>
          </select>
          <label for="category">Category:-</label>
          <select class="none" required name="category">
            <option value="">Not selected</option>
            <option value="govt">Govt.</option>
            <option value="charitable">Charitable</option>
            <option value="redcross">Redcross</option>
            <option value="private">Private</option>
          </select>
        </div>
        <div class="group3">
          <label for="address">Address:-</label>
          <textarea name="address" required style="width:40%; border-radius: 4px; color: #980000;"></textarea>
        </div>
        <div class="group">
          <label for="city">City:-</label>
          <input type="text" name="city" id="text-inputs" required style="color: #980000;">
          <p id="text-errors" style="color: #980000; "></p>
        </div>

        <input type="submit" value="Submit" class="pop-button"></button>
      </div>
    </form>
    <div id="error-message" class="error-message"></div>
    <div id="success-message" class="success-message"></div>
  </main>
  <!--End of blood bank form-->
  <!-- Start of Java script-->
  <!--For Pincode,Talukas-->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const selectDistrict = document.getElementById('selectDistrict');
      const selectTaluka = document.getElementById('selectTaluka');
      const pincodeInput = document.getElementById('pincode');
      const talukas = {
        'Gondia': {
          'Gondia': '441601', 'Tirora': '441911', 'Goregaon ': '441801', 'Arjuni Morgaon': '441807', 'Amgaon': '441902',
          'Salekasa ': '441916', 'Sadak Arjuni': '441807', 'Deori': '470266'
        },
        'Bhandara': {
          'Bhandara': '441904', 'Tumsar': '441912', 'Pauni': '441910', 'Mohadi': '441909', 'Sakoli': '441802',
          'Lakhni': '441804', 'Lakhandur': '441803'
        },
        'Nagpur': {
          'Nagpur': '440001', 'Kamptee': '441001', 'Hingna': '441110', 'Narkhed': '441301', 'Kalameshwar': '441501',
          'Ramtek': '441106', 'Mouda': '441104', 'Parseoni': '441105', 'Umred': '441203', 'Kuhi': '441202', 'Bhiwapur': '441201'
        },
        'Wardha': {
          'Wardha': '442001', 'Deoli': '442101', 'Seloo': '442104', 'Arvi': '442201', 'Ashti': '442202', 'Karanja': '442203',
          'Hinganghat': '442301', 'Samudrapur': '442305'
        },
        'Amravati': {
          'Amravati': '444601', 'Bhatukali': ' 444602', 'Nandgaon': '444708', 'Dharni': '444702', 'Chikhaldara': '444807',
          'Achalpur': ' 444806', 'Chandurbazar': '444704', 'Morshi': ' 444905', 'Warud': '444906', 'Daryapur': '444803', 'Anjangaon-Surji': '444705', 'Chandur': '444904', 'Dhamangaon': '444709', 'Tiosa': '444903'
        },
        'Washim': {
          'Washim': '444505', 'Malegaon': '444503', 'Risod': '444506', 'Mangrulpir': '444403', 'Karanj': '444105',
          'Manora': '444404'
        },
        'Buldhana': {
          'Buldhana': '443001', 'Chikhli': '443201', 'Deulgaon Raja': '443204', 'Jalgaon Jamod': '443402',
          'Sangrampur': '444202', 'Malkapur': '443101', 'Motala': '443103', 'Nandura': '443404', 'Khamgaon': '444203',
          'Shegaon': '444203', 'Mehkar': '443301', 'Sindkhed Raja': '443203', 'Lonar': '443302'
        },
        'Jalgaon': {
          'Jalgaon': '412005', 'Jamner': '424206', 'Erandol': '425109', 'Dharangaon': '425105', 'Bhusawal': '425201',
          'Raver': '425508', 'Muktainagar': '425306', 'Bodwad': '425310', 'Yawal': '425301', 'Amalner': '425401', 'Parola': '425111',
          'Chopda': '425107', 'Pachora': '424105', 'Bhadgaon': '424105', 'Chalisgaon': '424101'
        },
        'Dhule': { 'Dhule': '424001', 'Sakri': '424304', 'Sindkheda': '425406', 'Shirpur': '424405' },
        'Nandurbar': {
          'Nandurbar': '425412', 'Navapur': '425418', 'Shahada': '425409', 'Taloda': '425413', 'Akkalkuwa': '425415',
          'Akrani': '425414'
        },
        'Nashik': {
          'Nashik': '422001', 'Igatpuri': '422403', 'Dindori': '422202', 'Peth': '422208', 'Trimbakeshwar': '422212',
          'Kalwan': '423501', 'Deola': '423102', 'Surgana': '422211', 'Baglan': '423301.', 'Malegaon': '423105',
          'Nandgaon': '423106', 'Chandwad': '423101', 'Niphad': '422303', 'Sinnar': '422103', 'Yeola': '423401'
        },
        'Palghar': {
          'Palghar': '401404', 'Vasai': '401303', 'Dahanu': '401602', 'Talasari': '401606', 'Jawhar': '401603',
          'Mokhada': '401604', 'Wada': '421303', 'Vikramgad': '401605'
        },
        'Thane': {
          'Thane': '400080', 'Kalyan': '421002', 'Murbad': '421401', 'Bhiwandi': '421202', 'Shahapur': '421601',
          'Ulhasnagar': '421001', 'Ambarnath': '421005'
        },
        'Mumbai': { 'Mumbai': '400001', 'Kurla': '400070', 'Andheri': '400047', 'Borivali': '400091' },
        'Raigad': {
          'Raigad': '402107', 'Pen': ' 402107', 'Alibaug': '402201', 'Murud': ' 402401 ', 'Panvel': '410206',
          'Uran': ' 400702', 'Karjat': ' 410201', 'Khalapur': ' 410202', 'Mangaon': ' 402104', 'Tala': ' 402111',
          'Roha ': ' 402109', 'Sudhagad': ' 410205 ', 'Mahad ': ' 402301', 'Poladpur': ' 402303', 'Shrivardhan': ' 410221',
          'Mhasla': ' 402105'
        },
        'Ratnagiri': {
          'Ratnagiri': '415612', 'Sangameshwar': '415611', 'Lanja': '416701', 'Rajapur': '416702',
          'Chiplun': '415604', 'Guhagar': '415703', 'Dapoli': '415714', 'Mandangad': '415203', 'Khed': '415709'
        },
        'Sindhudurg': {
          'Sindhudurg': '416611 ', 'Kankavli': '416602', 'Vaibhavwadi': '416810', 'Devgad': ' 416613',
          'Malvan': '416606', 'Sawantwadi': '416510', 'Kudal': '416520', 'Vengurla': '416516', 'Dodamarg': '416512'
        },
        'Ahmednagar': {
          'Ahmednagar': '414001', 'Shevgaon': '414502', 'Pathardi': '414102', 'Parner': '414302', 'Sangamner': '422605',
          'Kopargaon': '423601', 'Akole': '422601', 'Shrirampur': '413709', 'Nevasa': '414603', 'Rahata': '423107', 'Rahuri': '413705',
          'Shrigonda': '413701', 'Karjat': '414402', 'Jamkhed': '413201'
        },

        'Akola': {
          'Akola': '444001', 'Akot': '444101', 'Telhara': '444108', 'Balapur': '444302', 'Patur': '', 'Murtajapur': '444501',
          'Barshitakli': '444401'
        },

        'Kolhapur': {
          'Kolhapur': '416003', 'Karvir': '416003', 'Panhala': '416201', 'Shahuwadi': '416215', 'Kagal': '416216',
          'Hatkanagale': '416115', 'Shirol': '416103', 'Radhanagri': '416212', 'Gaganbawada': '416206',
          'Bhudargad': '416209', 'Gadhinglaj': '416502', 'Chandgad': '416509', 'Ajra': '416505'
        },

        'Sangli': {
          'Sangli': '416416', 'Miraj': '416410', 'kvathe-Mahankal': '416405', 'Tasgaon': '416312', 'Jat': '416404',
          'Walwa': '416313', 'Shirala': '415408', 'Khanapur': '415307',
          'Atpadi': '415301', 'Palus': '416310',
          'Kadegaon': '415304'
        },

        'Satara': {
          'Satara': '415001', 'Jaoli': '412806', 'Koregaon': '415501', 'Wai': '412803', 'Mahabaleshwar': '412806',
          'Khandala': '412802', 'Phaltan': '415523', 'Maan': '415509 ',
          'Khatav': '415505', 'Patan': '415206',
          'Karad': '415110'
        },

        'Pune': {
          'Pune': '411001', 'Haveli': '411021,411023', 'Khed': '410501', 'Junnar': '410502', 'Ambegaon': '410503',
          'Maval': '410506', 'Mulshi': '412115', 'Shirur': '412210', 'Saswad': '412301',
          'Velhe': '412212', 'Bhor': '412206',
          'Baramati': '413102', 'Indapur': '413106', 'Daund': '413801'
        },

        'Solapur': {
          'Solapur': '413001', 'Barshi': '413401', 'Akkalkot': '413216', 'Madha': '413209', 'Karmala': '413203',
          'Pandharpur': '413304', 'Mohol': '413213',
          'Malshiras': '413310', 'Sangole': '413307',
          'Mangalvedhe': '413305'
        },

        'Osmanabad': {
          'Osmanabad': '413501', 'Tuljapur': '413601', 'Bhum': '413504', 'Paranda': '413502', 'Washi': '413503',
          'Kalamb': '413507', 'Lohara': '413608', 'Umarga': '413606'
        },

        'Latur': {
          'Latur': '413512,413531', 'Udgir': '413517', 'Renapur': '413527', 'Ahmedpur': '413515', 'Jalkot': '413532',
          'Chakur': '413513', 'Shirur': '413544',
          'Ausa': '413520', 'Nilanga': '413521', 'Deoni': '413519'
        },
        'Beed': {
          'Beed': ' 431122', 'Ashti': ' 414203', 'Patoda': ' 413207', 'Shirur-kasar': ' 412210', 'Georai': '431127',
          'Majalgaon': ' 431131', 'Wadwani': ' 431122', 'Kaij': ' 431123', 'Dharur': ' 431124',
          'Parli': ' 431515', 'Ambejogai': ' 431517'
        },
        'Aurangabad': {
          'Aurangabad': '431001', 'Kannad': '431103', 'Soegaon': '431120', 'Sillod': '431112',
          'Phulambri': '431111', 'Khuldabad': '431101', 'Vaijapur': '423701', 'Gangapur': '431109', 'Paithan': '431107'
        },
        'Jalna': {
          'Jalna': '431204', 'Bhokardan': '', 'Jafrabad ': '', 'Badnapur': '', 'Ambad ': '431204', 'Ghansawangi ': '431209',
          'Partur': '431501', 'Mantha': '431504'
        },
        'Parbhani': {
          'Parbhani': '431401', 'Sonpeth': '431516', 'Gangakhed': '431514', 'Palam': '431720', 'Purna': '431511',
          'Selu': '431503', 'Jintur': '431509', 'Manwath': '431505', 'Pathri': '431506'
        },
        'Hingoli': { 'Hingoli': '431513', 'Sengaon': '431542', 'Kalamnuri': '431702', 'Basmath': '431512', 'Aundha Nagnath': '431705' },
        'Nanded': {
          'Nanded': '431601', 'Ardhapur': '431704', 'Mudkhed': '431715', 'Bhokar': '431801', 'Umri': '431805',
          'Loha': '141713', 'Kandhar': '431714', 'Kinwat': '431804', 'Himayatnagar': '431802', 'Hadgaon': '431712',
          'Mahur': '431721', 'Deglur': ' 431717', 'Mukhed': ' 431815', 'Dharmabad': '431809', 'Biloli': ' 431710', 'Naigaon': '431709'
        },
        'Yavatmal': {
          'Yavatmal': '445001', 'Arni': '445103', 'Babhulgaon': '445101', 'Kalamb': '445401',
          'Darwha': '445202', 'Digras': '445203', 'Ner': '445102', 'Pusad': '445204', 'Umarkhed': '445206', 'Mahagaon': '445205', 'Kelapur': '445302', 'Ralegaon': '445402', 'Ghatanji': '445301', 'Wani': '445304', 'Maregaon': '445303', 'Zari Jamani': '445304'
        },
        'Chandrapur': {
          'Chandrapur': '442401', 'Saoli': '441225', 'Mul': '441224', 'Ballarshah': '442701', 'Pombhurna': '442702',
          'Gondpimpri': '442702', 'Warora': '442907', 'Chimur': '442903', 'Bhadravati': '442902', 'Bramhapuri ': '441206', 'Nagbhid': '441205', 'Sindewahi': '441222', 'Rajura': '442905', 'Korpana': '442905', 'Jivati': '442905'
        },
        'Gadchiroli': {
          'Gadchiroli': '442506', 'Dhanora': '442606', 'Chamorshi': '442603', 'Mulchera': '442703',
          'Desaiganj': '441207', 'Armori': '441208', 'Kurkheda': '441209', 'Korchi': '441209', 'Aheri': '442705',
          'Bhamragad': '442710', 'Sironcha': '442504'
        },
      };
      function populateTalukas(district) {
        selectTaluka.innerHTML = '<option value="none">Select Taluka</option>';
        if (district !== 'none' && talukas[district]) {
          for (const taluka in talukas[district]) {
            const option = document.createElement('option');
            option.value = taluka;
            option.textContent = taluka;
            selectTaluka.appendChild(option);
          }
          selectTaluka.disabled = false;
        } else {
          selectTaluka.disabled = true;
        }
      }
      selectDistrict.addEventListener('change', function () {
        const selectedDistrict = selectDistrict.value;
        populateTalukas(selectedDistrict);
        pincodeInput.value = ''; // Clear pincode when district changes
      });
      selectTaluka.addEventListener('change', function () {
        const selectedDistrict = selectDistrict.value;
        const selectedTaluka = selectTaluka.value;
        if (selectedTaluka !== 'none' && talukas[selectedDistrict]?.[selectedTaluka]) {
          pincodeInput.value = talukas[selectedDistrict][selectedTaluka];
        } else {
          pincodeInput.value = ''; // Clear pincode if no data is found
        }
      });
    });
  </script>
  <!--end of first taluka and pincode-->
  <!--validation script of input fields-->
  <script>
    $(document).ready(function () {
      $("#bloodBankForm").submit(function (event) {
        event.preventDefault(); // Prevent the form from submitting traditionally
        // ... Your existing validation code ...
        const textInput = document.getElementById('text-input');
        const textError = document.getElementById('text-error');
        const textInputs = document.getElementById('text-inputs');
        const textErrors = document.getElementById('text-errors');
        const phoneNumberInput = document.getElementById('phone_number');
        const phoneError = document.getElementById('phone-error');
        function validateText(input, errorElement) {
          const textValue = input.value;
          if (!/^[a-zA-Z\s]+$/.test(textValue)) {
            errorElement.textContent = 'Please enter only letters (and spaces) (no numbers or special characters).';
            return false; // Prevent form submission if validation fails
          } else {
            errorElement.textContent = '';
            return true; // Allow form submission if validation passes
          }
        }
        function validatePhoneNumber() {
          const phoneNumber = phoneNumberInput.value;
          const cleanedPhoneNumber = phoneNumber.replace(/\D/g, '');

          if (cleanedPhoneNumber.length !== 10 || !/^\d{10}$/.test(cleanedPhoneNumber)) {
            phoneError.textContent = 'Please enter a valid 10-digit phone number.';
            return false; // Prevent form submission if validation fails
          } else {
            phoneError.textContent = '';
            return true; // Allow form submission if validation passes
          }
        }
        const isTextValid = validateText(textInput, textError);
        const isTextsValid = validateText(textInputs, textErrors);
        const isPhoneNumberValid = validatePhoneNumber();
        const isFormValid = isTextValid && isTextsValid && isPhoneNumberValid;
        if (isFormValid) {
          const formData = $(this).serialize();

          $.ajax({
            type: "POST",
            url: "addbank.php",
            data: formData,

            success: function (response) {
              // Display a success message
              $("#success-message").text("Your data submitted successfully!");
              $("#success-message").fadeIn().delay(1).fadeOut(); // Show message for 2 seconds

              // Redirect to the display page after 2 seconds
              setTimeout(function () {
                // Pass user data as query parameters to display.php
                const userData = encodeURIComponent(JSON.stringify(response));
                window.location.href = `display.php?userData=${userData}`;
              }, 2);
            },
            error: function () {
              alert("An error occurred. Please try again later.");
            },
          });
        } else {
          // Display an error message if validation fails
          $("#error-message").text("Please fix the errors in the form.");
        }
      });
    });
  </script>
  <!--End of all scripts-->
</body>

</html>