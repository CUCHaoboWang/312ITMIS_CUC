@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\xampp\htdocs\MIS\Mahara/mysql\bin\mysqld.exe" --install "maharaMySQL" --defaults-file="C:\xampp\htdocs\MIS\Mahara/mysql\my.ini"

net start "maharaMySQL" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "maharaMySQL" >NUL
"C:\xampp\htdocs\MIS\Mahara/mysql\bin\mysqld.exe" --remove "maharaMySQL"

:end
exit
