<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1><?=$title;?></h1>
    </header>
    
    <nav>
        <h2>University of Woodlands Student Portal</h2>
        <ul class="navfont">           
            <li><a href="index.php">Home</a></li>
            <li><a href="info.php">Information</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="timetable.php">Timetable</a></li>
            <li><a href="messages.php">Messages</a></li>
            <li><a href="marks.php">Marks</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="ann.php">Announcements and Notifications</a></li>

        </ul>
        
    </nav>
    <main>
        <?=$content;?>
    </main>

</body>
</html> 