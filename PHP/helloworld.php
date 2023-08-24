<!-- Connor Love -->
<!-- 6/4/2023 -->
<!-- CPSC-3750 -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Assignment 5: PHP Helloworld </title>
    <link rel="stylesheet" href="layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <!--MENU-->
        <div class="menu">
            <nav>
                <input type="checkbox" id="show-search">
                <input type="checkbox" id="show-menu">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="menu_content">
                    <div class="logo"><a href="#">CaLove</a></div>
                    <ul class="links">
                        <li><a href="/420710/index.html">Home</a></li>
                        <li>
                            <a href="#" class="desktop-link">HTML Code</a>
                            <input type="checkbox" id="show-html">
                            <label for="show-html">HTML Code</label>
                            <ul>
                                <li><a href="Facts_About_Snowboarding.html">Facts about Snowboarding</a></li>
                                <li><a href="Facts_About_Apples.html">Facts about Apples</a></li>
                                <li><a href="Facts_About_Sushi.html">Facts about Sushi</a></li>
                                <li><a href="sortDemo.html">Sort Demo</a></li>
                                <li><a href="ButtonMove.html">Moving Buttons</a></li>
                                <li><a href="cards.html">Card Demo</a></li>
                                <li><a href="keypress.html">KeyPress Demo</a></li>
                                <li><a href="prime.html">Prime Numbers</a></li>
                                <li><a href="dynamicCardDemo.html">Dynamic Card Demo</a></li>
                                <li><a href="jQueryDemo.html">jQuery Demo</a></li>
                                <li>
                                    <a href="#" class="desktop-link">HTML with Pictures</a>
                                    <input type="checkbox" id="show-htmlp">
                                    <label for="show-htmlp">HTML with Pictures</label>
                                    <ul>
                                        <li><a href="Ski_Maps.html">Ski Maps</a></li>
                                        <li><a href="Apple_Pictures.html">More Apple Pictures</a></li>
                                        <li><a href="Sushi_Pictures.html">More Sushi Pictures</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="desktop-link">CSS Code</a>
                            <input type="checkbox" id="show-css">
                            <label for="show-css">CSS Code</label>
                            <ul>
                                <li><a href="layout.css">layout.css</a></li>
                                <li><a href="ButtonMove.css">ButtonMove.css</a></li>
                                <li><a href="prime.css">prime.css</a></li>
                                <li><a
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">Font
                                        File</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="desktop-link">JavaScript Code</a>
                            <input type="checkbox" id="show-js">
                            <label for="show-js">JavaScript Code</label>
                            <ul>
                                <li><a href="chapter04.html">Chapter04.html</a></li>
                                <li><a href="ButtonMove.js">ButtonMove.js</a></li>
                                <li><a href="cards.js">cards.js</a></li>
                                <li><a href="prime.js">prime.js</a></li>
                                <li><a href="loops.js">loops.js</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="desktop-link">PHP Code</a>
                            <input type="checkbox" id="show-php">
                            <label for="show-php">PHP Code</label>
                            <ul>
                                <li><a href="helloworld.php">Helloworld.php</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form action="#" class="search-box">
                    <input type="text" placeholder="Type Something to Search..." required>
                    <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
                </form>
            </nav>
        </div>
        <!--END OF MENU-->
    </header>

    <div class="wrapper">
        <div class="content_area"></div>
        <h1>
            <?php echo "Hello World!"; ?>
        </h1>

        <div class="left_side">
            <ul>
                <p><strong>Sections</strong><br></p>
                <hr>
                <li><a href="/420710/index.html">Home</a></li>
                <li><a href="mailto:calove@g.clemson.edu">Email</a></li>

            </ul>
        </div>

        <div class="right_side">
            <ul></ul>
        </div>
    </div>
</body>

</html>