
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

        .portrait{
            height: 70px;
            width: 70px;

            margin: 0.5rem;

            opacity: 1;
            transition: .5s ease;
            backface-visibility: hidden;

            padding: 0;
        }

        .portrait:hover{
            opacity: 0.3;
            color: #000;
        }

        #app {
            min-height: 100vh;
        }

        .left-bar {
            position: fixed;
            padding: 1rem;
            float: left;
            background: #f2e9dc;
            height: 100vh;
            width: 18vw;
        }

        .right-bar {
            position: fixed;
            padding: 1rem;
            float: right;
            background: #f2e9dc;
            height: 100vh;
            width: 18vw;
            margin-left: 75vw;
        }

        .content {
            margin-left: 18vw;
            margin-right: 18vw;
        }

    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('build/assets/echo-C_LtNYQQ.js')}}"></script>
</head>
<body>



    <div id="app">

        <div class="container" x-data="heros()" x-init="init()">

            <div class="row">



            <!-- Blue Team -->
            <div class="left-bar">
                <!-- For Each Hero -->
                <template x-for="(hero, index) in blue">
                    <div class="row">
                        <img
                            class="rounded-circle portrait"
                            :src="hero.key"
                        />
                        <span x-text=hero.name></span>
                    </div>
                </template>
            </div>


            <!-- All heros -->
            <div class="col content">
                <!-- For Each Hero -->
                <template x-for="(hero, index) in heros">
                    <img
                        class="rounded-circle portrait"
                        :src="hero.key"
                        @click="draftHero(index)"
                    />
                </template>
            </div>

            <!-- Red Team -->
            <div class="right-bar">
                <!-- For Each Hero -->
                <template x-for="(hero, index) in red">
                    <div class="row">
                        <img
                            class="rounded-circle portrait"
                            :src="hero.key"
                        />
                        <span x-text=hero.name></span>
                    </div>
                </template>

            </div>

            </div>
        </div>
    </div>

<script>

    function heros() {
        return {
            heros: [],
            red: [],
            blue: [],
            redBan: [],
            blueBan: [],
            isBlueTurn: true,
            isRedTurn: false,
            init(){
                fetch('/api/heros')
                    .then(response => response.json())
                    .then(data => {
                        this.heros = data.data;
                    })
                    .catch(error => {
                        console.error('Error fetching data: ', error);
                    });
            },
            draftHero(index){
                if(this.isBlueTurn){
                    //add hero to blue team
                    this.blue.push(this.heros[index]);
                }
                if(this.isRedTurn){
                    //add hero to red team
                    this.red.push(this.heros[index]);
                }

                this.isBlueTurn = !this.isBlueTurn;
                this.isRedTurn = !this.isRedTurn;
                this.heros.splice(index, 1);
            }
        }
    }

    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
