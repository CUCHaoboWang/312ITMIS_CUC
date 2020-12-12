@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

if exist "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\kibana\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\serviceinstall.bat" INSTALL)
rem RUBY_APPLICATION_INSTALL
if exist "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\nginx\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\DokuWiki\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\php\scripts\serviceinstall.bat" INSTALL)
goto end

:remove

if exist "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\third_application\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\lucene\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mongodb\scripts\serviceinstall.bat")
rem RUBY_APPLICATION_REMOVE
if exist "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\subversion\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\openoffice\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\resin\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\activemq\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\apache-tomcat\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\apache2\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\kibana\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\logstash\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\elasticsearch\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\postgresql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\mysql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\php\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\DokuWiki\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\DokuWiki\nginx\scripts\serviceinstall.bat")
:end
