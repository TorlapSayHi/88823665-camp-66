@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{ url('/register')}}" onsubmit="return clickme()" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" />
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <!-- -->
            <div class="valid-feedback" id="valid-name">
              <!-- OK -->
            </div>
            <div class="invalid-feedback" id="invalid-name">
              กรุณาระบุข้อมูล name
            </div>
            <!-- -->
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
            <!-- -->
            <div class="valid-feedback" id="valid-email">
              <!-- OK -->
            </div>
            <div class="invalid-feedback" id="invalid-email">
              กรุณาระบุข้อมูล Email
            </div>
            <!-- -->
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
            <!-- -->
            <div class="valid-feedback" id="valid-password">
              <!-- OK -->
            </div>
            <div class="invalid-feedback" id="invalid-password">
              กรุณาระบุข้อมูล Password
            </div>
            <!-- -->
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" id="mycheckbox" type="checkbox" value="" id="flexCheckDefault" />
                
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
                <!-- -->
                  <div class="valid-feedback" id="valid-checkbox">
                    <!-- OK -->
                  </div>
                  <div class="invalid-feedback" id="invalid-checkbox">
                    checkbox ต้องมีการติ๊กถูก
                  </div>
            <!-- -->
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <!-- <button class="btn" onclick="clickme()">Click Me</button> -->
        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href="login.html" class="text-center"> I already have a membership </a>
        </p>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
  @endsection

@section('scripts')
  <script>
  console.log("Hello World!")
  //ALERT("Hello World")
  </script>
  <script>
    //alert("Hello World!")
    let myval
    var myval2
    const PI=3.14
    pi=2
    console.log(PI,pi);
    alert("Hello")

    let myarry = Array(1,2,3);
    myarry.push(4)
    console.log(myarry);
    myarry.pop()
    console.log(myarry);
    for (let a = 1; a < 10; a++){
      console.log(a);
     
    }

    function clickme(){
      /*let name = document.getElementById('name');
          name.value = "new test"
          name = $('#name').val("new with jquery")
          $('name').addClass('is-invalid')
          */
          let name = document.getElementById('name');
          name = $('#name')
          let email = document.getElementById('email');
          email = $('#email')
          let password = document.getElementById('password');
          password = $('#password')
          let mycheckbox = document.getElementById('mycheckbox');
          // mycheckbox = $('#mycheckbox')
          // name.val("My Name Value") 
          console.log(name.val(), email.val(), password.val(), mycheckbox.checked)
          if(name.val() == ""){
            name.addClass('is-invalid');
            $('#invalid-name').html("<b><u>ใส่ name ค่านี้ไม่ได้</u></b>")
            return false;
          } else {
            name.removeClass('is-invalid');
            name.addClass('is-valid');
          }

          let regex = /^[^@]+@[^@]+\.[^@]+$/;
          if (!regex.test(email.val())) {
            email.addClass('is-invalid');
            $('#invalid-email').html("<b><u>อีเมลต้องมี @ และ .</u></b>")
            return false;
          }
          else{
            email.removeClass('is-invalid');
            email.addClass('is-valid');
          }

          let regexPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).+$/;
          if (!regexPass.test(password.val())) {
            password.addClass('is-invalid');
            $('#invalid-password').html("<b><u>password ต้องมี  ตัวเลข ตัวอักษรภาษาอังกฤษพิมพ์เล็ก ตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ ในข้อความ</u></b>")
            return false;
          }
          else{
            password.removeClass('is-invalid');
            password.addClass('is-valid');
          }

          if (!mycheckbox.checked) {
            $('#mycheckbox').addClass('is-invalid');
            $('#invalid-checkbox').html("<b><u>checkbox ต้องมีการติ๊กถูก</u></b>");
            return false;
          } else {
            $('#mycheckbox').removeClass('is-invalid');
          }

          return true;
    }
  
    // $(document).ready(function(){

    // })
  </script>
@endsection