<?php
try {
    $manager = new MongoDB\Driver\Manager("mongodb://127.0.0.1:27017/");
    // Create a bulk write to ensure connection works fully (execute query might not connect immediately if no data is fetched)
    $command = new MongoDB\Driver\Command(['ping' => 1]);
    $cursor = $manager->executeCommand('admin', $command);
    echo "MongoDB Connected Successfully!";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
