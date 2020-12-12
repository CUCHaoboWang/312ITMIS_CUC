@echo off
"C:\xampp\htdocs\MIS\OrangeHRM/mysql\bin\mysql.exe" --defaults-file="C:\xampp\htdocs\MIS\OrangeHRM/mysql\my.ini" -u root -e "DELETE FROM mysql.user WHERE User='';"
"C:\xampp\htdocs\MIS\OrangeHRM/mysql\bin\mysql.exe" --defaults-file="C:\xampp\htdocs\MIS\OrangeHRM/mysql\my.ini" -u root -e "CREATE USER 'root'@'127.0.0.1' IDENTIFIED BY '%1';"
"C:\xampp\htdocs\MIS\OrangeHRM/mysql\bin\mysql.exe" --defaults-file="C:\xampp\htdocs\MIS\OrangeHRM/mysql\my.ini" -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'root'@'127.0.0.1' WITH GRANT OPTION;"
"C:\xampp\htdocs\MIS\OrangeHRM/mysql\bin\mysql.exe" --defaults-file="C:\xampp\htdocs\MIS\OrangeHRM/mysql\my.ini" -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '%1';"
