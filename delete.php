<?php
    if(isset($_POST['brisi'])){
        include 'connect.php';
        $odabir = $_POST['obrisano'];
        $query = "DELETE FROM vijesti WHERE id = '$odabir'";
            if($result = mysqli_query($dbc, $query)){
            ?>
            <script>
                alert("Zapis obrisan");
                window.location.href = "http://localhost/Newsweek/Mikec/index.php";
            </script>
            <?php
            }
            mysqli_close($dbc);
    }
    ?>