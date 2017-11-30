<?php include ("header.html"); ?>
<div>
    <img src="images/welcome.jpg" title="Welcome to CGPA Calculator website">
</div>
<div class="well">
    <input type="button" onclick="alertMe();" title="Click me to enter your name" value="Click me!" class="form-actions alert-success"> <br>
    Are you ready to dive <br>into the world of Gp calculation?
<a href="input.php" title="CGPA Calculator" class="clickHere">Click here</a>
</div>

<form id="form" method="get" action="">
    <input type="hidden" id="name" name="name">
</form>
<script type="text/javascript">
    function alertMe() {
        var name = window.prompt("What is your name?");
        document.getElementById('name').value = name;
        document.getElementById('form').submit();
    }
</script>
<?php
   if(isset($_GET['submit'])) {
        $_SESSION['loggedIn'];
        $name = htmlentities(htmlspecialchars($_GET['name']));
        echo $name . " is awesome!";
    }
?>
<?php include ("footer.html");?>