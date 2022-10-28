<?php

use App\core\Request; ?>

<div class="w3-bar w3-xlarge w3-center ">
    <div class="w3-bar w3-card-2" style="border-radius: 0px 0px 10px 10px;">
        <a href="/" class="w3-bar-item w3-button <?= (Request::name() == 'Home') ? 'w3-theme-l2' : 'w3-theme' ?> ">
            Home
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="/anagrafe" class="w3-bar-item w3-button <?= (Request::uri_starts_with('anagrafe')) ? 'w3-grey' : 'w3-blue' ?> ">
            <i class="fa-solid fa-person"></i>
        </a>
        <a href="/negozio" class="w3-bar-item w3-button <?= (Request::uri_starts_with('negozio')) ? 'w3-grey' : 'w3-grey' ?> ">
            <i class="fa-solid fa-shop"></i> </a>
        <a href="/cinema" class="w3-bar-item w3-button <?= (Request::uri_starts_with('cinema')) ? 'w3-grey' : 'w3-grey' ?> ">
            <i class="fa-solid fa-film"></i>
        </a>
    </div>
    <div class="w3-bar w3-left w3-card w3-left w3-theme" style="border-radius: 0px 0px 10px 0px; width: 20%">
        <h1><b>SQLest</b></h1>
    </div>
    <div class="w3-card w3-right" style="border-radius: 0px 0px 0px 10px;">

        <a style="border-radius: 0px 0px 0px 10px;" href="https://www.github.com/paoli7612/SQLest" class="w3-right w3-button w3-theme">
            paoli7612
            <i class="fa-brands fa-github"></i>
        </a>
    </div>
</div>