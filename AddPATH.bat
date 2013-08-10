@echo off
rem #####
rem # This bat file is for add PATH "php.exe".
rem #
rem #####
set PJ_HOME=%cd%
pushd D:\e4.3-ultimate-jre\pleiades\xampp\php
set PHP_BIN=%cd%
set PATH=%PATH%;%PHP_BIN%
pause

pushd C:\Program Files (x86)\Git\bin
set GIT_BIN=%cd%
set PATH=%PATH%;%GIT_BIN%
echo %PATH%
pause

popd
popd
echo %cd%
pause

rem exit 0