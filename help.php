<?php
require 'loadtemplate.php';

$title = 'Help';

$content = loadTemplate('../templates/help.html.php', []);

require '../templates/layout.html.php';