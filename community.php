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
    <div class="card-title text-center alert alert-primary" >SHARE YOUR THOUGHTS WITH THE COMMUNITY ON CONSERVATION!</div>

    <div class="card mt-4 mb-6">
    <div class="container mt-4 mb-4">
                      <form id="add-article-form" method="post">
                  <div class="form-group">
                    <label for="article-title" class ="card-title">TITLE OF YOUR ARTICLE </label>
                    <input type="text" class="form-control" id="article-title" name="article-title" required>
                  </div>
          
                  <div class="form-group">
                    <label class ="card-title" for="article-url">NAME</label>
                    <input type="text" class="form-control" id="article-url" name="article-url" required>
                  </div>
          
                  <div class="form-group">
                    <label for="article-content" class ="card-title">CONTENT OF THE ARTICLE</label>
                    <textarea class="form-control" id="article-content" name="article-content" rows="3" required></textarea>
                  </div>
          <br>
                  <button type="submit" class="btn btn-dark w-100">CONTRIBUTE</button>
                  
                </form>

                <br>
          <br>
              </div>
            </div>
          </div>
                </h5>
                <div class="alert alert-info text-center" role="alert">
User generated articles will appear below </div> 
                <div class="news" id="articles-container">                
                  <!-- Articles will be dynamically generated here -->
                  <?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query database for articles
$sql = "SELECT article_id, title, image_url, content, created_at FROM articles";
$result = $conn->query($sql);

// Generate HTML for each article
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<div class="article alert alert-dark">';
    echo '<h5 class="article-title"> <b>TITLE: ' . $row["title"] . '</b></h5>';
    echo '<h6 class="article-content">' . $row["content"] . '</h6>';   
    echo '<h6 class="article-url"> Author: ' . $row["image_url"] . '</h6>';
    echo '<h7 class="article-time-added"> <b> Added on: ' . $row["created_at"] . '</h7>';
    echo '<form action="delete-article.php" method="POST">';
    echo '<input type="hidden" name="article_id" value="' . $row["article_id"] .'">';
    echo '<br>';
    echo '<button type="submit" class="btn btn-danger delete-button">Delete Post</button>';
    echo '</form>';
    echo '</div> <hr>';
  }
  
} else {
  echo "No Articles have been created so far. You can be the first to create one! ";
}

// Close connection
$conn->close();
?>

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