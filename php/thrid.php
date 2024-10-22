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
        <h2> about app </h2>
        <br>
        </header>
        <form border="4px" method="post" action="#"   style="width: 100%;margin: 3px;">
                    <hr style="border-width: 3px; display: black; overflow: visible; border-style: inset;">
                    <center>
                    <h2 style="color:blue">tabibanapp   </h2>
                    <h2> it is mobile applacation    </h2>
                    <h2>    that help you to   contact to your doctor  to take consult </h2>
                    <h2>throught chatting   </h2>
                    <h2>لاخذ استشارة طبية</h2>
</center>
                        <hr style="border-width: 3px; display: black; overflow: visible; border-style: inset;">
                    </form>
                    
                    
                    
                </div>
            </div>
</section>
</div>
</body>
</html>









