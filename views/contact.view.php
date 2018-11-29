<?php
require 'views/partials/head.php';

if (Request::uri() == '/contact') {
    require 'views/partials/contact.partial.php';
} elseif (Request::uri() == '/berichtlezen') {
    require 'views/partials/bericht.view.php';
}
require 'views/partials/foot.php';
?>