<?php
    $mail = $_REQUEST['mail'];
    $name = $_REQUEST['name'];
    $tel = $_REQUEST['phone'];
    $color = $_REQUEST['color'];
    $shipping = $_REQUEST['shipping'];
    $msg = "
    <html>
        <head>
            <title>Bestätigungsmail</title>
        </head>
        <body>
            <p>Kontaktdaten:</p>
            <table>
                <tr>
                    <td>E-Mail:</td>
                    <td>$mail</td>
                </tr>
                <tr>
                    <td>Telefonnr.:</td>
                    <td>$tel</td>
                </tr>
            </table>
            <p>Sehr geehrte/r Frau/Herr $name</p>
            <p>Hiermit bestätigen wir Ihnen Ihre Bestellung des Faltpavillions PROFESSIONAL in der Farbe $color.</p>
            <p>Ihre gewählte Versandart: $shipping</p>
            <p>Preis: 799,99€</p>
        </body>
    </html>
    ";
    
    $header[] = 'Content-type: text/html; charset=UTF-8';
    mail($mail, "Bestätigungsmail", $msg, implode("\r\n", $header));
    header("location: ./../template/landingpage.php?send=true&mail=$mail");
?>