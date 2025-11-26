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

<h1 class="text-center my-5">Du skal være over 18 år for at komme med på bussen</h1>


<div class="container">

    <div class="card px-4 pt-4 bg-red border-0">

        <!-- DATO -->
        <label class="form-label text-pink">Dato</label>
        <input id="daySlider" type="range" min="1" max="31"
               class="form-range bg-transparent mb-2 ">
        <div id="dayValue" class="mb-3 d-flex justify-content-start"></div>

        <!-- MÅNED -->
        <label class="form-label text-pink">Måned</label>
        <select id="monthSelect"
                class="form-select mb-2 bg-transparent text-uppercase text-white border-0 shadow-none ps-0 d-flex justify-content-start">
            <option>  </option>
            <option>Oktober</option>
            <option>Marts</option>
            <option>December</option>
            <option>Juni</option>
            <option>Januar</option>
            <option>September</option>
            <option>April</option>
            <option>August</option>
            <option>Maj</option>
            <option>November</option>
            <option>Juli</option>
            <option>Februar</option>
        </select>

        <!-- ÅR -->
        <label class="form-label text-pink">År</label>
        <input id="yearInput" type="text"
               class="form-control mb-2 bg-transparent border-0 shadow-none ps-0">

        <!-- TID -->
        <label class="form-label text-pink">Tidspunkt</label>
        <input id="timeInput" type="time"
               class="form-control mb-2 ps-0 bg-transparent border-0 shadow-none d-flex justify-content-start"
               placeholder="Vælg tidspunkt" disabled>

        <button id="submitBtn" class="btn btn-pink text-uppercase">GOOOOOOOOOOOOOOOOOOOOOOOO</button>

        <p id="statusMsg" class="mt-2"></p>

    </div>
</div>

<div class="text-center ">
    <p class="under-18">hvis du er<a href="lykkehjul.php" class="text-pink under-18"> under 18 </a><span class="text-decoration-underline under-18">klik her</span></p>
</div>



<script>
    // Viser valgt dag
    document.getElementById("daySlider").addEventListener("input", function () {
        document.getElementById("dayValue").innerHTML = "Valgt dato:  <b class='fw-normal'>" + this.value + "</b>";
    });

    // Validering når man klikker på indsend
    document.getElementById("submitBtn").addEventListener("click", function () {
        const day = document.getElementById("daySlider").value;
        const month = document.getElementById("monthSelect").value;
        const yearInput = document.getElementById("yearInput");
        const year = yearInput.value;
        const status = document.getElementById("statusMsg");
        const timeInput = document.getElementById("timeInput");

        status.textContent = "";
        yearInput.classList.remove("shake");

        // ÅR SKAL VÆRE SKREVET BAGFRA
        const reversed = year.split("").reverse().join("");

        if (isNaN(year) || year.length !== 4) {
            yearInput.classList.add("shake");
            status.textContent = "prøv igen";
            status.style.color = "red";
            return;
        }

        // Når alt er korrekt → lås tid op
        if (month !== "" && !isNaN(day) && reversed >= 1900 && reversed <= 2025) {
            timeInput.disabled = false;
            status.textContent = "Godt! Nu kan du vælge tidspunktet.";
            status.style.color = "green";
        } else {
            timeInput.disabled = true;
            status.textContent = "Noget er stadig forkert… prøv igen.";
            status.style.color = "red";
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>