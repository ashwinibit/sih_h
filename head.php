<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
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
    padding: 100px 20px;
    height: 100%;
}

#Home {background-color: #66ff99;}
#read {background-color: #668cff;}
#Link {background-color: #33ffff;}
#About {background-color: 
	 #ff80bf;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, '#66ff99')" id="defaultOpen">Home</button>
<a href="web1.php" target=""><button class="tablink" onclick="openPage('read', this, '#668cff')" >Readings</button></a>
<button class="tablink" onclick="openPage('Link', this, '#33ffff')">Important Links</button>
<button class="tablink" onclick="openPage('About', this,'#ff80bf')">About</button>

<!--<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="read" class="tabcontent">
  <h3>read</h3>
  <p>Some read this fine day!</p> 
</div>

<div id="Link" class="tabcontent">
  <h3>Link</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
--> 
</body>
</html> 