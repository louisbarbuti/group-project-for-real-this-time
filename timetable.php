<?php
require 'loadtemplate.php';

$title = 'Timetable';

$content = loadTemplate('../templates/timetable.html.php', []);

require '../templates/layout.html.php';