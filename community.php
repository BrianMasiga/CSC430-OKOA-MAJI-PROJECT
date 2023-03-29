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
        <a class="nav-link " href="index.php">
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
        <a class="nav-link collapsed" href="community.php">
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
    <div class="col-lg-12">
    
        <form id="post-form">
            <div class="row mb-3">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUsername" maxlength="10" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTitle" maxlength="15" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputMessage" class="col-sm-2 col-form-label">Message </label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" id="inputMessage" maxlength="250" required></textarea>
                </div>
            </div>
    
            <div class="row mb-3">
                <div class="col-sm-10 text-center mx-auto">
                    <button type="submit" class="btn btn-primary">POST TO COMMUNITY</button>
                </div>
            </div>
        </form>
    
        <div id="posts"></div>
    
        <script>
            const postForm = document.querySelector('#post-form');
            const usernameInput = document.querySelector('#inputUsername');
            const titleInput = document.querySelector('#inputTitle');
            const messageInput = document.querySelector('#inputMessage');
            const postsDiv = document.querySelector('#posts');
            let postId = 1;
    
            postForm.addEventListener('submit', (e) => {
                e.preventDefault();
    
                // Create a new post object with the user's input and current timestamp
                const post = {
                    id: postId,
                    username: usernameInput.value,
                    title: titleInput.value,
                    message: messageInput.value,
                    timestamp: new Date()
                };
                postId++;
    
                // Add the post to the DOM
                const postDiv = document.createElement('div');
                postDiv.classList.add('post');
                postDiv.innerHTML = `
                    <hr>
                    <p>Title: <b>${post.title}</b></p>
                    <h6 class="timestamp">Posted on: ${post.timestamp.toLocaleString()}</h6>
                    <h6 class="username">Author: ${post.username}</h6>
                    <p class="message">${post.message}</p>
                    <div class="actions">
                        <button class="btn btn-primary" onclick="editPost(${post.id})">Edit</button>
                        <button class="btn btn-danger" onclick="deletePost(${post.id})">Delete</button>
                    </div>
                    <hr>
                `;
                postsDiv.insertBefore(postDiv, postsDiv.firstChild);
    
                            // Reset the form
            postForm.reset();
        });

        function editPost(id) {
            const postDiv = document.querySelector(`#posts .post:nth-child(${id})`);
            const messageDiv = postDiv.querySelector('.message');
            const message = messageDiv.textContent.trim();

            const newMessage = prompt('Enter new message:', message);

            if (newMessage !== null && newMessage.trim() !== '') {
                messageDiv.textContent = newMessage.trim();
                const timestampDiv = postDiv.querySelector('.timestamp');
                timestampDiv.textContent = `Edited on: ${new Date().toLocaleString()}`;
            }
        }

        function deletePost(id) {
            const postDiv = document.querySelector(`#posts .post:nth-child(${id})`);
            postDiv.parentNode.removeChild(postDiv);
        }
    </script>
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