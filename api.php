<?php
header("Content-Type: application/json");

// Sample video data (replace with your actual data)
$videos = [
    1 => [
        'id' => 1,
        'title' => 'Sample Video 1',
        'author' => 'John Doe',
        'time' => '5:30',
        'format' => 'mp4',
        'link' => 'http://yourdomain.com/videos/sample1.mp4'
    ],
    2 => [
        'id' => 2,
        'title' => 'Sample Video 2',
        'author' => 'Jane Smith',
        'time' => '8:45',
        'format' => 'webm',
        'link' => 'http://yourdomain.com/videos/sample2.webm'
    ],
    // Add more videos as needed
];

// Get Video ID from the query parameters
$videoId = isset($_GET['video_id']) ? (int)$_GET['video_id'] : null;

// Check if the requested Video ID exists
if ($videoId && isset($videos[$videoId])) {
    // Return data for the requested Video ID
    echo json_encode($videos[$videoId]);
} else {
    // Return an error message if the Video ID is not found
    echo json_encode(['error' => 'Video not found']);
}
?>
