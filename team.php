<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
</head>
<body>
    <?php
    include 'navbar.html';
    ?>
    <div class="container">
        <div class="ayub">
            <h2>Ayub</h2>
            <p>
                Ayub is een student van de Bit-Academy.<br>
                hij heeft de code highlighting ontwikkeld.
            </p>
            <img src="img/ayub.jpg" alt="ayub">
        </div>
        <div class="max">
            <h2>Max</h2>
            <p>
                Max is een student van de Bit-academy.<br>
                Hij heeft de navbar ontwikkeld.
            </p>
            <img src="img/max.jpg" alt="max">
        </div>
        <div class="dimitri">
            <h2>Dimitri</h2>
            <p>
                Dimitri is een student van de Bit-academy.<br>
                hij heeft de darkmode ontwikkeld.
            </p>
            <img src="img/dimi.jpg" alt="dimitri">
        </div>
        <div class="Dylan">
            <h2>Dylan</h2>
            <p>
                Dylan is een student van de Bit-academy.<br>
                Hij heeft het text vak + team pagina ontwikkeld.
            </p>
            <img src="img/Dylan.jpg" alt="Dylan">
        </div>
    </div>
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
</body>
</html>