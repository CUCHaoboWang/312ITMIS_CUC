@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

if exist "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\kibana\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\resin\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\serviceinstall.bat" INSTALL)
rem RUBY_APPLICATION_INSTALL
if exist "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\nginx\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Mahara\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\php\scripts\serviceinstall.bat" INSTALL)
goto end

:remove

if exist "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\third_application\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\lucene\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mongodb\scripts\serviceinstall.bat")
rem RUBY_APPLICATION_REMOVE
if exist "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\subversion\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\openoffice\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\resin\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\activemq\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\apache-tomcat\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\apache2\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\kibana\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\logstash\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\elasticsearch\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\postgresql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\mysql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\php\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Mahara\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Mahara\nginx\scripts\serviceinstall.bat")
:end
