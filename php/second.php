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
    text-align: center;
    background-color: while;
}
</style>

</head>
<body>
<div class="container">
    <section class="chat-area">
        <header>
            <a href="first.php" class="back-icon"><img src="../images/Icons.png" alt=""></a>
        <h2>consult  your doctor </h2>
        <br>
        </header>
        <div class="row">
            <div class="column">
                <div class="card">
                    <h2>to take consult from your doctor    </h2>
                    <h2>htrought chatting   </h2>
                    
                </div>
            </div>
        <a href="../home.php">
            <div class="column">
                <div class="card">
                    <h2>   to continue our servers </h2>
                    <p>clik here </p>
                    
                </div>
            </div>
        </a>

</section>
</div>
</body>
</html>









