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
            <li><a href="index.html">Natjecanja</a></li>
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


            <h2>Unesite vijest</h2>
            <form action = "skripta.php" method = "POST" name = "unos">
                <table>
                    <tr>
                        <td>Naslov vijesti</td>
                        <td class = "td_desni"><input type = "text" name = "naslov" id = "title" autofocus/>
                        <span id="porukaTitle" class="bojaPoruke"></span></td>
                    </tr>
                    <tr>
                        <td>Kratki sadržaj vijesti</td>
                        <td><textarea name = "sazetak" id = "content"></textarea>
                        <span id="porukaContent" class="bojaPoruke"></span></td><br>
                    </tr>
                    <tr>
                        <td>Kategorija</td>
                        <td>
                            <select name = "kategorija" id = "category">
                                <option value = "" selected disabled>Odaberi kategoriju vijesti</option>
                                <option value = "Aktivnosti u društvu">Aktivnosti u društvu</option>
                                <option value = "Kupovi Hrvatske vatrogasne zajednice">Kupovi Hrvatske vatrogasne zajednice</option>
                                <option value = "Domaći kupovi">Domaći kupovi</option>
                            </select>
                            <span id="porukaKategorija" class="bojaPoruke"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Odaberi sliku</td>
                        <td><input type="file" class = "chose_img" accept="image/jpeg,image/gif,image/jpg" name="pphoto" id = "pphoto"/>
                        <span id="porukaSlika" class="bojaPoruke"></span></td>
                    </tr>
                    <tr>
                        <td>Spremi članak u bazu podataka:</td>
                        <td><input type = "checkbox" name = "arhiva" class = "checkbox" value = "true"/></td>
                    </tr>
                    <tr>
                        <td>Unesite vaše ime i prezime</td>
                        <td>
                            <input type = "text" name = "ime" placeholder = "Ime" class = "ime" id = "ime"/>
                            <input type = "text" name = "prezime" placeholder = "Prezime" class = "ime" id = "prezime"/>
                            <span id="porukaIme" class="bojaPoruke"></span>
                            <span id="porukaPrezime" class="bojaPoruke"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type = "submit" value = "Pošalji podatke" name = "slanje" class = "submit" id = "slanje"/>
                        </td>
                    </tr>
                </table>
            </form>

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
    
            //provjera unosa
            document.getElementById('slanje').onclick = function(event){
                var slanjeForme = true;
                
                
                //provjera naslova
                var poljeTitle = document.getElementById('title');
                var title = document.getElementById("title").value;
                if(title.length < 5 || title.length > 30){
                    slanjeForme = false;
                    poljeTitle.style.border = "1px dashed #b84e11";
                    document.getElementById("porukaTitle").innerHTML="Naslov vijesti mora imati između 5 i 30 znakova!<br>";
                }
                else{
                    poljeTitle.style.border = "1px solid green";
                    document.getElementById("porukaTitle").innerHTML = "";
                }

                //provjera sadržaja
                var poljeContent = document.getElementById("content");
                var content = document.getElementById("content").value;
                if(content.length == 0){
                    slanjeForme = false;
                    poljeContent.style.border = "1px dashed #b84e11";
                    document.getElementById("porukaContent").innerHTML = "Sadržaj mora biti unesen!<br>";
                }
                else{
                    poljeContent.style.border = "1px solid green";
                    document.getElementById("porukaContent").innerHTML = "";
                }

                //provjera slike
                var poljeSlika = document.getElementById("pphoto");
                var pphoto = document.getElementById("pphoto").value;
                if(pphoto.length == 0){
                    slanjeForme = false;
                    poljeSlika.style.border = "1px dashed #b84e11";
                    document.getElementById("porukaSlika").innerHTML = "Slika mora biti unesena!<br>";
                }
                else{
                    poljeSlika.style.border = "1px solid green";
                    document.getElementById("porukaSlika").innerHTML = "";
                }

                //provjera kategorije
                var poljeCategory = document.getElementById("category");
                if(document.getElementById("category").selectedIndex == 0){
                    slanjeForme = false;
                    poljeCategory.style.border = "1px dashed #b84e11";
                    document.getElementById("porukaKategorija").innerHTML = "Kategorija mora biti odabrana!<br>";
                }
                else{
                    poljeCategory.style.border = "1px solid green";
                    document.getElementById("porukaKategorija").innerHTML = "";
                }

                //provjera imena
                var poljeIme = document.getElementById("ime");
                var ime = document.getElementById("ime").value;
                if(ime.length < 2 || ime.length > 20){
                    slanjeForme = "false";
                    poljeIme.style.border = "1px dashed #b84e11";
                    document.getElementById("porukaIme").innerHTML = "Ime mora imat minimalno 2 znaka i ne smije imati više od 20 znakova!<br>";
                }
                else{
                    poljeIme.style.border = "1px solid green";
                    document.getElementById("porukaIme").innerHTML = "";
                }

                //provjera prezimena
                var poljePrezime = document.getElementById("prezime");
                var prezime = document.getElementById("prezime").value;
                if(prezime.length < 2 || prezime.length > 30){
                    slanjeForme = "false";
                    poljePrezime.style.border = "1px dashed #b84e11";
                    document.getElementById("porukaPrezime").innerHTML = "Prezime mora imat minimalno 2 znaka i ne smije imati više od 30 znakova!<br>";
                }
                else{
                    poljePrezime.style.border = "1px solid green";
                    document.getElementById("porukaPrezime").innerHTML = "";
                }

                if(slanjeForme != true){
                    event.preventDefault();
                }
            }
        </script>
    
        </body>
        </html>