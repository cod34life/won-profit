<!--DOCTYPE html-->
<html>
<title>Donation Allocation</title>
<style type="text/css">
.button {
	background-color: #DC143C;
	border: none;
	border-radius: 12px;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}

.button2 {
	width: 15%;
	background-color: #FFFF66;
	color: black;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

.button2:hover {
	background-color: #7CFC00;
}
</style>
</body>
<h1>
	<center>Final Steps</center>
</h1>

<center>
	<form method="post" action="paypal.php">
	<p>How many nonprofits will you be donating to?</p>
  <input type="radio" id="1" name="nps" value="1">
  <label class="button" for="1">1</label> &nbsp &nbsp
  <input type="radio" id="2" name="nps" value="2">
  <label class="button" for="2">2</label>&nbsp &nbsp  
  <input type="radio" id="3" name="nps" value="3">
  <label class="button" for="3">3</label>&nbsp &nbsp<br><br>
	<br> <label for="fname">How much money are you willing to
		spend total?<br>(Please enter in dollars; min 1 USD)
	</label><br> <input type="number" min=1 id="amount" name="amount" value="10"><br>
	<br>
	<br>
	<button type="submit" value="SUBMIT" name="s">Proceed to donate</button>
	</form>

	<div class="motivation" style="max-width: 500px">
		<img class="image"
			src="https://raw.githubusercontent.com/cod34life/won-profit/master/Won-Profit/IMG-20200822-WA0016.jpg"
			style="width: 100%"><br>
		<br> <img class="image"
			src="https://raw.githubusercontent.com/cod34life/won-profit/master/Won-Profit/IMG-20200822-WA0013.jpg"
			style="width: 100%"><br>
		<br> <img class="image"
			src="https://raw.githubusercontent.com/cod34life/won-profit/master/Won-Profit/IMG-20200822-WA0015.jpg"
			style="width: 100%">
	</div>
	<h1 style="color: #DC143C;">Thank you for your contributions!</h1>
	</body>
</html>

