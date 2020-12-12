@echo off
rem START or STOP Apache Service
rem --------------------------------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

net start civicrmApache
goto end

:stop

"C:/xampp/htdocs/MIS/CiviCRM/apache2\bin\httpd.exe" -n "civicrmApache" -k stop

:end
exit
