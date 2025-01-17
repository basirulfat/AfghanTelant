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
      <!-- ========sidbar===== -->
      @include('Admin.admin_layout.sidbar')

      <div class="body">
        <!-- ======navbar========-->
        @include('Admin.admin_layout.nav')

        <div class="welcome-title">
          <h1>category</h1>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create a New category</h2>
            <br />
            <form id="postForm">
              <div>
                <label for="name">Name:</label>
                <input type="text" id="title" name="title" />
              </div>
              <br />
              <div>
                <label for="author">Country:</label>
                <input type="text" id="author" name="author" />
              </div>

              <br />
              <!-- <button type="button">Submit</button> -->
              <input class="btn-modal" type="submit" value="Submit" />
            </form>
          </div>
        </div>

        <!-- table -->
        <div class="table">
         <div class="tablescroll">
          <div class="head">
            <h2>Table category</h2>
            <!-- <button onclick="onclick()">&#9776;</button> -->
            <button id="openModalButton">Create New category</button>
          </div>

          <table>
            <th>id</th>
            <th>Name</th>
            <th>Content</th>

            <th>Action</th>

            <tr>
              <td>1</td>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>

              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Berglunds snabbköp</td>
              <td>Christina Berglund</td>

              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>

              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ernst Handel</td>
              <td>Roland Mendel</td>

              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Island Trading</td>
              <td>Helen Bennett</td>

              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
          </table>
        </div>
        </div>
      </div>
    </div>

    <script src="Admin/js/main.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
  </body>
</html>
