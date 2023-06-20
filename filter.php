<?php

require 'config.php';

$kleur = $_POST['kleur'];
$merk = $_POST['merk'];
$materiaal = $_POST['materiaal'];

$query = "SELECT * FROM `tablet` WHERE merk LIKE '%" . $merk . "%' && kleur LIKE '%" . $kleur . "%' && materiaal LIKE '%" . $materiaal . "%'";
$result = mysqli_query($mysqli, $query);

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
    echo "Er zijn geen items met deze filters!!!";
}
