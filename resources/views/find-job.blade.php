<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Job</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
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
    <!-- <script defer src="./assets/js/module/find_job.js"></script> -->
    <!-- <script defer type="module" src="./assets/js/main.js"></script> -->

    <!-- <script defer src="./assets/js/module/find_job.js"></script> -->

    <link rel="stylesheet" href="./assets/css/find_job.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body>
    <!--============================ HEADER =========================-->
   @include('layouts.header')
    <!-- ====================heading section started================== -->
    <section id="heading-section">
      <h5>Employment in the AfghanTalent and national companies</h5>
      <div class="search-container">
        <input
          type="search"
          placeholder="Search Job Title, Position, Company Name..."
        />
        <button type="submit"><i class="ri-search-line"></i></button>
      </div>
      <div class="job-catagory">
        <span>SEO</span>
        <span>Engineer</span>
        <span>HR</span>
        <span>Sales</span>
        <span>Accountant</span>
        <span>Web Desgin</span>
        <span>Web Development</span>
        <span>Data Science</span>
        <span>AI</span>
      </div>
    </section>

    <!--====================== Job catagory section================== -->
    <section id="job-catagories">
      <div class="job-links">
        <ul>
          <li><i class="ri-archive-fill"></i><a href="#">Job Catagory</a></li>
          <li>
            <i class="ri-graduation-cap-fill"></i><a href="#">Education</a>
          </li>
          <li><i class="ri-map-pin-2-fill"></i><a href="#">Location</a></li>
          <li><i class="ri-briefcase-2-fill"></i><a href="#">Industry</a></li>
          <li><i class="ri-building-3-fill"></i><a href="#">Seniority</a></li>
        </ul>
      </div>

      <div id="all-jobs-search-view">
        <div class="A-search">
          <input
            type="search"
            id="search-input"
            class="search-input"
            placeholder="Search Job catagory"
          />
          <button id="searching" type="submit">
            <i class="ri-search-line"></i>
          </button>
        </div>
        <a href="{{url('showJobs')}}" id="view-all-jobs">View all jobs</a>
      </div>

      <div id="all-job-section">
        <div class="A">
          <a href="#"><span>20</span>Sales&Customer Service</a>
          <a href="#"><span>30</span>Markiting,Advetising</a>
          <a href="#"><span>40</span>IT-Software</a>
          <a href="#"><span>60</span>Web Development </a>
          <a href="#"><span>50</span>Accounting,Auditing</a>
          <a href="#"><span>80</span>Prodiction</a>
          <a href="#"><span>250</span>IT Networking</a>
          <a href="#"><span>27</span>Engineering</a>
          <a href="#"><span>29</span>Managment </a>
          <a href="#"><span>90</span>Project Planning</a>
          <a href="#"><span>49</span>Adminstrition</a>
          <a href="#"><span>4</span>Big Data,Data Visulization</a>
          <a href="#"><span>330</span>Project Controlling</a>
        </div>
        <div class="A">
          <a href="#"><span>20</span>Sales&Customer Service</a>
          <a href="#"><span>30</span>Markiting,Advetising</a>
          <a href="#"><span>40</span>IT-Software</a>
          <a href="#"><span>60</span>Web Development </a>
          <a href="#"><span>50</span>Accounting,Auditing</a>
          <a href="#"><span>80</span>Prodiction</a>
          <a href="#"><span>250</span>IT Networking</a>
          <a href="#"><span>27</span>Engineering</a>
          <a href="#"><span>29</span>Managment </a>
          <a href="#"><span>90</span>Project Planning</a>
          <a href="#"><span>49</span>Adminstrition</a>
          <a href="#"><span>4</span>Big Data,Data Visulization</a>
          <a href="#"><span>330</span>Project Controlling</a>
        </div>
        <div class="A">
          <a href="#"><span>20</span>Sales&Customer Service</a>
          <a href="#"><span>30</span>Markiting,Advetising</a>
          <a href="#"><span>40</span>IT-Software</a>
          <a href="#"><span>60</span>Web Development </a>
          <a href="#"><span>50</span>Accounting,Auditing</a>
          <a href="#"><span>80</span>Prodiction</a>
          <a href="#"><span>250</span>IT Networking</a>
          <a href="#"><span>27</span>Engineering</a>
          <a href="#"><span>29</span>Managment </a>
          <a href="#"><span>90</span>Project Planning</a>
          <a href="#"><span>49</span>Adminstrition</a>
          <a href="#"><span>4</span>Big Data,Data Visulization</a>
          <a href="#"><span>330</span>Project Controlling</a>
        </div>
      </div>
    </section>

    <!-- ===============  LAST JOB OPPERTUNITEIES =============== -->
    <section id="last-job">
      <div class="job-linked">
        <ul>
          <li><a href="#">Latest Jobs</a></li>
          <li><a href="#">Recommended Jobs</a></li>
          <li><a href="#">Applied Jobs</a></li>
          <li><a href="#">Saved Jobs</a></li>
        </ul>
      </div>
      <div class="jobcart__wrapper">
        <div class="job-card">
          <div class="job-card-header">
            <img src="assets/images/company logo/brishna.png" alt="" />
            <div class="job-card-title">UI / UX Designer</div>
            <div class="menu-dot"></div>
          </div>
          <div class="job-card-subtitle">
            The User Experience Designer position exists to create compelling
            and digital user experience through excellent design...
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">Full Time</button>
            <button class="search-buttons detail-button btn">
              Min. 1 Year
            </button>
            <button class="search-buttons detail-button btn">
              Senior level
            </button>
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">3000 $</button>
            <button class="search-buttons detail-button btn">3 hour ago</button>
          </div>
          <div class="job-card-buttons">
            <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn"
              >Apply Now</a
            >
            <button class="search-buttons card-buttons-msg btn">
              Messages
            </button>
          </div>
        </div>

        <div class="job-card">
          <div class="job-card-header">
            <img src="assets/images/company logo/alokozay (2).jpg" alt="" />
            <div class="job-card-title">Project Manager</div>
            <div class="menu-dot"></div>
          </div>
          <div class="job-card-subtitle">
            The User Experience Designer position exists to create compelling
            and digital user experience through excellent design...
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">Full Time</button>
            <button class="search-buttons detail-button btn">
              Min. 1 Year
            </button>
            <button class="search-buttons detail-button btn">
              Senior level
            </button>
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">3000 $</button>
            <button class="search-buttons detail-button btn">3 hour ago</button>
          </div>
          <div class="job-card-buttons">
            <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn"
              >Apply Now</a
            >
            <button class="search-buttons card-buttons-msg btn">
              Messages
            </button>
          </div>
        </div>

        <div class="job-card">
          <div class="job-card-header">
            <img src="assets/images/company logo/alokozay (2).jpg" alt="" />
            <div class="job-card-title">Project Manager</div>
            <div class="menu-dot"></div>
          </div>
          <div class="job-card-subtitle">
            The User Experience Designer position exists to create compelling
            and digital user experience through excellent design...
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">Full Time</button>
            <button class="search-buttons detail-button btn">
              Min. 1 Year
            </button>
            <button class="search-buttons detail-button btn">
              Senior level
            </button>
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">3000 $</button>
            <button class="search-buttons detail-button btn">3 hour ago</button>
          </div>
          <div class="job-card-buttons">
            <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn"
              >Apply Now</a
            >
            <button class="search-buttons card-buttons-msg btn">
              Messages
            </button>
          </div>
        </div>

        <div class="job-card">
          <div class="job-card-header">
            <img src="assets/images/company logo/alokozay (2).jpg" alt="" />
            <div class="job-card-title">Project Manager</div>
            <div class="menu-dot"></div>
          </div>
          <div class="job-card-subtitle">
            The User Experience Designer position exists to create compelling
            and digital user experience through excellent design...
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">Full Time</button>
            <button class="search-buttons detail-button btn">
              Min. 1 Year
            </button>
            <button class="search-buttons detail-button btn">
              Senior level
            </button>
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">3000 $</button>
            <button class="search-buttons detail-button btn">3 hour ago</button>
          </div>
          <div class="job-card-buttons">
            <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn"
              >Apply Now</a
            >
            <button class="search-buttons card-buttons-msg btn">
              Messages
            </button>
          </div>
        </div>

        <div class="job-card">
          <div class="job-card-header">
            <img src="assets/images/company logo/alokozay (2).jpg" alt="" />
            <div class="job-card-title">Project Manager</div>
            <div class="menu-dot"></div>
          </div>
          <div class="job-card-subtitle">
            The User Experience Designer position exists to create compelling
            and digital user experience through excellent design...
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">Full Time</button>
            <button class="search-buttons detail-button btn">
              Min. 1 Year
            </button>
            <button class="search-buttons detail-button btn">
              Senior level
            </button>
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">3000 $</button>
            <button class="search-buttons detail-button btn">3 hour ago</button>
          </div>
          <div class="job-card-buttons">
            <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn"
              >Apply Now</a
            >
            <button class="search-buttons card-buttons-msg btn">
              Messages
            </button>
          </div>
        </div>

        <div class="job-card">
          <div class="job-card-header">
            <img src="assets/images/company logo/alokozay (2).jpg" alt="" />
            <div class="job-card-title">Project Manager</div>
            <div class="menu-dot"></div>
          </div>
          <div class="job-card-subtitle">
            The User Experience Designer position exists to create compelling
            and digital user experience through excellent design...
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">Full Time</button>
            <button class="search-buttons detail-button btn">
              Min. 1 Year
            </button>
            <button class="search-buttons detail-button btn">
              Senior level
            </button>
          </div>
          <div class="job-detail-buttons">
            <button class="search-buttons detail-button btn">3000 $</button>
            <button class="search-buttons detail-button btn">3 hour ago</button>
          </div>
          <div class="job-card-buttons">
            <a href="{{url('showJobs')}}" class="search-buttons card-buttons btn"
              >Apply Now</a
            >
            <button class="search-buttons card-buttons-msg btn">
              Messages
            </button>
          </div>
        </div>
      </div>
      <div id="view-all-blog-posts">
        <a href="{{url('showJobs')}}">See More Jobs</a>
      </div>
    </section>

    <!-- ====================== GUIDE SECTION ==================== -->

    <section id="giude-section">
      <h1>3 steps to find the job you love!</h1>
      <div id="direction-for-employer">
        <div class="registrition">
          <i class="ri-user-add-line"></i>
          <a href="#">
            <h3>Register</h3>
          </a>
          <p>
            Start Your professional career <br />
            path by registering on AfghanTalent <br />
            website
          </p>
        </div>

        <div class="registrition">
          <i class="ri-arrow-right-line"></i>
        </div>

        <div class="registrition">
          <i class="ri-file-upload-line"></i>
          <a href="#">
            <h3>Upload Your CV</h3>
          </a>
          <p>
            The First step to get hired in your <br />
            dream job is to create a <br />
            professional CV
          </p>
        </div>

        <div class="registrition">
          <i class="ri-arrow-right-line"></i>
        </div>

        <div class="registrition">
          <i class="ri-briefcase-line"></i>
          <a href="#">
            <h3>Apply for jobs</h3>
          </a>
          <p>
            Send your CV to employers and <br />
            let them know you are ready to <br />
            apply for jobs.
          </p>
        </div>
      </div>
    </section>

    <!--======================= top companies===================== -->
    <section id="top-company">
      <div id="level-2">
        <h4>Top Raled Companies in AfghanTalent</h4>
        <hr />
      </div>
      <div id="top-company-container">
        <div class="top-company-logo">
          <img
            src="./assets/images/company logo/friends-logo-template_23-2149505594.avif"
            alt=""
          />
          <div>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <p>Khan Steel</p>
        </div>

        <div class="top-company-logo">
          <img src="./assets/images/company logo/alokozay (2).jpg" alt="" />
          <div>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <p>Alokozay</p>
        </div>

        <div class="top-company-logo">
          <img src="./assets/images/company logo/brishna.png" alt="" />
          <div>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <p>Brishna</p>
        </div>

        <div class="top-company-logo">
          <img src="./assets/images/company logo/cola.png" alt="" />
          <div>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <p>Cola Company</p>
        </div>

        <div class="top-company-logo">
          <img src="./assets/images/company logo/unicif.png" alt="" />
          <div>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <p>unicif</p>
        </div>

        <div class="top-company-logo">
          <img src="./assets/images/company logo/khan.jpg" alt="" />
          <div>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
            <i class="ri-star-line"></i>
          </div>
          <p>Azizy Company</p>
        </div>
      </div>
      <div class="view-all-company-btn">
        <a href="{{url('Companeis_Rate')}}" id="view-all-company"
          >View Other Company</a
        >
      </div>
    </section>

    <!-- ======================favrite jobs guides=============== -->

    <section id="find-job-guides">
      <div id="level-3">
        <h4>How to find your favorite</h4>
        <hr />
      </div>

      <div id="cards-guides">
        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-jopwell-2422286.jpg"
            alt=""
          />
          <h5>
            What is a resume and how to <br />
            write a professional resume?
          </h5>
          <p>
            if you are locking for a job and <br />
            want to be hired by a reputable <br />
            company. the first thing you are...
          </p>
          <a href="{{url('guide')}}">Read More</a>
          <button>Candidates</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-lex-photography-1109543.jpg"
            alt=""
          />
          <h5>
            How to write work experience<br />
            on resume?
          </h5>
          <p>
            if you want to write a<br />
            professional resume,it is better <br />
            to know thar the work that you want to hired there...
          </p>
          <a href="{{url('guideExperience')}}">Read More</a>
          <button>Candidates</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-life-of-pix-7974.jpg"
            alt=""
          />
          <h5>
            Guide to making a resume in <br />
            AfghanTalent?
          </h5>
          <p>
            During its 17 year of operation, <br />
            AfghanTalent.com has always tried <br />
            to change the recruitment...
          </p>
          <a href="{{url('guide-resume-in-afghanjb')}}">Read More</a>
          <button>Candidates</button>
        </div>

        <div class="cards-design">
          <img
            src="./assets/images/company logo/pexels-serpstat-572056.jpg"
            alt=""
          />
          <h5>
            Interview tips that will help <br />
            you get hired
          </h5>
          <p>
            Even if you are a professional<br />
            interview and you have been <br />
            interviewed by different language and can...
          </p>
          <a href="{{url('index')}}">Read More</a>
          <button>Candidates</button>
        </div>
      </div>
      <div id="view-all-blog-posts">
        <a href="{{url('blog')}}">View all blog posts</a>
      </div>
    </section>

    <!--=========================== FOOTER ======================-->
   @include('layouts.footer')

    <!--======================== MAIN JS ========================-->
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="./assets/js/module/find_job.js"></script>
  </body>
</html>