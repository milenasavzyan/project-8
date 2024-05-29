<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporary Account Details</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>
<p>Your temporary account has been created. Below are your account details:</p>
<p>Email: {{ $user->email }}</p>
<p>Password: {{ $password }}</p>
<p>Thank you!</p>
</body>
</html>
