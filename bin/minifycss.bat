@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/matthiasmullie/minify/bin/minifycss
php "%BIN_TARGET%" %*
