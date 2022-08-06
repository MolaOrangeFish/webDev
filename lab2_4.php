<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
</head>

<body>
    <form action="form-echo.php" method="get">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" pattern="[A-Z]+"><br><br>
        <label>Std ID:</label>
        <input type="text" name="id" placeholder="Username" pattern="[0-9]{2}-[0-9]{6}-[0-9]{4}-[0-9]{1}"><br><br>
        <label>บ้านเลขที่:</label>
        <input type="text" name="home" placeholder="Username" pattern="[0-9]{3}/[0-9]{3}"><br><br>
        <label>Product ID:</label>
        <input type="text" name="product_id" placeholder="Username" pattern="[A-Z]{3}[0-9]{2}"><br><br>
        <label>ชื่อ:</label>
        <input type="text" name="ชื่อ" placeholder="Username" pattern="[ก-ฮ]+"><br><br>
        <p><label>สาขาวิชา:</label>
            <select name="dept">
                <option value="">--Please choose an option--</option>
                <option value="CS">CS</option>
                <option value="IC">IC</option>
                <option value="MA">MA</option>
                <option value="IMI">IMI</option>
                <option value="AS">AS</option>
                <option value="AFET">AFET</option>
            </select>
        <p><input type="submit" value="Submit">
    </form>
</body>

</html>