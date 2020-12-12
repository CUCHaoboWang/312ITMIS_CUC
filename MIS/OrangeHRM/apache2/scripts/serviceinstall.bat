@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/xampp/htdocs/MIS/OrangeHRM/apache2\bin\httpd.exe" -k install -n "orangehrmApache" -f "C:/xampp/htdocs/MIS/OrangeHRM/apache2\conf\httpd.conf"

net start orangehrmApache >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop orangehrmApache >NUL
"C:/xampp/htdocs/MIS/OrangeHRM/apache2\bin\httpd.exe" -k uninstall -n "orangehrmApache"

:end
exit
