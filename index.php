<?php
    //placeholder
?>
<html>
    <head>
    <script src="functions.js"></script>
    <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <!-- START MENU -->
        <div id="startmenucontainer" draggable="true">
            <div id="startmenu">
                <div id="startmenubanner"> Dejimachan <a class="whitet">3.1</a></div>
                <div class="startmenuitemcontainer">
                    <a href="window.html" rel="modal:open"  onclick="hideStartMenu()">
                        <div class="startmenuitemimage"><img class="startmenuimage" src="img/wan.png"></div>
                        <div class="startmenuitemtext"><u>W</u>ang 2009</div>
                        <div class="startmenuitemarrow">></div>
                    </a>
                </div>
            </div>
        </div>
         <!-- PROGRAM WINDOW -->
         <div id="windowcontainer">
        <div id="window">
            <div id="windowcontrolls"><div id="windowicon"><img src="img/wan.png"></div><a href="#" onclick(hideWindow(windowcontainer))><img id="windowbuttons" src="img/buttons.png"></a></div>
            <div id="windowcontentcontainer">
                options
                <div id="windowcontent">content</div>
            </div>
        </div>
</div>
        <!-- TASK BAR -->
        <div id="taskbarcontainer">
            <div id="taskbar">
                <!--START BUTTON -->
                <div id="startbuttoncontainer">
                    <div onclick="showStartMenu()" id="startbutton">
                        <div class="taskbartext"><img src="img/start.png">  Start</div>
                    </div>
                </div>
                <!-- ACTIVITY WINDOW -->
                <div id="activitywindow">
                    <div class="taskbartext">19:84</div>
                </div>
            </div>
        </div>
    </body>
</html>
