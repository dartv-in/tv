<?php
// Define default playlists
$playlists = [
    "India" => "https://iptv-org.github.io/iptv/countries/in.m3u",
    "Pakistan" => "https://iptv-org.github.io/iptv/countries/pk.m3u"
];

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'submit' button was clicked
    if (isset($_POST['submit'])) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Available Playlists</title>
            <link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body class='container mt-5'>
            <h1 class='text-center mb-4'>Available Playlists</h1>
            <ul class='list-group'>";

        // Display playlist links
        foreach ($playlists as $country => $url) {
            echo "<li class='list-group-item'>
                    <a href='$url' target='_blank'>$country Playlist</a>
                  </li>";
        }

        echo "</ul>
            <div class='text-center mt-4'>
                <a href='index.html' class='btn btn-primary'>Back to Home</a>
            </div>
            <script src='vendor/jquery/jquery.min.js'></script>
            <script src='vendor/bootstrap/js/bootstrap.bundle.min.js'></script>
        </body>
        </html>";
    } else {
        echo "Invalid request: Submit button not clicked.";
    }
} else {
    // If not a POST request, return a 405 response
    http_response_code(405);
    echo "405 Method Not Allowed - This page only supports POST requests.";
}
?>
