@echo off
echo Setting up Node.js and npm for this project...

REM Common Node.js installation paths
set NODE_PATHS[0]="C:\Program Files\nodejs"
set NODE_PATHS[1]="C:\Program Files (x86)\nodejs"
set NODE_PATHS[2]="%USERPROFILE%\AppData\Local\Programs\nodejs"
set NODE_PATHS[3]="%USERPROFILE%\AppData\Roaming\npm"

echo Searching for Node.js installation...

REM Check each path
for /L %%i in (0,1,3) do (
    call set "CURRENT_PATH=%%NODE_PATHS[%%i]%%"
    if exist !CURRENT_PATH!\node.exe (
        echo Found Node.js at: !CURRENT_PATH!
        set "NODE_PATH=!CURRENT_PATH!"
        goto :found
    )
)

echo Node.js not found in common locations.
echo Please install Node.js from https://nodejs.org
echo Then restart this script.
pause
exit /b 1

:found
echo Adding Node.js to PATH for this session...
set "PATH=%NODE_PATH%;%PATH%"

echo Testing Node.js...
node --version
if %errorlevel% neq 0 (
    echo Node.js test failed.
    pause
    exit /b 1
)

echo Testing npm...
npm --version
if %errorlevel% neq 0 (
    echo npm test failed.
    pause
    exit /b 1
)

echo Node.js and npm are working!
echo Installing project dependencies...
call npm install

if %errorlevel% neq 0 (
    echo Failed to install dependencies.
    pause
    exit /b 1
)

echo Building project...
call npm run build

if %errorlevel% neq 0 (
    echo Build failed.
    pause
    exit /b 1
)

echo Setup completed successfully!
echo Your Tailwind CSS is now optimized for production.
pause

