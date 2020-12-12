@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist "C:\xampp\htdocs\MIS\Redmine\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\server\hsql-sample-database\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\ingres\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\resin\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\jetty\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\servicerun.bat" START)
rem redmineplusagile_code_start
if exist C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\servicerun.bat (start /MIN C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\servicerun.bat START)
rem redmineplusagile_code_end
rem RUBY_APPLICATION_START
if exist "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\servicerun.bat" START)
goto end

:stop
echo "Stopping services ..."
if exist "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\servicerun.bat" STOP)
rem redmineplusagile_code_start
if exist C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\servicerun.bat (start /MIN C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\servicerun.bat STOP)
rem redmineplusagile_code_end
rem RUBY_APPLICATION_STOP
if exist "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\jetty\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\server\hsql-sample-database\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\resin\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\servicerun.bat" (start "" /MIN /WAIT "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\ingres\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\servicerun.bat" STOP)

:end
