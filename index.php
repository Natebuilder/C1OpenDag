<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Opendag Software Developer</title>
    <style>
        .part1 { grid-area: header; }
        .part2 { grid-area: menu; }
        .part3 { grid-area: main; }
        .part4 { grid-area: footer; }

        .grid-container {
        display: grid;
        grid-template-areas:
            'header header'
            'menu menu'
            'main main '
            'footer footer';
        gap: 10px;
        background-color: #2196F3;
        padding: 10px;
        }

        .grid-container > div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        padding: 20px 0;
        font-size: 30px;
        }
    </style>
</head>
<!-- The body is the whole page-->
<body>
    <!--This class is a layout that control how the page look like -->
    <div class ="layout">
    <!--This is the header the top and small part of the website -->
        <div class="part1">
            <header>
                <nav>
                    <img src="img/Curio Logo.png" alt="Logo">
                    <a href="#Curio">Opendag Software Developer 350</a>
                </nav>
            </header>
        </div>
        <!--This is the menu-->
        <div class="part2">
            <menu>
                <h1>menu</h1>
            </menu>
        </div>
            <!--This is the main the mid and biggest part of the website -->
        <div class="part3">
            <main>
                <h1>Welkom op de website van Curio Software Developer editie.</h1>
                <img src="img/School.jpg" alt="school">
            </main>
        </div>
            <!--This is the footer the bottom and a small part of the website -->
        <div class="part4">
            <footer>
                <p>Copyright| Student: Nathan van den Heuvel |Jaar van maak: 2022</p>
            </footer>
        </div>
    </div>
</body>
</html>