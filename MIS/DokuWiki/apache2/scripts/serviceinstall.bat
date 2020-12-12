@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:/xampp/htdocs/MIS/DokuWiki/apache2\bin\httpd.exe" -k install -n "dokuwikiApache" -f "C:/xampp/htdocs/MIS/DokuWiki/apache2\conf\httpd.conf"

net start dokuwikiApache >NUL
goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop dokuwikiApache >NUL
"C:/xampp/htdocs/MIS/DokuWiki/apache2\bin\httpd.exe" -k uninstall -n "dokuwikiApache"

:end
exit
