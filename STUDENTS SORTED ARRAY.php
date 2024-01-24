<html>
    <head>
        <title>HARI</title>

    </head>
    <body style="background-color:wheat;"></body>


</html>





<?php
$students = array("Hari", "Amal", "Sanjay", "Navaneeth", "Deepu", "Sreerag", "Akash", "Abin");
echo "<div style='width:150px;height:50px;background-color:wheat;font-size:25px;font-weight:bolder;text-align:left;text-decoration:underline;padding:15px;'>Student List</div>";
echo "<div style='font-weight:bolder;font: size 30px;'>";
echo "<ul style='font-size:larger;font-weight:bolder;font-style:italic;'>";
foreach ($students as $student){
    echo "<li>$student</li>";
    
};
echo "</ul>";

asort($students);
echo "<div style='font-size:larger;font-style:italic;'<strong>Sorted Array (Ascending Order) :</strong></div>";

echo "<ol style='font-weight:bolder;font-style:italic;'>";
foreach ($students as $student) {
    echo "<li>$student</li>";
    echo"<br>";
}
echo "</ol>";
arsort($students);
echo "<div style='font-size:larger;font-style:italic;'<strong>Sorted Array (Descending Order) :</strong></div>";
echo "<ol style='font-weight:bolder;font-style:italic;'>";
foreach ($students as $student) {
    echo "<li>$student</li>";
    echo"<br>";
}
echo "</ol>";

?>