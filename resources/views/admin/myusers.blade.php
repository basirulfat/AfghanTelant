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
          <h1>Users</h1>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create a New User</h2>
            <br />
            <form id="postForm">
              <div>
                <label for="name">Name:</label>
                <input type="text" id="title" name="title" />
              </div>
              <div>
                <label for="author">Email:</label>
                <input type="text" id="author" name="author" />
              </div>
              <div>
                <label for="title">Password:</label>
                <input type="text" id="title" name="title" />
              </div>
              <div>
                <label for="author">Country:</label>
                <input type="text" id="author" name="author" />
              </div>
              <div>
                <label for="author">Img:</label>
                <!-- <input type="file" id="image" name="image" class="image-input"> -->
                <div class="file-upload">
                  <label for="image-upload" class="file-upload__label">
                    Upload Image
                  </label>
                  <input
                    id="image-upload"
                    class="file-upload__input"
                    type="file"
                    name="image-upload"
                  />
                </div>
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
            <h2>Table users</h2>
            <!-- <button onclick="onclick()">&#9776;</button> -->
            <button id="openModalButton">Create New User</button>
          </div>

          <table>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Country</th>
            <th>Action</th>

            <tr>
              <td>1</td>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>6</td>
              <td>Berglunds snabbköp</td>
              <td>Christina Berglund</td>
              <td>Sweden</td>
              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Centro comercial Moctezuma</td>
              <td>Francisco Chang</td>
              <td>Mexico</td>
              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ernst Handel</td>
              <td>Roland Mendel</td>
              <td>Austria</td>
              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>Island Trading</td>
              <td>Helen Bennett</td>
              <td>UK</td>
              <td>
                <a class="actionButton editButton" href="#">Edit</a>
                <a class="actionButton deleteButton" href="#">Delete</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <script src="Admin/js/main.js"></script>
    <script src="fontawesome-free-5.15.4-web/js/all.min.js"></script>
  </body>
</html>
