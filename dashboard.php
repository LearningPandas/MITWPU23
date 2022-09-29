<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="shortcut icon" href="../favcon.svg " type="image/svg+xml">
  <link rel="stylesheet" href="./css/dashboardstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />

</head>

<body>
  <header class="header" data-header>
    <div class="container">
      <h1>
        <a href="#" class="logo">Dashboard</a>
      </h1>
      <button class="menu-toggle-btn icon-box" data-menu-toggle-btn aria-label="Toggle Menu">
        <span class="material-symbols-rounded  icon">menu</span>
      </button>
      <nav class="navbar">
        <div class="container">
          <ul class="navbar-list">
            <li>
              <a href="#" class="navbar-link active icon-box">
                <span class="material-symbols-rounded  icon">grid_view</span>
                <span>Home</span>
              </a>
            </li>
            <li>
              <a href="#" class="navbar-link icon-box">
                <span class="material-symbols-rounded  icon">folder</span>
                <span>Projects</span>
              </a>
            </li>

            <li>
              <a href="#tasks" class="navbar-link icon-box">
                <span class="material-symbols-rounded  icon">list</span>
                <span>Tasks</span>
              </a>
            </li>

            <li>
              <a href="#" class="navbar-link icon-box">
                <span class="material-symbols-rounded  icon">bar_chart</span>
                <span>Reports</span>
              </a>
            </li>
          </ul>
          <ul class="user-action-list">
            <li>
              <a href="#" class="notification icon-box">
                <span class="material-symbols-rounded  icon">notifications</span>
              </a>
            </li>
            <li>
              <a href="#" class="header-profile">
                
                <div>
                  <p class="profile-title">
                    <?php
                         echo ("welcome ")
                    ?>
                  </p>
                  <p class="profile-subtitle">Admin</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <article class="container article">
      <h2 class="h2 article-title">Hi</h2>
      <p class="article-subtitle">Welcome to Learning Pandas</p>
      <section class="home">

        <div class="card profile-card">

          <button class="card-menu-btn icon-box" aria-label="More" data-menu-btn>
            <span class="material-symbols-rounded  icon">more_horiz</span>
          </button>

          <ul class="ctx-menu">

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">edit</span>

                <span class="ctx-menu-text">Edit</span>
              </button>
            </li>

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">cached</span>

                <span class="ctx-menu-text">Refresh</span>
              </button>
            </li>

            <li class="divider"></li>

            <li class="ctx-item">
              <button class="ctx-menu-btn red icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">delete</span>

                <span class="ctx-menu-text">Log Out</span>
              </button>
            </li>

          </ul>

          <div class="profile-card-wrapper">

            <figure class="card-avatar">
              <img src="/images/aboutus/Abby1.jpg" alt="Abby" width="48" height="48">
            </figure>

            <div>
              <p class="card-title">Abby</p>
              <p class="card-subtitle">BCA Student</p>
            </div>
          </div>

          <ul class="contact-list">

            <li>
              <a href="mailto:abbyanil15@gmail.com" class="contact-link icon-box">
                <span class="material-symbols-rounded  icon">mail</span>

                <p class="text">abbyanil15@gmail.com</p>
              </a>
            </li>


          </ul>

          <div class="divider card-divider"></div>

          <ul class="progress-list">

            <li class="progress-item">

              <div class="progress-label">
                <p class="progress-title">Course Completion</p>

                <data class="progress-data" value="85">85%</data>
              </div>

              <div class="progress-bar">
                <div class="progress" style="--width: 85%; --bg: var(--blue-ryb);"></div>
              </div>

            </li>

            <li class="progress-item">

              <div class="progress-label">
                <p class="progress-title">Overall Rating</p>

                <data class="progress-data" value="9.5">9.5</data>
              </div>

              <div class="progress-bar">
                <div class="progress" style="--width: 95%; --bg: var(--coral);"></div>
              </div>

            </li>

          </ul>

        </div>

        <div class="card-wrapper">

          <div class="card task-card">

            <div class="card-icon icon-box green">
              <span class="material-symbols-rounded  icon">task_alt</span>
            </div>

            <div>
              <data class="card-data" value="21">19</data>

              <p class="card-text">Projects Completed</p>
            </div>

          </div>

          <div class="card task-card">

            <div class="card-icon icon-box blue">
              <span class="material-symbols-rounded  icon">drive_file_rename_outline</span>
            </div>

            <div>
              <data class="card-data" value="21">3</data>

              <p class="card-text">Certifications Recieved</p>
            </div>

          </div>

        </div>

        <div class="card revenue-card">

          <button class="card-menu-btn icon-box" aria-label="More" data-menu-btn>
            <span class="material-symbols-rounded  icon">more_horiz</span>
          </button>

          <ul class="ctx-menu">

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">edit</span>

                <span class="ctx-menu-text">Edit</span>
              </button>
            </li>

            <li class="ctx-item">
              <button class="ctx-menu-btn icon-box">
                <span class="material-symbols-rounded  icon" aria-hidden="true">cached</span>

                <span class="ctx-menu-text">Refresh</span>
              </button>
            </li>

          </ul>

          <p class="card-title">Progress</p>

          <data class="card-price" value="2100">33 Solved</data>

          <p class="card-text">Last Week</p>

          <div class="divider card-divider"></div>

          <ul class="revenue-list">

            <li class="revenue-item icon-box">

              <span class="material-symbols-rounded  icon  green">trending_up</span>

              <div>
                <data class="revenue-item-data" value="15">15%</data>

                <p class="revenue-item-text">Prev Week</p>
              </div>

            </li>

            <li class="revenue-item icon-box">

              <span class="material-symbols-rounded  icon  red">trending_down</span>

              <div>
                <data class="revenue-item-data" value="5">5%</data>

                <p class="revenue-item-text">Prev Month</p>
              </div>

            </li>

          </ul>

        </div>

      </section>




      <!-- 
        - #PROJECTS
      -->

      <section class="projects">

        <div class="section-title-wrapper">
          <h2 class="section-title">Recent Courses</h2>

          <button class="btn btn-link icon-box">
            <span>View All</span>

            <span class="material-symbols-rounded  icon" aria-hidden="true">arrow_forward</span>
          </button>
        </div>

        <ul class="project-list">

          <li class="project-item">
            <div class="card project-card">

              <button class="card-menu-btn icon-box" aria-label="More" data-menu-btn>
                <span class="material-symbols-rounded  icon">more_horiz</span>
              </button>

              <ul class="ctx-menu">

                <li class="ctx-item">
                  <button class="ctx-menu-btn icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">visibility</span>

                    <span class="ctx-menu-text">View</span>
                  </button>
                </li>

                <li class="ctx-item">
                  <button class="ctx-menu-btn icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">edit</span>

                    <span class="ctx-menu-text">Edit</span>
                  </button>
                </li>

                <li class="divider"></li>

                <li class="ctx-item">
                  <button class="ctx-menu-btn red icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">delete</span>

                    <span class="ctx-menu-text">Delete</span>
                  </button>
                </li>

              </ul>

              <time class="card-date" datetime="2022-04-09">Apr 20, 2022</time>

              <h3 class="card-title">
                <a href="dontfearweb.php">Dont Fear the Website</a>
              </h3>

              <div class="card-badge blue">Web Design</div>

              <p class="card-text">
                CSS, HTML, PHP and more web design techniques...
              </p>

              <div class="card-progress-box">

                <div class="progress-label">
                  <span class="progress-title">Progress</span>

                  <data class="progress-data" value="75">75%</data>
                </div>

                <div class="progress-bar">
                  <div class="progress" style="--width: 75%; --bg: var(--emerald);"></div>
                </div>

              </div>

              <ul class="card-avatar-list">

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="/images/aboutus/Abby1.jpg" alt="Abby" width="32" height="32">
                  </a>
                </li>

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="/images/aboutus/Vansh1.jpeg" alt="Vansh" width="32" height="32">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="project-item">
            <div class="card project-card">

              <button class="card-menu-btn icon-box" aria-label="More" data-menu-btn>
                <span class="material-symbols-rounded  icon">more_horiz</span>
              </button>

              <ul class="ctx-menu">

                <li class="ctx-item">
                  <button class="ctx-menu-btn icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">visibility</span>

                    <span class="ctx-menu-text">View</span>
                  </button>
                </li>

                <li class="ctx-item">
                  <button class="ctx-menu-btn icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">edit</span>

                    <span class="ctx-menu-text">Edit</span>
                  </button>
                </li>

                <li class="divider"></li>

                <li class="ctx-item">
                  <button class="ctx-menu-btn red icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">delete</span>

                    <span class="ctx-menu-text">Delete</span>
                  </button>
                </li>

              </ul>

              <time class="card-date" datetime="2022-04-09">May 12, 2022</time>

              <h3 class="card-title">
                <a href="#">CEH</a>
              </h3>

              <div class="card-badge orange">CyberSecurity</div>

              <p class="card-text">
                Session Hijacking, Hacking Web Servers and Apps, Hacking Mobile Devices...
              </p>

              <div class="card-progress-box">

                <div class="progress-label">
                  <span class="progress-title">Progress</span>

                  <data class="progress-data" value="50">50%</data>
                </div>

                <div class="progress-bar">
                  <div class="progress" style="--width: 50%; --bg: var(--imperial-red);"></div>
                </div>

              </div>

              <ul class="card-avatar-list">

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="/images/aboutus/Abby1.jpg" alt="Abby" width="32" height="32">
                  </a>
                </li>

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="/images/aboutus/Vansh1.jpeg" alt="Vansh" width="32" height="32">
                  </a>
                </li>

              </ul>

            </div>
          </li>

          <li class="project-item">
            <div class="card project-card">

              <button class="card-menu-btn icon-box" aria-label="More" data-menu-btn>
                <span class="material-symbols-rounded  icon">more_horiz</span>
              </button>

              <ul class="ctx-menu">

                <li class="ctx-item">
                  <button class="ctx-menu-btn icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">visibility</span>

                    <span class="ctx-menu-text">View</span>
                  </button>
                </li>

                <li class="ctx-item">
                  <button class="ctx-menu-btn icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">edit</span>

                    <span class="ctx-menu-text">Edit</span>
                  </button>
                </li>

                <li class="divider"></li>

                <li class="ctx-item">
                  <button class="ctx-menu-btn red icon-box">
                    <span class="material-symbols-rounded  icon" aria-hidden="true">delete</span>

                    <span class="ctx-menu-text">Delete</span>
                  </button>
                </li>

              </ul>

              <time class="card-date" datetime="2022-04-09">July 17, 2022</time>

              <h3 class="card-title">
                <a href="#">Hackers Exposed</a>
              </h3>

              <div class="card-badge cyan">CyberSecurity</div>

              <p class="card-text">
                Advanced Practical Skillset in defeating all Online Threats...
              </p>

              <div class="card-progress-box">

                <div class="progress-label">
                  <span class="progress-title">Progress</span>

                  <data class="progress-data" value="60">60%</data>
                </div>

                <div class="progress-bar">
                  <div class="progress" style="--width: 60%; --bg: var(--sunglow);"></div>
                </div>

              </div>

              <ul class="card-avatar-list">

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="/images/aboutus/Abby1.jpg" alt="Abby" width="32" height="32">
                  </a>
                </li>

                <li class="card-avatar-item">
                  <a href="#">
                    <img src="/images/aboutus/Vansh1.jpeg" alt="Vansh" width="32" height="32">
                  </a>
                </li>

              </ul>

            </div>
          </li>

        </ul>

      </section>




      <!-- 
        - #TASKS
      -->

      <section class="tasks">
        <div id="tasks">

        <div class="section-title-wrapper">
          <h2 class="section-title">Tasks</h2>

          <button class="btn btn-link icon-box">
            <span>View All</span>

            <span class="material-symbols-rounded  icon" aria-hidden="true">arrow_forward</span>
          </button>
        </div>

        <ul class="tasks-list">

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-1" id="task-1">

                <label for="task-1" class="task-label">
                  Submission of CEH Lab Work
                </label>
              </div>

              <div class="card-badge radius-pill">Tomorrow 12am</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>3/7</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="21">3</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge red">High</div>
                </li>

              </ul>

            </div>
          </li>

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-2" id="task-2">

                <label for="task-2" class="task-label">
                  PHP Assignment to submit
                </label>
              </div>

              <div class="card-badge cyan radius-pill">Today 10pm</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>2/5</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="5">5</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge orange">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-3" id="task-3">

                <label for="task-3" class="task-label">
                  Clear Practical Lab on Hackers Exposed
                </label>
              </div>

              <div class="card-badge radius-pill">Aug 03, 5pm</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>5/12</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="7">3</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge orange">Medium</div>
                </li>

              </ul>

            </div>
          </li>

          <li class="tasks-item">
            <div class="card task-card">

              <div class="card-input">
                <input type="checkbox" name="task-4" id="task-4">

                <label for="task-4" class="task-label">
                  Design A Website
                </label>
              </div>

              <div class="card-badge radius-pill">July 11, 3pm</div>

              <ul class="card-meta-list">

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">list</span>

                    <span>1/5</span>
                  </div>
                </li>

                <li>
                  <div class="meta-box icon-box">
                    <span class="material-symbols-rounded  icon">comment</span>

                    <data value="3">3</data>
                  </div>
                </li>

                <li>
                  <div class="card-badge green">Low</div>
                </li>

              </ul>

            </div>
          </li>

        </ul>
      </div>

        <button class="btn btn-primary" data-load-more>
          <span class="spiner"></span>

          <span>Load More</span>
        </button>

      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <ul class="footer-list">

        <li class="footer-item">
          <a href="#" class="footer-link">About</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Terms</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Developers</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Support</a>
        </li>

        <li class="footer-item">
          <a href="#" class="footer-link">Careers</a>
        </li>

      </ul>

      <p class="copyright">
        &copy; 2022 <a href="#" class="copyright-link">LearningPandas</a>. All Rights Reserved
      </p>

    </div>
  </footer>





  <!-- 
    - custom js link
  -->
  <script src="/js/dashboard.js"></script>

</body>

</html>