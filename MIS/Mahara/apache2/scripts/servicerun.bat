@echo off
rem START or STOP Apache Service
rem --------------------------------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

net start maharaApache
goto end

:stop

"C:/xampp/htdocs/MIS/Mahara/apache2\bin\httpd.exe" -n "maharaApache" -k stop

:end
exit
