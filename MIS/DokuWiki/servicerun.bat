@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist "C:\xampp\htdocs\MIS\DokuWiki\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\server\hsql-sample-database\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\ingres\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\jetty\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\servicerun.bat" START)
rem RUBY_APPLICATION_START
if exist "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\servicerun.bat" START)
goto end

:stop
echo "Stopping services ..."
if exist "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\servicerun.bat" STOP)
rem RUBY_APPLICATION_STOP
if exist "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\jetty\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\server\hsql-sample-database\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\servicerun.bat" (start "" /MIN /WAIT "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\ingres\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\servicerun.bat" STOP)

:end
