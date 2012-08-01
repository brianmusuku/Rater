<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
   /* Begin Navigation Bar Styling */
   #nav {
      width: 100%;
      float: left;
      padding: 0;
      list-style: none;
      background-color: #f2f2f2;
      border-bottom: 1px solid #ccc; 
      border-top: 1px solid #ccc; }
   #nav li {
      float: left; }
  
   #nav li a {
      display: block;
      padding: 8px 15px;
      text-decoration: none;
      font-weight: bold;
      color: #0000e1;
      border-right: 1px solid #ccc; }
   #nav li a:hover {
      color: #c00;
      background-color: #fff; }
   /* End navigation bar styling. */
   
</style>
</head>

<body>
   
   
   <ul id="nav">
      <li><a href="/scale">{ RATER } <br/></a></li>
      <li><a href="/scale/toprated.php">TOP RATED</a></li>
      <li><a href="#">ABOUT</a></li>
      <form action="/scale/search.php" method="GET"/>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <input type='text' name='entity'/><button type='submit'>SEARCH</button>
      </form>
   </ul>

   

</body>
</html>
