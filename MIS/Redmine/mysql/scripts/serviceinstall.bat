@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\xampp\htdocs\MIS\Redmine/mysql\bin\mysqld.exe" --install "redmineplusagileMySQL" --defaults-file="C:\xampp\htdocs\MIS\Redmine/mysql\my.ini"

net start "redmineplusagileMySQL" >NUL
goto end

:remove
rem -- STOP SERVICES BEFORE REMOVING

net stop "redmineplusagileMySQL" >NUL
"C:\xampp\htdocs\MIS\Redmine/mysql\bin\mysqld.exe" --remove "redmineplusagileMySQL"

:end
exit
