<?php
	include_once('include/header.php');
	date_default_timezone_set("Asia/Dhaka");

	// set empty value
	$foodname = $price = $quantity = $name = $address = $phone = "";
	if(isset($_POST['foodname']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['name']) && isset($_POST['textbox']) && isset($_POST['phone']) && isset($_POST['insName']) && isset($_POST['recarea']) && isset($_POST['paymenttype']) && isset($_POST['bkashnumber']) && isset($_POST['transid'])){
		$foodname		= htmlspecialchars($_POST['foodname']);
		$price			= htmlspecialchars($_POST['price']);
		$qty			= htmlspecialchars($_POST['quantity']);
		$name			= htmlspecialchars($_POST['name']);
		$address		= htmlspecialchars($_POST['textbox']);
		$phone			= htmlspecialchars($_POST['phone']);
		$designation	= htmlspecialchars($_POST['designation']);
		$ins			= htmlspecialchars($_POST['insName']);
		$recarea		= htmlspecialchars($_POST['recarea']);
		$payment		= htmlspecialchars($_POST['paymenttype']);
		$bkash			= htmlspecialchars($_POST['bkashnumber']);
		$transid		= htmlspecialchars($_POST['transid']);
		$time			= date('d-m-Y', time());
		$total			= $qty*$price;
		
		if(!empty($_POST['foodname']) && !empty($_POST['price']) && !empty($_POST['quantity'])  && !empty($_POST['name']) && !empty($_POST['textbox']) && !empty($_POST['phone']) && !empty($_POST['insName']) && !empty($_POST['recarea']) && !empty($_POST['paymenttype'])){
				$foodname1		= mysqli_real_escape_string($conn, $foodname);
				$price1			= mysqli_real_escape_string($conn, $price);
				$qty1			= mysqli_real_escape_string($conn, $qty);
				$name1			= mysqli_real_escape_string($conn, $name);
				$address1		= mysqli_real_escape_string($conn, $address);
				$phone1			= mysqli_real_escape_string($conn, $phone);
				$designation1	= mysqli_real_escape_string($conn, $designation);
				$ins1			= mysqli_real_escape_string($conn, $ins);
				$recarea1		= mysqli_real_escape_string($conn, $recarea);
				$payment1		= mysqli_real_escape_string($conn, $payment);
				$bkash1			= mysqli_real_escape_string($conn, $bkash);
				$transid1		= mysqli_real_escape_string($conn, $transid);
				$sql ="INSERT INTO `orders`(`id`,`foodname`,`price`,`quantity`,`name`,`designation`,`inst`,`receivearea`,`address`,`phone`,`paymenttype`,`bkashnumber`,`transid`,`total`,`date`) VALUES('','$foodname','$price','$qty','$name','$designation','$ins','$recarea','$address','$phone','$payment','$bkash','$transid','$total','$time')";
			
				$sql = mysqli_query($conn, $sql);
			
				if(!$sql){
					die("Error:" .mysqli_error());
				}else{
					echo "<script>self.location = 'thank.php'</script>";
				}
			mysqli_close($conn);
		}
		
	}
?>
<section class="order-form">
	<div class="container">
		<div class="col-md-6">
			<div class="get-order-form">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
					<div class="order-group-form">
						<div class="order-form-group">
							<p class="input-head">Select Food</p>
							<select name="foodname" id="orderForm" class="selet-option" name="" id="">
								<option value="exclusive">Exclusive Lunch Box</option>
							</select>
						</div>
					</div>
					<div class="order-group-form">
						<div id="price-1">
							<div class="order-form-group">
								<div class="price-box-top">
									<p class="input-head">Price</p>
									<div class="price-box">
										<input name="price" type="text" class="qnty" value="95"/>
										<div class="head-name">
											TK
										</div>
									</div>
								</div>
								<div class="price-box-top">
									<p class="input-head">Quantity</p>
									<div class="price-box">
										<input name="quantity" type="text" class="qnty" value="1" />
										<div class="qnty-change">
											<span class="up">
												+
											</span>
											<span class="down">
												-
											</span>
										</div>
										<div class="head-name">
											box
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="order-group-form">
						<div class="order-form-group">
							<div class="price-box-top">
								<p class="input-head">Order Person</p>
								<div class="price-box">
									<input name="name" type="text" class="food-field" placeholder="eg. Name or Company Name" required/>
								</div>
							</div>
							<div class="price-box-top">
								<p class="input-head">Designation</p>
								<div class="price-box">
									<input type="text" name="designation" class="food-field" placeholder="eg. Manager" />
								</div>
							</div>
						</div>
					</div>
					<div class="order-group-form">
						<div class="order-form-group">
							<div class="price-box-top">
								<p class="input-head">Institution Name</p>
								<div class="price-box">
									<input name="insName" type="text" class="food-field" placeholder="eg.Company Name"/>
								</div>
							</div>
							<div class="price-box-top">
								<p class="input-head">Receiving Area</p>
								<div class="price-box">
									<input type="text" name="recarea" class="food-field" placeholder="eg. Lalkan Bazar" required/>
								</div>
							</div>
						</div>
					</div>
					<div class="order-group-form">
						<p class="input-head">Address</p>
						<textarea name="textbox" class="food-field" placeholder="eg: Builidng Name, Road, Place" ></textarea>
					</div>
					<div class="order-group-form">
						<div class="order-form-group">
							<div class="price-box-top">
								<p class="input-head">Phone Number</p>
								<div class="price-box">
									<input name="phone" type="text" class="food-field" placeholder="eg. Name or Company Name"required/>
								</div>
							</div>
							<div class="price-box-top">
								<p class="input-head">Payment Type</p>
								<div class="price-box">
									<select name="paymenttype" id="paymenttype" class="selet-option">
								<option value="">Select Payment Type</option>
								<option value="bkash">bKash</option>
								<option value="cash">Cash On Delivery</option>
							</select>
								</div>
							</div>
						</div>
					</div>
					<div id="bkashSec" class="order-group-form" style="display:none;">
						<div class="order-form-group">
							<div class="price-box-top">
								<p class="input-head">Bkash Number</p>
								<div class="price-box">
									<input name="bkashnumber" type="text" class="food-field" placeholder="eg. 0184XXXXXXX"/>
								</div>
							</div>
							<div class="price-box-top">
								<p class="input-head">Trans: ID</p>
								<div class="price-box">
									<input type="text" class="food-field" name = "transid" placeholder="eg: Trans123546898"/>
								</div>
							</div>
						</div>
					</div>
					<div class="order-group-form">
						<input type="submit" class="save-btn" value="Place Order" />
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php
include_once( 'include/footer.php');
?>	