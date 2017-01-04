<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
-->
</style>
</head>

<body>
<table width="1110" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="50" height="25">&nbsp;</td>
    <td><a href="admin.php">
      <div class="dropdown">
      <button class = "dropbtn">Home</button>
      </a></div>
    </td>
    <td valign="middle">
      <div class="dropdown">
      <button onclick="myproduction()" class = "dropbtn">Production</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="dailyprod.php">Daily Production</a>
        <a href="#">Agent Production</a>
        <a href="#">Company Production</a></div></div>
    </td>
	<td><a href="#">
    <div class="dropdown">
    <button class = "dropbtn">Policies Status</button>
    <div id="myDropdown" class="dropdown-content">
    </a></td></div></div>
  </td>
  <td ><a href="#">
    <div class="dropdown">
    <button class = "dropbtn">Collectables</button>
    <div id="myDropdown" class="dropdown-content">
    </a></td></div></div>
  </td>
  <td><a href="#">
    <div class="dropdown">
    <button class = "dropbtn">Drives</button>
    <div id="myDropdown" class="dropdown-content">
    </a></td></div></div>
  </td>
  <td><a href="#">
    <div class="dropdown">
    <button class = "dropbtn">Presistency</button>
    <div id="myDropdown" class="dropdown-content">
    </a></td></div></div>
  </td>
  <td>
    <div class="dropdown">
    <button onclick="mysetting2()" class = "dropbtn">Setting</button>
    <div id="myDropdown2" class="dropdown-content">
      <a href="agent.php">Agent Setting</a>
      <a href="team.php">Team Setting</a>
      <a href="plan.php">Plan Setting</a>
      <a href="">User Setting</a>
    </div></div>
  </tr>
</table>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myproduction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function mysetting2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
