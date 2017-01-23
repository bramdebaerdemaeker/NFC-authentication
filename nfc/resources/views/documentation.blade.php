<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NFC-LOGIN</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-top {
            align-items: center;
            display: flex;
            justify-content: flex-start;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            width: 100%;

        }

        .title {
            font-size: 84px;
        }
        .links {
            width: 50%;
            text-align: left;
            margin-left: 25%;
            margin-top: 100px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            NFC LOGIN
        </div>

        <div class="links">
            <div class="nfc">
                <h1>NFC - Near Field Communication</h1>
                <p>NFC is een vorm van van RFID. Per definitie is RFID het identificeren van objecten met behulp van radiogolven. Dit wordt bereikt door de zogenaamde RFID - tags op de objecten vanop afstand te lezen. Daar waar het bij RFID om ‘éénrichtingsverkeer’ gaat wordt NFC gebruikt om kleine hoeveelheden informatie uit te wisselen, een technologie die we in deze tijd in de meeste mobiele toestellen zoals GSM, tablets,… terugvinden.
                    Het bereik van NFC is beperkt tot een straal van 10cm. Hierdoor kan het signaal niet gemakkelijk worden onderschept en wordt het gezien als een veilige manier van bestandsoverdracht. Een gekende toepassing is het uitvoeren van betalingen.
                    Er zijn verschillende applicaties die je in staat stellen je eigen NFC - tags te programmeren.
                </p>
                Een NFC - chip bezit drie verschillende standen:
                <ul>
                    <li>tag - emulatie (passive mode)</li>
                    <li>active mode waarin het zich gedraagt als een reader</li>
                    <li>peer - to - peer mode waarbij bv. bestandswisseling mogelijk is</li>
                </ul>

            </div>
            <div class="adafruit">
                <h1>Adafruit RFID/NFC Shield</h1>
                <p>De Adafruit RFID/NFC Shield is een uitbreiding die op de Arduino gezet kan worden. Het board maakt gebruik van de populaire nfc-chip PN532 breakout board die bezit over een nfc chip, terug te vinden in vrijwel elke smartphone vandaag de dag. Het shield maakt het mogelijk om via de Arduino de data op de Mifare Classic Card te lezen en aan te passen.
                </p>
            </div>

            <div class="Card">
                <h1>Mifare Classic Card</h1>
                <p>De mifare classic card die bij dit proof of concept gebruikt werd is eentje met 1k EEPROM- geheugen.  Zo’n card bestaat uit verschillende sectoren en blocks. Elke sector heeft individuele toegangsrechten en bestaat uit 4 blocks. Op een 1k card staat 16 sectors.
                    Deze 4 block sectoren bevatten allemaal basis security features en twee verschillende authentificatie sleutels. Deze kunnen voor elke sector verschillend zijn waardoor informatie op bepaalde sectoren bv read-only gemaakt kunnen worden.
                </p>
            </div>
            <div class="messages">
                <h1>NDEF messages</h1>
                <p>Vooraleer er informatie op de Mifare Classic Card gezet kon worden, moest deze eerst geformatteerd worden naar een ‘NFC Forum Tag’, een NFC Data Exchange Format.
                    Dit formaat kan gebruikt worden om informatie uit te wisselen tussen twee NFC compatibele toestellen of tags. Dit stelt ons in staat zelf NDEF messages op te slagen op de card.
                    Zowel voor het formatteren alsook het schrijven en lezen van de tags kon gebruik gemaakt worden van de Adafruit_NFC_IC2 - Library.
                </p>
            </div>
            <div class="Python">
                <h1>Python</h1>
                <p>Via python is het mogelijk dezelfde poort uit te lezen als waarlangs de Arduino verbonden is. Op die manier kon alles wat in de Arduino Serial geprint werd, ook in de python shell geprint worden. Via python is het vervolgens mogelijk met deze ontvangen data te gaan werken. De bedoeling was om de waarden die op de NFC tag stonden automatisch in de inputvelden op het scherm te stoppen.
                    Hiervoor is gebruik gemaakt van PyAutoGUI, wat een module voor python is die in staat is de muis en keyboard functies van de computer te besturen.
                </p>
            </div>

            <div class="bookmarklet">
                <h1>Bookmarklet</h1>
                <p>Een bookmarklet - ook gekend als favelet -  is een klein stukje javascript code dat kan worden opgeslagen als url in een bladwijzer. Het zijn eenvoudige hulpmiddelen die handige functionaliteiten aan een webbrowser kunnen toevoegen.
                    In dit project is het gebruikt om de gekregen string uit python te splitsen en in de juiste inputvelden te stoppen.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
