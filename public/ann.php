<?php
require 'loadtemplate.php';

$title = 'Announcements and Notifications';

$content = loadTemplate('../templates/ann.html.php', []);

require '../templates/layout.html.php';