@echo off

robocopy "C:\xampp\htdocs\REPORTERO\Descargas" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7
robocopy "C:\xampp\htdocs\REPORTERO\Descargas\ARGENTINA" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7
robocopy "C:\xampp\htdocs\REPORTERO\Descargas\CHILE" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7
robocopy "C:\xampp\htdocs\REPORTERO\Descargas\COLOMBIA" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7
robocopy "C:\xampp\htdocs\REPORTERO\Descargas\PARAGUAY" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7
robocopy "C:\xampp\htdocs\REPORTERO\Descargas\PERU" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7
robocopy "C:\xampp\htdocs\REPORTERO\Descargas\URUGUAY" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7
robocopy "C:\xampp\htdocs\REPORTERO\QUERY_OUTPUTS" "C:\xampp\htdocs\REPORTERO\temporal" /MOV /MINAGE:7

del /Q "C:\xampp\htdocs\REPORTERO\temporal"