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
.table-box{
margin: 50px auto;

padding: 0;;
}
.table-row{
    display: table;
    width: 80;
    margin: 10px auto;
    font-family:sans-serif;
    background:transparent;
    padding: 12px 0;
    color: darkblue;
    font-size:20px;
    box-shadow:0 1px 4px 0 rgba(0,0,50,0,3);
}
.table-cell{
    display:table-cell;
    width: 30%;
    text-align:center;
    padding: 4px 0;
    border-right:1px solid #d6d4d4;
    vertical-align:middle;

}


</style>

</head>
<body>
<div class="container">
    <section class="chat-area">
        <header>
            <a href="first.php" class="back-icon"><img src="../images/Icons.png"alt=""></a>
            <h2>لتواصل  مع خدمة المساعدة</h2>
        <br>
        </header>
            <div class="column">
                <div class="card">
                    <div class ="table-box">
                    <div class ="table-row">
                        <div class ="table-cell">
                        <h4>   Send a Massege in the  Email which  blow:</h4>
                        <!-- <p>osamdine55@gmail.com</p> -->
                        <!-- <p>Adam1676@gmail.com</p> -->
                        <!-- <p>Adalla1998@gmail.com</p> -->
                        </div>
                    </div>
                    <form border="4px" method="post" action="#"   style="width: 100%;margin: 3px;">
                    <hr style="border-width: 3px; display: black; overflow: visible; border-style: inset;">
                    <h>tabibina55@gmail.com</h>
                    
                        <hr style="border-width: 3px; display: black; overflow: visible; border-style: inset;">
                    </form>
                    
                </div>
            </div>
    
    </section>
</div>
</body>
</html>









