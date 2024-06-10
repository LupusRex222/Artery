<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="Classes.css">
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
        <div class="Upper">
            <div class="Search">
                <input type="search" name="Search" placeholder="Search...">
            </div>
            <div class="addClassButton">
                <a href="AddClass.php"><button>Add New Class</button></a>
            </div>
            <!-- <div class="Category">
                <a href=""><p>Category</p></a>
            </div> -->
        </div>

        <div class="banner">
                <div class="Class1">
                    <a href="class1.php"><img src="Images/Wheat Field.jpg" alt="Classes1"></a>
                    <div class="Upper1">
                        <div class="title">                           
                            <h3>The Ultimate Painting Course</h3>
                        </div>
                        <div class="price">
                            <div class="banner1">
                                <p>20$</p>
                            </div>
                        </div>
                    </div>
                    <div class="mtext">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus aspernatur quas ipsam voluptatem asperiores, distinctio rem error. Veniam inventore, eum quam soluta fuga rerum cum magni consectetur. Veniam, magni.</p>
                    </div>
                </div>
                <div class="Class1">
                    <a href="class2.php"><img src="Images/Sun.jpg" alt="Classes2"></a>
                    <div class="Upper1">
                        <div class="title">                           
                            <h3>Expert Drawing Course</h3>
                        </div>
                        <div class="price">
                            <div class="banner1">
                                <p>20$</p>
                            </div>
                        </div>
                    </div>
                    <div class="mtext">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus aspernatur quas ipsam voluptatem asperiores, distinctio rem error. Veniam inventore, eum quam soluta fuga rerum cum magni consectetur. Veniam, magni.</p>
                    </div>
                </div>
                <div class="Class1">
                    <a href="class3.php"><img src="Images/Starry.jpg" alt="Classes3"></a>
                    <div class="Upper1">
                        <div class="title">                           
                            <h3>Cartoon Maker Course</h3>
                        </div>
                        <div class="price">
                            <div class="banner1">
                                <p>20$</p>
                            </div>
                        </div>
                    </div>
                    <div class="mtext">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ducimus aspernatur quas ipsam voluptatem asperiores, distinctio rem error. Veniam inventore, eum quam soluta fuga rerum cum magni consectetur. Veniam, magni.</p>
                    </div>
                </div>
        </div>

        <div class="banner" id="classContainer">

        </div>
        
    </main>

    <script src="Classes.js"></script>
</body>
</html>