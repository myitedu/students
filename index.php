<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/november13.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/november13.js"></script>
</head>
<body>
<?php
//Tuesday, August 08, 2006 22:44 A
$current_datestamp =date("l M d, Y H:s");
include "includes/notes.php";
?>

<div class="container">
    <!-- Header Section -->
    <div class="row bg-primary text-white p-2">
        <div class="col">
            <h1>Welcome, Jan Schneider</h1>
        </div>
        <div class="col text-end">
            <button class="btn btn-outline-light">Home</button>
            <button class="btn btn-outline-light">Layout</button>
            <button class="btn btn-outline-light">Administration</button>
            <button class="btn btn-outline-light">Options</button>
            <button class="btn btn-outline-light">Problem</button>
            <button class="btn btn-outline-light">Help</button>
            <button class="btn btn-outline-light">Log out</button>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="row mt-3">
        <!-- Sidebar -->
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Organizing</a>
                <a href="#" class="list-group-item list-group-item-action">Calendar</a>
                <a href="#" class="list-group-item list-group-item-action">Tasks</a>
                <a href="#" class="list-group-item list-group-item-action">Notes</a>
                <a href="#" class="list-group-item list-group-item-action">Administration</a>
            </div>
        </div>

        <!-- Right Content -->
        <div class="col-md-10">
            <div class="row">
                <!-- Calendar and Tasks -->
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-header bg-secondary text-white">August, 2006 - Calendar</div>
                        <div class="card-body">
                            <!-- Calendar Content Here -->
                            <div id="calendar" class="calendar-table">
                                <!-- Calendar grid structure can be implemented here -->
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-secondary text-white">Tasks</div>
                        <div class="card-body">
                            <ul>
                                <li>GIS: extra script - Consulting</li>
                                <li>Proposal paperwork - Horde</li>
                                <li>Personal tasks...</li>
                                <!-- List your tasks here -->
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Notes, Weather, and Other Info -->
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header bg-secondary text-white">Notes</div>
                        <div class="card-body">
                            <?php if (!empty($notes)): ?>
                                <ul>
                                    <?php foreach ($notes as $note): ?>
                                        <li><strong><?php echo htmlspecialchars($note['date']); ?>:</strong> <?php echo htmlspecialchars($note['note']); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p>No notes available.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php include "includes/weather.php";?>
                    <div class="card mb-3">
                        <div class="card-header bg-secondary text-white">Current Time</div>
                        <div class="card-body">
                            <p><?=$current_datestamp?></p>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-secondary text-white">Moon Phases</div>
                        <div class="card-body">
                            <p>Details about moon phases...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
