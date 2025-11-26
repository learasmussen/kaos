<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="text-center p-4 bg-red">




<h1>du sneg dig med på bussen</h1>



<div id="wheel">
    <div class="label" style="transform: rotate(30deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(90deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(150deg) translate(120px);">taber</div>
    <div class="label" style="transform: rotate(210deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(270deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(330deg) translate(120px);">Taber</div>
</div>

<a href="">
<div  id="pointer" class=""></div>
</a>


<div class="mt-4">
<button id="spinBtn" class="bg-pink rounded-pill px-5 py-2 border-0">SPIN!</button>
</div>

<h2 id="result"></h2>

<script>
    const wheel = document.querySelector("#wheel");
    const result = document.querySelector("#result");

    document.getElementById("spinBtn").addEventListener("click", () => {
        const randomDeg = Math.floor(Math.random() * 360) + 1080; // 3 omgange + tilfældigt
        wheel.style.transform = `rotate(${randomDeg}deg)`;

        setTimeout(() => {
            const finalAngle = randomDeg % 360;

            // VINDER-feltet er fra 120 til 180 grader
            if (finalAngle >= 120 && finalAngle < 180) {
                result.textContent = "Vandt, så kom da med";
                result.style.color = "green";
            } else {
                result.textContent = "Du døde, prøv igen";
                result.style.color = "red";
            }
        }, 3000);
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
