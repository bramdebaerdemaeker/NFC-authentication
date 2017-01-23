# NFC-authentication
Proof of concept: can I  authenticate with NFC


## Logboek
+ RFID en NFC research
+ Bookmarklets research

+ testen van simpele bookmarklets
- https://code.tutsplus.com/tutorials/create-bookmarklets-the-right-way--net-18154


### denkweg 1
+ bij het leggen van de smartphone nabij een nfc tag, moet de gsm bepaalde gegevens (username + password) versturen. 
+ door op de aanmeldknop te klikken, via een bookmarklet die gegevens ergens ophalen en in de html input velden steken

### denkweg 2 -> dat is het geworden
+ arduino gebruiken in combo met arduino nfc shield
+ https://www.youtube.com/watch?v=WgLV5X1iWWw

+ prutsen met adafruit library voor arduino
+ aantal read/write libraries geprobeerd: verschillende info in nfc tag stoppen en uit halen

+ python installeren en gebruiken om geprinte data van arduino uit Serial te halen

+ pyautogui library gebruiken om keyboard te kunnen gebruiken
https://pyautogui.readthedocs.io/en/latest/introduction.html
