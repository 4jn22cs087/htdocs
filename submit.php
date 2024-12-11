<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $symptoms = htmlspecialchars($_POST['symptoms']);
    $allergies = htmlspecialchars($_POST['allergies']);

    echo "<h2>Submitted Information</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Symptoms:</strong> $symptoms</p>";
    echo "<p><strong>Allergies:</strong> $allergies</p>";
}
?>