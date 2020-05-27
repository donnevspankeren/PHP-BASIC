<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'includes/functions.php';?>
    <title>Producten</title>
  </head>
    <?php include "includes/menu.php"  ?>
    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <tr>
                <td>0</td>
                <td>appels</td>
                <td>0,25</td>
            </tr>
            <tr>
                <td>1</td>
                <td>peren</td>
                <td>0,30</td>
            </tr>
            <tr>
                <td>2</td>
                <td>bananen</td>
                <td>0,30</td>
            </tr>
            <tr>
                <td>3</td>
                <td>kersen</td>
                <td>0,40</td>
            </tr>
            <tr>
                <td>4</td>
                <td>mango's</td>
                <td>0,40</td>
            </tr>
            <tr>
                <td>5</td>
                <td>kiwi</td>
                <td>0,35</td>
            </tr>
            <tr>
                <td>6</td>
                <td>watermeloenen</td>
                <td>1,70</td>
            </tr>
            <tr>
                <td>7</td>
                <td>mandarijnen</td>
                <td>0,30</td>
            </tr>
            <tr>
                <td>8</td>
                <td>aardbijen</td>
                <td>0,25</td>
            </tr>
            <tr>
                <td>9</td>
                <td>ananas</td>
                <td>0,40</td>
            </tr>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je: <?php totaalBedrag()?></p>
    <p>je bent <?php getAge(); ?> je korting is: <?php korting() ?></p>

    </form><!-- dit laten staan! -->
    <?php include "includes/footer.php" ?>
  </body>
</html>