<?php
    // Start the session or any necessary PHP setup
    // session_start(); // Uncomment if needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Door 3 - The Haunted House</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #101010;
            color: white;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('door3.png') no-repeat center center/cover;
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
        <h1>The Third Door</h1>
        <h2>Behind the Third Door</h2>
        
        <?php
            // Story content for the third door
            echo '<p>';
            echo 'You slowly push open the third door, and immediately, a thick fog rolls out, enveloping your feet and rising to your knees. The air feels heavy, thick with the scent of wet earth and mold. As you step forward, the fog swirls and shifts around you, almost like it has a mind of its own.';
            echo '</p>';
            echo '<p>';
            echo 'The silence is deafening. You can hear your own breath, the only sound in the vast darkness surrounding you. Ahead, a faint, eerie glow beckons. As you move toward it, the fog seems to part, revealing a cavernous chamber. Ancient stone pillars rise around you, their surfaces covered with twisted, unknown symbols.';
            echo '</p>';
            echo '<p>';
            echo 'Suddenly, a loud crack echoes through the air, and the ground beneath your feet trembles. You instinctively reach for something to steady yourself, but there is nothing to hold onto. The fog thickens, and the chamber grows colder. A distant, ghastly laugh echoes from the darkness, sending a shiver down your spine.';
            echo '</p>';
            echo '<p>';
            echo 'You turn, but the path back is now obscured by the swirling fog. You are trapped. The only way forward is deeper into the unknown. Something is watching you, but you cannot see it. The very walls seem to pulse with a strange energy, as though they are alive.';
            echo '</p>';
        ?>

        <div class="button-container">
            <button onclick="location.href='index.html'">Go Back to the Main Hall</button>
        </div>
    </section>

</body>
</html>
