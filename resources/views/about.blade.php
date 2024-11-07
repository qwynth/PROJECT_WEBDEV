<!-- resources/views/about.blade.php -->
@extends('Components.Layout') <!-- This extends your Layout.blade.php -->
@section('title', 'About-My Website') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->

<!-- Service Section -->
<section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">LAB<span> ACTIVITIES</span></h1>
        <p>short description</p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <h2>LAB 1</h2>
          <p> First, I installed Laravel and its dependencies. Then, I created a Laravel project and set it up in a Git repository. After that, I configured the .env file with database connection details. I created three views: a homepage, an about page, and a content page, and set up routes for these views. Lastly, I documented the purpose of key directories and files in the Laravel project to ensure clarity and ease of maintenance.</p>
        </div>
        <div class="service-item">
          <h2>LAB 2 (by group)</h2>
          <p>We created a simple route in our Laravel project that returns a view for the homepage with a welcome message. We added routes for an "About Us" page, a redirect from /home to the homepage, and a "Contact Us" form. We also defined a route that accepts a username and displays a personalized welcome message. Then, we modified it to make the username optional, so it displays "Welcome, Guest!" if no username is provided, ensuring the username only accepts alphabetic characters.</p>
        </div>
        <div class="service-item">
          <h2>LAB 3 (by group)</h2>
          <p>First, we created a folder named "Components" in the resources/views directory and added a Layout.blade.php file with the basic HTML structure. Then, we created three new Blade files in the resources/views directory, each extending the layout and containing specific page content. Finally, we updated routes/web.php to define routes that return these views, ensuring everything was linked correctly and displayed the intended content.</p>
        </div>
        <div class="service-item">
          <h2>LAB 4 (by group)</h2>
          <p>We created middleware named CheckAge and LogRequests. CheckAge checks if a user is at least 18, redirecting to an "Access Denied" page if not. LogRequests logs request details to log.txt, and both are registered in app/Http/Kernel.php as global and route-specific middleware. We applied CheckAge to routes for the welcome and dashboard pages, testing with different ages. Then, we modified CheckAge to accept a minimum age parameter and created a new route enforcing an age restriction of 21 years.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Service Section -->

  <!-- Projects Section (1)-->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">LAB ACTIVITY<span> 1</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>welcome page</h1>
          </div>
          <div class="project-img">
            <img src="./img/lab1_wcpg.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>about page</h1>
        </div>
          <div class="project-img">
            <img src="./img/lab1_abt.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>about page</h1>       
        </div>
          <div class="project-img">
            <img src="./img/lab1_abt2.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>interest page</h1>       
        </div>
          <div class="project-img">
            <img src="./img/lab1_interest.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>contact page</h1>
            <br>        
          </div>
          <div class="project-img">
            <img src="./img/lab1_ctc.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section (1)-->


  <!-- Projects Section (2)-->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">LAB ACTIVITY<span> 2</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Age restriction page</h1>
          </div>
          <div class="project-img">
            <img src="./img/age_res.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Welcome page</h1>
          </div>
          <div class="project-img">
            <img src="./img/wc_pg.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>age restriction page</h1>
        </div>
          <div class="project-img">
            <img src="./img/age_req.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>access denied page</h1>
        </div>
          <div class="project-img">
            <img src="./img/access_deny.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>username login page</h1>
        </div>
          <div class="project-img">
            <img src="./img/user_pg.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>about page</h1>       
        </div>
          <div class="project-img">
            <img src="./img/abt.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>about page</h1>       
        </div>
          <div class="project-img">
            <img src="./img/abt2.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>contact information page</h1>       
        </div>
          <div class="project-img">
            <img src="./img/ctc.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>feedback page</h1>       
        </div>
          <div class="project-img">
            <img src="./img/feed.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
          <h1>comment section page</h1>
            <br>        
          </div>
          <div class="project-img">
            <img src="./img/comment sec.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section (2)-->


  
  @endsection