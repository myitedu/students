<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Racing Cars Game</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        canvas {
            display: block;
        }

        #score {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 24px;
            font-weight: bold;
            color: white;
            z-index: 1000;
        }
    </style>
</head>
<body>
<div id="score">Score: 0</div>
<canvas id="gameCanvas"></canvas>

<script>
    const canvas = document.getElementById("gameCanvas");
    const ctx = canvas.getContext("2d");

    // Set canvas size
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    // Game variables
    let score = 0;
    let gameSpeed = 5;
    let carWidth = 50;
    let carHeight = 100;

    // Player car
    const playerCar = {
        x: canvas.width / 2 - carWidth / 2,
        y: canvas.height - carHeight - 20,
        width: carWidth,
        height: carHeight,
        color: "red",
        moveLeft: false,
        moveRight: false
    };

    // Obstacle cars
    const obstacles = [];

    function createObstacle() {
        const laneWidth = canvas.width / 3;
        const randomLane = Math.floor(Math.random() * 3);
        const obstacle = {
            x: randomLane * laneWidth + laneWidth / 2 - carWidth / 2,
            y: -carHeight,
            width: carWidth,
            height: carHeight,
            color: "blue"
        };
        obstacles.push(obstacle);
    }

    // Player control
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") playerCar.moveLeft = true;
        if (e.key === "ArrowRight") playerCar.moveRight = true;
    });

    document.addEventListener("keyup", (e) => {
        if (e.key === "ArrowLeft") playerCar.moveLeft = false;
        if (e.key === "ArrowRight") playerCar.moveRight = false;
    });

    function updatePlayerCar() {
        const laneWidth = canvas.width / 3;

        if (playerCar.moveLeft && playerCar.x > 0) {
            playerCar.x -= gameSpeed;
        }
        if (
            playerCar.moveRight &&
            playerCar.x < canvas.width - laneWidth - playerCar.width
        ) {
            playerCar.x += gameSpeed;
        }
    }

    function updateObstacles() {
        obstacles.forEach((obstacle, index) => {
            obstacle.y += gameSpeed;

            // Check for collision
            if (
                playerCar.x < obstacle.x + obstacle.width &&
                playerCar.x + playerCar.width > obstacle.x &&
                playerCar.y < obstacle.y + obstacle.height &&
                playerCar.height + playerCar.y > obstacle.y
            ) {
                alert("Game Over! Final Score: " + score);
                document.location.reload();
            }

            // Remove off-screen obstacles
            if (obstacle.y > canvas.height) {
                obstacles.splice(index, 1);
                score++;
            }
        });
    }

    function drawRoad() {
        const laneWidth = canvas.width / 3;

        ctx.fillStyle = "gray";
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        ctx.fillStyle = "white";
        for (let i = 0; i < 3; i++) {
            ctx.fillRect(laneWidth * i, 0, 5, canvas.height);
        }
    }

    function drawPlayerCar() {
        ctx.fillStyle = playerCar.color;
        ctx.fillRect(playerCar.x, playerCar.y, playerCar.width, playerCar.height);
    }

    function drawObstacles() {
        obstacles.forEach((obstacle) => {
            ctx.fillStyle = obstacle.color;
            ctx.fillRect(obstacle.x, obstacle.y, obstacle.width, obstacle.height);
        });
    }

    function gameLoop() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        drawRoad();
        updatePlayerCar();
        drawPlayerCar();
        updateObstacles();
        drawObstacles();

        document.getElementById("score").innerText = "Score: " + score;

        requestAnimationFrame(gameLoop);
    }

    // Game initialization
    setInterval(createObstacle, 2000);
    gameLoop();
</script>
</body>
</html>
