<?php
require 'loadtemplate.php';

$title = 'Information';

$content = loadTemplate('../templates/info.html.php', []);

require '../templates/layout.html.php';