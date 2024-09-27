<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>from</title>
</head>
<body>
    <h1>From</h1>
    <form action="/submit" method="post">
        @csrf
        <label for="Nama">Nama :</label>
        <input type="text" id="name" name="nama" required><br><br>

        <label for="Message">Message :</label><br>
        <textarea id="message" name="message" rows="4" cols="59" required></textarea><br><br>

        <input type="Submit" value="Submit">
    </form>

</body>
</html>
