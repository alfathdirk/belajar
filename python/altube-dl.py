#!/usr/bin/python

import commands,os,sys
os.system('clear')




print """\t\t|================================================|
      \t\t|\t[+] How to Using Alftube-dl.py [+]       |
          \t|\t  -- Masukan Link Youtube --             |
\t\t|Example:http://www.youtube.com/watch?v=8hquuq9w |
\t\t================================================="""
a = str (raw_input("Masukin link : \n"))
# format = str (raw_input("\nPilih Output nya:\n1.mp3\n2.wav \n===>"))

if len(a) < 15:
    print "\nMASUKIN LINK YANG BENAR SOB\nExample:http://www.youtube.com/watch?v=8hquuq9w\n"
    sys.exit(1)
	
else:
    print """==============================
[+] SEDANG MENDOWNLOAD DATA [+]
=============================="""

appyutub = os.system ('youtube-dl' + ' ' + '-c' + ' ' + a) 
	 

print appyutub 
