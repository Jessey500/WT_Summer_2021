<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration Form</h1>
    <hr>
    <form>
    <table>
        <tr>
            <td><label for="fullname">Full Name:</label></td>
            <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td><label for="email">E-mail:</label></td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td><label for="pass">Password:</label></td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td><label for="comment">Comment:</Label></td>
            <td><textarea name="comment" cols="35" rows="6"></textarea></td>
        </tr>
        <tr>
            <td><label for="gender">Select YourGender:</label></td>
            <td>
                <input type="radio" name="gender" value="Female">
                <label for="gender">Female</label>
                <input type="radio"  name="gender" value="Male">
                <label for="gender">Male</label>
                <input type="radio"  name="gender" value="other">
                <label for="gender">Other</label>
            </td>
        </tr>
        <tr>
            <td><label for="hobby">Please Choose  a  Hobby:</label></td>
            <td>
                <input type="checkbox" name="hobby1" value="Singing">
                <label for="hobby1">Singing</label>
                <input type="checkbox" name="hobby2" value="Dancing">
                <label for="hobby2">Dancing</label>
                <input type="checkbox" name="hobby3" value="Reading">
                <label for="hobby3">Reading</label>
            </td>
        </tr>
        <tr>
            <td><label for="Myfile">Please choose a file:</label></td>
            <td><input type="file" name="myfile"></td>
        </tr>
        <tr>
            <td>
                <input type="Submit" value="Submit">
                <input type="Reset" value="Reset">
            </td>            
        </tr>
    </table>
    
    </form>
</body>
</html>