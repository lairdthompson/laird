<body id="gradient">
    <div  class="overlay">
      <div class="content-wrapper">
        <div class="head-bg"><p>USE THE ORANGE TRIANGLES TO NAVIGATE</p></div>
        <div class="head-bg2"></div>
        <a href="/" class="logo">LAIRDTHOMPSON.COM</a>
      <section id="tab-t" class="tab-main-nav">
        
        <ul>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="skills.php">SKILLS</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </section>
      <button id="hide-t" class="nav-button"></button>
          <script type="text/javascript">
            $("#hide-t").click( function(){
            $("#tab-t").toggleClass("hide-top");
            });
          </script>

      <section id="tab-l" class="tab-social">
        <ul>
          <li><a href="https://github.com/lairdthompson" target="_blank"><i class="fa fa-github"></i></a></li>
          <li><a href="https://twitter.com/djlthompson" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://linkedin.com/in/djlthompson/en" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href=""><i class="fa fa-google-plus" target="_blank"></i></a></li>
        </ul> 
      </section>
      <button id="hide-l" class="social-button"></button>
         <script type="text/javascript">
            $("#hide-l").click( function(){
            $("#tab-l").toggleClass("hide-left");
            });
          </script>
      
      <section id="tab-r" class="tab-categories">
      </section>