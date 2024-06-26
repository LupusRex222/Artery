<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Class</title>
    <link rel="stylesheet" href="AddClass.css">
</head>
<body>
    <header>
        <nav>
            <div class="imgart"><a href="#"><img src="Images/Logo Artery.png" alt="Logo"></a></div>
            <ul>
                <li>
                    <a href="Home.php"><p>Home</p></a>
                    <a href="AboutUs.php"><p>About Us</p></a>
                    <a href="Gallery.php"><p>Gallery</p></a>
                    <a href="event.php"><p>Events</p></a>
                    <a href="Classes.php"><p>Classes</p></a>
                </li>
            </ul>
            <div class="imglog"><a href="Profile.php"><img src="Images/Person Logo.png" alt="Logo"></a></div>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Add a New Class</h2>
            <form id="classForm">
                <div class="classImage">
                    <label for="classImage">Image URL:</label>
                    <input type="text" id="classImage" name="classImage" placeholder="Enter image URL" required>
                </div>

                <div class="classtitle">
                    <label for="classTitle">Title:</label>
                    <input type="text" id="classTitle" name="classTitle" placeholder="Enter class title" required>
                </div>
                <div class="classprice">
                    <label for="classPrice">Price:</label>
                    <input type="text" id="classPrice" name="classPrice" placeholder="Enter class price" min="0" max="200" required>
                </div>
                <div>
                    <label for="classDescription">Description:</label>
                    <textarea id="classDescription" name="classDescription" placeholder="Enter class description" required></textarea>
                </div>
                
                <button type="submit">Add Class</button>
            </form>
        </div>
    </main>
    <script src="AddClass.js"></script>
</body>
</html>