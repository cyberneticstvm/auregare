<!DOCTYPE html>
<html>

<head>
    <title>Aurega Real Estate</title>
</head>

<body>
    Dear Aurega,<br />

    <p>You have received new message via websiet contact form.</p>

    <p>Name: {{ $data->name }}</p>
    <p>Contact number: {{ $data->mobile }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Message: {{ $data->message }}</p>


    Best Regards,<br />
    Team Aurega Real Estate.
</body>

</html>