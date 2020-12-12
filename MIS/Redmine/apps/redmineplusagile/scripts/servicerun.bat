@echo off
rem START or STOP Apache Service
rem --------------------------------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

net start redmineplusagileThin1

net start redmineplusagileThin2

goto end
:stop

net stop redmineplusagileThin1

net stop redmineplusagileThin2

:end
exit
