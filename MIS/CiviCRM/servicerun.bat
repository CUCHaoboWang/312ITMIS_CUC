@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist "C:\xampp\htdocs\MIS\CiviCRM\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\server\hsql-sample-database\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\ingres\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\mysql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\postgresql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\elasticsearch\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\logstash\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\openoffice\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\apache-tomcat\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\apache-tomcat\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\apache2\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\resin\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\activemq\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\jetty\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\subversion\scripts\servicerun.bat" START)
rem RUBY_APPLICATION_START
if exist "C:\xampp\htdocs\MIS\CiviCRM\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\lucene\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\mongodb\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\CiviCRM\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\third_application\scripts\servicerun.bat" START)
goto end

:stop
echo "Stopping services ..."
if exist "C:\xampp\htdocs\MIS\CiviCRM\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\third_application\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\lucene\scripts\servicerun.bat" STOP)
rem RUBY_APPLICATION_STOP
if exist "C:\xampp\htdocs\MIS\CiviCRM\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\subversion\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\jetty\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\server\hsql-sample-database\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\resin\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\activemq\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\openoffice\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\apache2\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\apache-tomcat\scripts\servicerun.bat" (start "" /MIN /WAIT "C:\xampp\htdocs\MIS\CiviCRM\apache-tomcat\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\logstash\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\elasticsearch\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\ingres\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\mysql\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\mongodb\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\CiviCRM\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\CiviCRM\postgresql\scripts\servicerun.bat" STOP)

:end
