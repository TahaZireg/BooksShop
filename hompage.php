<?php 
include 'usr-interface-navbar.php';
?>
    <!--Start Background image -->
    <img src="sm_images/backimg.jpg" width="100%" style=" min-height: 100%;
  min-width: 1024px;  width: 100%;height: auto;   position: fixed;top: 0;left: 0; z-index: -1;     filter: blur(2px);
">
     <!--END Background image -->
     <div class="primary-titling" style=" text-align: center; margin: auto; margin-top :150px;line-height: 60px ;

     font-family: 'Arial Black', Gadget, sans-serif;
font-size:80px;
letter-spacing: -1px;
word-spacing: 2.6px;
color: #000000;
font-weight: 700;
text-decoration: none solid rgb(68, 68, 68);
font-style: normal;
font-variant: small-caps;
text-transform: none



     " >
          <span style="color:white;  display: block;">Read</span>
          <span style="color:white;  display: block;">More</span>
          <span style="color:white; display: block;">Books</span>
         

     </div>
      <form style="width: 35%; margin: auto; margin-top: 50px;" action="usr-books-srch.php" method="GET">
          <input type="text" name="query" style ="background-color: #DCDCDC;text-align: center; outline: none;" placeholder="Find Your Book Here">
          <input type="submit" name="" value="Search" style="width: 30%; margin: auto;display: block;
          padding: 10px;  background-color: rgb(77, 33, 223); border: none; color: white; 
          margin-top: 30px;">
      </form>
</body>
</html>