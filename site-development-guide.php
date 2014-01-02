<!doctype html><html><head><meta http-equiv="Content-Type" content="text/html;charset=utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><title>Ed Hatrick Smith - Web: designer / developer / problem solver</title><meta name="description" content="Ed Hatrick-Smith: site development guide"/><meta name="keywords" content="web developer, desginer, photographer, awesome person, solutions"/><meta name="author" content="Edward Hatrick-Smith: ed.hatricksmith@gmail.com"/><link rel="stylesheet" type="text/css" href="/css/styles.generic.min.css"/><?php include_once("/home/akolob/public_html/analyticstracking.php") ?></head><body><?php include("/home/akolob/public_html/header.php");?><div id="projects"><h1>Site Development Guide</h1><article><p class="projects_first">I'm pretty pleased with how this site has turned out. It can be particularly difficult designing something which is supposed to be reflective of your taste and skill. There's a fine line between perfection and actually getting the task finished.</p><p>Design aside (which is a bit too subjective a discussion for this page), I used a wide variety of code and techniques with this site. I wanted to share those techniques here for those of you who are interested in such things.</p><h2>General HTML5 / CSS3</h2><p class="first">I won't get into these too much as you can get this information from proper tutorials. But as an outline I tried to adhered to the latest conventions in terms of semantic mark up with HTML. <a href="http://www.html5tuts.co.uk/tutorials/semantics/" target="_blank">Here's a good tutorial.</a> These conventions are still a touch wishy-washy due to how fresh the standard is so hopefully I got things pretty close.</p><p>Obviously the site is also responsive and features fluid widths up to 960px. To ensure this responsive was consistent throughout the site I selected jQuery plug-ings that were natively responsive.</p><h2>jQuery Plug-Ins</h2><h3>Isotope</h3><p class="first"><a href="http://isotope.metafizzy.co/index.html" target="_blank">Isotope</a> is the perfect example of why I love the open source internet. Isotope controls the way that the projects in my <a href="/work/work.php" target="_blank">works</a> section animate in response to different browser widths, as well as the filter functionality. It's a truly phenomenal plug-in.</p><p>It was relatively complicated to implement but well worth the effort. I customised it quite heavily to allow for mouse hover and link effects on the image tiles.</p><h3>Flexislider</h3><p class="first">I've used <a href="http://www.woothemes.com/flexslider/" target="_blank">Flexislider</a> as the image slider on the <a href="http://www.ed-hatrick-smith.com/" target="_blank">home page</a> of the site. It was a breeze to implement, is fully responsive and has some nice animation effects for the navigation buttons. On top of that its touch enable which is a nice touch.</p><h3>Fancybox 2</h3><p class="first">Fancybox 2 has been used through the individual project pages as the light-box for the images. It was pretty easy to implement, customise and when activated, presents images very nicely.</p><p>I ran into a conflict running Fancybox and Isotope on the same page. The scripts were clashing for some reason or another. It turned out to be relatively easy to fix, though a little unorthodox. Find out how I did it <a href="http://stackoverflow.com/questions/14667252/jquery-plug-in-conflict-combine-scripts-without-conflict/14670917#14670917" target="_blank">here at Stackoverflow.</a></p><h2>Performance Optimisation</h2><p class="first">Performance optimisation is sort of a new field for me but one that I am intensely interested in. I've spent a fair bit of time trying to reduce the load times of this site. My main tool for this has been the excellent <a href="http://gtmetrix.com/" target="_blank">GTMetrix</a> site. It uses both Page Speed (Google) and YSlow (Yahoo), to provide useful analysis of your site and which areas need improvement.</p><p>Results for the <a href="http://www.ed-hatrick-smith.com/" target="_blank">home page</a> were initially 67% (D) and 75% (C) in Page Speed and YSlow respectively. I've now improved those results to 92% (A) and 89% (B).</p><p>This result could be improved further by having GZip browser caching enable with my hosting but this has proved harder than it was worth. There is a point of diminishing returns with these things after all.</p><p>Anyway, if you look at the page source code for the site it will mostly appear as gibberish. This is the result of minifying the html which I have done with <a href="http://www.willpeavy.com/minifier/" target="_blank">this tool</a> as well as several others. At some point I will upload an unpacked version of the site so that you can see the code more legibly.</p><h2>Want to know more?</h2><p class="first">If you want to know more about what I did with some of these techniques, or you'd like some of the files to work off of, <a href="/contacts/contacts.php">drop me a message</a>. I'm very appreciative of the amazing open source content I've used on this site and would love to return the favor where I can.</p></article></div><div class="clearfix"></div><?php include("/home/akolob/public_html/footer.php");?></body></html>