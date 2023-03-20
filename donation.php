<?php include('comtop.php'); ?> <!-- Include file css and properties -->
<?php include('header.php'); ?> <!-- Menu and Logo -->

    <nav class="nav my-3" style="margin-left: 10%;">
      <a class="nav-link active" href="#">หน้าหลัก</a>
      <li class="nav-item" style="margin-top:9px ;">
        <span>></span>
      </li>
      <a class="nav-link" href="#">ขอรับการสนับสนุนวิทยากร</a>
    </nav>

    <div class="container pb-3">
      <h2 style="color: #4C23A4;">ขอรับการสนับสนุนวิทยากร</h2>
    </div>

    <div class="container">
      <div class=" border-cover-template shadow p-3 mb-5">

        <h3 class="mt-3" style="color: #4C23A4; margin-left:5%;">ข้อมูลการบรรยาย</h3>
        <form>
          <div class="form-row " style="margin-left:10%;">
            <div class="form-group col-md-6 ">
              <label for="donation_topic">หัวข้อการบรรยาย</label><br>
              <input type="text" class="form-control text-from" id="donation_topic">
            </div>
            <div class="form-group col-md-6">
              <label for="donation_discrip">รายละเอียด</label><br>
              <input type="text" class="form-control text-from" id="donation_discrip">
            </div>
          </div>

          <div class="form-row " style="margin-left:10%;">
            <div class="form-group col-md-6 ">
              <label for="donation_lecture_fname">ชื่อวิทยากร</label><br>
              <input type="text" class="form-control text-from" id="donation_lecture_fname">
            </div>
            <div class="form-group col-md-6">
              <label for="donation_lecture_lname">นามสกุลวิทยากร</label><br>
              <input type="text" class="form-control text-from" id="donation_lecture_lname">
            </div>
          </div>
        </form>

        <h3 class="mt-3" style="color: #4C23A4; margin-left:5%;">ข้อมูลผู้ขอรับการสนับสนุนวิทยากร</h3>

        <form>
          <div class="form-row " style="margin-left:10%;">
            <div class="form-group col-md-6">
              <label for="donation_prename">คำนำหน้าชื่อ</label><br>
              <select class="text-from " id="prename" name="donation_prename">
                <option value="donation_Mr">นาย</option>
                <option value="donation_Ms">นางสาว</option>
                <option value="donation_Mrs">นาง</option>
              </select>
            </div>
            <!-- <div class="form-group col-md-6">
              <label for="idpeople">รหัสบัตรประชาชน</label><br>
              <input type="text" class="form-control text-from " id="idpeople">
            </div> -->
          </div>

          <div class="form-row " style="margin-left:10%;">
            <div class="form-group col-md-6 ">
              <label for="donation_dona_fname">ชื่อผู้ขอ </label><br>
              <input type="text" class="form-control text-from" id="donation_dona_fname">
            </div>
            <div class="form-group col-md-6">
              <label for="donation_dona_lname">นามสกุล</label><br>
              <input type="text" class="form-control text-from" id="donation_dona_lname">
            </div>
          </div>

          <div class="form-row " style="margin-left:10%;">
            <div class="form-group col-md-6">
              <label for="donation_type_agecy">ประเภทหน่วยงาน</label><br>
              <select class="text-from " id="donation_type_agecy" name="donation_type_agecy">
                <option value="donation_select">กรุณาเลือก</option>
                <option value="donation_gover">รัฐบาล</option>
                <option value="donation_priva">เอกชน</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="donation_agency">หน่วยงาน</label><br>
              <select class="text-from " id="donation_agency" name="donation_agency">
                <option value="Mr">กรุณาเลือก</option>
                <option value="Ms">บริษัท ปตท. จำกัด </option>
                <option value="Mrs">บริษัท ไทยยูเนี่ยน กรุ๊ป จำกัด</option>
              </select>
            </div>
          </div>

          <div class="form-row " style="margin-left:10%;">
            <div class="form-group col-md-6 ">
              <label for="donation_telphone">โทรศัพท์มือถือ</label><br>
              <input type="tel" class="form-control text-from" id="donation_telephone" >
            </div>
            <div class="form-group col-md-6">
              <label for="donation_email">E-mail</label><br>
              <input type="email" class="form-control text-from" id="donation_email">
            </div>
          </div>

          <div class="form-row " style="margin-left:10%;">
            <div class="form-group col-md-6 ">
              <label for="donation_lecture_date_invite">วันที่เชิญไปบรรยาย </label><br>
              <input type="date" class="form-control text-from" id="birthdate">
            </div>
            <div class="form-group col-md-6 ">
              <label for="donation_lecture_date">ถึงวันที่</label><br>
              <input type="date" class="form-control text-from" id="birthdate">
            </div>
          </div>
          <div class="form-group" style="margin-left:10%;">
            <label for="donation_fileupload">แนบไฟล์เอกสารเพิ่มเติม</label>
            <input type="file" class="form-control-file" id="donation_fileupload">
          </div><br>

          <div class="center" style="text-align: center;">
            <form action="/action_page.php">
              <input class="accept-btn" type="submit" value="ลงทะเบียน">
            </form>
          </div><br>
      </div>
    </div>
  </div><br>



  </section>
  <!--/ News end -->

<?php include('footer.php'); ?> <!-- Footer Website -->
<?php include('combottom.php'); ?> <!-- Include file js and properties -->