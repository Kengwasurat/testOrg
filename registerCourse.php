<?php include('comtop.php'); ?>
<!-- Include file css and properties -->
<?php include('header.php'); ?>
<!-- Menu and Logo -->

<div class="full-banner" style="background-image: url(images/bg_top_register.png);">
  <div class="text-banner-center txt-header-page">
    <h1 class="text-center text-white">กรอกข้อมูลสำหรับผู้สมัครฝึกอบรม</h1>
  </div>
</div>

<div class="container"><br>
  <div style="margin-left:10%;">
    <h2 style="color: #4C23A4;">ส่วนที่ 1 ข้อมูลส่วนบุคคล</h2><br>
  </div>


  <form>
    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6">
        <label for="registerCourse_prename">คำนำหน้าชื่อ</label><br>
        <select class="text-from " id="registerCourse_prename" name="registerCourse_prename">
          <option value="Mr">นาย</option>
          <option value="Ms">นางสาว</option>
          <option value="Mrs">นาง</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_idpeople">รหัสบัตรประชาชน</label><br>
        <input type="text" class="form-control text-from " id="registerCourse_idpeople" placeholder="กรุณากรอกรหัสประชาชน 13 หลัก">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_fname">ชื่อ (ภาษาไทย)</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_fname" placeholder="กรุณากรอกชื่อภาษาไทย">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_lname">นามสกุล (ภาษาไทย)</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_lname" placeholder="กรุณากรอกนามสกุลภาษาไทย">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_fnameEN">ชื่อ (ภาษาอังกฤษ)</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_fnameEN" placeholder="First name">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_lnameEN">นามสกุล (ภาษาอังกฤษ)</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_lnameEN" placeholder="Last name">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_Nname">ชื่อเล่น</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_Nname" placeholder="ชื่อเล่น">
      </div>
      <!-- <div class="form-group col-md-6">
            <label for="lname">นามสกุล (ภาษาอังกฤษ)</label><br>
            <input type="text" class="form-control text-from" id="lname">
          </div> -->
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_qualityuser">คุณสมบัติผู้เข้ารับสมัคร</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_qualityuser" placeholder="กรุณากรอกคุณสมบัติ">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_pointuser">เป้าหมายของผู้เข้ารับฝึกอบรม</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_pointuser" placeholder="กรุณากรอกเป้าหมาย">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_birthdate">วัน / เดือน / ปีเกิด</label><br>
        <input type="date" class="form-control text-from" id="registerCourse_birthdate">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_age">อายุ</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_age">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6">
        <label for="registerCourse_religion">ศาสนา</label><br>
        <select class="text-from " id="registerCourse_religion" name="registerCourse_religion">
          <option value="registerCourse_Bud">พุทธ</option>
          <option value="registerCourse_islam">อิสลาม</option>
          <option value="registerCourse_Christ">คริสต์</option>
        </select>
      </div>
      <!-- <div class="form-group col-md-6">
            <label for="idpeople">รหัสบัตรประชาชน</label><br>
            <input type="text" class="form-control text-from " id="idpeople">
          </div> -->
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_congen">โรคประจำตัว / ข้อจำกัดอื่นๆ</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_congen" placeholder="*ถ้ามีกรุณากรอกโรคส่วนตัวหรือข้อจำกัดอื่นๆ">
      </div>
      <!-- <div class="form-group col-md-6">
            <label for="age">อายุ</label><br>
            <input type="text" class="form-control text-from" id="age">
          </div> -->
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6">
        <label for="registerCourse_graduate">สำเร็จการศึกษาสูงสุด</label><br>
        <select class="text-from " id="registerCourse_graduate" name="registerCourse_graduate">
          <option value="registerCourse_highschool">กรุณาเลือก</option>
          <option value="registerCourse_bachelor">ปริญญาตรี</option>
          <option value="registerCourse_master">ปริญญาโท</option>
          <option value="registerCourse_doctor">ปริญญาเอก</option>
        </select>
      </div>
      <!-- <div class="form-group col-md-6">
            <label for="idpeople">รหัสบัตรประชาชน</label><br>
            <input type="text" class="form-control text-from " id="idpeople">
          </div> -->
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_branch">สาขาวิชา</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_branch" placeholder="กรอกสาขาที่ท่านเรียนจบ">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_educational">สถาบันการศึกษา</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_educational" placeholder="กรอกสถาบันการศึกษาที่ท่านเรียนจบ">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_telphone">โทรศัพท์มือถือ</label><br>
        <input type="tel" class="form-control text-from" id="registerCourse_telephone" value="xxx-xxx-xxxx">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_email">E-mail</label><br>
        <input type="email" class="form-control text-from" id="registerCourse_email" placeholder="กรุณากรอกอีเมล">
      </div>
    </div><br>

    <div style="margin-left:10%;">
      <h2 style="color: #4C23A4;">ส่วนที่ 2 ข้อมูลการติดต่อ</h2><br>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_info_address">ที่อยู่ที่สามารถติดต่อได้</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_info_address" placeholder="สถานที่ตั้ง">
      </div>
      <!-- <div class="form-group col-md-6">
            <label for="educational">สถาบันการศึกษา</label><br>
            <input type="text" class="form-control text-from" id="educational">
          </div> -->
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_info_province">จังหวัด</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_info_province">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_info_district">อำเภอ / เขต</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_info_district">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_info_district2">ตำบล / แขวง</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_info_district2">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_info_zipcode">รหัสไปรษณีย์</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_info_zipcode">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_info_relatename">ชื่อ (ผู้ที่สามารถติดต่อได้ในกรณีฉุกเฉิน)</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_info_relatename" placeholder="กรอกผู้ที่สามารถติดต่อได้ในกรณีฉุกเฉิน">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_info_telephone">เบอร์โทรติดต่อ</label><br>
        <input type="tel" class="form-control text-from" id="registerCourse_info_telephone" placeholder="xxx-xxx-xxxx">
      </div>
    </div>

    <div style="margin-left:10%;">
      <h2 style="color: #4C23A4;">ส่วนที่ 3 ข้อมูลการทำงาน</h2><br>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_work_nowposition">ปัจจุบันดำรงตำแหน่ง</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_nowposition" placeholder="ตำแหน่งงาน">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_work_office">กอง / สำนักงาน</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_office" placeholder="สำนักงาน">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_work_affiliation">สังกัดกรม</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_affiliation" placeholder="กรม">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_work_company">สังกัดกระทรวงบริษัท</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_company" placeholder="กระทรวงบริษัท">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_work_address2">ที่ตั้งหน่วยงาน</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_address2" placeholder="สถานที่ตั้ง">
      </div>
      <!-- <div class="form-group col-md-6">
            <label for="educational">สถาบันการศึกษา</label><br>
            <input type="text" class="form-control text-from" id="educational">
          </div> -->
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_work_province">จังหวัด</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_province">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_work_district">อำเภอ / เขต</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_district">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6 ">
        <label for="registerCourse_work_district">ตำบล / แขวง</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_district">
      </div>
      <div class="form-group col-md-6">
        <label for="registerCourse_work_zipcode">รหัสไปรษณีย์</label><br>
        <input type="text" class="form-control text-from" id="registerCourse_work_zipcode">
      </div>
    </div>

    <div class="form-row " style="margin-left:10%;">
      <div class="form-group col-md-6">
        <label for="registerCourse_work_telephone">เบอร์โทรติดต่อ</label><br>
        <input type="tel" class="form-control text-from" id="registerCourse_work_telephone" placeholder="xxx-xxx-xxxx">
      </div>
      <!-- <div class="form-group col-md-6 ">
            <label for="relatename">ชื่อ (ผู้ที่สามารถติดต่อได้ในกรณีฉุกเฉิน)</label><br>
            <input type="text" class="form-control text-from" id="relatename">
          </div> -->
    </div>

    <div style="margin-left:10%;">
      <h2 style="color: #4C23A4;">ส่วนที่ 4 ข้อมูลทั่วไป</h2><br>
    </div>

    <div class="form-row border-secter-underline" style="margin-left:10%;">
      <div class="form-group col-md-4">
        <label>4.1 ท่านเคยอบรมกับกรมประชาสัมพันธ์หรือไม่</label><br>
      </div>
      <div class="form-group col-md-1 ">
        <div class="form-check">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="radioTrain" id="checkboxYES" value="yes">
          <label class="form-check-label" for="checkboxYES">
            เคย
          </label>
        </div>
      </div>
      <div class="form-group col-md-7 ">
        <!-- <input class="form-check-input" type="radio" value="" id="Checkno">
        <label class="form-check-label" for="Checkno"> ไม่เคย </label> -->
        <div class="form-check">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="radioTrain" id="checkboxNO" value="NO">
          <label class="form-check-label" for="checkboxNO">
            ไม่เคย
          </label>
        </div>
      </div>
    </div>

    <div class="border-secter-underline"style="margin-left:10%;" >
    <div class=" mt-3" >
      <label> 4.2 ท่านทราบข้อมูลฝึกอบรมของสถาบันการประชาสัมพันธ์จากสื่อใด (เลือกตอบได้มากกว่า1รายการ)</label><br>
      <div class="form-row " style="margin-left:5%;">
        <div class="form-group col-md-2">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="checkbox" value="checkbox_book" id="registercouse_checkbox_book">
          <label class="form-check-label" for="registercouse_checkbox_book"> หนังสือราชการ </label>
        </div>
        <div class="form-group col-md-2 ">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="checkbox" value="checkbox_PR" id="registercouse_checkbox_PR">
          <label class="form-check-label" for="registercouse_checkbox_PR"> ป้ายประชาสัมพันธ์ </label>
        </div>
        <div class="form-group col-md-2 ">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="checkbox" value="checkbox_internet" id="registercouse_checkbox_internet">
          <label class="form-check-label" for="registercouse_checkbox_internet"> อินเทอร์เน็ต </label>
        </div>
        <div class="form-group col-md-2 ">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="checkbox" value="checkbox_personal" id="registercouse_checkbox_personal">
          <label class="form-check-label" for="registercouse_checkbox_personal"> สื่อบุคคล </label>
        </div>
        <div class="form-group col-md-2 ">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="checkbox" value="checkbox_paper" id="registercouse_checkbox_paper">
          <label class="form-check-label" for="registercouse_checkbox_paper"> เอกสารแผ่นพับ </label>
        </div>
      </div>
      <div class="form-row " style="margin-left:5%;">
        <div class="form-group col-md-1">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="checkbox" value="checkbox_other" id="registercouse_checkbox_other">
          <label class="form-check-label" for="registercouse_checkbox_other"> อื่นๆ </label>
        </div>
        <div class="form-group col-md-5 ">
          <input type="text" class="form-control text-from" id="registercouse_checkbox_other" > <!-- ช่องนี้ต้องติ๊กอื่นๆถึงจะกรอกได้ -->
        </div>
        <div class="form-group col-md-6 ">
          
        </div>
      </div>
    </div>
  </div>

    <div class="form-row mt-3 " style="margin-left:10%; ">
      <div class="form-group col-md-5">
        <label>4.3 ท่านฉีดวัคซีนป้องกันไวรัสโควิด-19 ครบ 2 เข็มแล้วหรือยัง </label><br>
      </div>
      <div class="form-group col-md-1 ">
        <div class="form-check">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="radioVacine" id="checkboxFully" value="Fully">
          <label class="form-check-label" for="checkboxFully">
            ครบแล้ว
          </label>
        </div>
      </div>
      <div class="form-group col-md-6 ">
        <!-- <input class="form-check-input" type="radio" value="" id="vacineno">
        <label class="form-check-label" for="vacineno"> ยังไม่ครบ </label> -->
        <div class="form-check">
          <input class="form-check-input" style="width: 15px; height: 15px;" type="radio" name="radioVacine" id="checkboxNotFully" value="NotFully">
          <label class="form-check-label" for="checkboxNotFully">
            ยังไม่ครบ
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="fileupload">แนบไฟล์เอกสารรับรองการฉีดวัคซีน</label>
        <input type="file" class="form-control-file" id="fileupload">
      </div>
    </div>

    <div class="center" style="text-align: center;">
      <form action="/action_page.php">
        <div class="row">
          <div class="form-group col-md-3 ">

          </div>
          <div class="form-group col-md-3 ">
            <input class="cancel-btn" style="width: 100%;" type="submit" value="ยกเลิก">
          </div>
          <div class="form-group col-md-3">
            <input class="accept-btn" style="width: 100%;" type="submit" value="ลงทะเบียน">
          </div>
          <div class="form-group col-md-3 ">

          </div>
        </div>
      </form>
    </div>





    <!-- <div class="color-pass-regis">
          <div class="form-row" style="margin-left:10%;">
            <div class="form-group col-md-6 ">
              <label for="pass">รหัสผ่าน</label><br>
              <input type="password" class="form-control text-from" id="pass" value="********">
            </div>
            <div class="form-group col-md-6">
              <label for="passed">ยืนยันรหัสผ่าน</label><br>
              <input type="password" class="form-control text-from" id="passed" value="********">
            </div>
          </div>

          <div class="center" style="text-align: center;">
            <form action="/action_page.php">
              <input type="checkbox" id="humanright" name="humanright" value="humanright">
              <label for="humanright">ยินยอมให้ข้อมูลส่วนบุคคล</label><br>
            </form>
          </div>
        </div><br>
        <div class="center" style="text-align: center;">
          <form action="/action_page.php">
            <input class="accept-btn" type="submit" value="ลงทะเบียน">
          </form>
        </div> -->
</div>

</div><br>



</section>
<!--/ News end -->

<?php include('footer.php'); ?>
<!-- Footer Website -->
<?php include('combottom.php'); ?>
<!-- Include file js and properties -->