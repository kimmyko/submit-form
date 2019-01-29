<?php
  if (isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $to = 'KDee@dcccd.edu';
    $subject = "Survey Form";
    $body = '<html>
              <body>
                  <h2> feedback </h2>
                  <hr>
                  <p>Name: '.$name.'</p>
                  <p>Email: '.$email.'</p>
                  </body>
                  </html>';
  $headers = "From: ".$name." <".$email.">\r\n";
  $headers = "Content-type: text/html; charset=utf-8";

  $send = mail($to, $subject, $body, $headers);
  if ($send) {
    echo '<br>';
    echo 'Thanks for submitting';
  } else {
    echo 'error';
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <?php include
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  <main>
    <h1 id="title"> Survey Form</h1>
    <p id="description">Let me know how can I serve you better</p>
  </main>
  <div class="container">
    <form id="survey-form" style="max-width:100;" method="post" action="" enctype="text/plain" >
      <div class="row">
        <div class="col-25">
            <label id="name-label">Name:</label>
        </div>
        <div class="col-75">
          <input type="text" id="name" required placeholder="enter your name">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label id="email-label">Email: </label>
        </div>
        <div class="col-75">
          <input type="email" id="email" required placeholder="enter a valid email address">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label id="number-label">Age: </label>
        </div>
        <div class="col-75">
          <input type="number" id="number" required placeholder="age"min="18" max="99">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label>Which option best describes a type of friend am I to you?</label>
        </div>
        <div class="col-75">
          <select id="dropdown" name="dropdown">
            <option value="">nice</option>
            <option value="">rude</option>
            <option value="">thoughful</option>
            <option value="">honest</option>
            <option value="">selfish</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label>How likely would I behave around you?</label>
        </div>
        <div class="col-75">
          <br>
          <input type="radio" name="radio" value="respectful" checked> respectful <br>
          <input type="radio" name="radio" value="disrespectful"> disrespectful <br>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label>What would you suggest me to change/stop doing?</label>
        </div>
        <div class="col-75">
          <br>
          <input type="checkbox" name="checkbox" value="coke" checked> stop drinking coke <br>
          <input type="checkbox" name="checkbox" value="coffee"> stop drinking coffee <br>
          <input type="checkbox" name="checkbox" value="sugar-water"> stop drinking sugar water in general <br>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label>
            <p> Additional comments:</p>
          </label>
        </div>
        <br>
        <div class="col-75">
          <textarea rows="4" cols="30" style="height:200px">please provide your comments here</textarea>
        </div>
      </div>

      <div class="row">
        <button id="submit" style="text-align: center" type="submit">Submit</button>
      </div>
    </form>
  </div>
  <footer>
    <h5>Autor: Kimmy Dee | Date: 1/29/2019</h5>
  </footer>
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js" charset="utf-8"></script>
  </body>
</html>
