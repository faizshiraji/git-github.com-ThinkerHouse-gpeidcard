<?php 
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;

// Create a new Dompdf instance
$dompdf = new Dompdf();

// Load HTML content
// $html = '<html><body><h1>Hello, World!</h1></body></html>';
// $dompdf->loadHtml($html);

// // // Set paper size and orientation
// $dompdf->setPaper('A4', 'portrait');

// // Render the PDF
// $dompdf->render();

// // // Get the screenshot output as a string
// $imageData = $dompdf->output();

// // Output the PDF as a file or inline display
// $dompdf->stream('output.pdf', ['Attachment' => false]);

// // // Save the screenshot to a file
// file_put_contents('test.jpg', $imageData);


// Load HTML content
$html = '<html><body><h1>Hello, World!</h1></body></html>';
$dompdf->loadHtml($html);

// Set paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the PDF
$dompdf->render();

// Save the PDF to a file
// $dompdf->stream('output.pdf', ['Attachment' => false]);

// // Convert PDF to an image
// $im = new Imagick();
// $im->setResolution(300, 300); // Set the desired resolution (dots per inch)
// $im->readImage('output.pdf');
// $im->setImageFormat('jpg');
// $im->writeImage('output.jpg');
// $im->clear();
// $im->destroy();

if (extension_loaded('imagick')) {
    echo "Imagick extension is enabled.";
} else {
    echo "Imagick extension is not enabled.";
}

// Image Creation Save

// // Create a new Dompdf instance
// $dompdf = new Dompdf();

// // Set the URL of the web page you want to capture
// $url = "https://localhost/Task/gp-offer/"  . $filename;

// // Load the web page
// $dompdf->loadHtmlFile($url);

// // Set paper size and orientation
// $dompdf->setPaper('A4', 'portrait');

// // Render the web page
// $dompdf->render();

// // Get the screenshot output as a string
// $imageData = $dompdf->output();

// // Set the path and filename for saving the screenshot
// // $outputFile = '/path/to/save/screenshot.jpg';
// $outputFile = "https://localhost/Task/gp-offer/" . 'images/campaignImages/' . $imageName .'.jpg';

// // Save the screenshot to a file
// file_put_contents($outputFile, $imageData);

// echo "Screenshot saved successfully!";
?>