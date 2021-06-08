# Resistencia:

Digitalization of the board game "[The Resistance](http://devir.es/producto/la-resistencia/)".


## Version history:
### v0.3:
- v0.3.1:
    - Added basic logic of the FSM.
    - Added sh file to find the IP of the Raspberry using brute force and foreign wifi.
    - Logic added to start the game with a petition.
- v0.3.0:
    - Creation of player fully implemented on NodeRed.
    - Work on NodeRed bugs in code.
    - Work on UI for RootMenu.
    - Logic of the game will be based on a FSM.
### v0.2:
- v0.2.5: 
    - Minor fixes to UI.
    - Getting ready for NODERED and new OS (raspberry).
- v0.2.4: Root menu:
    - rootMenu:
        - Features defined.
        - UI design.
    - DB-logic.uxf mayor modification:
        - Now tables not implemented (yet) apear as theorical.
        - FieldTypes now apear on diagram.
        - New fileds on Players, Mission => *new Tables*.
    - Opinion table created
- v0.2.3: Data base and menus integration:
    - Mayor upgrade of the common.js file:
        - Now categories to store the functions.
        - Compatibility with php code.
    - Alpha version of RootMenu at waitingRoom.
    - CreateMenu and Waiting room basic logic implemented.
    - Waiting Room interface created, with custom waiting-msgs.
    - Now the game stores the username and the icon asociated, to the waiting Room.
    - Visual change to createMenu:
        - When selecting an img, the crop menu is opened on a dedicated screen.
        - There isn't a default player icon anymore.
        - New btn to cancel the change of icon.
    - PHP logic modified:
        - aa-code.md
        - addImg.php
        - clearTable.php
        - getImg.php
        - getPage.php
        - getPlayers.php
        - getRow.php
        - insertToTable.php
        - setup.php
        - sqliteTables.txt 
    - Minor changes on Style.css and updateServer.sh upgraded.
- v0.2.2: Data base creation
    - First aproach to DB creation and modification usign JS/JQuerry/PHP.
        - Communication to Raspberry using PHP and JQuerry (Ajax).
        - Ajax commands to send information (plain text).
        - Database logic defined.
        - Game proccess logic defined.
        - Use of uxf file to display info.
        - Change between menus using php.
        - Succesfull sqlite update of table using php and ajax.
- v0.2.1: Main menu
    - Work on the main menu.
        - Basic layout defined.
        - Some funcionalities added.
        - Icons for guns and team leader added.
        - CSS file unified.
        - Feedback system implemented.
- v0.2.0: The start of HTML
    - Work focused on the form to create a new player menu.

### v0.0 - v0.1: Bluetooth communication
Work focused on the configuration of the rapsberry pi 4 and the bluetooth communication protocol. Basic structure of the repository created.
    
    - Bluetooth interpreter and communication stablised. More work will be added on the future.
        - Connection
        - Basic interpreter and communication
        - Change wifi using BT
        - Execute shells at startup (also as root if needed)
        - Communication logic
        - Make status respond
        - Execute commands
    - Basic sh files created to update the code if changed.
    - Database basic logic


## Special mentions:
### Icons:
- Gun icons: Made by smalllikeart: https://www.flaticon.com/authors/smalllikeart
- Torch icon: Icons made by freepik http://www.freepik.com/

## Gridstrap:
- Github: [https://github.com/rosspi/gridstrap.js/](https://github.com/rosspi/gridstrap.js/)
- Demo: [rosspi.github.io/gridstrap.js](https://rosspi.github.io/gridstrap.js/)


### Links:
Links to pages used to configure or consult with usefull information:
#### Raspberry:
- ssh control: https://vitux.com/how-to-remotely-manage-a-ubuntu-server-with-ssh/
- Rasp SH code:
    - change wifi: https://linuxconfig.org/ubuntu-20-04-connect-to-wifi-from-command-line
    - static IP with wired connection: https://linuxconfig.org/how-to-configure-static-ip-address-on-ubuntu-20-04-focal-fossa-desktop-server
    - Manipulate text on linux: https://www.digitalocean.com/community/tutorials/the-basics-of-using-the-sed-stream-editor-to-manipulate-text-in-linux

- Rasp bluetooth:
    - https://bluedot.readthedocs.io/en/latest/pairpiandroid.html
    - https://www.raspberrypi.org/forums/viewtopic.php?p=919420#p919420

- Rasp LAMP:
    - install-linux-apache-mysql-php: https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04
    - MySQL Cheatsheet: https://www.mysqltutorial.org/mysql-cheat-sheet.aspx
    - Secure phpmyadmin: https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-18-04

- Rasp php:
    - https://askubuntu.com/questions/92069/how-to-add-custom-directory-e-g-phpmyadmin

- Rasp sqlite:
    - https://www.ochobitshacenunbyte.com/2019/10/01/instalacion-y-uso-basico-de-sqlite-en-ubuntu-18-04/
    - connect to SQLite using PHP: https://www.a2hosting.com/kb/developer-corner/sqlite/connect-to-sqlite-using-php
    - jQuerry ajax: https://api.jquery.com/jquery.ajax/
    - js php: https://stackoverflow.com/questions/12498839/how-to-execute-php-code-within-javascript/12498905



#### Web:
- Css loading: https://loading.io/css/
- Crop img: https://codepen.io/blackjacques/pen/bqgNoa
- https://www.w3schools.com/cssref/css_units.asp
