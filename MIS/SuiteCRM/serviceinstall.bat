@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

if exist "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\kibana\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\serviceinstall.bat" INSTALL)
rem RUBY_APPLICATION_INSTALL
if exist "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\nginx\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\SuiteCRM\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\php\scripts\serviceinstall.bat" INSTALL)
goto end

:remove

if exist "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\third_application\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\lucene\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mongodb\scripts\serviceinstall.bat")
rem RUBY_APPLICATION_REMOVE
if exist "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\subversion\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\openoffice\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\resin\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\activemq\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\apache-tomcat\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\apache2\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\kibana\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\logstash\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\elasticsearch\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\postgresql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\mysql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\php\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\SuiteCRM\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\SuiteCRM\nginx\scripts\serviceinstall.bat")
:end
