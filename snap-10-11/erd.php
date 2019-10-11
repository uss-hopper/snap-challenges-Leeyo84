<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ERD</title>
	</head>

	<body>
		<img src="ERD-snap-challenge-10-11.jpg" alt="ERD image">
		<div>
			<h3>RegisteredUser</h3>
				<ul>
					<li>(PK)registeredUserId</li>
					<li>registeredUserName</li>
					<li>registeredUserAddress</li>
				</ul>
			<h3>addressAdd</h3>
				<ul>
					<li>(PK)addressAddId</li>
					<li>(FK)addressAddRegisteredUserId</li>
					<li>adressAddContent</li>
				</ul>
		</div>
	</body>
</html>