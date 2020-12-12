@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist "C:\xampp\htdocs\MIS\Mahara\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\server\hsql-sample-database\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\ingres\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\resin\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\jetty\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\servicerun.bat" START)
rem RUBY_APPLICATION_START
if exist "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\servicerun.bat" START)
if exist "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\servicerun.bat" START)
goto end

:stop
echo "Stopping services ..."
if exist "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\servicerun.bat" STOP)
rem RUBY_APPLICATION_STOP
if exist "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\jetty\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\jetty\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\hypersonic\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\server\hsql-sample-database\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\resin\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\resin\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\servicerun.bat" (start "" /MIN /WAIT "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\ingres\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\ingres\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\servicerun.bat" STOP)
if exist "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\servicerun.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\servicerun.bat" STOP)

:end
