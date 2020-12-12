@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\xampp\htdocs\MIS\OrangeHRM/mysql\bin\mysqld.exe" --install "orangehrmMySQL" --defaults-file="C:\xampp\htdocs\MIS\OrangeHRM/mysql\my.ini"

net start "orangehrmMySQL" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "orangehrmMySQL" >NUL
"C:\xampp\htdocs\MIS\OrangeHRM/mysql\bin\mysqld.exe" --remove "orangehrmMySQL"

:end
exit
