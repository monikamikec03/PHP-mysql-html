<!DOCTYPE html>
<html lang = "hr">
    <head>
        <title>Natjecanja</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class = "image-back">
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
            <h2>Registracija</h2>
            <form  action="" method="POST"> 
                <div class="form-item"> 
                    <span id="porukaIme" class="bojaPoruke"></span> 
                    <label for="title">Ime: </label> 
                    <div class="form-field"> 
                        <input type="text" name="ime" id="ime" class="form-field-textual">
                    </div> 
                </div> 
                <div class="form-item"> 
                    <span id="porukaPrezime" class="bojaPoruke"></span> 
                    <label for="about">Prezime: </label> 
                    <div class="form-field"> 
                        <input type="text" name="prezime" id="prezime" class="form-field-textual"> 
                    </div> 
                </div> 
                <div class="form-item"> 
                    <span id="porukaUsername" class="bojaPoruke"></span> 
                    <label for="content">Korisničko ime:</label> <!-- Ispis poruke nakon provjere korisničkog imena u bazi --> 
                    <div class="form-field"> 
                        <input type="text" name="username" id="username" class="form-field-textual"> 
                    </div> 
                </div> 
                <div class="form-item"> 
                    <span id="porukaPass" class="bojaPoruke"></span> 
                    <label for="pphoto">Lozinka: </label> 
                    <div class="form-field">
                        <input type="password" name="pass" id="pass" class="form-field-textual"> 
                    </div> 
                </div> 
                <div class="form-item"> 
                    <span id="porukaPassRep" class="bojaPoruke"></span> 
                    <label for="pphoto">Ponovite lozinku: </label> 
                    <div class="form-field"> 
                        <input type="password" name="passRep" id="passRep" class="form-field-textual"> 
                    </div> 
                </div> 
                <div class="form-item"> 
                <input type="submit" value="Registracija" id="slanje2" name = "slanje" class="form-input">
                </div> 
                <div class = "clear"></div>
            </form> 
            
        </section>
        
        <?php
        
            if(isset($_POST['slanje'])){
            include 'connect.php';
            $ime = $_POST['ime']; 
            $prezime = $_POST['prezime']; 
            $username = $_POST['username']; 
            $lozinka = $_POST['pass']; 
            $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH); 
            $razina = 0; 
            $registriranKorisnik = ''; 
            //Provjera postoji li u bazi već korisnik s tim korisničkim imenom 
            $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?"; 
            $stmt = mysqli_stmt_init($dbc); 
            
            if (mysqli_stmt_prepare($stmt, $sql)) { 
                mysqli_stmt_bind_param($stmt, 's', $username); 
                mysqli_stmt_execute($stmt); 
                mysqli_stmt_store_result($stmt); 
            } 
            if(mysqli_stmt_num_rows($stmt) > 0){ 
                ?>
                <script>alert("Korisničko ime već postoji. Pokušajte ponovno!");</script>
                <?php
            }
            else{ 
                // Ako ne postoji korisnik s tim korisničkim imenom - Registracija korisnika u bazi pazeći na SQL injection 
                $sql = "INSERT INTO korisnik (ime, prezime,korisnicko_ime, lozinka, razina)VALUES (?, ?, ?, ?, ?)"; 
                $stmt = mysqli_stmt_init($dbc); 
                if (mysqli_stmt_prepare($stmt, $sql)) { 
                    mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashed_password, $razina); 
                    mysqli_stmt_execute($stmt); 
                    $registriranKorisnik = true; 
                } 
            } mysqli_close($dbc);

    
        if($registriranKorisnik == true) { 
            ?>
                <script> alert("Korisnik je uspješno registriran.");
                window.location.href = "početna.php";
                </script> 
            <?php
            
        } 
        else { 
            echo "";
        }
    }
    ?>

    

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
    
            document.getElementById("slanje2").onclick = function(event) { 
                var slanjeForme = true; 
                // Ime korisnika mora biti uneseno 
                var poljeIme = document.getElementById("ime"); 
                var ime = document.getElementById("ime").value; 
                if (ime.length == 0) { 
                    slanjeForme = false; 
                    poljeIme.style.border="1px dashed red"; 
                    document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>"; 
                } 
                else { 
                    poljeIme.style.border="1px solid green"; 
                    document.getElementById("porukaIme").innerHTML=""; 
                } 
                // Prezime korisnika mora biti uneseno 
                var poljePrezime = document.getElementById("prezime"); 
                var prezime = document.getElementById("prezime").value; 
                if (prezime.length == 0) { 
                    slanjeForme = false;
                    poljePrezime.style.border="1px dashed red"; 
                    document.getElementById("porukaPrezime").innerHTML="<br>Unesite Prezime!<br>"; 
                }
                else { 
                    poljePrezime.style.border="1px solid green"; 
                    document.getElementById("porukaPrezime").innerHTML=""; 
                } 
                // Korisničko ime mora biti uneseno 
                var poljeUsername = document.getElementById("username"); 
                var username = document.getElementById("username").value; 
                if (username.length == 0) { 
                    slanjeForme = false; 
                    poljeUsername.style.border="1px dashed red"; 
                    document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>"; 
                } 
                else { 
                    poljeUsername.style.border="1px solid green"; 
                    document.getElementById("porukaUsername").innerHTML=""; 
                } 
                // Provjera podudaranja lozinki 
                var poljePass = document.getElementById("pass"); 
                var pass = document.getElementById("pass").value; 
                var poljePassRep = document.getElementById("passRep"); 
                var passRep = document.getElementById("passRep").value; 
                if (pass.length == 0 || passRep.length == 0 || pass != passRep) { 
                    slanjeForme = false; 
                    poljePass.style.border="1px dashed red"; 
                    poljePassRep.style.border="1px dashed red"; 
                    document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>"; 
                    document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>"; 
                } 
                else { 
                    poljePass.style.border="1px solid green"; 
                    poljePassRep.style.border="1px solid green"; 
                    document.getElementById("porukaPass").innerHTML=""; 
                    document.getElementById("porukaPassRep").innerHTML=""; 
                } 
                if (slanjeForme != true) { 
                    event.preventDefault(); 
                    }
}
        </script>
    
        </body>
        </html>