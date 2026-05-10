<?php
require 'loadtemplate.php';

$title = 'Messages';

$content = loadTemplate('../templates/messages.html.php', []);

require '../templates/layout.html.php';