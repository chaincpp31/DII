<!DOCTYPE html>
<html>
<head>
    <form action="data.php" method="post" name="form1"></form>
    <link href="style.css"rel="stylesheet"type="text/css"/>
</head>
<body>
<div id="all">
    <div id="header"><h1><center><h1>แบบคัดกรองผู้ป่วยติดเชื้อระบบทางเดินหายใจ จากไวรัสโควิด-19 (COVID-19)</h1></center></h1></div>
    <div id="left"><b>This is left side.</b>    
    </div>  
     <div id="content">
        <div class="texthead"><p>โปรดอ่าน!

            แบบคัดกรองนี้ เป็นการประเมินความเสี่ยง การติดเชื้อในระบบทางเดินหายใจจากไวรัสโควิด-19 (COVID-19) เพื่อให้ประชาชนทั่วไป สามารถประเมินความเสี่ยงได้ด้วยตนเอง และได้รับคำแนะนำที่เหมาะสมในการดูแลตนเอง รวมถึงการปฏิบัติตนเพื่อป้องกันการแพร่กระจายของเชื้อโรค ตลอดจนการรับบริการจากโรงพยาบาลมหาราชนครเชียงใหม่
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
        </p></div>
        <div>
            <h2>ชื่อ:</h2><input name="name" type="text">
            <h2>นามสกุล:</h2><input name="lastname" type="text"><br>
            <input name="submit" type="submit" value="submit">
            <h2>เพศ</h2>
            <p>
            <input name="rdoSex" type="radio" value="Man">ชาย
            <input name="rdoSex" type="radio" value="Woman">หญิง<br>
            </p>
            <h2>อายุ</h2>:<input name="age" type="text"><br>
            <h2>โรคประจำตัว (ถ้ามี)</h2><br>
            <input name="checkrok" type="checkbox" value="check1">ความดันโลหิต<br>
            <input name="checkrok" type="checkbox" value="check2">เบาหวาน<br>
            <input name="checkrok" type="checkbox" value="check3">ไขมันในเลือดสูง<br>
            <input name="checkrok" type="checkbox" value="check4">โรคหัวใจ<br>
            <input name="checkrok" type="checkbox" value="check5">โรคไต<br>
            <input name="checkrok" type="checkbox" value="check6">โรคปอด(หอบหืด,ถุงลมโป่งพอง)<br>
            <input name="checkrok" type="checkbox" value="check7">อื่นๆ:<input name="rokother" type="text"><br><br>
            <span class="button"><a href="covid2.html"><img src="img/next_button.png"></a></span>
        </form>
       </div>
       <div id="right"><b>This is right side.</b></div>
       <div id="footer"><b>This is footer</b></div>
</div>
?>
</html>