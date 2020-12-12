@ECHO OFF
IF NOT "%~f0" == "~f0" GOTO :WinNT
@"C:\xampp\htdocs\MIS\Redmine\ruby\bin\ruby.exe" "C:/xampp/htdocs/MIS/Redmine/ruby/lib/ruby/gems/2.5.0/gems/bundler-1.16.6/exe/bundle" %1 %2 %3 %4 %5 %6 %7 %8 %9
GOTO :EOF
:WinNT
@"C:\xampp\htdocs\MIS\Redmine\ruby\bin\ruby.exe" "%~dpn0" %*
