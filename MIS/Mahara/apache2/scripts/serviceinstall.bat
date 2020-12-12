@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/xampp/htdocs/MIS/Mahara/apache2\bin\httpd.exe" -k install -n "maharaApache" -f "C:/xampp/htdocs/MIS/Mahara/apache2\conf\httpd.conf"

net start maharaApache >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop maharaApache >NUL
"C:/xampp/htdocs/MIS/Mahara/apache2\bin\httpd.exe" -k uninstall -n "maharaApache"

:end
exit
