<html>
    <body>
<form method="post" action="submit.php">
    <label>First Name</lable>
    <input type='text' name='firstname' />

    <label>Last Name</lable>
    <input type='text' name='lastname' />

    <label>Address</lable>
    <input type='text' name='address' />

    <label>City</lable>
    <input type='text' name='city' />

    <label>Gender</lable>
    <input type="radio" name="gender"/> Male
    <input type="radio" name="gender"/> Female<br><br>

    <label>Hobbies</lable>
    <input type="checkbox" name="hobbies" value="singing"/>Singing
    <input type="checkbox" name="hobbies" value="Cricket"/>Cricket
    <input type="checkbox" name="hobbies" value="dancing"/>Dancing
    <input type="checkbox" name="hobbies" value="reading"/>Reading
    <input type="checkbox" name="hobbies" value="tracking"/>Tracking<br><br>

    <input type='submit' value='Add' />
</form>
</body>
</html>