<?php 
session_start();
$email = $_SESSION["email"];
require_once("include/db.php");
if(isset($_POST["amount"]) && isset($_POST["nps"]))
{
	$sup = $_POST["nps"];
	$value = $_POST["amount"];
	$stmt = $db->prepare("INSERT INTO users (nps, dons) VALUES (:np, :don) WHERE email=$email") ;
    $stmt->execute(array(
						":np" => $sup,
						":don" => $value));
}
else
{
	header("Location: http://won-profit.tech");
}

echo <<<EOT

<html>
<head>
<title>Payment page</title>
  <script
    src="https://www.paypal.com/sdk/js?client-id=sb">
  </script>
</head>

<body>
<div id="pay" style="display: flex;
  align-items: center;
  justify-content: center;"></div>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '$value'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
                       window.location = "/confirmation.php";
      });
    }
  }).render('#pay');
  //This function displays Smart Payment Buttons on your web page.
</script>
</body>
</html>

EOT;

?>