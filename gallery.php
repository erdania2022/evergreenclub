<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background-color: #148F77;
            color: #fff;
            padding: 1em;
        }

        nav {
            background-color: #73C6B6;
            color: #fff;
            padding: 1em;
            display: flex;
            justify-content: space-around;
            font-size: 1.2em;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        nav a.active {
            background-color: #BB8FCE;
        }

        nav a:hover {
            background-color: #555;
        }

        main {
            padding: 2em;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1em;
        }

        .gallery img {
            width: 100%;
            border-radius: 8px;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        .image-description {
            margin-top: 0.5em;
            font-size: 0.8em;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="margin: 0;">EverGreen Club Gallery</h1>
    </header>
    <nav>
        <a href="home.php">Dashboard</a>
        <a href="blogpost.php">Posts</a>
        <a href="members.php">Members</a>
        <a href="gallery.php" class="active">Gallery</a>
    </nav>
    <main>
        <div class="gallery">
            <div>
                <img src="assets/images/activity1.jpg" height="500" width="600" alt="Bamboo Planting For Flood Mitigation River Rehabilitation in Perak Malaysia, Kampung Sahom with Green Earth Movement Society of Malaysia and Sahom Community">
                <p class="image-description">Bamboo Planting For Flood Mitigation River Rehabilitation in Perak Malaysia, Kampung Sahom with Green Earth Movement Society of Malaysia and Sahom Community.</p>
            </div>
            <div>
                <img src="assets/images/activity2.jpg" height="500" width="600" alt="Tree planting event at Pangkor">
                <p class="image-description">Tree planting event at Pangkor with SK Raja collaborations.</p>
            </div>
            <div>
                <img src="assets/images/activity3.jpg" height="500" width="600" alt="Tree planting event at Pangkor">
                <p class="image-description">Tree planting event at Pangkor with SK Raja collaborations.</p>
            </div>
            <!-- Add more images as needed -->
        </div>
    </main>

</body>
</html>
