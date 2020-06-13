<!DOCTYPE html>
<html>
<head>
    <form action="covid_total.php" method="post" name="form1"></form>
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
        <form method="POST" action="covid_total.php">
            <h2>ชื่อ:</h2><input id="name" name="name" type="text">
            <h2>นามสกุล:</h2><input id="lastname" name="lastname" type="text"><br>
            <h2>เพศ</h2>
            <p>
            <input for="rdoSex" name="rdoSex" type="radio" value="Man">ชาย
            <input for="rdoSex" name="rdoSex" type="radio" value="Woman">หญิง<br>
            </p>
            <h2>อายุ</h2>:<input name="age" type="text"><br>
            <h2>โรคประจำตัว (ถ้ามี)</h2><br>
            

<input type="checkbox" id="check1" name="check1" value="1"/>ความดันโลหิต<br>
<input type="checkbox" id="check2" name="check2" value="1"/>เบาหวาน<br>
<input type="checkbox" id="check3" name="check3" value="1"/>ไขมันในเลือดสูง<br>
<input type="checkbox" id="check4" name="check4" value="1"/>โรคหัวใจ<br>
<input type="checkbox" id="check5" name="check5" value="1"/>โรคไต<br>
<input type="checkbox" id="check6" name="check6" value="1"/>โรคปอด(หอบหืด,ถุงลมโป่งพอง)<br>
<!--<input type="checkbox" id="check6" onclick="check(this)"/>อื่นๆ:<input name="rokother" type="text"><br><br>-->
<input type="submit" value="submit">
<button type="button" onclick="myFunction()"  onmouseover="this.style.cursor='pointer';">ส่งค่าตัวแปร</button>
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
    </div>
       <div id="right"><b>This is right side.</b></div>
       <div id="footer"><b>This is footer</b></div>
       </form>
</div>
</html>