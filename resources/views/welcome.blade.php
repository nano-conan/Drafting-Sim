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
        .host-btn {
            --bs-btn-bg: #C28C9D;
            --bs-btn-border-color: #C28C9D;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #b97b8f;
            --bs-btn-hover-border-color: #C28C9D;

            color: #fff;

        }
        .join-btn {
            --bs-btn-bg: #CD8079;
            --bs-btn-border-color: #CD8079;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #c66e66;
            --bs-btn-hover-border-color: #CD8079;

            color: #fff;

        }
    </style>

</head>
<body>
    <div id="app" style="min-height: 100vh;">
        <div class="container text-center p-5">
            <div class="d-flex justify-content-center align-items-center">
                <div class="card w-50">
                    <div class="card-body">
                        <h5 class="card-title">Drafting Sim</h5>
                        <p class="card-text py-2">
                            Welcome to the drafting simulator. Would you like to host a game or join?
                        </p>
                        <a href="/blue" class="btn host-btn">Host</a>
                        <a href="/red" class="btn join-btn">Join</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
