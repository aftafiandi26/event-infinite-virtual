@echo off
echo Building Laravel project with Tailwind CSS...

REM Check if Node.js is installed
where node >nul 2>nul
if %errorlevel% neq 0 (
    echo Node.js is not installed or not in PATH.
    echo Please install Node.js from https://nodejs.org
    echo Then restart your terminal and run this script again.
    pause
    exit /b 1
)

REM Check if npm is available
where npm >nul 2>nul
if %errorlevel% neq 0 (
    echo npm is not available.
    echo Please ensure Node.js is properly installed.
    pause
    exit /b 1
)

echo Installing dependencies...
call npm install

if %errorlevel% neq 0 (
    echo Failed to install dependencies.
    pause
    exit /b 1
)

echo Building for production...
call npm run build

if %errorlevel% neq 0 (
    echo Build failed.
    pause
    exit /b 1
)

echo Build completed successfully!
echo Your Tailwind CSS is now optimized for production.
pause

