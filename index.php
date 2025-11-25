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

<body class="text-center p-4 bg-rød">




<h1>Lykkehjul – land på “VINDER”</h1>

<div id="pointer"></div>

<div id="wheel">
    <div class="label" style="transform: rotate(30deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(90deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(150deg) translate(120px);">taber</div>
    <div class="label" style="transform: rotate(210deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(270deg) translate(120px);">Taber</div>
    <div class="label" style="transform: rotate(330deg) translate(120px);">Taber</div>
</div>

<button id="spinBtn" style="padding: 10px 25px; font-size: 18px;">SPIN!</button>

<h2 id="result"></h2>

<script>
    const wheel = document.getElementById("wheel");
    const result = document.getElementById("result");

    document.getElementById("spinBtn").addEventListener("click", () => {
        const randomDeg = Math.floor(Math.random() * 360) + 1080; // 3 omgange + tilfældigt
        wheel.style.transform = `rotate(${randomDeg}deg)`;

        setTimeout(() => {
            const finalAngle = randomDeg % 360;

            // VINDER-feltet er fra 120 til 180 grader
            if (finalAngle >= 120 && finalAngle < 180) {
                result.textContent = "DU VANDT! ✔ Du må fortsætte!";
                result.style.color = "green";
            } else {
                result.textContent = "Forkert ❌ – du er ude!";
                result.style.color = "red";
            }
        }, 3000);
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
