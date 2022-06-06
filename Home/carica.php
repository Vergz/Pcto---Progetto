<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/home.css" rel='stylesheet' type='text/css' title="menù orizzontale">
    <script src="js/js_code.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Home - Carica File</title>
</head>
<?php
session_start();
if (!isset($_SESSION["path"])) {
    session_destroy();
    header("location: index.php");
} ?>

<body style="text-align: center;">
    <div class="header">
        <img src="images/logo.png" class="logo">
    </div>
    <button onclick="indietro()" class="btn btn-primary btn-lg" id="uscita" name="uscita">indietro</button>

    <div id="upload">
        <form class="form" id="myForm">
            <input type="file" id="inpFile"><br />
            <button type="submit" id="carica" class="btn btn-primary btn-lg">Carica file</button>
        </form>
    </div>


    <script>
        // Upload file
        const myForm = document.getElementById('myForm');
        const inpFile = document.getElementById('inpFile');
        console.log(myForm);
        console.log(inpFile);

        myForm.addEventListener("submit", e => {
            e.preventDefault();

            const endpoint = "upload.php";
            const formData = new FormData();

            formData.append("inpFile", inpFile.files[0]);

            console.log(inpFile.files[0]);

            fetch(endpoint, {
                method: "post",
                body: formData
            }).catch(console.error);
            if (inpFile.files[0] != undefined) {
                setTimeout(() => {
                    indietro();
                }, 100);
            }
        });

        function indietro() {
            window.location.replace("index.php");
        }
    </script>
</body>

</html>