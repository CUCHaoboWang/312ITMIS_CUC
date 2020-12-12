@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\xampp\htdocs\MIS\CiviCRM/mysql\bin\mysqld.exe" --install "civicrmMySQL" --defaults-file="C:\xampp\htdocs\MIS\CiviCRM/mysql\my.ini"

net start "civicrmMySQL" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "civicrmMySQL" >NUL
"C:\xampp\htdocs\MIS\CiviCRM/mysql\bin\mysqld.exe" --remove "civicrmMySQL"

:end
exit
