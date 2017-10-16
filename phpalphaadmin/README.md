# phpalphaadmin
An admin panel for phpAlphaDB
## Setup Guide
All you have to do is download, and edit the config.php to change your username and password, and enable IP Auth and other settings.
```php
# Here Is Where You Edit phpAlphaAdmin Login.
$aAdminUser = 'alpha';
$aAdminPass = md5('pswd');
	
# If You Want, You Can Add An Extra Layer Of Security By Adding IP Authentication. NOTE: This Does Not Work If You Are On localhost, Or If You Are Dynamic. Disabled By Default.
$ipauth = false;
$aAdminIP = '127.0.0.1';

# Here You Put Your Theme, Not Needed, But Helps For Visual Asthetics.
$aTheme = 'default';
```
## Info
Right now there is only max 22 columns, for various reasons. You shouldn't need more than 22. In the release download, upload the /paa/ to the root or public_html or www etc. Then Navigate To http://yourdomain.com/paa/. If you did not change the username and password (Which you should,) You can login with alpha:pswd. The console and docs are included on the navigation topbar.
## Console
The console lets you execute ALL php code. So its very important you change the password. You can check the docs for valid functions to use, but most softwares will create databases and info themselves.
## ID Column
The ID Column is REQUIRED to work with phpAlphaAdmin. Whether you do 1, 2, 3, or you md5 mktime() it doesn't matter. But the first column NEEDS to be unique, and no important info stored in it.
## Demo
Working demo is now open to public.
Console is disabled for obvious reasons.
http://phpalphadb.rf.gd/paa-demo/
## Releases
[phpAlphaAdmin 1.1.zip](https://github.com/mcclureski/phpalphaadmin/releases/download/1.1/phpAlphaAdmin1.2.zip) <br />
[phpAlphaDB.zip](https://www.unrealsecurity.net/downloads/phpAlphaDB.zip)
## Contributors
JQuery -> Who Made phpAlphaDB And Helped A Bit. <br />
StackOverFlow -> Coding dev's best friend
## License
I released it under the GNU General Public License v3.0 cuz why not.
