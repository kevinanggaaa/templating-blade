<html>
<head>
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
         @csrf
        <label>First name:</label> <br><br>
        <input type="text" name="nama_depan">
        <br><br>
        <label>Last name:</label> <br><br>
        <input type="text" name="nama_belakang">
        <br><br>
        <label>Gender:</label> <br><br>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br>
        <br>
        <label>Nationality:</label><br><br>
        <select name="Nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>
        <br><br>
        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="languange">Bahasa Indonesia <br>
        <input type="checkbox" name="languange">English <br>
        <input type="checkbox" name="languange">Other <br><br>
        <label>Bio:</label><br><br>
        <textarea cols="35" rows="10"></textarea>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>