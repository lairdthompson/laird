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
              <h1>About</h1>
                  <a href="blog-example.php"><img src="/images/holding-blog.jpg"></a>
                   <ul class="tabs"> 
                      <li class="active" rel="tab1"> Me</li>
                      <li rel="tab3"</div> My Work</li>
                      <li rel="tab4"</div> This Site</li>
                  </ul>
                  <div class="tab_container"> 
<div class="top-border"></div>
     <div id="tab1" class="tab_content"> 
 
         <article><p>I'm obsessed with CSS and front end design. I take it upon myself to keep up with current trends and monitor the new developments in the web world. I quite often practice new technologies in my own time and would love to experiment even more if time permitted. <br><br>I have a real mixed background when it comes to my work experience. From logistics in Iraq for the US Marine core to account manager for an International relocation company. However one common theme in all my previous experience is to be tidy, organised and proactive. I absolutely thrive on problem solving. It keeps me challenged, it keeps me motivated and forces me to find creative and resourceful solutions.<br><br> I'm very much a peoples person. Although I love geeking out with some new code I'm equally happy dealing with clients and disarming the confusing technical world of web into something more digestable for client. I am always aware of budget; both the clients and my employers. I enjoy identifying key factors in a project and making sure that the project is both profitable for my employer and cost effective for the client. I treat each job as if it were my own, making sure the pride, effort and vigilance that I would employ in my own projects are passed on to my employer and client alike.
         <br><br>In my peronal time I am an avid gig goer, I like to think I have green fingers too. I like keeping up on trends as a whole because everything eventually influences everything and my number one passion is music. I love everything about in all it's forms and genres. 
              </p></article>

     </div><!-- #tab1 -->
     <div id="tab3" class="tab_content"> 

      <article><p>For the last year and half I have been given the opportunity to develop and broaden my <a href="skills.php">skills</a>. I have been managing the web department for a rapaidly developing agency based in Bath called <a target="_blank" href="http://www.hibbert-harwood.com/">Hibbert Harwood</a>.
              Since starting at Hibbert Harwood, I have put systems in place that have allowed them to expand their web offereings by 400%. I feel confident that they will continue to grow and now have a very good web foundation to continue winning work and building their web department.<br><br>
              I've worked with some fantastic clients and have produced some work that I am very proud of for example;
              <br><br>
              We produce the HTML email Campaigns for <a target="_blank" href="http://www.davidaustinroses.co.uk/english/advanced.asp"> David Austin Roses</a>. Together with Hibbert Harwood we redesigned their campaings and have seen a 40% rise in internet sales. The emails have a global reach of over 200,000 recipients. It was really fun building bullet proof HTML emails to ensure that the emails displayed perfectly for every possible variation of email client and device.
              <br><br>
              I've completed over 20 websites and worked on many more in my 18 months with Hibbert Harwood but my favourite was the re-development of their <a target="_blank" href="http://www.hibbert-harwood.com/">company</a> website. I felt a great responsibilty to get this site right. 
              </p></article>  

     </div><!-- #tab3 -->
     <div id="tab4" class="tab_content"> 

        <article><p>
      The domain is because every single version of David Thompson dot something has already been taken. Laird is my middle name. 
      <br><br>
      I wanted this site to be nice and self contained. I didn't want it to be pages and pages and awkward navigation. I took influence from all those geeky crime investigation type shows, I'm not the biggest fan of the shows but I do love the interfaces they design for thier faux systems. I wanted the site to be more data heavy than image focused. I wanted to steer clear of those Word Press full bleed sections that everyone seems to be doing nowadays and turn the idea of a traditional website updside down. This is still version one of the site but in future versions I plan on each page opening as pop out. Almost like each page was treated as it's own document and loaded in one browser tab. So rather than navigating away the main site is to stay ever present as the base, meaning the user has to open and close pop out pages rather than navigate away.<br><br> This could be hugely annoying and might be the reason I haven't seen it before. It may have been tried,tested and sacked off but I would still ike to give it a go.<br>
The reason I chose to hide all the nav in those pop outs is because I didn't want to write 100s of Media Queries for changing layouts. I wanted the layout to be pretty fluid and only write basic tweeks for each layout. I always find by making sites too clever you only invite more problems and broaden the variables but sticking to tried and tested code and keeping it simple it tends to limit the damage. Of course this isn't always that straight forward but any developer that says they don't find satisfaction in cracking a debug is lying! 
      <br><br> 
         </p></article>


     </div><!-- #tab4 --> 
     
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