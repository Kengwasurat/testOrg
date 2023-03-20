<?php include('comtop.php'); ?> <!-- Include file css and properties -->
<?php include('header.php'); ?> <!-- Menu and Logo -->

    <div class="full-banner" style="background-image: url(images/bg_top_register.png);">
      <div class="text-banner-center txt-header-page">
        <h1 class="text-white text-center">ลงทะเบียนสมาชิกใหม่</h1>
      </div>
    </div>

    <div class="container" ><br>
      <div style="margin-left:10%;">
        <h2>กรุณากรอกรายละเอียดให้ถูกต้อง</h2><br>
      </div>
      

      <form>
        <div class="form-row " style="margin-left:10%;">
          <div class="form-group col-md-6" >
            <label for="register_prename">คำนำหน้าชื่อ</label><br>
            <select class="text-from " id="register_prename" name="register_prename" >
              <option value="Mr">นาย</option>
              <option value="Ms">นางสาว</option>
              <option value="Mrs">นาง</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="register_idpeople">รหัสบัตรประชาชน</label><br>
            <input type="text" class="form-control text-from " id="register_idpeople" placeholder="กรุณากรอกรหัสประชาชน 13 หลัก">
          </div>
        </div>

        <div class="form-row " style="margin-left:10%;">
          <div class="form-group col-md-6 ">
            <label for="register_fname">ชื่อ</label><br>
            <input type="text" class="form-control text-from" id="register_fname" placeholder="กรุณากรอกชื่อ">
          </div>
          <div class="form-group col-md-6">
            <label for="register_lname">นามสกุล</label><br>
            <input type="text" class="form-control text-from" id="register_lname" placeholder="กรุณากรอกนาสกุล">
          </div>
        </div>

        <div class="form-row " style="margin-left:10%;">
          <div class="form-group col-md-6 ">
            <label for="register_birthdate">วัน / เดือน / ปีเกิด</label><br>
            <input type="date" class="form-control text-from" id="register_birthdate">
          </div>
          <div class="form-group col-md-6">
            <label for="register_age">อายุ</label><br>
            <input type="text" class="form-control text-from" id="register_age">
          </div>
        </div>

        <div class="form-row " style="margin-left:10%;">
          <div class="form-group col-md-6 ">
            <label for="register_telphone">โทรศัพท์มือถือ</label><br>
            <input type="tel" class="form-control text-from" id="register_telephone" value="xxx-xxx-xxxx">
          </div>
          <div class="form-group col-md-6">
            <label for="register_email">E-mail</label><br>
            <input type="email" class="form-control text-from" id="register_email" placeholder="กรุณากรอกอีเมล">
          </div>
        </div>

        <div class="color-pass-regis">
          <div class="form-row" style="margin-left:10%;">
            <div class="form-group col-md-6 mt-3" >
              <label for="register_pass">รหัสผ่าน</label><br>
              <input type="password" class="form-control text-from" id="register_pass" placeholder="********">
            </div>
            <div class="form-group col-md-6 mt-3">
              <label for="register_passed">ยืนยันรหัสผ่าน</label><br>
              <input type="password" class="form-control text-from" id="register_passed" placeholder="********">
            </div>
          </div>

          <div class="center " style="text-align: center;">
            <form action="/action_page.php">
              <input type="checkbox" id="register_humanright" name="register_humanright" value="humanright">
              <label for="register_humanright">ยินยอมให้ข้อมูลส่วนบุคคล</label><br>
            </form>
          </div>
        </div><br>
        <div class="center" style="text-align: center;">
          <form action="/action_page.php">
            <input class="accept-btn" type="submit" value="ลงทะเบียน">
          </form>
        </div>

        <!-- <div class="row text-left" style="margin-left: 30px; ">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12"><br>

            <form action="/action_page.php">
              <label for="prename">คำนำหน้าชื่อ</label><br>
              <select class="text-from" id="prename" name="prename">
                <option value="Mr">นาย</option>
                <option value="Ms">นางสาว</option>
                <option value="Mrs">นาง</option>
              </select><br>
              <label for="fname">ชื่อ</label><br>
              <input class="text-from" type="text" id="fname" name="fname" value=""><br>
              <label for="birthdate">วันเดือนปีเกิด</label><br>
              <input class="text-from" type="date" id="birthdate" name="birthdate" value=""><br>
              <label for="telphone">โทรศัพท์มือถือ</label><br>
              <input class="text-from" type="tel" id="telphone" name="telphone" value="xxx-xxx-xxxx"><br>
              <label for="pass">รหัสผ่าน</label><br>
              <input class="text-from" type="password" id="pass" name="pass" value=""><br>
            </form>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-12"> <br>


            <form action="/action_page.php">
              <label for="idpeople">หมายเลขบัตรประชาชน</label><br>
              <input class="text-from" type="text" id="idpeople" name="idpeople" value=""><br>
              <label for="lname">นามสกุล</label><br>
              <input class="text-from" type="text" id="lname" name="lname" value=""><br>
              <label for="age">อายุ</label><br>
              <input class="text-from" type="text" id="age" name="age" value=""><br>
              <label for="email">Email</label><br>
              <input class="text-from" type="email" id="email" name="email" value=""><br>
              <label for="passed">ยืนยันรหัสผ่าน</label><br>
              <input class="text-from" type="tel" id="passed" name="passed" value=""><br>
            </form>

          </div> -->
    </div>

  </div><br>



  </section>
  <!--/ News end -->

<?php include('footer.php'); ?> <!-- Footer Website -->
<?php include('combottom.php'); ?> <!-- Include file js and properties -->