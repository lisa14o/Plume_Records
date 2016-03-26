<?php require("includes/doc.php"); ?>

<title>ABOUT</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" >
<link href="css/media.css" rel="stylesheet" type="text/css" >
<link href='https://fonts.googleapis.com/css?family=Oranienbaum' rel='stylesheet' type='text/css'> 
<link href='https://fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900,700' rel='stylesheet' type='text/css'>

<?php require("includes/header.php"); ?>

<div id="wrapper">
	

			<p class="mission">Duis eu massa non tortor tristique tristique. Sed tempus vestibulum mauris eget semper. Maecenas sodales nisi sit amet augue pellentesque congue.</p>

	<!--~~~~~~~~~~~~~~~~~~~PHOTO~~~~~~~~~~~~~~~~~~~~~~-->
		<img class="group_Photo" src="images/simpsons.jpg" alt="photo">
	<!--~~~~~~~~~~~~~~~~END PHOTO~~~~~~~~~~~~~~~~~~~~~-->

	<!--~~~~~~~~~~~~~~~~~~~ABOUT~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="about">
			<h3>WHO WE ARE</h3>
			<p>Duis eu massa non tortor tristique tristique. Sed tempus vestibulum mauris eget semper. Maecenas sodales nisi sit amet augue pellentesque congue. Nam pellentesque nisi quis turpis ultrices, scelerisque gravida diam placerat. , sed lobortis eros arcu id purus. Nunc scelerisque dui metus. Suspendisse rhoncus faucibus sollicitudin. Vestibulum auctor sed eros quis consectetur. Nunc scelerisque dui metus. Sed nec condimentum ipsum, et mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed nec condimentum ipsum, et mattis ante.</p>
			<p>Nunc scelerisque dui metus. Sed nec condimentum ipsum, et mattis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque, enim at dapibus luctus, enim nulla tincidunt enim, sed lobortis eros arcu id purus. Nunc scelerisque dui metus. Sed nec condimentum ipsum, et mattis ante.</p>
		</div><!--end about-->
	<!--~~~~~~~~~~~~~~~END ABOUT~~~~~~~~~~~~~~~~~~~~~~-->

	<div id="contact_Form">
			<form action="formhandler.php" method="post" id="form">
				<fieldset>
					<legend>DROP US A LINE</legend>
					<label>NAME</label>
						<input type="text" name="name" id="name">
					<label>EMAIL</label>
						<input type="email" name="email" id="email">
					<label>MAILING LIST?</label>
						<p><input type="radio" name="relationship" value="yes" id="radio1">YES!</p>
						<p><input type="radio" name="relationship" value="no" id="radio2">NO!</p>
					<label>WHAT IS YOUR FAVORITE ANIMAL?</label>
						<p><input type="checkbox" name="area[]" value="booking" id="check1">KITTENS</p>
						<p><input type="checkbox" name="area[]" value="journalism" id="check2">PUPPIES</p>
						<p><input type="checkbox" name="area[]" value="problem" id="check3">ALL ANIMALS!</p>	
					<label>COMMENTS</label>
						<textarea name="comments" rows="3" id="comments"></textarea>
					<input type="submit" value="Send it!" id="submit">
				</fieldset>
			</form>
	</div> <!--closing contact-->
	</div><!--end wrapper-->

	<?php require("includes/footer.php"); ?>

<p>
	<a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fwww.lisa14o.com%2FPLUME_RECORDS%2Fabout.php">
		<img class="validator" src="images/html5.png" 
			alt="validator" 
			title="click to view"/>
	</a>
</p>


<p>
<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fwww.lisa14o.com%2FPLUME_RECORDS%2Fcss%2Fstyles.css&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">
    <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
    </a>
</p>



</body>
</html>