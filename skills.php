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
    <div class="item-container-page">
    <h1>Skills</h1>
    <br><br>
      <div class="tab_container"> 
        <div class="top-border"></div>
          <div class="pad-box">
            <article>  
              <h3>Here's a list of all the programs and langauges I have experience with.</h3>
            </article>
          </div>  
      </div> <!-- .tab_container -->  
    <div style="clear:both"></div> 
      <section class="skill-container">
        <div class="col_3 skill-img"><img src="/images/holding.jpg" alt=""/></div>
        <div class="col_9 skill-copy">
          <div class="rating"><i class="fa fa-star"></i></div>
          <div><h2>Program</h2><p>I am very good at this</p></div>
        </div>
        <div style="clear:both"></div> 
      </section>
      <section class="skill-container">
        <div class="col_3 skill-img"><img src="/images/holding.jpg" alt=""/></div>
        <div class="col_9 skill-copy">
          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
          <div><h2>Program</h2><p>I am very good at this</p></div>
        </div>
        <div style="clear:both"></div> 
      </section>
      <section class="skill-container">
        <div class="col_3 skill-img"><img src="/images/holding.jpg" alt=""/></div>
        <div class="col_9 skill-copy">
          <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
          <div><h2>Program</h2><p>I am very good at this</p></div>
        </div>
        <div style="clear:both"></div> 
      </section>
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