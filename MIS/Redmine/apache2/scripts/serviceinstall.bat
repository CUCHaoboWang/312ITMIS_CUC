@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/xampp/htdocs/MIS/Redmine/apache2\bin\httpd.exe" -k install -n "redmineplusagileApache" -f "C:/xampp/htdocs/MIS/Redmine/apache2\conf\httpd.conf"

net start redmineplusagileApache >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop redmineplusagileApache >NUL
"C:/xampp/htdocs/MIS/Redmine/apache2\bin\httpd.exe" -k uninstall -n "redmineplusagileApache"

:end
exit
