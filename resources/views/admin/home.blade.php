<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord</title>
    <link rel="stylesheet" href="Admin/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!--=============== REMIXICONS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="minet">
      <!-- HTML Code -->
     @include('Admin.admin_layout.sidbar')

      <div class="body">
        <!-- Title  Page-->
        @include('Admin.admin_layout.nav')

        <div class="welcome-title">
          <h1>Welcome in to Dashbord</h1>
        </div>

        <!-- Cards-->
        <div class="cards">
          <div class="card">
            <div class="icon">
              <i class="fas fa-users fa-3x"></i>
            </div>
            <div>
              <span>Users</span>
              <h1>950</h1>
              <p>Out ot 10</p>
            </div>
          </div>

          <!-- card 2 -->
          <div class="card">
            <div class="icon">
              <i class="fab fa-usps fa-3x"></i>
            </div>
            <div>
              <span>Posts</span>
              <h1>550</h1>
              <p>Out ot 10</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="card">
            <div class="icon">
              <i class="fas fa-bookmark fa-3x"></i>
            </div>
            <div>
              <span>Saves</span>
              <h1>350</h1>
              <p>Out ot 10</p>
            </div>
          </div>

          <!-- card 4 -->
          <div class="card">
            <div class="icon">
              <i class="fas fa-cart-arrow-down fa-3x"></i>
            </div>
            <div>
              <span>Down</span>
              <h1>950</h1>
              <p>Out ot 10</p>
            </div>
          </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create a New Post</h2>
            <br />
            <form id="postForm">
              <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" />
              </div>
              <div>
                <label for="author">Author:</label>
                <input type="text" id="author" name="author" />
              </div>
              <div>
                <label for="content">Content:</label>
                <textarea
                  id="content"
                  name="content"
                  cols="30"
                  rows="10"
                ></textarea
                ><br />
              </div>
              <br />
              <!-- <button type="button">Submit</button> -->
              <input class="btn-modal" type="submit" value="Submit" />
            </form>
          </div>
        </div>

        <!-- table -->
        <div class="table">
          <div class="head">
            <h2>Table Posts</h2>
            <!-- <button onclick="onclick()">&#9776;</button> -->
            <button id="openModalButton">Create New Post</button>
          </div>

          <table>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>

            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
            </tr>
            <tr>
              <td>Berglunds snabbköp</td>
              <td>Christina Berglund</td>
              <td>Sweden</td>
            </tr>
            <tr>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
            </tr>
            <tr>
              <td>Ernst Handel</td>
              <td>Roland Mendel</td>
              <td>Austria</td>
            </tr>
            <tr>
              <td>Island Trading</td>
              <td>Helen Bennett</td>
              <td>UK</td>
            </tr>
          </table>
        </div>

        <div class="table">
          <div class="head">
            <h2>Table Users</h2>
            <button onclick="onclick()">&#9776;</button>
            <!-- <button id="openModalButton">Create New User </button> -->
          </div>

          <table>
            <th>id</th>
            <th>Name</th>
            <th>old</th>
            <th>Country</th>

            <tr>
              <td>1</td>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Berglunds snabbköp</td>
              <td>Christina Berglund</td>
              <td>Sweden</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <script src="Admin/js/main.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
  </body>
</html>
