<?php

use App\core\Request; ?>

<div class="w3-bar w3-xlarge w3-center ">
    <div class="w3-bar w3-card-2" style="border-radius: 0px 0px 10px 10px;">
        <a href="/" class="w3-bar-item w3-button <?= (Request::name() == 'Home') ? 'w3-grey' : 'w3-theme' ?> ">
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="/delivery" class="w3-bar-item w3-button <?= (Request::uri_starts_with('delivery')) ? 'w3-grey' : 'w3-theme' ?> ">
            <i class="fa-solid fa-person-biking"></i>
        </a>
        <a href="/buoniPasto" class="w3-bar-item w3-button <?= (Request::uri_starts_with('buoniPasto')) ? 'w3-grey' : 'w3-theme' ?> ">
            <i class="fa-solid fa-envelopes-bulk"></i> </a>

        <a href="/primaNota" class="w3-bar-item w3-button <?= (Request::uri_starts_with('primaNota')) ? 'w3-grey' : 'w3-theme' ?> ">
            <i class="fa-solid fa-box"></i>
        </a>


    </div>
    <div class="w3-bar w3-left w3-card w3-left w3-theme" style="border-radius: 0px 0px 10px 0px; width: 20%">
        <h1><b>SQLest</b></h1>
    </div>
    <div class="w3-card w3-right" style="border-radius: 0px 0px 0px 10px;">

        <a style="border-radius: 0px 0px 0px 10px;" href="https://www.github.com/paoli7612/SQLest" class="w3-right w3-button w3-theme">
            <i class="fa-brands fa-github"></i>
        </a>
    </div>
</div>