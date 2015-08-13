<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
    <body>
		<div class="wrap">
			<div class="header">
				<img src="images/logos.png">
				<div class="content">
					<h2>Enter to win a</h2>
					<h1>Labore et Dolore Magna Aliqua</h2>
					<div class="button"><h2>Enter to win today</h2></div>
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					<br />Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
				</div>
			</div>
			<div class="form">
				<form method="post" enctype="multipart/form-data" action="results.php">
					<div>
						<lable>First Name*</label>
						<br /><input type="text" name="firstName" placeholder="Required" required="required">
					</div>
					<div>
						<lable>Last Name*</label>
						<br /><input type="text" name="lastName" placeholder="Required" required="required">
					</div>
					<div>
						<lable>Phone Number*</label>
						<br /><input type="text" name="phone" placeholder="Required" required="required">
					</div>
					<div>
						<lable>Email*</label>
						<br /><input type="text" name="email" placeholder="Required" required="required">
					</div>
					<div>
						<lable>Address*</label>
						<br /><input type="text" name="address1" placeholder="Required" required="required">
					</div>
					<div>
						<input type="text" name="address2">
					</div>
					<div>
						<lable>Zip Code*</label>
						<br /><input type="text" name="zip" pattern="^\d{5}(?:[-\s]\d{4})?$" placeholder="Required" required="required">
					</div>
					<div>
						<lable>City*</label>
						<br /><input type="text" name="city" placeholder="Required" required="required">
					</div>
					<div>
						<lable>State*</label>
						<br /><select name="state" required="required">
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
						</select>
					</div>
					<div>
						<label>Featured Image</label>
						<br /><input type="file" name="image" />
					</div>
					<br /><br /><input type="submit" name="submit" value="Submit" />
				</form>
			</div>
			<div class="social">
				<div class="content">
					<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
				</div>
			</div>
			<div class="legal">
				<div class="content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
				</div>
			</div>
			<div class="footer">
				<div class="content">
					<div class="links">
						<a href="#">Disclaimer</a> | <a href="#">Site Nav</a>
					</div>
					<div class="copyright">
						Lorem ipsum dolor sit amet
					</div>
				</div>
			</div>
		</div>
    </body>
</html>