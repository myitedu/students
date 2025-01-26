<?php
$title = $_POST['title'];
$content = $_POST['content'];

// Create a new note object
$newNote = array(
    'title' => $title,
    'content' => $content
);

// Read the existing notes from the file
$jsonFile = 'notes.json';
$jsonData = file_get_contents($jsonFile);

// Decode the JSON data
$existingNotes = json_decode($jsonData, true);

// Check if the existing data is an array
if (is_array($existingNotes)) {
    // Add the new note to the array
    $existingNotes[] = $newNote;
} else {
    // If the file was empty or invalid, create a new array
    $existingNotes = array($newNote);
}

// Encode the updated data back to JSON
$updatedJson = json_encode($existingNotes, JSON_PRETTY_PRINT);

// Write the updated data back to the file
file_put_contents($jsonFile, $updatedJson);

// Send a success response (optional)
echo json_encode(array('success' => true));

?>