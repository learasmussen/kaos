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

<body class="p-4 bg-red">

<div id="congrats" class="my-5 fw-normal" style="font-size: 5rem"> Stort tillykke, du må gerne deltage i partybus festen! </div>

<button id="catchBtn" class="btn bg-pink border-0 text-uppercase"
        style="font-size:1.5rem; padding:15px 30px;">
    Tryk her for at feste
</button>

<script>
    const btn = document.getElementById('catchBtn');

    // Funktion til at centrere knappen
    function centerButton() {
        const rect = btn.getBoundingClientRect();
        btn.style.position = 'absolute';
        btn.style.left = (window.innerWidth/2 - rect.width/2) + 'px';
        btn.style.top = (window.innerHeight/2 - rect.height/2) + 'px';
    }

    // Kald funktionen når siden loader
    window.addEventListener('load', centerButton);
    window.addEventListener('resize', centerButton); // holder den centreret ved resize

    // Irriterende knap der flytter sig, når musen kommer tæt på
    document.addEventListener('mousemove', e => {
        const rect = btn.getBoundingClientRect();
        const distance = Math.hypot(e.clientX - (rect.left + rect.width/2), e.clientY - (rect.top + rect.height/2));
        if(distance < 100){
            btn.style.left = (Math.random()*window.innerWidth - rect.width) + 'px';
            btn.style.top = (Math.random()*window.innerHeight - rect.height) + 'px';
            btn.style.position = 'absolute';
        }
    });

    // Klik event når du endelig fanger knappen
    btn.addEventListener('click', () => {
        alert('YES! Du er klar til partybus-festen!');
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>