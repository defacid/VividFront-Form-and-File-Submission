<html>
    <body>
        <form method="post" enctype="multipart/form-data" action="results.php">
			<div>
				<lable>First Name</label>
				<br /><input type="text" name="firstName" placeholder="Required" required="required">
			</div>
			<div>
				<lable>Last Name</label>
				<br /><input type="text" name="lastName" placeholder="Required" required="required">
			</div>
			<div>
				<lable>Phone Number</label>
				<br /><input type="text" name="phone" placeholder="Required" required="required">
			</div>
			<div>
				<lable>Email</label>
				<br /><input type="text" name="email" placeholder="Required" required="required">
			</div>
			<div>
				<lable>Address</label>
				<br /><input type="text" name="address1" placeholder="Required" required="required">
				<br /><input type="text" name="address2">
			</div>
			<div>
				<lable>Zip Code</label>
				<br /><input type="text" name="zip" pattern="^\d{5}(?:[-\s]\d{4})?$" placeholder="Required" required="required">
			</div>
			<div>
				<lable>City</label>
				<br /><input type="text" name="city" required="required">
			</div>
			<div>
				<lable>State</label>
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
    </body>
</html>