# -*- coding: utf-8 -*-
import serial #Import Serial Library
import pyautogui #import pyautogui for mouse and keyboard control
from string import maketrans
arduinoSerialData = serial.Serial('/dev/cu.usbmodem1411',115200) #Create Serial port object called arduinoSerialData
readSerial = 1

trantab = maketrans(';awm',',qz;')



while (readSerial==1):
    if (arduinoSerialData.inWaiting()>0):
        pyautogui.PAUSE = 10
        myData = arduinoSerialData.readline()
        print 'ok'
        if(myData):
            print myData
            pyautogui.typewrite(myData.translate(trantab));
            pyautogui.keyDown('enter')
            readSerial=2
        else:
            error = 'nowp'
            print error



