<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru</h1>

    <h3>Sign Up Form</h3>

    <form action="{{url('/welcome')}}" method="POST">
        @csrf
        <p><label for="firstname">First name:</label></p>
        <input type="text" name="firstname" id="firstname">

        <p><label for="lastname">Last name:</label></p>
        <input type="text" name="lastname" id="lastname">

        <p><label for="gender">Gender:</label></p>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label>

        <P><label for="nationality">Nationality:</label></P>
        <select name="nationality" id="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapore">Singapore</option>
            <option value="thailand">Thailand</option>
            <option value="filipina">Filipina</option>
        </select>

        <p><label for="language">Language Spoken:</label></p>
        <input type="checkbox" name="language" id="bahasa" value="bahasa">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" id="english" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" name="language" id="other" value="other">
        <label for="other">Other</label><br>

        <p><label for="bio">Bio:</label></p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>

        <button type="submit">Sign Up</button>
    </form>
</body>

</html>