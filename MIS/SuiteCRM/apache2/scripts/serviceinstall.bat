@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/xampp/htdocs/MIS/SuiteCRM/apache2\bin\httpd.exe" -k install -n "suitecrmApache" -f "C:/xampp/htdocs/MIS/SuiteCRM/apache2\conf\httpd.conf"

net start suitecrmApache >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop suitecrmApache >NUL
"C:/xampp/htdocs/MIS/SuiteCRM/apache2\bin\httpd.exe" -k uninstall -n "suitecrmApache"

:end
exit
