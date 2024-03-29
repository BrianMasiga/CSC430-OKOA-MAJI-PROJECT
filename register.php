<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CREATE AN OKOAMAJI ACCOUNT</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <style>
    body {
      background: linear-gradient(135deg, #9cd6d9, #f5f0e1, #f4a4ab);
      transition: background 0.5s ease-in-out;
    }

    body:hover {
      background: linear-gradient(135deg, #f4a4ab, #f5f0e1, #9cd6d9);
    }
  </style>
  <body>
    <main>
      <div class="container">
        <section
          class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div
                class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center"
              >
                <div class="d-flex justify-content-center py-4">
                  <a
                    href="index.php"
                    class="logo d-flex align-items-center w-auto"
                  >
                    <span class="d-none d-lg-block"><img src="assets/img/favicon.png" rel="icon"/></span>
                  </a>
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">
                        CREATE AN ACCOUNT
                      </h5>
                    </div>
                    <form
                      class="row g-3 needs-validation"
                      novalidate
                      action="registerdb.php"
                      method="post"
                    >
                      <div class="col-12">
                        <label for="yourName" class="form-label">First Name</label>
                        <input
                          type="text"
                          name="first_name"
                          class="form-control"
                          id="yourName"
                          required
                        />
                        <div class="invalid-feedback">Enter your First name!</div>
                      </div>

                      <div class="col-12">
                        <label for="yourEmail" class="form-label"
                          >Last Name</label
                        >
                        <input
                          type="text"
                          name="last_name"
                          class="form-control"
                          id="yourusername"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter a valid username!
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="yourEmail" class="form-label">Email</label>
                        <input
                          type="email"
                          name="email"
                          class="form-control"
                          id="yourEmail"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter a valid Email address!
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label"
                          >Password</label
                        >
                        <input
                          type="password"
                          name="password"
                          class="form-control"
                          id="yourPassword"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter your password!
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            name="terms"
                            type="checkbox"
                            value=""
                            id="acceptTerms"
                            required
                          />
                          <label class="form-check-label" for="acceptTerms"
                            >I agree and accept the
                            <a href="#">terms and conditions</a></label
                          >
                          <div class="invalid-feedback">
                            You must agree before creating an account.
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="submit">
                          Create Account
                        </button>
                    
                      </div>

                      <div class="col-12">
                        <p class="small mb-0">
                          Already have an account?
                          <a href="login.php">Log in</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
