<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        fieldset {
            background-color: #eeeeee;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }

        input {
            margin: 5px;
        }
    </style>
</head>

<body>
    <fieldset>
        <form action="" id="dataform">
            <h1>แบบฟอร์มจองทัว</h1>

            <fieldset>
                <legend>ข้อมูลทั่วไป</legend>
                ชื่อ-สกุล:<br>
                <input type="text" placeholder="กรอกชื่อ-สกุล" required>*<br>
                Email:<br>
                <input type="email" required>*<br>
                โทรศัพท์:<br>
                <input type="text" placeholder="+66" pattern="[0-9]{10}" required>*<br>

                <label for="w3review">ที่อยู่</label><br>
                <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea><br>
                รหัสไปรษณีย์:<br>
                <input type="ืnumber" pattern="[0-9]{5}"><br>
                รูปผู้จอง
                <input type="file"><br>
            </fieldset>

            <fieldset>
                <legend>ข้อมูลเข้าระบบ</legend>
                Username:<br>
                <input type="text" pattern="[_A-Xa-z0-9]{8,}"><br>
                Password:<br>
                <input type="password" pattern="[A-Xa-z0-9]{8,}"><br>
            </fieldset>

            <fieldset>
                <legend>ข้อมูลทัวร์ที่ต้องการ</legend>
                แพคเก็จทัวร์:<br>
                <select name="cars" id="cars" form="dataform">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br>
                วันที่เดินทาง:<br>
                <input type="date" required><br>
                จำนวนผู้เดินทาง:<br>
                <input type="text" pattern="(1|2|3|4|5|6|7|8|9|10)+" required><br>
                เน้นการท่องเที่ยวแบบใด?<br>
                <input type="checkbox" id="shopping" name="shopping" value="shop">
                <label for="shopping"> ช้อปปิ้ง</label><br>
                <input type="checkbox" id="natural" name="natural" value="natural">
                <label for="natural"> ธรรมชาติ</label><br>
                <input type="checkbox" id="beach" name="beach" value="beach">
                <label for="beach"> ทะเล</label><br>

            </fieldset>
            <span>ยอมรับเงื่อนไขข้อตกลง

                <input type="radio" id="agree" name="fav_language" value="agree">
                <label for="agree">I agree</label>
                <input type="radio" id="disagree" name="fav_language" value="disagree">
                <label for="disagree">I disagree</label>

                <input type="submit" value="จอง">
            </span>
            
        </form>
        <fieldset>



</body>

</html>