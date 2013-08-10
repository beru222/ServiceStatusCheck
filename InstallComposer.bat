@echo off
rem #####
rem # This bat file is for installing the "composer".
rem #
rem #####
set PJ_HOME=%cd%
pushd D:\e4.3-ultimate-jre\pleiades\xampp\php
set BIN=%cd%
set PATH=%PATH%;%BIN%
echo %PATH%
pause
popd
echo %cd%
php.exe -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"

pause

rem exit 0