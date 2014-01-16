<html>
	<body>
		You've got a message from your web site:<br>
		<br>
		Name: {{ $data['name'] }}<br>
		<br>
		E-mail: {{ $data['email'] }}<br>
		<br>
		Telephone: {{ $data['telephone'] }}<br>
		<br>
		Subject: {{ $data['subject'] }}<br>
		<br>
		Message: 
		{{ $data['message'] }}
	</body>
</html>