<?php
/*
 * captcha with phpmaster account
*/
// client side: 6LcbtYolAAAAAPW75kKrbV73KoUdFOu9mATpCNBC
// server side : 6LcbtYolAAAAAIKcVx0-ed8AwN3jaQzJwYF20j9k
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['g-recaptcha-response'])){
      $recaptcha = $_POST['g-recaptcha-response'];
          if(!$recaptcha){
            echo '<script>alert("please check captcha")</script>';
            $this->view('account/login'); // place to return to
            die();
          }else{

            $secret = '6LdWuoolAAAAACli9LlH_n7VILEuatD8IgLHvZ_6';
            $url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptcha}";
            $response = file_get_contents($url);
            $responseKeys = json_encode($response, true); // return array //print_r($responseKeys);
            if( $responseKeys ){





              // here check you database filter and here deal with data



            }else{
              echo '<script>alert("please check captcha")</script>';
            } // end $responseKeys['success']

      } // end !$recaptcha
  } // end $_POST['g-recaptcha-response']
} // end $_SERVER['REQUEST_METHOD']
?>
$this->redirect('signup');
