<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>

<h2>Hoverable Buttons</h2>
<p>Use the :hover selector to change the style of the button when you move the mouse over it.</p>
<p><strong>Tip:</strong> Use the transition-duration property to determine the speed of the "hover" effect:</p>



 <br>



<table id="customers">
  <tr>
    <th><button class="button button1">Green</button></th>
    <th><button class="button button1">Blue</button></th>
    <th><button class="button button1">Red</button></th>
  </tr>
  <tr>
    <td><button class="button button1">Gray</button></td>
    <td><button class="button button1">Black</button></td>
    <td><button class="button button1">Black</button></td>
  </tr>


</table>



</body>
</html>
