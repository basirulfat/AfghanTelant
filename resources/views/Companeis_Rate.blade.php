<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="./assets/css/companies_rate.css" />
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
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <title>@lang('msg.Rate0')</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
   @include('layouts.header')
    <!-- ============== rate section ============ -->

    <section id="small-navebar">
      <ul>
        <li><a href="{{url('Companeis_Rate.CompanyRate')}}">@lang('msg.Rate1')</a></li>
        <li><a href="{{url('Top_company')}}">@lang('msg.Rate2')</a></li>
      </ul>
    </section>
    <section class="companies-details">
      <div class="rate-details">
        <h2>@lang('msg.Rate3')</h2>
        <p>@lang('msg.Rate4')</p>
        <div class="small-companies">
          <button class="btn comp-btn">
            <i class="ri-message-2-line"></i>@lang('msg.Rate5')
          </button>
          <a href="{{url('Top_company')}}">@lang('msg.Rate6')</a>
        </div>
        <h5>@lang('msg.Rate7')</h5>
      </div>
      <div class="companies-img img"></div>
    </section>

    <section id="com-rate">
      <div class="search-bar">
        <div class="com-search">
          <i class="ri-search-line"></i>
          <input
            type="search"
            id="company-search"
            placeholder="Search Company Name..."
          />
        </div>
        <div class="com-type">
          <select name="" id="">
            <option value="">Industry</option>
          </select>
          <select name="" id="">
            <option value="">Company Size</option>
            <option value="">1-9 Employees</option>
            <option value="">10-49 Employees</option>
            <option value="">50-99 Employees</option>
            <option value="">100-499 Employees</option>
            <option value="">500 Employees or more</option>
          </select>
        </div>
      </div>
      <div class="sort-by">
        <ul>
          <p><i class="ri-bar-chart-2-fill"></i>@lang('msg.Rate8')</p>
          <li><a href="#" class="a">@lang('msg.Rate9')</a></li>
          <li><a href="#" class="a">@lang('msg.Rate10')</a></li>
          <li>@lang('msg.Rate11')<i class="ri-arrow-down-s-line dropdown__arrow"></i></li>
        </ul>
      </div>
   <!-- ===============carts part is started here =========================-->
      <div id="companies-cards-wrapper">
        <div class="companies-cards">

        @foreach($companies as $company)
          <div class="cards-wrap">
            <h3>{{$company->company_name}}</h3>
            <div id="logo-wrapper">
              <div class="img com-logo">
              <img src="{{ asset('storage/' . $company->image) }}" alt="Company Logo">
              </div>
              <div class="com-job-deatils">
                <span>3.7</span>
                <div class="card-stars">
                  <i class="ri-star-line"></i>
                  <i class="ri-star-line"></i>
                  <i class="ri-star-line"></i>
                  <i class="ri-star-line"></i>
                  <i class="ri-star-line"></i>
                </div>
                <div class="card-lin">
                  <a href="#">12 Jobs</a>
                  <a href="{{url('companydetails',$company->id)}}" class="a-border">@lang('msg.Rate12')</a>
                </div>
              </div>
            </div>
            <div class="card-icon">
             
              <p><i class="fa-solid fa-bag-shopping"></i> @lang('msg.Rate13')</p>
              <p><i class="fa-solid fa-user-group"></i>{{$company->company_size}}</p>
            </div>
          </div>
          @endforeach

         </div>

      </div>
          <!-------------------------------pagenation ------------------------------------>
          <div class="pagination-container">
              {{ $companies->links() }}
          </div>
          <!-------------------------------pagenation ------------------------------------>

      <!-- Rate your employer -->
      <div id="Rate-your-Employer">
        <div>
          <img
            src="./assets/images/company logo/friends-logo-template_23-2149505594.avif"
            alt="Picture"
          />
          <h5>Rate Your Employers</h5>
          <i class="ri-star-line"></i>
          <i class="ri-star-line"></i>
          <i class="ri-star-line"></i>
          <i class="ri-star-line"></i>
          <i class="ri-star-line"></i>
        </div>
      </div>

      <!-- ============Rating page==============  -->
      <div class="rate-wrapper hide">
        <div id="rating">
          <h3><i class="fa-solid fa-star"></i>Rate this company</h3>
          <button class="btn escape-btn"><i class="ri-close-line"></i></button>
        </div>
        <div id="rating-details">
          <div class="img rate-image"></div>
          <h4>
            To see the reviews of employees, you should add a work <br />
            experience.
          </h4>
          <p>Please, add a work experience to be able to write a review.</p>
        </div>
        <div class="work-experiance">
          <button type="button " class="btn Add-experiance">
            Add Worke Experience
          </button>
          <a href="#" class="not-experience"
            >I don't have any work experience</a
          >
        </div>
      </div>
      <div class="overlay hide"></div>
    </section>
    <div class="message_container"><a href="{{ url('/chat') }}"><i class="ri-message-2-fill  message"></i></a></div>
    <!--=============== FOOTER ===============-->
    @include('layouts.footer')
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <script defer src="./assets/js/module/companyies_Rate.js"></script>
    <script src="assets/js/pagination.js"></script>
  </body>
</html>
