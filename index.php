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

    <!-- SIDEBAR -->
    <main>
        <div class="sidebar">
            <h2 style="margin-bottom: 1rem;"><span style="color: var(--red);">Fi</span><span style="color: var(--blue);">lt</span><span
                style="color: var(--yellow);">ers</span></h2>
            <label for="kleur">Kleur:</label>
            <select name="kleur" id="kleur">
                <option value="">Kleur</option>
                <option value="wit">Wit</option>
                <option value="rood">Rood</option>
                <option value="groen">Groen</option>
                <option value="blauw">Blauw</option>
                <option value="paars">Paars</option>
                <option value="geel">Geel</option>
                <option value="oranje">Oranje</option>
                <option value="beige">beige</option>
                <option value="grijs">grijs</option>
                <option value="bruin">bruin</option>
                <option value="overig">Overig</option>
            </select>   
            <label for="maat">Maat:</label>
            <select name="maat" id="maat" class="maat">
                <option value="">Maat</option>
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
            <label for="merk">Merk:</label>
            <select name="merk" id="merk" class="merk">
                <option value="">Merk</option>
                <option value="Merk">Asics</option>
                <option value="Nike">Nike</option>
                <option value="Reebok">Reebok</option>
                <option value="Adidas">Adidas</option>     
                <option value="Puma">Puma</option>
                <option value="New Balance">New Balance</option> 
            </select>
            <label for="materiaal">Materiaal:</label>
            <select name="materiaal" id="materiaal" class="materiaal">
                <option value="">Materiaal</option>
                <option value="leer">Leer</option>
                <option value="suede">suede</option>
                <option value="kunststof">Kunststof</option>
            </select>
            <button class="zoek-btn" id="zoek-btn">Zoek</button>
        </div>

        <section id="shop" class="shop">
        <!-- haal schoenen uit de database -->
        <?php

        require 'config.php';

        $query = "SELECT * FROM tablet";
        $result = mysqli_query($mysqli, $query);

        if(!$result)
        {
            echo "<p>ERROR</p>";
            echo "<p>Schoenen kunnen niet worden opgehaald</p>";
        }

        if(mysqli_num_rows($result) > 0)
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

        else{
            echo "<p>Geen items gevonden!</p>";
        }
        ?>
    </section>  
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="js/zoek.js"></script>
    <script src="js/script.js"></script>
</body>

</html>