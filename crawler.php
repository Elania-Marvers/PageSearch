<?php
// Basic PHP crawler for demonstration
function crawlPage($url) {
    $htmlContent = file_get_contents($url);
    $matches = [];
    preg_match_all('/<a href="([^"]+)"/', $htmlContent, $matches);

    $urls = array_unique($matches[1]);

    // For demonstration, just display the URLs found
    return $urls;
}

$startUrl = "https://example.com";
$urls = crawlPage($startUrl);

foreach ($urls as $url) {
    echo "Found URL: $url\n";
}
