<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draft</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #48434C;
        }

        .hero{
            height: 60px;
            width: 60px;

            opacity: 1;
            transition: .5s ease;
            backface-visibility: hidden;


        }

        .hero:hover{
            opacity: 0.3;
            color: #000;
        }

        #app {
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="app">
        <div class="container">

            <div class="left-bar">

            </div>

            <div class="right-bar">

            </div>

            <div class="bottom-bar">
                <div class="">
                    <a href="#">
                        <img class="rounded-circle hero" src="https://akmweb.youngjoygame.com/web/madmin/image/bd640274b1595c6713c5c360c458a740.png" />
                    </a>
                    <a href="#">
                        <img class="rounded-circle hero" src="https://akmweb.youngjoygame.com/web/madmin/image/71151817eb86c12a1114508b5aaded13.jpg" />
                    </a>
                    <a href="#">
                        <img class="rounded-circle hero" src="https://akmweb.youngjoygame.com/web/madmin/image/a00c000fd13db499e4bd43766dc56101.png" />
                    </a>
                    <a href="#">
                        <img class="rounded-circle hero" src="https://akmweb.youngjoygame.com/web/madmin/image/bc77a45f649d36befd844b767a0b66e2.png" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const data = {
            code: 2000,
            message: "SUCCESS"
            data: [
                {
                    name: "Cici",
                    heroid: "123",
                    key: "//akmweb.youngjoygame.com/web/madmin/image/bc77a45f649d36befd844b767a0b66e2.png?w=200-200-4675b1"
                },
                {
                    name: "Nolan",
                    heroid: "122",
                    key: "//akmweb.youngjoygame.com/web/madmin/image/a00c000fd13db499e4bd43766dc56101.png?w=150-150-fffffe"
                }
            ]
        }
    </script>

    <script>
        const heros = document.getElementsByClassName("hero")

        heros.forEach(element => {

        })

    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>