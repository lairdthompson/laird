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
              <h1>Contact Me</h1>
              <br><br>
                  <div class="tab_container"> 
<div class="top-border"></div>
<div class="pad-box">
 <article>  
<h3>I would love to hear from you, whatever the query, please use the form below.<br>
Alternatively, if you want to know a little more, please download my CV <a href="/downloads/cv-david-thompson.pfd">here</a>.</h3>
</article>
<br><br>
<form id="" method="" action="" novalidate=""> 
    <div class="col_12">
        <input id="name" name="name" type="text" placeholder="Name"/>
    </div>  
    <div class="col_12">
      <input id="surname" name="surname" type="text" placeholder="Surname"/>
    </div>  

       <div class="col_12">
      <input id="yourEmail" name="yourEmail" class="tb" type="text" placeholder="Your Email"/>
    </div>

    <div class="col_12">
      <input id="custContact" name="custContact" class="tb" type="text" placeholder="Your Contact Number"/>
    </div>

  
    <div class="col_12">
        <input id="companyName" name="companyName" type="text" placeholder="Company Name"/>
    </div>  

    <div class="col_12">
      <input id="messageSubject" name="messageSubject" class="tb" type="text" placeholder="Please enter a subject"/>
    </div>


    <div class="col_12">
      <textarea id="form" name="form" rows="4" cols="20" class="tb" placeholder="Enter your message"></textarea>
    </div>

    <div class="col_12">
      <input type="submit" value="Submit"/>
    </div>

  </form>
   </div>  
</div> <!-- .tab_container -->  
<div style="clear:both"></div> 
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