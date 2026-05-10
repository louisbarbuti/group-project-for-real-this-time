<?php
require 'loadtemplate.php';

$title = 'Marks';

$content = loadTemplate('../templates/marks.html.php', []);

require '../templates/layout.html.php';