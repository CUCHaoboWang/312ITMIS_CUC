@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

if exist "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\kibana\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\resin\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\serviceinstall.bat" INSTALL)
rem redmineplusagile_code_start
if exist C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\serviceinstall.bat (start /MIN C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\serviceinstall.bat INSTALL)
rem redmineplusagile_code_end
rem RUBY_APPLICATION_INSTALL
if exist "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\nginx\scripts\serviceinstall.bat" INSTALL)
if exist "C:\xampp\htdocs\MIS\Redmine\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\php\scripts\serviceinstall.bat" INSTALL)
goto end

:remove

if exist "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\third_application\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\lucene\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mongodb\scripts\serviceinstall.bat")
rem redmineplusagile_code_start
if exist C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\serviceinstall.bat (start /MIN C:\xampp\htdocs\MIS\Redmine\apps\REDMIN~1\scripts\serviceinstall.bat)
rem redmineplusagile_code_end
rem RUBY_APPLICATION_REMOVE
if exist "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\subversion\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\openoffice\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\resin\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\resin\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\activemq\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\apache-tomcat\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\apache2\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\kibana\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\kibana\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\logstash\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\elasticsearch\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\postgresql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\mysql\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\php\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\php\scripts\serviceinstall.bat")
if exist "C:\xampp\htdocs\MIS\Redmine\nginx\scripts\serviceinstall.bat" (start "" /MIN "C:\xampp\htdocs\MIS\Redmine\nginx\scripts\serviceinstall.bat")
:end
