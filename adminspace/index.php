<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/stylelog.css">
  </head>
  <body>
    <div  class="login-form">
      <div>
        <div class="form-log">
          <h2> Adminspace </h2>
        </div>

        <div>
          <!-- Login Form -->
          <form method="post" action="login.php">
            <div class="form-log pseudo">
              <input type="text" id="login" name="pseudo" placeholder="login">
            </div>

            <div class="form-log pass">
              <input type="password" id="password" name="passwd" placeholder="password">
            </div>
            <button type="submit" class="form-log">Log in</button>
          </form>
        </div>

      </div>
      <div>
        <p>&copy DBMotogasy 2020</p>
      </div>
    </div>
  </body>
</html>