<?php
require 'loadtemplate.php';

$title = 'Courses';

$content = loadTemplate('../templates/courses.html.php', []);

require '../templates/layout.html.php';