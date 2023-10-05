<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Portofilo | Ngab Roger</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <!-- style css -->
    <link rel="stylesheet" href="style.css" />
    <!-- icon inport -->
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.min.css" />
    <link rel="shortcut icon" href="images/logo.png" />
  </head>

  <body>
    <?php include('navbar.php')?>
    <main>
      <!-- bagian hero section -->
      <section class="jumbotron text-center" id="Home">
        <img src="images/pp.png" alt="Roger" width="200" class="hovered-card rounded-circle img-thumbnail" />
        <h1 class="display-4">I'm <span class="auto-input"></span></h1>
        <p class="lead"><?php echo('Welcome To My Page')?></p>
        <svg class="jumbutron-gelombang" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#baff39"
            fill-opacity="1"
            d="M0,128L40,138.7C80,149,160,171,240,160C320,149,400,107,480,117.3C560,128,640,192,720,186.7C800,181,880,107,960,112C1040,117,1120,203,1200,208C1280,213,1360,139,1400,101.3L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- bagian hero section akhir -->
      <!-- Awal About -->
      <section id="about">
        <div class="container">
          <div class="row text-center mb-4 m-0">
            <div class="col">
              <h2><?php echo('About Me')?></h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            
            <div class="col-md-4"><?php echo('Jakarta State Polytechnic Student Department of Informatics Engineering Semester 2 and CCIT FTUI Software Engineering Semester 4th') ?></div>
            <div class="col-md-4"><?php echo('My daily do is sleeping, Coding, helping my mother , playing games') ?></div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#eae6e6"
            fill-opacity="1"
            d="M0,96L40,117.3C80,139,160,181,240,218.7C320,256,400,288,480,261.3C560,235,640,149,720,117.3C800,85,880,107,960,149.3C1040,192,1120,256,1200,266.7C1280,277,1360,235,1400,213.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- Akhir About -->

      <!-- Project Awal -->
     <?php include('project.php')?>
      <!-- Project Akhir -->

      
      <section id="skill">
        <div class="container-fluid">
          <div class="container">
            <div class="row text-center">
              <div class="col mb-3">
                <h2><?php echo('My Skill')?></h2>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-6 mt-3">
                <h4 class="mb-3 text-left"><?php echo('Java')?></h4>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-ba bg-success text-center" style="width: 75%"><?php echo('75%')?></div>
                </div>
              </div>
              <div class="col-md-6 mt-3">
                <h4 class="mb-3"><?php echo('JavaScript')?></h4>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-warning" style="width: 50%"><?php echo('50%')?></div>
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <h4 class="mb-3"><?php echo('Dart')?></h4>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-default" style="width: 65%"><?php echo('65%')?>/div>
                </div>
              </div>
              <div class="col-md-6 mt-4">
                <h4 class="mb-3"><?php echo('PHP')?></h4>
                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar bg-secondary" style="width: 25%"><?php echo('15%')?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#eae6e6"
            fill-opacity="1"
            d="M0,96L48,128C96,160,192,224,288,218.7C384,213,480,139,576,144C672,149,768,235,864,250.7C960,267,1056,213,1152,208C1248,203,1344,245,1392,266.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
          ></path>
        </svg>
      </section>
      <!-- Contact AWAL -->
      <section id="contact">
        <div class="container-fluid">
          <div class="container">
            <div class="row text-center">
              <div class="col mb-5">
                <h2><?php echo('My Contact')?></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 hovered-card">
                <div class="justify-content-center">
                  <div class="icon-service d-flex justify-content-center">
                    <i class="fa-solid fa-at display-5"></i>
                  </div>
                </div>
                <div class="mt-3 text-center text-dark">
                  <h4><?php echo('E-mail')?></h4>
                  <p><?php echo('roger.simanjuntak21@gmail.com')?></p>
                </div>
              </div>
              <div class="col-md-4 hovered-card">
                <div class="justify-content-center">
                  <div class="icon-service d-flex align-items-center justify-content-center">
                    <i class="fa-brands fa-whatsapp display-5"></i>
                  </div>
                </div>
                <div class="mt-3 text-center text-dark">
                  <h4><?php echo('WhatsApp')?></h4>
                  <p><?php echo('(+62) 85156295013')?></p>
                </div>
              </div>
              <div class="col-md-4 hovered-card">
                <div class="justify-content-center">
                  <div class="icon-service d-flex align-items-center justify-content-center">
                    <i class="fa-brands fa-linkedin-in display-5"></i>
                  </div>
                </div>
                <div class="mt-3 text-center text-dark">
                  <h4><?php echo('Linkedin')?></h4>
                  <p><?php echo('https://www.linkedin.com/in/roger-simanjuntak-488897174/')?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact AKHIR  -->
    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <script>
      let loader = document.getElementById("preloader");
      window.addEventListener("load", function () {
        loader.style.display = "none";
      });
    </script>
    <!-- script type text for animation -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      let typed = new Typed(".auto-input", {
        strings: ["Roger Simanjuntak", "Web Developer", "Software Engineering"],
        typeSpeed: 100,
        backkSpeed: 100,
        loop: true,
      });
    </script>
    <script>
      const alertPlaceholder = document.getElementById("liveAlertPlaceholder");

      const alert = (message, type) => {
        const wrapper = document.createElement("div");
        wrapper.innerHTML = [`<div class="alert alert-${type} alert-dismissible" role="alert">`, `   <div>${message}</div>`, '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>', "</div>"].join(
          ""
        );

        alertPlaceholder.append(wrapper);
      };

      const alertTriggers = document.querySelectorAll(".btn-404");
      alertTriggers.forEach((alertTrigger) => {
        alertTrigger.addEventListener("click", (event) => {
          event.preventDefault(); // Prevent the default button click behavior
          alertTrigger.disabled = true; // Disable the button
          const message = `Maaf untuk Demo Masih Belum ada`;
          alert(message, "danger");
        });
      });
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
