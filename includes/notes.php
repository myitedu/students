<?php
// Path to the notes file
$notes_file = 'files/notes.txt';

// Initialize an empty array to store notes
$notes = [];

// Check if the file exists and is readable
if (file_exists($notes_file) && is_readable($notes_file)) {
    // Read file contents line by line
    $file_content = file($notes_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Process the notes file line by line
    for ($i = 0; $i < count($file_content); $i += 2) {
        // Each note has two lines: date/time and the note itself
        if (isset($file_content[$i]) && isset($file_content[$i + 1])) {
            $date = trim($file_content[$i]);
            $note = trim($file_content[$i + 1]);
            $notes[] = [
                'date' => $date,
                'note' => $note,
            ];
        }
    }
} else {
    echo "<p>Error: Notes file not found or not readable.</p>";
}