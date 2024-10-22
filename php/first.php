<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
    float: right;
    width: 100%;
    padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {
    
    margin: 0 -5px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
    .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    }
}

/* Style the counter cards */
.card {
    
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    border-radius :32px;
    text-align: center;
    background-color: while;
}.
.tcard {
    
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: while;
}
</style>

</head>
<body>
    
<div class="container">
    <section class="chat-area">
        <header>
    <div>
    <center>
    <h2 style="color:blue">
Mobile app    </h2>
    <p><h1 style="color:blue">welcome to tabibna </h1></p>
    </center>
</div>
        </header>

        <div class="row">
            <a href="thrid.php">
            <div class="column">
                <div class="card">
                <div class="fas fa-sliders-h"></div>
                    <h3 style="color:blue">  about app</h3>
                    <p>clik Here </p>
                    <p>********</p>
                </div>
            </div>
            </a>
            <a href="second.php">
            <div class="column">
                <div class="card">
                    <h3 style="color:blue">our severces </h3>
                    <p>clik Here </p>
                    <p>********</p>
                </div>
            </div>
            </a>
        </div>
        <br>
        <div class="row">
        <a href="foruth.php">
            <div class="column">
                <div class="card">
                    <h3 style="color:blue"> team Develop</h3>
                    <p>clik Here</p>
                    <p>********</p>
                </div>
            </div>
        </a>
        <a href="fify.php">
            <div class="column">
                <div class="card">
                    <h3 style="color:blue">Get Help</h3>
                    <p>clik Here </p>
                    <p>********</p>
                </div>
            </div>
        </a>
        </div>
</section>
</div>
</body>
</html>









