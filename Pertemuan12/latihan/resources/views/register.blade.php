<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="/home" method="post">
        @csrf
        <label for="firstname">First Name: </label> <br><br>
        <input type="text" name="firstname" id="firstname" required> <br><br>

        <label for="lastname">Last Name: </label> <br><br>
        <input type="text" name="lastname" id="lastname" required> <br><br>

        <label for="gender">Gender: </label> <br><br>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br><br>

        <label for="national">Nationality: </label> <br><br>
        <select name="natinal">
            <option value="indonesia">Indonesia</option>
            <option value="inggris">Inggris</option>
            <option value="amerika">Amerika</option>
            <option value="china">China</option>
        </select> <br><br>

        <label for="language">Language Spoken: </label><br><br>
        <input type="checkbox">Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other <br><br>

        <label for="bio">Bio: </label> <br> <br>
        <textarea name="bio" cols="20" rows="10"> </textarea> <br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>