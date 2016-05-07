<h1>How to give a friendly name to your pages?</h1>
<h3>Naming your pages</h3>
<p>By default, the URL is used for the pages names. The reports can be hard to analyse, because the names are not necessarily readable.</p>
<p>To give a name to a page view, you can set the variable "pagename" in the Javascript code you installed on your pages. For example:</p>
<code>var pagename = "My friendly name";</code>
<p>There is also an automatic solution for the pagename : you can use the value of the HTML TITLE markup.</p>
<code>var pagename = document.title;</code>
<p>It will simply name each page with their HTML Title, and you will see this information in the Pages view section in the phpMyVisites interface.</p>

<h3>Classify pages into groups</h3>
<p>This is very useful for all websites with content separated into categories. As you can see on phpMyVisites online demonstration, you can classify your pages into groups (categories). You browse the groups and pages very easily in the phpMyVisites interface in the "Pages view" part.
To do this, it is very simple (thanks to phpMyVisites supreme power)</p>
<p>You have 2 possibilities: </p>
<p>- <u>automatic</u> : if your website is physically structured with directories, phpmyvisites will detect them and will classify your pages into groups (named as your site directories)</p>

<p>- <u>manual</u> : if you don't have directories, for example if all your pages call "index.php" with different variables, you can set up a virtual page name and assign its value to the Javascript variable "pagename", separating the groups with the character slash "/". See the little exemple:</p>

<code>var pagename = 'group1/subgroup1/hello_kitty';</code>  

<h3>Downloads and URL clicks tracking</h3>
<p>Yes, phpMyVisites can track your downloads and your external URLs clicks!</p>
<h5>Recommended: Url Generator</h5>
<p>The simplest way to do this is to use the <u><a href="index.php?mod=admin_url_redirection_generate">URL generator for downloads and URLs clicks</a></u>.

<h5>Advanced users: Manual method</h5>
<p>If you want to count file downloads, or URL clicks, it is very simple. You have to change your URLs with the pattern : <br>
<code>
http://PATH_TO_YOUR_PHPMYVISITES/phpmyvisites.php?url=URL_WHERE_TO_REDIRECT&id=ID_SITE&pagename=FILE:NAME_OF_FILE
</code>
<p>Note that the string "FILE:" is mandatory! If you don't put this string, it won't work</p>
<p>For example, if you want to set up a Google url click count, instead of linking to "http://www.google.com", you will link to </p>
<code>phpmyvisites.php?url=http://www.google.com&id=1&pagename=FILE:google click count</code>
<p>Or if you want to count the files download (this link will redirect to "http://www.download.com/phpmyvisites.zip")</p>
<code>phpmyvisites.php?url=http://www.download.com/phpmyvisites.zip&id=1&pagename=FILE:phpmyvisites_last_version</code>
<br/><br/>
<b>A super tip</b><br/>
<p>You can classify Files download, URL count, into groups! As you can for the classic pages. It allows to have a very precise report, well organized</p>
<p>For example this will word</p>
<code>phpmyvisites.php?url=http://download.com/phpmv.zip&id=1&pagename=FILE:files download/phpmyvisites/last release</code>
<p>The "File" will be classified into the groups files download/phpmyvisites/</p>

<h3>Good luck with phpmyvisites!</h3>
<p>If you're happy with it, don't hesitate to make a little donation, it helps us a lot :-) <br/>You can also see the <a target="_blank" href="http://www.phpmyvisites.us/documentation/">Documentation WIKI for more information.</a></p>