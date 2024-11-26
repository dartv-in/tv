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
        echo "<h1>Available Playlists:</h1>";
        echo "<ul>";

        // Display playlist links
        foreach ($playlists as $country => $url) {
            echo "<li><a href=\"$url\" target=\"_blank\">$country Playlist</a></li>";
        }

        echo "</ul>";
    } else {
        echo "Invalid request: Submit button not clicked.";
    }
} else {
    // If not a POST request, return a 405 response
    http_response_code(405);
    echo "405 Method Not Allowed - This page only supports POST requests.";
}
?>
