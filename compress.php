<?php
header('Content-Type: application/json');

// 🔴 AUTO DELETE FILES OLDER THAN 10 MINUTES
function cleanOldFiles($folder, $minutes = 10)
{
    $expireTime = time() - ($minutes * 60);

    if (!is_dir($folder)) return;

    foreach (glob($folder . "/*") as $file) {
        if (is_file($file) && filemtime($file) < $expireTime) {
            unlink($file);
        }
    }
}

// Run cleanup
cleanOldFiles(__DIR__ . "/uploads", 10);
cleanOldFiles(__DIR__ . "/compressed", 10);

$quality = intval($_POST['quality'] ?? 80);
$response = [];

// 🔴 CHANGE THIS PATH to YOUR python.exe
$python = "C:\\Users\\User\\AppData\\Local\\Programs\\Python\\Python314\\python.exe";

// Absolute path to compressor.py
$script = __DIR__ . "\\compressor.py";

foreach ($_FILES['images']['tmp_name'] as $i => $tmp) {

    $originalName = $_FILES['images']['name'][$i];
    $uploadPath = __DIR__ . "\\uploads\\" . uniqid() . "_" . $originalName;
    move_uploaded_file($tmp, $uploadPath);

    $outputPath = __DIR__ . "\\compressed\\" . uniqid() . ".jpg";

    // 🔴 FULL SAFE COMMAND
    $command = "\"$python\" \"$script\" \"$uploadPath\" \"$outputPath\" $quality 2>&1";

    exec($command, $output, $code);

    if ($code !== 0) {
        file_put_contents("debug.txt", implode("\n", $output));
        echo json_encode(["error" => $output]);
        exit;
    }

    $response[] = [
        "original" => $originalName,
        "output" => "compressed/" . basename($outputPath)
    ];
}

echo json_encode($response);
