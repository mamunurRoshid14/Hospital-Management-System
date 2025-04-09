<!DOCTYPE html>
<html>
  <head>
    <title>Homepage</title>
    <style>
      /* CSS styling for page body */
      body {
        background-color: #F5F5F5;
        font-family: Arial, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
      }
      
      /* CSS styling for header */
      header {
        background-color: #007ACC;
        color: white;
        padding: 20px;
        text-align: center;
      }
      
      /* CSS styling for heading */
      h1 {
        font-size: 3em;
        margin-top: 0;
      }
      
      /* CSS styling for subheading */
      h2 {
        font-size: 2em;
        margin-top: 0;
      }
      
      /* CSS styling for paragraph */
      p {
        font-size: 1.2em;
        line-height: 1.5;
        margin-bottom: 20px;
      }
      
      /* CSS styling for buttons */
      .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1.2em;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        border: none;
        margin: 10px;
      }
      
      /* CSS styling for login button */
      #login-button {
        background-color: #007ACC;
      }
      
      /* CSS styling for signup button */
      #signup-button {
        background-color: #f44336;
      }
      
      /* CSS styling for main section */
      main {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
      
      /* CSS styling for footer */
      footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px;
        font-size: 0.8em;
      }
      
      /* CSS styling for footer contacts */
      .contact {
        margin-bottom: 5px;
      }
      
      /* CSS styling for footer email */
      .email {
        color: #bbb;
      }
    </style>
  </head>
  
  <body>
    <header>
      <h1>Welcome to Next Door Hospital</h1>
      <h2>Your Health is Our Top Priority</h2>
    </header>
    
    <main>
      <p>Please provide the information if you are an old patient or new patient. If you are an old patient, then kindly provide the UserID given to you before. If you a new patient then please register for an UserID.</p>
      <p>Please Select Any Of The Options</p>
    
      <!-- Login button -->
      <a href="oldpatient.php" class="button" id="login-button">Old Patient</a>
    
      <!-- Signup button -->
      <a href="newpatient.php" class="button" id="signup-button">New Patient</a>

	<p></br></br></br></br></br></p>
    </main>
    
    <footer>
    <h3>This site is developed and maintained by</h3>
    
    Mamunur Roshid - mamunur.*****@juniv.edu

</footer>
 </body>
</html>