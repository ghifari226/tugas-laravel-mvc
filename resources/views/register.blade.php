<!DOCTYPE html>
<html>
<!-- Ghifari 2020-06-15 -->

	<head>
		<title>SanberBook</title>
		<meta charset="utf-8">
	</head>

	<body>
		<!-- judul -->
		<h1>Buat Account Baru!</h1>

		<h3>Sign Up Form</h3>
		
		<!-- form -->
		<form action="/welcome" method="POST">
			@csrf

			<!-- nama -->
			<label for="first_name">First Name: </label>
			<br><br>
			<input type="text" name="first_name">
			<br><br>

			<label for="last_name">Last Name: </label>
			<br><br>
			<input type="text" name="last_name">
			<br><br>

			<!-- jenis kelamin -->
			<label for="gender">Gender: </label>
			<br><br>
			<input type="radio" name="gender" id="0"> Male
			<br>
			<input type="radio" name="gender" id="1"> Female
			<br>
			<input type="radio" name="gender" id="2"> Other
			<br><br>

			<!-- kewarganegaraan -->
			<label for="nationality">Nationality: </label>
			<br><br>
			<select>
				<option value="0">Indonesian</option>
				<option value="1">Italian</option>
				<option value="2">Japanese</option>
				<option value="3">Malaysian</option>
			</select>
			<br><br>

			<!-- bahasa -->
			<label for="language">Language Spoken: </label>
			<br><br>
			<input type="checkbox" name="language" id="0"> Bahasa Indonesia
			<br>
			<input type="checkbox" name="language" id="1"> English
			<br>
			<input type="checkbox" name="language" id="2"> Other
			<br><br>

			<!-- bio -->
			<label for="bio">Bio: </label>
			<br><br>
			<textarea cols="30" rows="10" id="bio"></textarea>
			<br><br>

			<!-- submit -->
			<input type="submit" value="Sign Up">
		</form>
	</body>
</html>