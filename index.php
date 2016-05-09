<HEAD
 <!DOCTYPE html>
<html>
<head>

<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | Seattle, WA. </title>
=======

<!DOCTYPE html>
<html>
<head>
<title>MAIN.html</title>
>>>>>>> origin/master
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link href='https://fonts.googleapis.com/css?family=Delius+Swash+Caps' rel='stylesheet' type='text/css'>

<<<<<<< HEAD
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all"/>

<?php wp_head(); ?>    
=======
<link rel="stylesheet" type="text/css" href="css/style.css" />
    
>>>>>>> origin/master
</head>
<body <?php body_class();?>        
    
<body>
<header> 
    <img src="<?php bloginfo('template_directory'); ?> /images/cornerstone_placeholder.gif" class="icon" alt="A placeholder cornerstone image. Labeled for reuse." />
    
    <!--<img src="icons/Logo-Black-41px-TM.png" class="social" alt="LinkedIn link icon" />-->
    
    
    <a href="https://www.linkedin.com/in/test" target="_blank">
<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x25.png" width="160" height="25" border="0" class="social" alt="View Aimee Elber's profile on LinkedIn.">
        </a>
    
    
    <a href="mailto:example@example.com ">
    <img src="<?php bloginfo('template_directory'); ?> /icons/email.png" class="email" alt="Email link icon." />
    </a>
        
     
     <!-- <h2 class="pageid">Home Page</h2> -->
    
  <h3><a href="index.html">Cornerstone Consulting</a></h3>
  <!-- START NAVIGATION (Main) -->

<nav>
  <ul class="nav">
    <li><a href="http://www.lindese.com/web170/bones-template/about.html" target="_blank">About</a></li>
    <li><a href="http://www.lindese.com/web170/bones-template/career.html" target="_blank">Career Services</a></li>
    <li><a href="http://www.lindese.com/web170/bones-template/calendar.html" target="_blank">Calendar</a></li>
    <li><a href="http://www.lindese.com/web170/bones-template/map.html" target="_blank">Map</a></li>
    <li><a href="http://www.lindese.com/web170/bones-template/blog.html" target="_blank">Blog</a>
      <ul>
        <li><a href="http://www.lindese.com/web170/bones-template/blog1.html" target="_blank">Blog Post 1</a></li>
        <li><a href="http://www.lindese.com/web170/bones-template/blog2.html" target="_blank">Blog Post 2</a></li>
        <li><a href="http://www.lindese.com/web170/bones-template/blog3.html" target="_blank">Blog Post 3</a></li>
        <li><a href="http://www.lindese.com/web170/bones-template/blog4.html" target="_blank">Blog Post 4</a></li>
      </ul>
    </li>
    <li><a href="http://www.lindese.com/web170/bones-template/contact.html" target="_blank">Contact</a></li>
  </ul>
</nav>
    <!-- end header --> 

<!-- Main Content --> 
    
     <!-- <h2 class="pageid">Home Page</h2> -->
<<<<<<< HEAD
 <div id="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>
=======
 <article class="chapterOne">
 <h1>About Cornerstone Consulting</h1>
<section class="secOne">	       
 <img src="images/aimee_headshot_sm.gif">
    <p>Aimee Elber, Manager of Disability Support Services at Spokane Community College, holds over a decade of experience in higher education and has worked with people with disabilities since 1994. As a first generation college graduate, Aimee started her academic career in the community college system and completed her Bachelor of Arts degree in Human Services at Western Washington University. She is driven by a deep desire to help students meet their academic and occupational goals.</p>
>>>>>>> origin/master
    
</div>     


    <!-- START Aside -->
<aside>
  <h2>'Who will Riddle me the How and the Why?'</h2>
    <p>So questions one of England's sweetest singers. The `How?' has already been told, after a fashion, in the verses prefixed to Alice in Wonderland ; and some other memories of that happy summer day are set down, for those who care to see them, in this little book--the germ that was to grow into the published volume. But the `Why?' cannot, and need not, be put into words. Those for whom a child's mind is a sealed book, and who see no divinity in a child's smile, would read such words in vain: while for any one that has ever loved one true child</p>
    
  <p class="author">Lewis Carroll December, 1886</p>
</aside>
<!-- END Aside -->
         


<!-- content ends --> 

<<<<<<< HEAD

<!-- footer starts -->     
=======
<pre><code>
#header h1 a { 
	display: block; 
	width: 300px; 
	height: 80px; 
}
</code></pre>
</section>
</article>
<!-- END Article (Chapter) --> 
    
    <!-- START Aside -->
<aside>
  <h2>'Who will Riddle me the How and the Why?'</h2>
    <p>So questions one of England's sweetest singers. The `How?' has already been told, after a fashion, in the verses prefixed to Alice in Wonderland ; and some other memories of that happy summer day are set down, for those who care to see them, in this little book--the germ that was to grow into the published volume. But the `Why?' cannot, and need not, be put into words. Those for whom a child's mind is a sealed book, and who see no divinity in a child's smile, would read such words in vain: while for any one that has ever loved one true child</p>
    
  <p class="author">Lewis Carroll December, 1886</p>
</aside>
<!-- END Aside -->
    
    
>>>>>>> origin/master
    
<footer>
    <small>
  Cornerstone Consulting, Spokane, WA <br>
  <a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> and <a href="http://validator.w3.org/check/referer">Valid HTML</a> ~ Website by S.E. Linde, copyright 2016.<br>
        <a href="disclaimer.html">Legal Disclaimer</a>
    </small>
</footer>
<?php wp_footer(); ?>    
</body>
</html>
