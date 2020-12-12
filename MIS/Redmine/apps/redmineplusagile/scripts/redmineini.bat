@echo off
rem Populate databases and load default data

CALL C:\xampp\htdocs\MIS\Redmine\scripts\setenv.bat

cd C:\xampp\htdocs\MIS\Redmine/apps/redmineplusagile\htdocs
cmd /C bundle install --local --without development test sqlite --binstubs --path vendor/bundle
C:\xampp\htdocs\MIS\Redmine/ruby\bin\ruby.exe bin\rake generate_secret_token
C:\xampp\htdocs\MIS\Redmine/ruby\bin\ruby.exe bin\rake db:migrate RAILS_ENV="production"

C:\xampp\htdocs\MIS\Redmine/ruby\bin\ruby.exe bin\rake redmine:plugins NAME=redmine_agile RAILS_ENV="production"
          
C:\xampp\htdocs\MIS\Redmine/ruby\bin\ruby.exe bin\rake redmine:load_default_data RAILS_ENV="production" REDMINE_LANG="en"
              