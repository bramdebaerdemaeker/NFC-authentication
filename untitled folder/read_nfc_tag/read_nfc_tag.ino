#include <Wire.h>
#include <PN532_I2C.h>
#include <PN532.h>   // The following files are included in the libraries Installed
#include <NfcAdapter.h>

PN532_I2C pn532_i2c(Wire);
NfcAdapter nfc = NfcAdapter(pn532_i2c);  // Indicates the Shield you are using

void setup(void) {
  Serial.begin(115200);
  //Serial.println("NFC TAG READER"); // Header used when using the serial monitor
  nfc.begin();
}

void loop(void) {
  //Serial.println("\nScan your NFC tag on the NFC Shield\n");  // Command so that you an others will know what to do 
  String total = "";
  if (nfc.tagPresent())
  
  {
    NfcTag tag = nfc.read();
    //Serial.println(tag.getTagType());
    //Serial.print("UID: ");Serial.println(tag.getUidString()); // Retrieves the Unique Identification from your tag

    if (tag.hasNdefMessage()) // If your tag has a message
    {
      
      NdefMessage message = tag.getNdefMessage();
      //Serial.print("\nThis Message in this Tag is ");
      //Serial.print(message.getRecordCount());
      //Serial.print(" NFC Tag Record");
      if (message.getRecordCount() != 1) { 
        //Serial.print("s");
      }
      //Serial.println(".");

      

      // If you have more than 1 Message then it wil cycle through them
      int recordCount = message.getRecordCount();
      for (int i = 0; i < recordCount; i++)
      {
        //Serial.print("\nNDEF Record ");Serial.println(i+1);
        NdefRecord record = message.getRecord(i);

        int payloadLength = record.getPayloadLength();
        byte payload[payloadLength];
        record.getPayload(payload);

        String payloadAsString = ""; // Processes the message as a string vs as a HEX value
        for (int c = 3; c < payloadLength; c++) {
          payloadAsString += (char)payload[c];
        }
        //Serial.print("  Information (as String): ");
        //Serial.println(payloadAsString);
        total += ";" + payloadAsString;
        
        
      }
      Serial.println(total);
    }
  }
  delay(1000);
}

