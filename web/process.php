<?php
$data = [
    "ipk" => (float)$_POST["ipk"],
    "kehadiran" => (int)$_POST["kehadiran"],
    "uts" => (int)$_POST["uts"],
    "uas" => (int)$_POST["uas"]
];

$options = [
    "http" => [
        "header"  => "Content-Type: application/json",
        "method"  => "POST",
        "content" => json_encode($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents("http://localhost:8000/predict", false, $context);
    if ($response === false) {
        die("Gagal terhubung ke Python AI");
    }
$result = json_decode($response, true);
    if (!isset($result["prediction"])) {
        die("Response Python tidak valid");
    }

echo "<h2>Hasil Prediksi: " . $result["prediction"] . "</h2>";
?>
