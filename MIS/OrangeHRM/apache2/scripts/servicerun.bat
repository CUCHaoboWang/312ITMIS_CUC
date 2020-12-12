@echo off
rem START or STOP Apache Service
rem --------------------------------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

net start orangehrmApache
goto end

:stop

"C:/xampp/htdocs/MIS/OrangeHRM/apache2\bin\httpd.exe" -n "orangehrmApache" -k stop

:end
exit
