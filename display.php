<!--Program for Displaying data-->
<!DOCTYPE html>
<html>

<head>
    <title>Display Page</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./Font-Awesome/addbloodbankfinals.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Style the table */
        body {
            background: whitesmoke;
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            color: white;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 50px auto;
        }

        tr {
            border: 1px solid #980000;
        }

        td {
            border: 1px solid #980000;
            padding: 5px;
            text-align: center;
            color: #980000;
            font-size: 20px;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
        }

        h1 {
            color: white;
            font-size: 20px;
            font-family: 'Dosis', sans-serif;
            font-weight: 500;
        }

        .button-container {
            text-align: center;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .confirm-button,
        .download-button,
        .back-button {
            color: white;
            padding: 5px 25px;
            cursor: pointer;
            font-size: 20px;
            font-family: 'Dosis', sans-serif;
            border-radius: 4px;
            background: #980000;
            border: none;
            margin: 10px;
        }

        .note {
            background-color: #980000;
            width: 100%;
            height: 180px;
        }

        p {
            color: white;
            font-size: 15px;
            font-family: 'Dosis', sans-serif;
            margin: 10px 10px 10px 10px;
        }
    </style>
</head>

<body>

    <div class="note">
        <h1 align="center">Your entered information:-</h1>
        <p>Instructions:-</p>
        <p>
            1.This page shows your entered information.</p>
        <p> 2.The Download button is for downloading your information in the form of a PDF.</p>
        <p>3.The Confirm button is for confirming your information submission. When you click on it, your information
            will be submitted automatically and successfully.</p>
    </div>
    <?php
    session_start();
    if (isset($_SESSION['user_data'])) {
        $userData = $_SESSION['user_data'];

        // Create a table to display user data
    
        echo '<table>';
        echo '<td><b>Index</b></td><td><b>Entered Information</b></td>';
        foreach ($userData as $key => $value) {
            echo '<tr>';
            echo '<td>' . ucwords(str_replace("_", " ", $key)) . '</td>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        // Encode user data to be used in the link
        $encodedUserData = urlencode(json_encode($userData));
        // For keeping a button in horizontal way
        echo '<div class="button-container">';
        // a button for downloading pdf of information
        echo '<a href="generate_pdf.php?userData=' . $encodedUserData . '" class="download-button">Download</a>';
        // a button for destroying a old data and display new form
        echo '<form method="post" action="confirm.php">';
        echo '<input type="submit" name="confirm" value="Confirm" class="confirm-button">';
        echo '</form>';
        echo '</div>';
        // Clear the session data when confirmed
        if (isset($_POST['confirm'])) {
            unset($_SESSION['user_data']);
            echo "Session data has been destroyed.";
        }
    } else {
        echo "No data to display.";
    }
    ?>
</body>

</html>