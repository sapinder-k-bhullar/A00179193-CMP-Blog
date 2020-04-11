<style>
    form > * {
        display: block;
    }

    
.forgot {
    text-shadow: rgba(117, 117, 117, 0.12);
        color: #1abc9c;
        padding-top: 15px;
}

.submit {
    box-sizing: border-box;
    background: rgba(136, 126, 126, 0.04);
    width: 30%;
    color: #1abc9c;
    font-weight: 500;
    text-align: center;
    margin-bottom: 27px;
    padding: 10px 20px;
    align: center;
    border:none;
    
}

.EmailID, .pass {
    box-sizing: border-box;
    background: rgba(136, 126, 126, 0.04);
    width: 30%;
    color: rgb(38, 50, 56);
    font-weight: 500;
    text-align: center;
    margin-bottom: 27px;
    padding: 10px 20px;
    align: center;
    border:none;
    
}

.form {
    padding-top: 30px;
}

.signIn {
        text-align: center;
        padding-top: 10px;
        color: #1abc9c ;
        font-weight: bold;
        font-size: 20px;
    }

h2 {
  padding: 20px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

.navigationbar {
  overflow: hidden; 
  background-color: grey; 
}

.navigationbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

</style>

<h2>Sign Up Page</h2>
<div class="navigationbar">
  <a href="#" >Home</a>
  <a href="#" class="w3-button w3-bar-item">Products</a>
  <a href="#templates" class="w3-button w3-bar-item">Templates</a>
  <a href="#resources" class="w3-button w3-bar-item">Resources</a>
  <a href="#login" class="w3-button w3-bar-item">Login</a>
  <a href="#getstarted" class="w3-button w3-bar-item">Get Started</a>
</div>

<div class="main">
    <p class="signIn">Sign in</p>
<form method="POST" action="/test/login" class="form">
    <input type="hidden" name= "csrf" value="<?php echo($csrf)?>">
    <label for="username"> Email </label>
    <input class="EmailID" id="username" name="username" required autocomplete="email">
    <label for="password">Password</label>
    <input type="password" class="pass" id="password" name="password" required autocomplete="email">
    <input class ="submit" type="submit" value="Login">
    <p class="forgot"><a href="#">Forgot Password?</p>
</form>

