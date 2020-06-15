<!DOCTYPE html>
<html>

<head>
    <form action="add_data.php" method="post" name="form1"></form>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="all">
        <div id="header">
            <h1>
                <center>
                    <h1>แบบคัดกรองผู้ป่วยติดเชื้อระบบทางเดินหายใจ จากไวรัสโควิด-19 (COVID-19)</h1>
                </center>
            </h1>
        </div>
        <div id="left"><b>This is left side.</b>
        </div>
        <div id="content">
            <div class="texthead">
                <p>โปรดอ่าน!

                    แบบคัดกรองนี้ เป็นการประเมินความเสี่ยง การติดเชื้อในระบบทางเดินหายใจจากไวรัสโควิด-19 (COVID-19)
                    เพื่อให้ประชาชนทั่วไป สามารถประเมินความเสี่ยงได้ด้วยตนเอง และได้รับคำแนะนำที่เหมาะสมในการดูแลตนเอง
                    รวมถึงการปฏิบัติตนเพื่อป้องกันการแพร่กระจายของเชื้อโรค
                    ตลอดจนการรับบริการจากโรงพยาบาลมหาราชนครเชียงใหม่
                    <br>
                    ► กระทรวงสาธารณสุข ประกาศให้โรคนี้ เป็นโรคติดต่ออันตราย
                    โปรดตอบแบบสอบถามตามความเป็นจริง เพื่อประโยชน์แก่ตัวท่านเอง
                    และเพื่อป้องกันการแพร่กระจายของเชื้อโรค
                    <br>
                    ► แบบประเมินนี้ เป็นใช้ข้อมูลล่าสุดในการประเมินความเสี่ยง และมิใช่การวินิจฉัยโรค
                    หากมีข้อสงสัยเพิ่มเติม โปรดติดต่อหมายเลขโทรศัพท์แนบท้ายแบบคัดกรองนี้
                    <br>
                    ด้วยความปรารถนาดีจาก โรงพยาบาลมหาราชนครเชียงใหม่
                    คณะแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่
                </p>
            </div>
            <form method="POST" action="add_data.php">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">ชื่อ</span>
                    </div>
                    <input id="name" name="name" type="text" class="form-control" aria-describedby="basic-addon3">
                </div>
                <h2>นามสกุล:</h2><input id="lastname" name="lastname" type="text"><br>
                <h2>เพศ</h2>
                <p>
                    <input for="rdoSex" name="rdoSex" type="radio" value="Man">ชาย
                    <input for="rdoSex" name="rdoSex" type="radio" value="Woman">หญิง<br>
                </p>
                <h2>อายุ</h2>:<input name="age" type="text"><br>
                <h2>โรคประจำตัว (ถ้ามี)</h2><br>

<script>
    function countCheckBox(name){
        alert(name)
    }
</script>
                <input type="checkbox" id="check1" name="check1" value="1" onclick="countCheckBox($('#name').val())" />ความดันโลหิต<br>
                <input type="checkbox" id="check2" name="check2" value="1" />เบาหวาน<br>
                <input type="checkbox" id="check3" name="check3" value="1" />ไขมันในเลือดสูง<br>
                <input type="checkbox" id="check4" name="check4" value="1" />โรคหัวใจ<br>
                <input type="checkbox" id="check5" name="check5" value="1" />โรคไต<br>
                <input type="checkbox" id="check6" name="check6" value="1" />โรคปอด(หอบหืด,ถุงลมโป่งพอง)<br>
                <input type="checkbox" id="check7" name="check7" value="1" />อื่นๆ:<input type="text"><br><br>
                <h2>ท่านมีอาการดังต่อไปนี้อย่างน้อยหนึ่งอาการ ► ไอ,เจ็บคอ,คัดจมูก,น้ำมูกไหล,หายใจลำบาก</h2><br><br>
            <input name="checkarkarnyes" type="radio" value="1">ใช่<br>
            <input name="checkarkarnno" type="radio" value="0">ไม่ใช่<br><br>
            <h2>ท่านรู้สึกมีไข้ หรือ อุณหภูมิร่างกายเกิน 37.5 องศาเซลเซียส</h2><br><br>
            <input name="checktemp" type="radio" value="1">ใช่<br>
            <input name="checktemp" type="radio" value="0">ไม่ใช่<br><br>
                <input class="btn btn-success" type="submit" value="submit" >
                <input class="btn btn-success" type="button" value="test javascript" onclick="alert('Hello '+$('#name').val())" >
                <!--<input name="checkrok1" type="checkbox" value="check1">ความดันโลหิต<br>
            <input name="checkrok2" type="checkbox" value="check2">เบาหวาน<br>
            <input name="checkrok3" type="checkbox" value="check3">ไขมันในเลือดสูง<br>
            <input name="checkrok4" type="checkbox" value="check4">โรคหัวใจ<br>
            <input name="checkrok5" type="checkbox" value="check5">โรคไต<br>
            <input name="checkrok6" type="checkbox" value="check6">โรคปอด(หอบหืด,ถุงลมโป่งพอง)<br>
            <input name="checkrok7" type="checkbox" value="check7">อื่นๆ:<input name="rokother" type="text"><br><br>
            <input type="submit" value="submit">
            <span class="button"><a href="covid2.html"><img src="img/next_button.png"></a></span>
        </form>-->
                <span class="button"><a href="covid2.php"><img src="img/next_button.png"></a></span>
        </div>
        <div id="right"><b>This is right side.</b></div>
        
        </form>
</html>