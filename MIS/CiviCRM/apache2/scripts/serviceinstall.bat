@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/xampp/htdocs/MIS/CiviCRM/apache2\bin\httpd.exe" -k install -n "civicrmApache" -f "C:/xampp/htdocs/MIS/CiviCRM/apache2\conf\httpd.conf"

net start civicrmApache >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop civicrmApache >NUL
"C:/xampp/htdocs/MIS/CiviCRM/apache2\bin\httpd.exe" -k uninstall -n "civicrmApache"

:end
exit
