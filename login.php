<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
     <!-- <link rel="stylesheet" href="./framework/css/bootstrap.css"> -->
      <link rel="stylesheet" href="css/style.css">
      
</head>

<body>
    <?php
     include('nav.html');
    ?> 
<div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-8">
        <form>
          <h1>Login</h1>
          <input type="mail" name="name" class="question" id="nme" required autocomplete="off" />
          <label for="nme"><span>Email</span></label>
          <input type="password" name="message" rows="2" class="question" id="msg" required autocomplete="off"
            minlength="6">
          <label for="msg"><span>Password</span></label>
          <input class="btn btn-success" id="but" type="submit" value="Envoyer">

        </form>
      </div>
      <div> <a href="carosoul.html" class="btn btn-link">Mot de passe oublié</a></div>

    </div>
</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center>
                    <h1><Strong>Login</Strong> </h1>
                </center>
                <div class="col-md-12"><input type="text" name="name" class="question" id="nme" required
                        autocomplete="off" />
                    <label for="nme"><span>E-mail</span></label></div>
                < <textarea name="message" rows="2" class="question" id="msg" required autocomplete="off"></textarea>
                <label for="msg"><span>What's your Adresse?</span></label>
                <div class="col-md-12"><input type="password" name="name" class="question" id="code" required
                        autocomplete="off" />
                    <label for="code"><span> Password</span></label></div>
                <input type="submit" value="Se connecter" />

            </div>
        </div>
    </div>
</body>

</html> -->
