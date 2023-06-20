<?php
require 'config.php';

$title = $_POST['title'];


$query = "SELECT * FROM `tablet` WHERE merk LIKE '%" . $title . "%' || model LIKE '%" . $title . "%'";
$result = mysqli_query($mysqli, $query);

// $query2 = "SELECT * FROM `tablet`";
// $result2 = mysqli_query($mysqli, $query2);

// if($title == ""){
//     if (mysqli_num_rows($result2) > 0)
// {
//     while($data = mysqli_fetch_assoc($result2))
//     {
//         echo "<a href='detail.php?id=" . $item['id'] . "'>";
//         echo "<div class='card'>";
//         echo    "<img src='media/" . $item['afbeelding'] . "' alt=''>";
//         echo    "<h2>" . $item['merk'] . "</h2>";
//         echo    "<p style='color: #a9a9a9; font-size: 13px;'>" . $item['model'] . "</p>";
//         echo    "<p>€ " . $item['prijs'] . "</p>";
//         echo "</div>";
//         echo "</a>";
//     }
// }
// }

if (mysqli_num_rows($result) > 0)
{
    while($item = mysqli_fetch_assoc($result))
    {
        echo "<a href='detail.php?id=" . $item['id'] . "'>";
        echo "<div class='card'>";
        echo    "<img src='media/" . $item['afbeelding'] . "' alt=''>";
        echo    "<h2>" . $item['merk'] . "</h2>";
        echo    "<p style='color: #a9a9a9; font-size: 13px;'>" . $item['model'] . "</p>";
        echo    "<p>€ " . $item['prijs'] . "</p>";
        echo "</div>";
        echo "</a>";
    }
}

else 
{
    echo "Er is geen item met de naam: " . $title . "!!!";
}