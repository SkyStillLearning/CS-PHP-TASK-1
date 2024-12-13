<?php
    // Start the session or any necessary PHP setup
    // session_start(); // Uncomment if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 2 - The Haunted House</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #101010;
            color: white;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('door2.png') no-repeat center center/cover;
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: transparent;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        nav .left .logo {
            font-size: 1.5rem;
            font-weight: 600;
            color: #d2691e;
            margin-right: 1rem;
        }

        h1, h2 {
            text-align: center;
            color: #ffffff;
        }

        .story-section {
            padding: 3rem;
            text-align: center;
            background-color: #222222;
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.7);
            opacity: 75%;
        }

        .story-section p {
            font-size: 1.2rem;
            color: #888888;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .story-section .button-container {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .story-section button {
            padding: 0.8rem 2rem;
            border: none;
            background-color: #d2691e;
            color: #fff;
            font-size: 1.1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .story-section button:hover {
            background-color: #8b4513;
        }

        footer {
            background: #585858;
            color: #fff5e1;
            text-align: center;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        footer a {
            color: #ff8c00;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="left">
            <span class="logo">Mystic Doors of Terror</span>
        </div>
    </nav>

    <!-- Story Section -->
    <section class="story-section">
        <h1>The Second Door</h1>
        <h2>Behind the Second Door</h2>
        
        <?php
            // Story content for the second door
            echo '<p>';
            echo 'The air grows thick with a strange, foul scent as you push open the second door. A wave of darkness washes over you, and the temperature seems to plummet with each step you take. You find yourself standing in a narrow, dimly lit hallway, the flickering of a single, old lantern casting long shadows against the walls.';
            echo '</p>';
            echo '<p>';
            echo 'Suddenly, the lantern flickers and goes out, plunging the hallway into complete darkness. A cold, clammy hand brushes against your shoulder, and you spin around, heart pounding in your chest. There’s no one there. The silence is broken only by the sound of something scraping against the floor, growing closer and closer.';
            echo '</p>';
            echo '<p>';
            echo 'As your eyes adjust, you see a faint light emanating from a small door at the end of the hallway. You are drawn to it, but with every step forward, the scratching sound intensifies. The air is thick, heavy, as though the house itself is trying to keep you from reaching the door.';
            echo '</p>';
            echo '<p>';
            echo 'With a shudder, you reach for the door handle. Just as you touch it, you hear a whisper—soft at first, then louder and more insistent—calling your name. You freeze, unable to turn back. Something is waiting on the other side.';
            echo '</p>';
        ?>

        <div class="button-container">
            <button onclick="location.href='door3.php'">Proceed to the Next Door</button>
            <button onclick="location.href='index.html'">Go Back to the Main Hall</button>
        </div>
    </section>

</body>
</html>
