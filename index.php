<?php 
// created_by : mohamed sebai 
?>

<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
  </head>
  <body>
    <form id="demo-form" action="write your redirect" method="POST">
      <div class="g-recaptcha" data-sitekey="client-id"></div>
        <input type="submit" value="Submit">
      <br/>
    </form>
  </body>
</html>
