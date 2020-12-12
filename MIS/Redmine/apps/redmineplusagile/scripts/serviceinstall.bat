@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile\scripts\winserv.exe" install "redmineplusagileThin1" -start auto "C:\xampp\htdocs\MIS\Redmine\ruby\bin\ruby.exe" "C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile\htdocs\bin\thin" start -p 3001 -e production -c "C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile/htdocs" -a 127.0.0.1 
net start redmineplusagileThin1 >NUL
"C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile\scripts\winserv.exe" install "redmineplusagileThin2" -start auto "C:\xampp\htdocs\MIS\Redmine\ruby\bin\ruby.exe" "C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile\htdocs\bin\thin" start -p 3002 -e production -c "C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile/htdocs" -a 127.0.0.1 

net start redmineplusagileThin2 >NUL

goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop redmineplusagileThin1 >NUL

"C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile\scripts\winserv.exe" uninstall "redmineplusagileThin1"

net stop redmineplusagileThin2 >NUL
"C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile\scripts\winserv.exe" uninstall "redmineplusagileThin2"

:end
exit
