@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist "C:\xampp\htdocs\MIS\SuiteCRM\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\server\hsql-sample-database\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\ingres\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\jetty\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\servicerun.bat" START)
rem RUBY_APPLICATION_START
if exist "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\servicerun.bat" START)
goto end

:stop
echo "Stopping services ..."
if exist "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\servicerun.bat" STOP)
rem RUBY_APPLICATION_STOP
if exist "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\jetty\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\server\hsql-sample-database\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\servicerun.bat" (start "" /MIN /WAIT "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\ingres\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\servicerun.bat" STOP)

:end
