<!DOCTYPE html>
<html lang="en">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OKOA MAJI APP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!--  Begin Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">      
            <span class="d-none d-md-block ps-2">#OKOAMAJI</span>
        </li>
      </ul>
    </nav>
  </header>
  <!-- End Header -->

  <!-- Begin SideNav -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="readings.php">
          <i class="bi bi-bar-chart"></i>
          <span>Readings</span>
        </a>
        </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="articles.php">
          <i class="bi bi-list"></i>
          <span>Articles</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="community.php">
          <i class="bi bi-people"></i>
          <span>Community</span>
        </a>
      <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </aside>
  <!-- End SideNav-->
  <main id="main" class="main">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active"><a href="community.html">Community</a></li>
            </ol>
        </nav>
    </div>
    <div class="card-title text-center alert alert-primary" >ENGAGE WITH THE COMMUNITY ON CONSERVATION!</div>

    <div class="card mt-4 mb-6">
    <div class="container mt-4 mb-4">
   
    <?php
// Define database connection constants
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin1234');
define('DB_NAME', 'okoamaji');

// Connect to the database
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Save a new post
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $sql = "INSERT INTO community_posts (username, title, message) VALUES ('$username', '$title', '$message')";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
    die(mysqli_error($conn));
  }
}

mysqli_close($conn);
?>

<form id="post-form">
  <div class="row mt-4 mb-3">
    <label for="inputUsername" class="col-lg-12 col-form-label">Username</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputUsername" maxlength="10" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputTitle" class="col-lg-12 col-form-label">Title</label>
    <div class="col-sm-12">
      <input type="text" class="form-control" id="inputTitle" maxlength="15" required>
    </div>
  </div>
  <div class="row mb-5">
    <label for="inputMessage" class="col-lg-12 col-form-label">Message </label>
    <div class="col-sm-12">
      <textarea class="form-control" style="height: 100px" id="inputMessage" maxlength="250" required></textarea>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-sm-10 text-center mx-auto">
      <button type="submit" class="btn btn-primary">POST TO COMMUNITY</button>
    </div>
  </div>
</form>

<table id="posts" class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Username</th>
      <th>Message</th>
      <th>Created At</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>

<script>
const postForm = document.querySelector('#post-form');
  const usernameInput = document.querySelector('#inputUsername');
  const titleInput = document.querySelector('#inputTitle');
  const messageInput = document.querySelector('#inputMessage');
  const postsTableBody = document.querySelector('#posts tbody');

  // Load posts from database on page load
  window.addEventListener('load', async () => {
    try {
      const response = await fetch('/get-posts.php');
      const posts = await response.json();
      displayPosts(posts);
    } catch (error) {
      console.error(error);
    }
  });

  postForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    try {
      // Create a new post object with the user's input and current timestamp
      const post = {
        username: usernameInput.value,
        title: titleInput.value,
        message: messageInput.value,
      };

      // Save the post to the database
      const response = await fetch('/add-post.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(post),
      });

      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }

      const savedPost = await response.json();

      // Add the post to the table
      addPostToTable(savedPost);

      // Reset the form
      postForm.reset();
    } catch (error) {
      console.error(error);
    }
  });

  function addPostToTable(post) {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${post.id}</td>
      <td>${post.title}</td>
      <td>${post.username}</td>
      <td>${post.message}</td>
      <td>${new Date(post.created_at).toLocaleString()}</td>
      <td>
        <button class="btn btn-primary" onclick="editPost(${post.id})">Edit</button>
        <button class="btn btn-danger" onclick="deletePost(${post.id})">Delete</button>
      </td>
    `;
    postsTableBody.appendChild(row);
  }

  async function editPost(id) {
    try {
      // Get the post from the database
      const response = await fetch(`/get-post.php?id=${id}`);
      const post = await response.json();

      // Prompt the user for the new message
      const newMessage = prompt('Enter new message:', post.message);

      if (newMessage !== null && newMessage.trim() !== '') {
        // Update the post in the database
        post.message = newMessage.trim();
        const updateResponse = await fetch(`/update-post.php?id=${id}`, {
          method: 'PUT',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(post),
        });

        if (!updateResponse.ok) {
          throw new Error(`HTTP error! status: ${updateResponse.status}`);
        }

        // Update the post in the table
        const row = document.querySelector(`#posts tr[data-post-id="${id}"]`);
        row.querySelector('td:nth-child(4)').textContent = newMessage.trim();
        row.querySelector('td:nth-child(5)').textContent = `Edited on: ${new Date().toLocaleString()}`;
      }
    } catch (error) {
      console.error(error);
    }
  }

  async function deletePost(id) {
  try {
    // Delete the post from the database
    const response = await fetch(`/delete-post.php?id=${id}`, {
      method: 'DELETE',
    });

    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }

    // Remove the post from the table
    const row = document.querySelector(`#posts tr[data-post-id="${id}"]`);
    row.remove();
  } catch (error) {
    console.error(error);
  }
}
</script>

</div>
</div>
    </section>

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>okoamajiapp</span></strong>. All Rights Reserved
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>