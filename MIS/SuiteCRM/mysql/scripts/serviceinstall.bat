@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\xampp\htdocs\MIS\SuiteCRM/mysql\bin\mysqld.exe" --install "suitecrmMySQL" --defaults-file="C:\xampp\htdocs\MIS\SuiteCRM/mysql\my.ini"

net start "suitecrmMySQL" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "suitecrmMySQL" >NUL
"C:\xampp\htdocs\MIS\SuiteCRM/mysql\bin\mysqld.exe" --remove "suitecrmMySQL"

:end
exit
