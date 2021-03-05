<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>My Website</h1>
      </header>
      <main>
        <aside>
          <ul>
            <li>
              <a href="index.html"
                ><ion-icon name="medal-outline"></ion-icon>My Project</a
              >
            </li>
            <li>
              <a href="about.html"
                ><ion-icon name="person-outline"></ion-icon>About Me</a
              >
            </li>
            <li>
              <a href="ask.html"
                ><ion-icon name="chatbox-outline"></ion-icon>Ask Me!</a
              >
            </li>
          </ul>
        </aside>

        <article>
          <div id="content">
            <h1>About</h1>
            <hr />
            <div class="detail">
              <form action="">
                <div class="form-control">
                  <label for="name">Name </label>
                  <input type="text" name="name" placeholder="Enter name" />
                </div>
                <div class="form-control">
                  <label for="email">Email address </label>
                  <input type="text" name="email" placeholder="Enter email" />
                  <span class="form-helper"
                    >we'll never share your email with anyone else</span
                  >
                </div>
                <div class="form-conrtol">
                  <label for="question">Question </label>
                  <textarea name="question"></textarea>
                </div>
                <div class="submit">
                  <button>send!</button>
                </div>
              </form>
            </div>
          </div>
          <footer>
            <p>
              <a href="https://www.facebook.com/" target="_blank">
                <ion-icon name="logo-facebook"></ion-icon> Facebook</a
              ><a
                href="https://www.instagram.com/aprillianuraz/"
                target="_blank"
                ><ion-icon name="logo-instagram"></ion-icon> Instagram</a
              ><a
                href="https://github.com/aprilliaazizah/1402019111_tugas2"
                target="_blank"
                ><ion-icon name="logo-github"></ion-icon> Github</a
              >
            </p>
          </footer>
        </article>
      </main>
    </div>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </body>
</html>
