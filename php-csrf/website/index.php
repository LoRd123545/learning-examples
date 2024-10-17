<?php
session_start();

if (isset($_SESSION['username'])) {
  // Redirect to dashboard if already logged in
  header('Location: dashboard.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website</title>
  <script defer>
    const submitBtn = document.getElementById('submitBtn');

    submitBtn.addEventListener('click', (event) => {
      event.preventDefault();
    });
  </script>
</head>

<body>
  <header>
    <h1>Welcome to website</h1>
  </header>
  <main>
    <section>
      <header>
        <h2>You are not logged in!</h2>
        <i>Fill out this form to log in</i>
      </header>
      <article>
        <form action="login.php" method="post">
          <span>username</span>
          <input type="text" id="username" name="username" />
          <br />
          <span>password</span>
          <input type="password" name="password" id="password" />
          <br />
          <button id="#submitBtn">Log in</button>
        </form>
        <a href="register.html">register if you don't have an account</a>
      </article>
    </section>
  </main>
</body>

</html>