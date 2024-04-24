<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/css/Contact.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!--===============font-awesome ===============-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <title>Contact Us</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
   @include('layouts.header')

    <!--=============== Contact Section  ===============-->

    <section id="contact-container">
      <section id="left-container">
        <h2>Contact Form</h2>
        <div id="contact-form">
          <p>
            To answer questions you may have, please review our frequently asked
            questions( <a href="{{url('FAQ')}}">FAQ</a> )
          </p>
          <form action="" autocomplete="off" id="form">
            <div id="general-container">
              <div class="field-container">
                <label for="">Name & LastName</label>
                <input type="text" name="username" id="username" /><br />
                <small></small>
                <label for="">Email Address</label>
                <input type="email" name="email" id="email" /> <br />
                <small></small>
              </div>

              <div class="field-container">
                <label for="">Telephone</label>
                <input type="tel" name="telephone" id="telephone" /> <br />
                <small></small>
                <label for="">Type</label>

                <select>
                  <option value="">Problem with site</option>
                  <option value="">Feedback & Suggestion</option>
                  <option value="">Request to Call</option>
                </select>
                <small></small>
              </div>
            </div>
            <div id="general-container1">
              <div class="field-container1">
                <label for="">Subject</label>
                <input type="text" name="" />
              </div>
              <div class="field-container1">
                <label for="">Description</label>
                <textarea name="" id="" cols="30" rows="1"></textarea>
              </div>
            </div>
            <button type="submit" id="submit-btn">Submit</button>
          </form>
        </div>
        <div id="contact-company">
          <div class="contact-image">
            <h1>Companies</h1>
            <p>
              If you are a company looking to recruit staff, please see
              recruiting solutions for employers
            </p>
            <a href="{{url('post-job')}}" class="com-btn">Submit</a>
          </div>
          <div class="contact-image">
            <h1>Condidates</h1>
            <p>
              To register and apply for job opportunities, go to candidate
              registration
            </p>
            <a href="{{url('find-job')}}" class="job-btn">Find Your Job</a>
          </div>
        </div>
      </section>
      <section id="right-container">
        <h2>Contact <br />information</h2>
        <address>
          <i class="fa-solid fa-location-dot"></i> 9th District,<br />
          Kandahar,Afghanistan
        </address>
        <address>
          <i class="fa-solid fa-mobile-screen-button"></i>Mobile:0775480806
        </address>
        <i></i
        ><time>
          <i class="fa-solid fa-clock"></i> We are open form <br />
          9:00 AM - 4:00 PM
        </time>
        <h2 id="follow">Follow us</h2>
        <div class="social-link">
          <a href="#"><i class="fa-solid fa-envelope"></i></a>
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <a href="{{url('About')}}" class="about-btn">About Us</a>
      </section>
    </section>

    <!--=============== FOOTER ===============-->
   @include('layouts.footer')

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script defer src="/assets/js/module/contact.js"></script>
  </body>
</html>
