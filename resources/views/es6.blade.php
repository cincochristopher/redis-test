<!DOCTYPE html>
<html>
<head>
	<title> ES6 TEST</title>
</head>
<body>
	<div id="output"></div>



	<!-- Load Babel -->
	<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

	<!-- Your custom script here -->
	<script type="text/babel">
		const getMessage = () => "Hello World";
		document.getElementById('output').innerHTML = getMessage();
	</script>
</body>
</html>