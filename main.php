
<?php
if (isset($_POST['latitude'], $_POST['longitude'], $_POST['range'], $_POST['start'])) {
    $latitude = filter_input(INPUT_POST, 'latitude', FILTER_VALIDATE_FLOAT);
    $longitude = filter_input(INPUT_POST, 'longitude', FILTER_VALIDATE_FLOAT);
    $range = filter_input(INPUT_POST, 'range', FILTER_VALIDATE_INT);
    $start = filter_input(INPUT_POST, 'start', FILTER_VALIDATE_INT);

    if ($latitude !== false && $longitude !== false && $range !== false && $start !== false) {
        $query = [
            'key' => '4bd6b41c133d5139',
            'lat' => $latitude,
            'lng' => $longitude,
            'range' => $range,
            'start' => $start,
            'format' => 'json',
        ];

        $url = 'https://webservice.recruit.co.jp/hotpepper/gourmet/v1/?' . http_build_query($query);
        $response = file_get_contents($url);

        if ($response !== false) {
            echo $response;
        } else {
            echo json_encode(['error' => 'API request failed']);
        }
    } else {
        echo json_encode(['error' => 'Invalid parameters']);
    }
} else {
    echo json_encode(['error' => 'Required parameters are missing']);
}
?>
