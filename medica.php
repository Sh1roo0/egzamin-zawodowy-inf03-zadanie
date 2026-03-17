<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Medica</title>
    <link rel="shortcut icon" href="pliki3/obraz2.png" type="image/x-icon">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<?php
    $polaczenie = mysqli_connect('localhost', 'root', '', 'medica');
?>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>

    <article>
        <?php
            $zapytanie1 = "SELECT abonamenty.nazwa, abonamenty.cena, abonamenty.opis FROM abonamenty;";
            $wynik =  mysqli_query($polaczenie,$zapytanie1);
            if($wynik){
                while ($row = mysqli_fetch_array($wynik)){
                    echo "<h3>Pakiet $row[0] - cena $row[1] zł</h3>";
                    echo "<p>$row[2]</p>";
                }
            }
        ?>
        <a href="opis.html">Dowiedz sie wiecej</a>
    </article>

    <main>

        <section>
            <h2>Standardowy</h2>

            <ul>
                <?php
                    $zapytanie3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 1;";
                    $wynik =  mysqli_query($polaczenie,$zapytanie3);
                    
                    while ($row = mysqli_fetch_array($wynik)){
                    echo "<li>$row[1]</li>";
                    
                    }
                    
                ?>
            </ul>
        </section>

        <section>
            <h2>Premium</h2>

            <ul>
                <?php
                    $zapytanie3 = "SELECT abonamenty.nazwa, cechy.cecha FROM abonamenty INNER JOIN szczegolyabonamentu ON abonamenty.id = szczegolyabonamentu.Abonamenty_id INNER JOIN cechy ON szczegolyabonamentu.Cechy_id = cechy.id WHERE abonamenty.id = 2;";
                    $wynik =  mysqli_query($polaczenie,$zapytanie3);
                    
                    while ($row = mysqli_fetch_array($wynik)){
                    echo "<li>$row[1]</li>";
                    
                    }
                    
                ?>
            </ul>
        </section>

        <section>
            <h2>Dziecko</h2>

            <ul>
                
            </ul>
        </section>

    </main>

    <footer>    
        <p><img src="pliki3/obraz2.png" alt="przychodnia">Stronę przygotował: 0000000000</p>
    </footer>
    <?php
        mysqli_close($polaczenie);
    ?>
</body>
</html>