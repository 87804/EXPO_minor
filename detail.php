<?php

require "config.php";

$id = $_GET['id'];

$query = "SELECT * FROM tablet WHERE id = " . $id;
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    $item = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schoen</title>
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="nav">
        <div class="nav-logo">
            <a href="index.php">
                <h2><span style="color: var(--red);">Hap</span><span style="color: var(--blue);">pyS</span><span
                        style="color: var(--yellow);">oles</span></h2>
            </a>
        </div>
        <div class="nav-items">
            <div class="search">
                <i class='bx bx-search'></i>
                <input type="text" name="search" id="search" placeholder="zoek">
            </div>
        </div>
    </header>

    <!-- Schoen -->
    <section class="schoen">
        <button class="backBtn" onclick="backButton()">&LeftArrow;</button>
        <div class="foto">
            <?php 
                echo "<img src='media/" . $item['afbeelding'] . "' alt=''>";
            ?>
        </div>

        <div class="text">
            <?php echo "<h2>" . $item['merk'] . "</h2>"; ?>
            <?php echo "<h4>" . $item['model'] . "</h4>"; ?>
            
            <?php echo "<h3 class='prijs'>€" . $item['prijs'] . "</h3>"; ?>
           <?php echo  "<form name='bestel' method='post' action='toevoeg.php?id=" . $item['id'] . "&naam=" . $item['naam'] . "&kleur=" . $item['kleur'] . "&prijs=" . $item['prijs'] . "&afbeelding=" . $item['afbeelding'] ."'>"; ?>
                <select name="maat" id="maat" class="maat">
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                </select>
            <?php echo "<p class='info'>" . $item['info'] . "</p>" ?>
            </form>


            <div class="locatie">
                <h4>Locatie:</h4>
                <?php 
                    echo "<img src='media/" . $item['plattegrond'] . "' alt='plattegrond schoenen sneakers'>";
                ?>
            </div>
        </div>
    </section>

    <script>
        function backButton() {
            window.history.back();
        }
    </script>
    <div onclick="closeSidebar()" id="overlay"></div>
<script src="js/script.js"></script>
</body>

</html>