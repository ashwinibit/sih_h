<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color: #ffb366;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #8cff66 ;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 30px;
    height: 100%;
}

#Home {background-color: #66ff99;}
#read {background-color: #668cff;}
#Link {background-color: #33ffff;}
#About{background-color: #ff80bf;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, '#66ff99')" id="defaultOpen">Home</button>
<a href="read.php" target=""><button class="tablink" onclick="openPage('read', this, '#668cff')" >Readings</button></a>
<button class="tablink" onclick="openPage('Link', this, '#33ffff')">Important Links</button>
<button class="tablink" onclick="openPage('About', this,'#ff80bf')">About</button>
</body>
</html> 