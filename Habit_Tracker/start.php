<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Document</title>
</head>
<body>
    <section>
        <header>
            <nav>
                <div class="header1">
                    <h1>Menu</h1>
                </div>
                <div class="menu">
                    <ul>
                        <a href="#add">Add Habit</a>
                        <a href="#update">Update Habit</a>
                        <a href="#display">Display Habit</a>
                        <a href="#delete">Delete Habit</a>
                    </ul>
                </div>
                <button class="btn" onclick="">Log Out</button>
            </nav>
        </header>
        <main>
            <img src="https://images.squarespace-cdn.com/content/v1/5ec18aeb75fa7637bd679cae/1597703451316-5XJ0VABFVAFS2VKSXTEG/Artboard+1+copy+3.png?format=1000w" alt="" width="900px" height="600px">
        </main>
    </section>

    <section class="add" id="add">
        <div class="container">
            <h1>ADD HABIT</h1>
            <input type="text" name="id" placeholder="Enter Habit Id" required><br>
            <input type="text" name="hname" placeholder="Enter Habit Name" required><br>
            <button>Add</button>
        </div>
    </section>

    <section class="update" id="update">
        <div class="container">
            <h1>UPDATE HABIT</h1>
            <input type="text" name="id" placeholder="Enter Habit Id" required><br>
            <input type="text" name="hname" placeholder="Enter New Habit Name" required><br>
            <button>UPDATE</button>
        </div>
    </section>

    <section class="display" id="display">
        <div class="container">
            <button>DISPLAY</button>
        </div>
    </section>

    <section class="delete" id="delete">
        <div class="container">
            <h1>DELETE HABIT</h1>
            <input type="text" name="id" placeholder="Enter Habit Id" required><br>
            <button>DELETE</button>
        </div>
    </section>
</body>
</html>
