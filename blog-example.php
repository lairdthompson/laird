<!DOCTYPE html>
<html>

<?php
include 'head.php';
include 'nav.php'
?>


     <div class="wrapper grid">
    <div class="row">
      <div class="col_12">
        <div id="container" class="js-masonry col_9 " data-masonry-options='{ "columnWidth": 2, "itemSelector": ".item" }'>
        <div class="item minh">
          <div class="top-border"></div>
           <div class="item-container2">
              <a href="blog-example.php"><h1>Blog Title</h1></a>
              <a href=""><h2>Category</h2></a>
                  <a href="blog-example.php"><img src="/images/holding-blog.jpg"></a>
                  <div class="tags">
                    <ul>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
              <article><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p></article>    
            </div>
        </div>
      
        </div><!-- 9-->
        <div class="col_3 right-panel" >
          
          <div class="sidebar">
          <div class="top-bordersb"></div>
            <div class="sb-container">
            <h2>Categories</h2>
              <ul>
                <li><a href=""></a></li>
                <li><a href="">CSS</a></li>
                <li><a href="">JS</a></li>
                <li><a href="">Learning</a></li>
              </ul>
            </div>
          </div>

          <div class="sidebar">
          <div class="top-bordersb"></div>
            <div class="sb-container">
            <h2>Portfolio</h2>
            </div>
          </div>

        </div><!-- 3-->

      </div><!-- 12-->
      <div><!-- row-->
      </div><!--end grid wrapper-->
      <footer>
        <div class="foot-bg"></div>
        <div class="foot-bg2"></div>
        <section id="tab-b" class="tab-footer">
        </section>
         <button id="hide-b" class="footer-button"></button>
           <script type="text/javascript">
              $("#hide-b").click( function(){
              $("#tab-b").toggleClass("hide-bottom");
              });
            </script>
      </footer>
      </div><!--end content wrapper -->
      
    </div>


 </body>
</html>

