<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./assets/css/showJobs.css" />

    <title>available|Jobs</title>
  </head>

  <body>
    <div class="job">
      <div class="header">
        <div class="logo">
          <a href="{{route('home')}}">
            <i class="ri-open-arm-fill logo-icon"></i>
            AfghanTalent
          </a>
        </div>
        <div class="header-menu">
          <a href="{{route('home')}}" class="active">Home</a>
          <a href="{{url('find-job')}}">find job</a>
          <a href="{{url('post-job')}}">post job</a>
        </div>
        <div class="user-settings">
          <div class="dark-light">
            <svg
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="1.5"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
            </svg>
          </div>
          <div class="user-menu">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-square"
            >
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
            </svg>
          </div>
          <img class="user-profile" src="assets/images/sami.JPG" alt="" />
          <div class="user-name">Samiullah Shaheen</div>
        </div>
      </div>
      <div class="wrapper">
        <div class="search-menu">
          <div class="search-bar">
            <input type="text" class="search-box" autofocus />
            <div class="search item">
              Product Designer
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x"
              >
                <path d="M18 6L6 18M6 6l12 12" />
              </svg>
            </div>
            <div class="search item">
              UI Designer
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="feather feather-x"
              >
                <path d="M18 6L6 18M6 6l12 12" />
              </svg>
            </div>
          </div>
          <div class="search-location">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-map-pin"
            >
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <input type="text" placeholder="search location" />
          </div>
          <div class="search-job">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-briefcase"
            >
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
              <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" />
            </svg>
            <input type="text" placeholder="Job Type" />
          </div>
          <div class="search-salary">
            <svg
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              stroke="currentColor"
              fill="currentColor"
              stroke-width=".4"
            >
              <path
                d="M12.6 18H9.8a.8.8 0 010-1.5h2.8a.9.9 0 000-1.8h-1.2a2.4 2.4 0 010-4.7h2.8a.8.8 0 010 1.5h-2.8a.9.9 0 000 1.8h1.2a2.4 2.4 0 010 4.7z"
                stroke="currentColor"
              />
              <path
                d="M12 20a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8zM12 11.5a.8.8 0 01-.8-.8v-2a.8.8 0 011.6 0v2c0 .5-.4.8-.8.8z"
                stroke="currentColor"
              />
              <path
                d="M21.3 23H2.6A2.8 2.8 0 010 20.2V3.9C0 2.1 1.2 1 2.8 1h18.4C22.9 1 24 2.2 24 3.8v16.4c0 1.6-1.2 2.8-2.8 2.8zM2.6 2.5c-.6 0-1.2.6-1.2 1.3v16.4c0 .7.6 1.3 1.3 1.3h18.4c.7 0 1.3-.6 1.3-1.3V3.9c0-.7-.6-1.3-1.3-1.3z"
                stroke="currentColor"
              />
              <path
                d="M23.3 6H.6a.8.8 0 010-1.5h22.6a.8.8 0 010 1.5z"
                stroke="currentColor"
              />
            </svg>
            <input type="text" placeholder="Salary Range" />
          </div>
          <button class="search-button">Find Job</button>
        </div>
        <div class="main-container">
          <div class="search-type">
            <div class="alert">
              <div class="alert-title">Create Job Alert</div>
              <div class="alert-subtitle">
                Create a job alert now and never miss a job
              </div>
              <input type="text" placeholder="Enter job keyword" />
              <button class="search-buttons">Create Job Alerts</button>
            </div>
            <div class="job-time">
              <div class="job-time-title">Type of Employment</div>
              <div class="job-wrapper">
                <div class="type-container">
                  <input type="checkbox" id="job1" class="job-style" checked />
                  <label for="job1">Full Time Jobs</label>
                  <span class="job-number">56</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job2" class="job-style" />
                  <label for="job2">Part Time Jobs</label>
                  <span class="job-number">43</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job3" class="job-style" />
                  <label for="job3">Remote Jobs</label>
                  <span class="job-number">24</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job4" class="job-style" />
                  <label for="job4">Internship Jobs</label>
                  <span class="job-number">27</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job5" class="job-style" />
                  <label for="job5">Contract</label>
                  <span class="job-number">76</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job6" class="job-style" />
                  <label for="job6">Training Jobs</label>
                  <span class="job-number">28</span>
                </div>
              </div>
            </div>
            <div class="job-time">
              <div class="job-time-title">Seniority Level</div>
              <div class="job-wrapper">
                <div class="type-container">
                  <input type="checkbox" id="job7" class="job-style" />
                  <label for="job7">Student Level</label>
                  <span class="job-number">98</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job8" class="job-style" />
                  <label for="job8">Entry Level</label>
                  <span class="job-number">44</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job9" class="job-style" checked />
                  <label for="job9">Mid Level</label>
                  <span class="job-number">35</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job10" class="job-style" checked />
                  <label for="job10">Senior Level</label>
                  <span class="job-number">29</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job11" class="job-style" />
                  <label for="job11">Directors</label>
                  <span class="job-number">26</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job12" class="job-style" />
                  <label for="job12">VP or Above</label>
                  <span class="job-number">56</span>
                </div>
              </div>
            </div>
            <div class="job-time">
              <div class="job-time-title">Salary Range</div>
              <div class="job-wrapper">
                <div class="type-container">
                  <input type="checkbox" id="job1" class="job-style" />
                  <label for="job1">$700 - $1000</label>
                  <span class="job-number">49</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job2" class="job-style" />
                  <label for="job2">$1000 - $1200</label>
                  <span class="job-number">67</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job3" class="job-style" />
                  <label for="job3">$1200 - $1400</label>
                  <span class="job-number">24</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job4" class="job-style" />
                  <label for="job4">$1500 - $1800</label>
                  <span class="job-number">27</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job5" class="job-style" checked />
                  <label for="job5">$2000 - $3000</label>
                  <span class="job-number">76</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job6" class="job-style" checked />
                  <label for="job6">$3000 - $4000</label>
                  <span class="job-number">22</span>
                </div>
                <div class="type-container">
                  <input type="checkbox" id="job6" class="job-style" />
                  <label for="job6">$4000 - $5000</label>
                  <span class="job-number">18</span>
                </div>
              </div>
            </div>
          </div>
          <div class="searched-jobs">
            <div class="searched-bar">
              <div class="searched-show">Showing 46 Jobs</div>
              <div class="searched-sort">
                Sort by: <span class="post-time">Newest Post </span
                ><span class="menu-icon">▼</span>
              </div>
            </div>
            <div class="job-cards">
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    viewBox="0 -13 512 512"
                    xmlns="http://www.w3.org/2000/svg"
                    style="background-color: #2e2882"
                  >
                    <g fill="#feb0a5">
                      <path
                        d="M256 92.5l127.7 91.6L512 92 383.7 0 256 91.5 128.3 0 0 92l128.3 92zm0 0M256 275.9l-127.7-91.5L0 276.4l128.3 92L256 277l127.7 91.5 128.3-92-128.3-92zm0 0"
                      />
                      <path d="M127.7 394.1l128.4 92 128.3-92-128.3-92zm0 0" />
                    </g>
                    <path
                      d="M512 92L383.7 0 256 91.5v1l127.7 91.6zm0 0M512 276.4l-128.3-92L256 275.9v1l127.7 91.5zm0 0M256 486.1l128.4-92-128.3-92zm0 0"
                      fill="#feb0a5"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">UI / UX Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    style="background-color: #f76754"
                  >
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M0 .5h4.2v23H0z"
                      fill="#042b48"
                      data-original="#212121"
                    />
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M15.4.5a8.6 8.6 0 100 17.2 8.6 8.6 0 000-17.2z"
                      fill="#fefefe"
                      data-original="#f4511e"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">Sr. Product Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                    fill="#fff"
                    style="background-color: #55acee"
                  >
                    <path
                      d="M512 97.2c-19 8.4-39.3 14-60.5 16.6 21.8-13 38.4-33.4 46.2-58a209.8 209.8 0 01-66.6 25.4A105 105 0 00249.5 153c0 8.3.8 16.3 2.5 24A297.1 297.1 0 0135.6 67 105.1 105.1 0 0068 207.4c-16.9-.3-33.4-5.2-47.4-12.9v1.1c0 51 36.4 93.4 84 103.2-8.5 2.3-17.8 3.4-27.4 3.4-6.8 0-13.5-.3-20-1.8a106 106 0 0098.2 73.2A211 211 0 010 416.9 295.5 295.5 0 00161 464c193.2 0 298.8-160 298.8-298.7 0-4.6-.2-9.1-.4-13.6A209.4 209.4 0 00512 97.2z"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">User Experience Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="#fff"
                    style="background-color: #1e1f26"
                  >
                    <path
                      d="M24 7.6c0-.3 0-.5-.4-.6C12.2.2 12.4-.3 11.6 0 3 5.5.6 6.7.2 7.1c-.3.3-.2.8-.2 8.3 0 .9 7.7 5.5 11.5 8.4.4.3.8.2 1 0 11.2-8 11.5-7.6 11.5-8.4V7.6zm-1.5 6.5l-3.9-2.4L22.5 9zm-5.3-3.2l-4.5-2.7V2L22 7.6zM12 14.5l-3.9-2.7L12 9.5l3.9 2.3zm-.8-12.4v6L6.8 11 2.1 7.6zm-5.8 9.6l-3.9 2.4V9zm1.3 1l4.5 3.1v6l-9-6.3zm6 9.1v-6l4.6-3.1 4.6 2.8z"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">Product Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    style="background-color: #ffe80f"
                  >
                    <path d="M9.5 9.3l-.7 2h1.4z" />
                    <path
                      d="M12 1C5.4 1 0 5.2 0 10.4c0 3.4 2.2 6.3 5.6 8-1.3 4.4-1.3 4.4-1 4.6.2.1.5 0 5.3-3.4l2.1.2c6.6 0 12-4.2 12-9.4S18.6 1 12 1zM6 13c0 .4-.3.7-.6.7s-.7-.3-.7-.7V9H3.6c-.4 0-.7-.4-.7-.7s.3-.7.7-.7H7c.4 0 .7.3.7.7s-.3.6-.7.6h-1zm5.4.7c-.7 0-.6-.6-.9-1.2h-2c-.4.6-.3 1.2-1 1.2s-.8-.4-.6-1.1l1.6-4.3a1 1 0 011-.7c.4 0 .8.3.9.7 1 3.4 2.6 5.4 1 5.4zm4-.1h-2.2c-1.2 0-.5-1.6-.7-5.3 0-.4.3-.7.7-.7s.7.3.7.7v4h1.5c.3 0 .6.3.6.6 0 .4-.3.7-.6.7zm5.4-.5l-.3.4c-1 .7-1.6-1.4-2.6-2.3l-.2.3V13c0 .4-.3.7-.7.7a.7.7 0 01-.7-.7V8.3a.7.7 0 011.4 0v1.5c1.3-1 2-2.7 2.8-2 .8.9-.9 1.6-1.5 2.5 1.6 2.2 1.9 2.3 1.8 2.8z"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">UI / UX Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    style="background-color: #fe5b5f"
                  >
                    <path
                      d="M12 20.6c-1.4 1.5-3.1 3-5.1 3.3-2 .8-5.9-1.3-5.9-5 0-2.5 3.2-8 6.6-15.1C8.5 1.9 9.4 0 12 0c2.6 0 3.5 1.8 4.6 4C23 17 23 17.7 23 19c0 4.4-5.5 8-11 1.7zm9.5-1.7c0-2-6.4-14.4-6.5-14.5-.9-1.9-1.4-2.9-3-2.9-1.8 0-2.3 1.5-3.2 3.2C2.5 17.2 2.5 18 2.5 19c0 3 3.7 6 8.5.6-2-2.6-3-4.8-3-6.6 0-2.7 2-4.2 4-4.2s4 1.5 4 4.2c0 1.8-1 4-3 6.6 4.6 5.2 8.5 2.5 8.5-.6zM12 10.2c-1.2 0-2.5.9-2.5 2.7 0 1.4.9 3.3 2.5 5.4 1.6-2.1 2.5-4 2.5-5.4 0-1.8-1.3-2.7-2.5-2.7z"
                      fill="#fff"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">UI Developer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    style="background-color: #5c6bc0"
                  >
                    <g fill="#fff">
                      <path
                        d="M3.6 21.2h14.2l-.6-2.2 5.8 5V2.5C23 1 21.8 0 20.4 0H3.6A2.6 2.6 0 001 2.5v16.2c0 1.4 1.2 2.5 2.6 2.5zM14 5.7zM6.5 7C8.3 5.6 10 5.7 10 5.7l.2.1c-2.3.6-3.3 1.6-3.3 1.6.1 0 4.6-2.7 10.1 0 0 0-1-1-3.1-1.5l.2-.2c.3 0 1.8 0 3.5 1.3 0 0 1.8 3.1 1.8 7 0 0-1.1 1.6-4 1.7l-.7-1a4 4 0 002.2-1.4c-3.2 2-6 1.7-9.3.3h-.1l-.4-.2s.6 1 2.2 1.4l-.8 1c-2.8 0-3.8-1.8-3.8-1.8 0-3.9 1.8-7 1.8-7z"
                      />
                      <path
                        d="M14.3 12.8c.7 0 1.3-.6 1.3-1.4 0-.7-.6-1.3-1.3-1.3a1.3 1.3 0 000 2.7zM9.7 12.8c.7 0 1.3-.6 1.3-1.4 0-.7-.6-1.3-1.3-1.3a1.3 1.3 0 000 2.7z"
                      />
                    </g>
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">User Interface Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="#fff"
                    style="background-color: #ea4c88"
                  >
                    <path
                      d="M16.4 23.2C28.6 18.2 25.2 0 12 0a12 12 0 104.4 23.2zM5.3 20c.8-1.5 3.6-5.5 8.3-7 1 2.6 1.7 5.5 1.7 8.8-3.5 1.2-7.3.4-10-1.8zm11.5 1.2a27 27 0 00-1.7-8.4c2-.4 4.5-.2 7.2 1-.6 3.2-2.6 6-5.5 7.4zm5.7-9c-3-1.1-5.7-1.3-8-.8a28 28 0 00-1.1-2.3 20 20 0 006.5-4c1.7 1.9 2.7 4.3 2.6 7zM18.9 4c-.9.8-2.9 2.4-6.3 3.8A28 28 0 008 2.3C11.6.8 15.8 1.4 19 4zM6.6 3c.8.7 2.7 2.5 4.5 5.3a33 33 0 01-9.4 1.5c.6-3 2.4-5.4 4.9-6.9zm-5 8.3c4.2-.1 7.6-.8 10.3-1.7l1.1 2.1A17.4 17.4 0 004.2 19c-1.8-2-2.8-4.7-2.7-7.6z"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">UI / UX Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
              <div class="job-card">
                <div class="job-card-header">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                      d="M113.5 309.4L95.6 376l-65 1.4A254.9 254.9 0 010 256c0-42.5 10.3-82.5 28.6-117.7l58 10.6 25.4 57.6a152.2 152.2 0 001.5 103z"
                      fill="#fbbb00"
                    />
                    <path
                      d="M507.5 208.2a256.3 256.3 0 01-91.2 247.4l-73-3.7-10.4-64.5c29.9-17.6 53.3-45 65.6-78H261.6V208.3h246z"
                      fill="#518ef8"
                    />
                    <path
                      d="M416.3 455.6a256 256 0 01-385.8-78.3l83-67.9a152.2 152.2 0 00219.4 78l83.4 68.2z"
                      fill="#28b446"
                    />
                    <path
                      d="M419.4 59l-83 67.8A152.3 152.3 0 00112 206.5l-83.4-68.2a256 256 0 01390.8-79.4z"
                      fill="#f14336"
                    />
                  </svg>
                  <div class="menu-dot"></div>
                </div>
                <div class="job-card-title">UX Designer</div>
                <div class="job-card-subtitle">
                  The User Experience Designer position exists to create
                  compelling and digital user experience through excellent
                  design...
                </div>
                <div class="job-detail-buttons">
                  <button class="search-buttons detail-button">
                    Full Time
                  </button>
                  <button class="search-buttons detail-button">
                    Min. 1 Year
                  </button>
                  <button class="search-buttons detail-button">
                    Senior Level
                  </button>
                </div>
                <div class="job-card-buttons">
                  <button class="search-buttons card-buttons">Apply Now</button>
                  <button class="search-buttons card-buttons-msg">
                    Messages
                  </button>
                </div>
              </div>
            </div>
            <div class="job-overview">
              <div class="job-overview-cards">
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        viewBox="0 -13 512 512"
                        xmlns="http://www.w3.org/2000/svg"
                        style="background-color: #2e2882"
                      >
                        <g fill="#feb0a5">
                          <path
                            d="M256 92.5l127.7 91.6L512 92 383.7 0 256 91.5 128.3 0 0 92l128.3 92zm0 0M256 275.9l-127.7-91.5L0 276.4l128.3 92L256 277l127.7 91.5 128.3-92-128.3-92zm0 0"
                          />
                          <path
                            d="M127.7 394.1l128.4 92 128.3-92-128.3-92zm0 0"
                          />
                        </g>
                        <path
                          d="M512 92L383.7 0 256 91.5v1l127.7 91.6zm0 0M512 276.4l-128.3-92L256 275.9v1l127.7 91.5zm0 0M256 486.1l128.4-92-128.3-92zm0 0"
                          fill="#feb0a5"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">UI / UX Designer</div>
                        <div class="job-card-subtitle">
                          2972 Westheimer Rd. Santa Ana.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 32 32"
                        style="background-color: #f76754"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M0 .5h4.2v23H0z"
                          fill="#042b48"
                          data-original="#212121"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M15.4.5a8.6 8.6 0 100 17.2 8.6 8.6 0 000-17.2z"
                          fill="#fefefe"
                          data-original="#f4511e"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">Sr. Product Designer</div>
                        <div class="job-card-subtitle">
                          1901 Thornridge Cir.Shiloh, Hawaii.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                        fill="#fff"
                        style="background-color: #55acee"
                      >
                        <path
                          d="M512 97.2c-19 8.4-39.3 14-60.5 16.6 21.8-13 38.4-33.4 46.2-58a209.8 209.8 0 01-66.6 25.4A105 105 0 00249.5 153c0 8.3.8 16.3 2.5 24A297.1 297.1 0 0135.6 67 105.1 105.1 0 0068 207.4c-16.9-.3-33.4-5.2-47.4-12.9v1.1c0 51 36.4 93.4 84 103.2-8.5 2.3-17.8 3.4-27.4 3.4-6.8 0-13.5-.3-20-1.8a106 106 0 0098.2 73.2A211 211 0 010 416.9 295.5 295.5 0 00161 464c193.2 0 298.8-160 298.8-298.7 0-4.6-.2-9.1-.4-13.6A209.4 209.4 0 00512 97.2z"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">
                          User Experience Designer
                        </div>
                        <div class="job-card-subtitle">
                          414 Parker Rd. Allentown, New york
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="#fff"
                        style="background-color: #1e1f26"
                      >
                        <path
                          d="M24 7.6c0-.3 0-.5-.4-.6C12.2.2 12.4-.3 11.6 0 3 5.5.6 6.7.2 7.1c-.3.3-.2.8-.2 8.3 0 .9 7.7 5.5 11.5 8.4.4.3.8.2 1 0 11.2-8 11.5-7.6 11.5-8.4V7.6zm-1.5 6.5l-3.9-2.4L22.5 9zm-5.3-3.2l-4.5-2.7V2L22 7.6zM12 14.5l-3.9-2.7L12 9.5l3.9 2.3zm-.8-12.4v6L6.8 11 2.1 7.6zm-5.8 9.6l-3.9 2.4V9zm1.3 1l4.5 3.1v6l-9-6.3zm6 9.1v-6l4.6-3.1 4.6 2.8z"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">Product Designer</div>
                        <div class="job-card-subtitle">
                          4517 Washington Ave. Syracuse.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        style="background-color: #ffe80f"
                      >
                        <path d="M9.5 9.3l-.7 2h1.4z" />
                        <path
                          d="M12 1C5.4 1 0 5.2 0 10.4c0 3.4 2.2 6.3 5.6 8-1.3 4.4-1.3 4.4-1 4.6.2.1.5 0 5.3-3.4l2.1.2c6.6 0 12-4.2 12-9.4S18.6 1 12 1zM6 13c0 .4-.3.7-.6.7s-.7-.3-.7-.7V9H3.6c-.4 0-.7-.4-.7-.7s.3-.7.7-.7H7c.4 0 .7.3.7.7s-.3.6-.7.6h-1zm5.4.7c-.7 0-.6-.6-.9-1.2h-2c-.4.6-.3 1.2-1 1.2s-.8-.4-.6-1.1l1.6-4.3a1 1 0 011-.7c.4 0 .8.3.9.7 1 3.4 2.6 5.4 1 5.4zm4-.1h-2.2c-1.2 0-.5-1.6-.7-5.3 0-.4.3-.7.7-.7s.7.3.7.7v4h1.5c.3 0 .6.3.6.6 0 .4-.3.7-.6.7zm5.4-.5l-.3.4c-1 .7-1.6-1.4-2.6-2.3l-.2.3V13c0 .4-.3.7-.7.7a.7.7 0 01-.7-.7V8.3a.7.7 0 011.4 0v1.5c1.3-1 2-2.7 2.8-2 .8.9-.9 1.6-1.5 2.5 1.6 2.2 1.9 2.3 1.8 2.8z"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">UI / UX Designer</div>
                        <div class="job-card-subtitle">
                          2711 Ash Dr. San Jose, South Dark.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        style="background-color: #fe5b5f"
                      >
                        <path
                          d="M12 20.6c-1.4 1.5-3.1 3-5.1 3.3-2 .8-5.9-1.3-5.9-5 0-2.5 3.2-8 6.6-15.1C8.5 1.9 9.4 0 12 0c2.6 0 3.5 1.8 4.6 4C23 17 23 17.7 23 19c0 4.4-5.5 8-11 1.7zm9.5-1.7c0-2-6.4-14.4-6.5-14.5-.9-1.9-1.4-2.9-3-2.9-1.8 0-2.3 1.5-3.2 3.2C2.5 17.2 2.5 18 2.5 19c0 3 3.7 6 8.5.6-2-2.6-3-4.8-3-6.6 0-2.7 2-4.2 4-4.2s4 1.5 4 4.2c0 1.8-1 4-3 6.6 4.6 5.2 8.5 2.5 8.5-.6zM12 10.2c-1.2 0-2.5.9-2.5 2.7 0 1.4.9 3.3 2.5 5.4 1.6-2.1 2.5-4 2.5-5.4 0-1.8-1.3-2.7-2.5-2.7z"
                          fill="#fff"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">UI Developer</div>
                        <div class="job-card-subtitle">
                          1725 Preston Rd. Inglewood.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        style="background-color: #5c6bc0"
                      >
                        <g fill="#fff">
                          <path
                            d="M3.6 21.2h14.2l-.6-2.2 5.8 5V2.5C23 1 21.8 0 20.4 0H3.6A2.6 2.6 0 001 2.5v16.2c0 1.4 1.2 2.5 2.6 2.5zM14 5.7zM6.5 7C8.3 5.6 10 5.7 10 5.7l.2.1c-2.3.6-3.3 1.6-3.3 1.6.1 0 4.6-2.7 10.1 0 0 0-1-1-3.1-1.5l.2-.2c.3 0 1.8 0 3.5 1.3 0 0 1.8 3.1 1.8 7 0 0-1.1 1.6-4 1.7l-.7-1a4 4 0 002.2-1.4c-3.2 2-6 1.7-9.3.3h-.1l-.4-.2s.6 1 2.2 1.4l-.8 1c-2.8 0-3.8-1.8-3.8-1.8 0-3.9 1.8-7 1.8-7z"
                          />
                          <path
                            d="M14.3 12.8c.7 0 1.3-.6 1.3-1.4 0-.7-.6-1.3-1.3-1.3a1.3 1.3 0 000 2.7zM9.7 12.8c.7 0 1.3-.6 1.3-1.4 0-.7-.6-1.3-1.3-1.3a1.3 1.3 0 000 2.7z"
                          />
                        </g>
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">
                          User Interface Designer
                        </div>
                        <div class="job-card-subtitle">
                          2972 Westheimer Rd. Santa Ana.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="#fff"
                        style="background-color: #ea4c88"
                      >
                        <path
                          d="M16.4 23.2C28.6 18.2 25.2 0 12 0a12 12 0 104.4 23.2zM5.3 20c.8-1.5 3.6-5.5 8.3-7 1 2.6 1.7 5.5 1.7 8.8-3.5 1.2-7.3.4-10-1.8zm11.5 1.2a27 27 0 00-1.7-8.4c2-.4 4.5-.2 7.2 1-.6 3.2-2.6 6-5.5 7.4zm5.7-9c-3-1.1-5.7-1.3-8-.8a28 28 0 00-1.1-2.3 20 20 0 006.5-4c1.7 1.9 2.7 4.3 2.6 7zM18.9 4c-.9.8-2.9 2.4-6.3 3.8A28 28 0 008 2.3C11.6.8 15.8 1.4 19 4zM6.6 3c.8.7 2.7 2.5 4.5 5.3a33 33 0 01-9.4 1.5c.6-3 2.4-5.4 4.9-6.9zm-5 8.3c4.2-.1 7.6-.8 10.3-1.7l1.1 2.1A17.4 17.4 0 004.2 19c-1.8-2-2.8-4.7-2.7-7.6z"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">UI / UX Designer</div>
                        <div class="job-card-subtitle">
                          1976 Thornide Joshua. Andr Maria.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
                <div class="job-overview-card">
                  <div class="job-card overview-card">
                    <div class="overview-wrapper">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                      >
                        <path
                          d="M113.5 309.4L95.6 376l-65 1.4A254.9 254.9 0 010 256c0-42.5 10.3-82.5 28.6-117.7l58 10.6 25.4 57.6a152.2 152.2 0 001.5 103z"
                          fill="#fbbb00"
                        />
                        <path
                          d="M507.5 208.2a256.3 256.3 0 01-91.2 247.4l-73-3.7-10.4-64.5c29.9-17.6 53.3-45 65.6-78H261.6V208.3h246z"
                          fill="#518ef8"
                        />
                        <path
                          d="M416.3 455.6a256 256 0 01-385.8-78.3l83-67.9a152.2 152.2 0 00219.4 78l83.4 68.2z"
                          fill="#28b446"
                        />
                        <path
                          d="M419.4 59l-83 67.8A152.3 152.3 0 00112 206.5l-83.4-68.2a256 256 0 01390.8-79.4z"
                          fill="#f14336"
                        />
                      </svg>
                      <div class="overview-detail">
                        <div class="job-card-title">UX Designer</div>
                        <div class="job-card-subtitle">
                          2972 Westheimer Rd. Santa Ana.
                        </div>
                      </div>
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                    </div>
                    <div class="job-overview-buttons">
                      <div class="search-buttons time-button">Full Time</div>
                      <div class="search-buttons level-button">
                        Senior Level
                      </div>
                      <div class="job-stat">New</div>
                      <div class="job-day">4d</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-explain">
                <img class="job-bg" alt="" />
                <div class="job-logos">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    style="background-color: #f76754"
                  >
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M0 .5h4.2v23H0z"
                      fill="#042b48"
                      data-original="#212121"
                    ></path>
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M15.4.5a8.6 8.6 0 100 17.2 8.6 8.6 0 000-17.2z"
                      fill="#fefefe"
                      data-original="#f4511e"
                    ></path>
                  </svg>
                </div>
                <div class="job-explain-content">
                  <div class="job-title-wrapper">
                    <div class="job-card-title">UI /UX Designer</div>
                    <div class="job-action">
                      <svg
                        class="heart"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-heart"
                      >
                        <path
                          d="M20.8 4.6a5.5 5.5 0 00-7.7 0l-1.1 1-1-1a5.5 5.5 0 00-7.8 7.8l1 1 7.8 7.8 7.8-7.7 1-1.1a5.5 5.5 0 000-7.8z"
                        />
                      </svg>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-share-2"
                      >
                        <circle cx="18" cy="5" r="3" />
                        <circle cx="6" cy="12" r="3" />
                        <circle cx="18" cy="19" r="3" />
                        <path d="M8.6 13.5l6.8 4M15.4 6.5l-6.8 4" />
                      </svg>
                    </div>
                  </div>
                  <div class="job-subtitle-wrapper">
                    <div class="company-name">
                      Patreon
                      <span class="comp-location">Londontowne, MD.</span>
                    </div>
                    <div class="posted">
                      Posted 8 days ago<span class="app-number"
                        >98 Application</span
                      >
                    </div>
                  </div>
                  <div class="explain-bar">
                    <div class="explain-contents">
                      <div class="explain-title">Experience</div>
                      <div class="explain-subtitle">Minimum 1 Year</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Work Level</div>
                      <div class="explain-subtitle">Senior level</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Employee Type</div>
                      <div class="explain-subtitle">Full Time Jobs</div>
                    </div>
                    <div class="explain-contents">
                      <div class="explain-title">Offer Salary</div>
                      <div class="explain-subtitle">$2150.0 / Month</div>
                    </div>
                  </div>
                  <div class="overview-text">
                    <div class="overview-text-header">Overview</div>
                    <div class="overview-text-subheader">
                      We believe that design (and you) will be critical to the
                      company's success. You will work with our founders and our
                      early customers to help define and build our product
                      functionality, while maintaining the quality bar that
                      customers have come to expect from modern SaaS
                      applications. You have a strong background in product
                      design with a quantitavely anf qualitatively analytical
                      mindset. You will also have the opportunity to craft our
                      overall product and visual identity and should be
                      comfortable to flex into working.
                    </div>
                  </div>
                  <div class="overview-text">
                    <div class="overview-text-header">Job Description</div>
                    <div class="overview-text-item">
                      3+ years working as a product designer.
                    </div>
                    <div class="overview-text-item">
                      A portfolio that highlights your approach to problem
                      solving, as well as you skills in UI.
                    </div>
                    <div class="overview-text-item">
                      Experience conducting research and building out smooth
                      flows.
                    </div>
                    <div class="overview-text-item">
                      Excellent communication skills with a well-defined design
                      process.
                    </div>
                    <div class="overview-text-item">
                      Familiarity with design tools like Sketch and Figma
                    </div>
                    <div class="overview-text-item">
                      Up-level our overall design and bring consistency to
                      end-user facing properties
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script defer src="./assets/js/module/showJobs.js"></script>
  </body>
</html>
