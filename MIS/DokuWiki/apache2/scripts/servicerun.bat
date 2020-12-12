@echo off
rem START or STOP Apache Service
rem --------------------------------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

net start dokuwikiApache
goto end

:stop

"C:/xampp/htdocs/MIS/DokuWiki/apache2\bin\httpd.exe" -n "dokuwikiApache" -k stop

:end
exit
