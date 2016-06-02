###Configuring E-Commerce Site In Wordpress
###Get Wordpress Setup
####Set up New Virtual Host
####127.0.0.1 is Local - Then the name
```
sudo vi /etc/hosts
127.0.0.1 local-drupal.com
127.0.0.1 local-furniture-site.com
127.0.0.1 local-bike.com
```
##Download Wordpress
####Go to www.wordpress.org
####Dowload zip of Wordpress 4.5.2 and Extract
#### Save in Folder Open up in Sublime
##Configure Virtual Host in Apache Configuration
#####Apache listening on Port 80 - but no Virtual Host Setup
```
sudo vi /etc/apache2/extra/httpd-vhosts.conf
<VirtualHost *:80>
ServerName local-furniture.com
DocumentRoot /Users/Bryant/Desktop/DigitalCrafts/Final-Project/bike
<Directory "/Users/Bryant/Desktop/DigitalCrafts/Final-Project/bike
Allow from all
Options +Includes +Indexes +FollowSymLinks
AllowOverride all
Require all granted
</Directory>
</VirtualHost>
```
##Restart Apache
```
//Syntax Checker
sudo apachectl -t
//Restart Command
sudo apachectl restart
```
###Set Up DataBase 
#####Went into Sequel Pro and created Database with name "bike"
#####Update Schema Priviliges for X user
###Update wp-config.php, Save, Run Install (following directions on WP)
#####Copy the code in the "sorry can't get the wp-config.php file"
#####Paste into sublime Save in root directory 
#####Keep following WP directions
#####Check Sequal and see if connected
##Customize Site
####Go to root WP directory in Terminal and Give Apache User ownership of uploads because User owns it now
```
cd Final-Project/bike/
cd wp-content
//Give Apache ownership of uploads folder
//Make uploads folder
mkdir uploads
//_www is the Apache User
sudo chown _www uploads/
```
####Go to Wordpress Plugin Page and download Magento
####Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your 
WordPress installation and then activate the Plugin from Plugins page. 
####Activate Plugin, Go to Magento Tab in Admin Plugin Menu, Click API Settings

