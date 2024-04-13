<?php
require 'dompdf/autoload.inc.php'; // Include the dompdf autoload file

use Dompdf\Dompdf;
use Dompdf\Options;

if (isset($_GET['userData'])) {
    // Decode user data from the URL parameter
    $encodedUserData = $_GET['userData'];
    $userData = json_decode(urldecode($encodedUserData), true);


    // Create an HTML table to display user data
    $html = '<table border="1">';
    $html .= '<tr><th>Field</th><th>Value</th></tr>';

    foreach ($userData as $key => $value) {
        $html .= '<tr>';
        $html .= '<td>' . ucwords(str_replace("_", " ", $key)) . '</td>';
        $html .= '<td>' . $value . '</td>';
        $html .= '</tr>';
    }

    $html .= '</table>';

    // ... Rest of your code to generate and stream the PDF ...
     // Create PDF options
     $options = new Options();
     $options->set('isHtml5ParserEnabled', true);
     $options->set('isPhpEnabled', true);
 
     // Create a new dompdf instance with options
     $dompdf = new Dompdf($options);
 
     // Load HTML content into dompdf
     $dompdf->loadHtml($html);
 
     // Set paper size (e.g., A4)
     $dompdf->setPaper('A4', 'portrait');
 
     // Render PDF (first parameter is to Output, second is used for Filename)
     $dompdf->render();
 
     // ... Rest of your code to generate and stream the PDF ...
// Stream the PDF directly to the browser with an option to download
$dompdf->stream("user_information.pdf", array("Attachment" => true));

 } else {
     echo "No data to display.";
 }


   
?>
