#!/usr/bin/python

import commands,os,sys,smtplib

from email.MIMEText import MIMEText

os.system('clear')

print """\t\t|===============================================|
\t\t|\t[+]Owned By Alfathdirk [+]       	|
\t|\t  -- scripting server --            	|
\t\t|Greetz thanks for Allah and All my Family  ,RAS_LOG	|
\t\t================================================="""


pesan_email = ''
p = os.popen('uname -n').read()

os.system('MegaCli64 -PDList -aALL > log.txt')
with open('log.txt') as f:
	content = f.readlines()
	untuk = "sysadmin@hostune.com"
	print content
	for x in range(0,len(content)):
		if  content[x] == 'Firmware state: Disable\n' or content[x] == 'Firmware state: Offline\n' or (content[x] == 'Predictive Failure Count: '+ str(x+1)):
			gmail_user = "hostune@gmail.com"
			gmail_password = "HostunEGE2012"
			# $arr[] = content[x]
			pesan_email = MIMEText(content[x]  + " on line " + str(x+1))
			pesan_email['From'] = gmail_user
			pesan_email['To'] = untuk
			pesan_email['Subject'] = "Error ditemukan di " + p
			server = smtplib.SMTP("smtp.gmail.com", 587)
			server.ehlo()
			server.starttls()
			server.ehlo()
			# print "error ditemukan"
			pass

# print pesan_email
if(pesan_email):
	server.login(gmail_user, gmail_password)
	server.sendmail(gmail_user, [untuk], pesan_email.as_string())
	server.close()
	print  "email has been send"
