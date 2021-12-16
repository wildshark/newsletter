<?php

function menu($token){
    return"
        <li>
            <a href='?_admin=dashboard&token={$token}'>
                <i class='fe-airplay'></i>
                <span> Dashboard </span>
            </a>
        </li>
        <li>
            <a href='?_admin=article&token={$token}'>
                <i class='fe-airplay'></i>
                <span> Article </span>
            </a>
        </li>
    ";
}

?>