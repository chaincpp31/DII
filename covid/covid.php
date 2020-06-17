<!DOCTYPE html>
<html>
<head>
    <form action="add_data.php" method="post" name="form1" onSubmit="JavaScript:return fncSubmit();"></form>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('/w3images/parallax1.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
  body{background-image:url(img/bg.jpg);}
}
</style>
<body>

<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> <span class="w3-hide-small">แบบคัดกรองผู้ป่วยติดเชื้อระบบทางเดินหายใจ จากไวรัสโควิด-19 (COVID-19) </span></span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">โปรดอ่าน!!</h3>
  <p>  </p>
  <script language="javascript">
function myFunction() {
    if(document.form1.name.value == "")
	{
		alert('Please input Input 1');
		document.form1.name.focus();
		return false;
	}	
document.form1.submit();
}
</script>

    <div id="all">
        <div id="header">
            <h1>
                <center>
                    <h1>  </h1>
                </center>
            </h1>
        </div>
        <div id="left">
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
                    <span class="input-group-text" id="basic-addon3">นามสกุล</span>
                    <input id ="lastname" name="lastname" type="text" class="form-control" aria-describedby="basic-addon3">
                </div>
                <h2>เพศ</h2>
                <p>
                    <input for="rdoSex" name="rdoSex" type="radio" value="Man">ชาย
                    <input for="rdoSex" name="rdoSex" type="radio" value="Woman">หญิง<br>
                </p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">อายุ</span>
                    </div>
                    <input id="age" name="age" type="text" class="form-control" aria-describedby="basic-addon3">
                </div>
                <h2>โรคประจำตัว (ถ้ามี)</h2><br>

<script>
    function countCheckBox(name){
        alert(name)
    }
</script>
                <input type="checkbox" id="check1" name="check1" value="1" /*onclick="countCheckBox($('#name').val())"/* />ความดันโลหิต<br>
                <input type="checkbox" id="check2" name="check2" value="1" />เบาหวาน<br>
                <input type="checkbox" id="check3" name="check3" value="1" />ไขมันในเลือดสูง<br>
                <input type="checkbox" id="check4" name="check4" value="1" />โรคหัวใจ<br>
                <input type="checkbox" id="check5" name="check5" value="1" />โรคไต<br>
                <input type="checkbox" id="check6" name="check6" value="1" />โรคปอด(หอบหืด,ถุงลมโป่งพอง)<br>
                <input type="checkbox" id="check7" name="check7" value="1" />อื่นๆ:<input type="text"><br><br>
                <h2>ท่านมีอาการดังต่อไปนี้อย่างน้อยหนึ่งอาการ ► ไอ,เจ็บคอ,คัดจมูก,น้ำมูกไหล,หายใจลำบาก</h2><br><br>
            <input for="checkarkarnyes" name="checkarkarn" type="radio" value="1">ใช่<br>
            <input for="checkarkarnno" name="checkarkarn" type="radio" value="0">ไม่ใช่<br><br>
            <h2>ท่านรู้สึกมีไข้ หรือ อุณหภูมิร่างกายเกิน 37.5 องศาเซลเซียส</h2><br><br>
            <input for="checktempyes" name="checktemp" type="radio" value="1">ใช่<br>
            <input for="checktempno" name="checktemp" type="radio" value="0">ไม่ใช่<br><br>
            <h2>ภายใน 14 วันที่ผ่านมาท่านมีประวัติดังต่อไปนี้ หรือไม่</h2><br>
            <input type="checkbox" id="checkhis1" name="checkhis1" value="1"/>ท่านเดินทางมาจากต่างประเทศ<br>
            <input type="checkbox" id="checkhis2" name="checkhis2" value="1"/>ท่านเคยสัมผัสใกล้ชิดกับนักท่องเที่ยว ที่มาจากประเทศที่มีการระบาด<br>
            <input type="checkbox" id="checkhis3" name="checkhis3" value="1"/>ท่านเคยสัมผัสใกล้ชิดกับผู้ป่วยที่ยืนยันการติดเชื้อไวรัส COVID-19<br>
            <input type="checkbox" id="checkhis4" name="checkhis4" value="1"/>ท่านพักอาศัยอยู่ร่วมกับคนใกล้ชิด ที่เดินทางมาจากประเทศที่มีการระบาด<br>
            <input type="checkbox" id="checkhis5" nmae="checkhis5" value="1"/>ไม่มี<br><br>
                <input class="btn btn-success" type="submit" value="submit" >
                <a href="display.php"><input type ="button" class="btn btn-success" value ="Show all data" ></a>
                <!-- <input class="btn btn-success" type="button" value="test javascript" onclick="alert('Hello '+$('#name').val())" > -->
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
                <!-- <span class="button"><a href="covid2.php"><img src="img/next_button.png"></a></span> -->
        </div>
        <!-- <div id="right"><b>This is right side.</b></div> -->
</div>
</form>
</form>
</body>
</div>


</html>