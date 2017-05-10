<?php

$page = $_GET['page'];

if ($page == 1) {
    echo 'PAGE 1';
} else if ($page == 2) {
    echo 'PAGE 2';
} else {
    echo 'NO PAGE';
}

