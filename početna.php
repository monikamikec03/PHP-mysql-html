<!DOCTYPE html>
<html>
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
    <section class="main"> 
            <h2>Dobrodošli, prijavite se ukoliko imate administratorska prava.</h2>
            <form  action="administrator.php" method="POST">  
                <div class="form-item">  
                    <label for="kime">Korisničko ime:</label>   
                    <div class="form-field"> 
                        <input type="text" name="kime" id="kime" class="form-field-textual"> 
                    </div> 
                </div> 
                <div class="form-item"> 
                    <label for="pass">Lozinka: </label> 
                    <div class="form-field">
                        <input type="password" name="pass" id="pass" class="form-field-textual"> 
                    </div> 
                </div> 
                <div class="form-item"> 
                    <input type="submit" value="Prijava" id="login" name = "login" class="form-input">
                    <span id="loginUsername" class="bojaPoruke"></span> 
                </div> 
            </form> 
            <h3 class = "form-item"><a href = "http://localhost/Newsweek/Mikec/registracija.php">Registriraj me?</a></h3>
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
            weekday[2] = "tue";
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