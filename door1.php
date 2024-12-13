<?php
    // Start the session or any necessary PHP setup
    // session_start(); // Uncomment if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 1 - The Haunted House</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #101010;
            color: white;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('door1.png') no-repeat center center/cover;
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
        <h1>The Haunted Door</h1>
        <h2>Behind the First Door</h2>
        
        <?php
            // Story content
            echo '<p>';
            echo 'As you push the first door open, a chilling breeze rushes out, carrying the faint scent of decaying wood and damp stone. You step inside, feeling the weight of the house pressing in on you. The air grows colder with each step, and the faint echo of distant whispers fills your ears. The room is dimly lit, shadows clinging to every corner.';
            echo '</p>';
            echo '<p>';
            echo 'The floorboards creak beneath your feet, as though something—or someone—is watching you from the shadows. Suddenly, a gust of wind slams the door shut behind you, locking you in. Your heart races as a low growl reverberates through the walls. You can hear something moving in the darkness, and it is getting closer.';
            echo '</p>';
            echo '<p>';
            echo 'In the corner of the room, a faded portrait of an old man hangs crookedly on the wall. His eyes seem to follow you, his expression twisted with an eerie, unnatural smile. The room seems to pulse with a life of its own, and you realize that you are not alone.';
            echo '</p>';
        ?>

        <div class="button-container">
            <button onclick="location.href='door2.php'">Proceed to the Next Door</button>
            <button onclick="location.href='index.html'">Go Back to the Main Hall</button>
        </div>
    </section>

</body>
</html>
