<!DOCTYPE html>
<html lang = "hr">
    <head>
        <title>Natjecanja</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <p id = "date" class = "date"></p>
            <h1>DVD Haganj</h1>
            <i class="fas fa-fire"></i>
            <div class = "clear"></div>
        </header>
        
        <ul>
            <li><a href="početna.php">Početna</a></li>
            <li><a href="index.php">Index</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Kategorije</a>
                <div class="dropdown-content">
                    <a href="aktivnosti.php">Aktivnosti u društvu</a>
                    <a href="kup.php">Domaći kupovi</a>
                    <a href="hvz.php">HVZ Kup</a>
                </div>
            </li>
            <!--<li><a href="administrator.php">Administrator</a></li>-->
            <li><a href="unos.php">Unos</a></li>
        </ul>
        

        <section>
            <h2>Najnovije</h2>
            <article>
                <h3>Domaći kupovi</h3>
                <?php 
                    include 'connect.php';
                    $query = "SELECT * FROM vijesti WHERE kategorija = 'Domaći kupovi' AND arhiva = 0 ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo "<a href = kup.php><figure class = 'nav'>
                            <img src = '" .$row['slika']. "' alt = '".$row['slika']. "' class = 'img'/>  
                            <p>".$row['naslov']."</p>                  
                            </figure></a>";
                    }  
                ?>
                <div class = "clear"></div>
            </article>
     
            <article>
                <h3>Kupovi Hrvatske vatrogasne zajednice</h3>
                <?php 
                    include 'connect.php';
                    $query = "SELECT * FROM vijesti WHERE kategorija = 'Kupovi Hrvatske vatrogasne zajednice' AND arhiva = 0 ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo "<a href = hvz.php><figure class = 'nav'>
                            <img src = '" .$row['slika']. "' alt = '".$row['slika']. "' class = 'img'/>  
                            <p>".$row['naslov']."</p>                  
                            </figure></a>";
                    }  
                ?>
                <div class = "clear"></div>
            </article>

            <article>
                <h3>Aktivnosti u društvu</h3>
                <?php 
                    include 'connect.php';
                    $query = "SELECT * FROM vijesti WHERE kategorija = 'Aktivnosti u društvu' AND arhiva = 0 ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($dbc, $query);
                    while($row = mysqli_fetch_array($result)){
                        echo "<a href = aktivnosti.php><figure class = 'nav'>
                            <img src = '" .$row['slika']. "' alt = '".$row['slika']. "' class = 'img'/>  
                            <p>".$row['naslov']."</p>                  
                            </figure></a>";
                    }  
                ?>
                <div class = "clear"></div>
            </article>
        </section>
        
        <footer>
            <p><a href = "https://www.facebook.com/Dvd-Haganj-145464629144060/">Dobrovoljno vatrogasno društvo Haganj &#169;</a></p>
            <p>Izradila Monika Mikec</p>
            <p>Kontakt: <a href="mailto:mmikec@tvz.hr">mmikec@tvz.hr</a>.</p>
        </footer> 
     
    <script>

        var weekday = new Array(7);
        weekday[0] =  "Sun";
        weekday[1] = "Mon";
        weekday[2] = "Tuey";
        weekday[3] = "Wed";
        weekday[4] = "Thu";
        weekday[5] = "Fri";
        weekday[6] = "Sat";

        var month = new Array();
        month[0] = "January";
        month[1] = "February";
        month[2] = "March";
        month[3] = "April";
        month[4] = "May";
        month[5] = "June";
        month[6] = "July";
        month[7] = "August";
        month[8] = "September";
        month[9] = "October";
        month[10] = "November";
        month[11] = "December";
        
        var n =  new Date();
        var day = weekday[n.getDay()];
        var m = month[n.getMonth()];
        var d = n.getDate();
        var y = n.getFullYear();
        document.getElementById("date").innerHTML = day + ", " + m + " "+ d + ", " + y;

    </script>

    </body>
    </html>