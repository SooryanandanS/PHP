<html>
    <head>
        <title>Cricket Players</title>
        <style>
            table {
                border-collapse : collapse;
                width : 25%;
                margin : 20px;

            }
            table,  td {
            border: 2.5px solid black;
        }

         td {
            padding: 10px;
            text-align: left;
            font-family: georgia;
        }
        th{
            text-align:center;
            padding : 10px;
            border:3px solid black;
        }
        h2{
            font-weight:bolder;
            text-align:left;
            font-style:italic;
            padding:25px;
            margin :18px;
            text-decoration:underline;

        }
        </style>
</head>
<body style="background-color:#E2DFD2;">

<?php

$indianPlayers = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Jasprit Bumrah",
    "Ravindra Jadeja",
    "Shikhar Dhawan",
    "Hardik Pandya",
    "KL Rahul",
    "Ajinkya Rahane",
    "Rishabh Pant",
    "Cheteshwar Pujara"
);
echo "<h2>&nbsp;Indian Cricket Team Squad 2021</h2>";

echo "<table>";
echo "<tr><th>Players</th></tr>";
foreach($indianPlayers as $player){
    echo "<ol>";
    echo "<tr><td><li>$player</li></td></tr>";
    echo "</ol>";
    
}
echo "</table>";
?>
</body>
</html>
