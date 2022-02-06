<?php/* Template Name: Portfolio Detail */?>

<?php 

get_header();?>

<?php 
while (have_posts()) : the_post(); ?>

<div class="">
    <h1 class="title"><?php the_title(); ?> </h1>

    <div class="blog-content">
        <!--Start content-->

        <?php the_content(); ?>

        <div class="blog-container">

<div class="heading2">
    <h3 class="tag">SCRIPTWRITING<h3>
    <h1 style="margin-left: 2rem;">Microinteractions</h1>
    <h5 style="margin-left: 3rem; font-size: 1rem; margin-top: -1.5rem;">SPRING 2020 | IDM 241</h5>
    <div class="img-container">
    <img class="microinteraction" src="<?php echo get_template_directory_uri();?>/dist/images/microinteraction_hero.png">
    </div>
</div>

<h2>Overview</h2>
<p>This case study discusses the process I went through when creating a simple microinteraction and eventually a complex one for my microinteraction class. I was introduced to microinteractions and their structure, and had to apply what I already knew how to do in code to create my own microinteraction and build on it throughout the course.</p>

<h2>Context and Challenge</h2>
<h3 style="color:##E57347;">Background</h3>
<p>This case study discusses the process I went through when creating a simple microinteraction and eventually a complex one for my microinteraction class. I was introduced to microinteractions and their structure, and had to apply what I already knew how to do in code to create my own microinteraction and build on it throughout the course. I talk about the design choices I made and the steps I took to successfully code what I had planned to do for my microinteractions. For the final project, I was able to code my own complex microinteraction using HTML, CSS, jQuery, and Javascript.</p>

<h3 style="color:##E57347;">Goals</h3>
<ul class="goals-list">
    <li class="goals">Learn the anatomy of an microinteraction and the feedback the user receives from it</li>
    <li class="goals">Come up with my own microinteraction</li>
    <li class="goals">Transform my beta microinteraction into a complex interaction</li>
    <li class="goals">Make sure my descriptions matched the real microinteraction</li>
</ul>

<!-- Add video thumbnail -->

<div class="table-flex">
<table>
  <tr>
    <th>Triggers</th>
    <th>Rules</th>
    <th>Feedback</th>
    <th>Loops and Modes</th>
  </tr>
  <tr>
    <td>Mouse click</td>
    <td>Button expands</td>
    <td>Same as rules</td>
    <td>Modal appears</td>
  </tr>
  <tr>
    <td>Mouse hover</td>
    <td>Button expands slightly</td>
    <td>Same as rules</td>
    <td>None</td>
  </tr>
</table>
</div>

<div class="final-build">
<img class="final-build" src="<?php echo get_template_directory_uri();?>/dist/images/final-build.png">
<p class="caption">This is my complex interaction that I protoyped in preparation for the final.</p>
</div>

<h3 style="color:##E57347;">Beta Build</h3>
<p>Once I had my description down, it was time to code. I found another working sample of what I wanted to replicate and started coding the HTML and CSS. I then added a Javascript file to be able to open and close the button. When I tested it, it wouldn't work. What I soon found out was that the working sample was using jQuery, and not Javascript. It took me a while to figure it out, but I learned that I had to add a Jquery library to the HTML file to get the Jquery to run. After that, the only difficulty I had was stylizing each link, and I figured that out by pinpointing each specific link and using the correct class names to stylize them with my professor. View my Beta Build here.</p>

<div class="quote-section">
    <hr style="width: 100px; color: #264e5e; margin-top: 2rem; border: 2px solid #ECEDF2;">
    <h4 style="font-size: 1.6rem; font-family: 'Gilroy-Bold'; color: #264E5E;">“I decided that I wanted to add sounds for when the button expands and closes.“</h4>
    <hr style="width: 100px; color: #264e5e; margin-top: 2rem; border: 2px solid #ECEDF2;">
</div>

<h3 style="color:##E57347;">Final Build</h3>
<p>It was time to start coding out my final description. I decided to focus on the links first, since I knew how to do that better than the sounds.  I only wanted the sound to play once on the button open, and once on the button close. With direction from my professor, I learned how to do an open flag if statement so that if the button was clicked the sound would play once. View my Final Build <b>here.</b></p>

<div class="video-section">
<video width="420" height="340" controls>
  <source src="<?php echo get_template_directory_uri();?>/dist/images/mic-video.mp4" type="video/mp4">
</video>
<p class="caption">The final microinteraction.</p>
</div>

<div class="view-project">
    <h2>View my live project here</h2>
    <a href="https://allisondrakedesign.com/idm241/final/build/finalbuild.html"><button class="view">VIEW</button></a>
</div>

</div>
        <!--End content-->
    </div>
</div>

<?php endwhile;?>


<?php get_footer(); ?>