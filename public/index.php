<?php
require 'loadtemplate.php';

$title = 'Home Page';

$content = loadTemplate('../templates/index.html.php', []);

require '../templates/layout.html.php';