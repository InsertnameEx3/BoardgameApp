<?php
require 'views/partials/head.php';

if (Request::uri() == '/berichten') {
    require 'views/partials/berichten.php';
} elseif (Request::uri() == '/berichtlezen') {
    require 'views/partials/berichtlezen.php';
}

require 'views/partials/foot.php';
?>