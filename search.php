<?php

$search = $_GET["searchValue"];

$url = 'https://www.google.co.il/search?q=' . $search;

header("Location: $url");
