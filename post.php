<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $post['title']; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main class="d-flex flex-column">
    <h1 class="display-1 py-5 px-3 bg-primary text-white">My First Post</h1>
    <article class="p-3 flex-fill">
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi repellendus quibusdam error quo cumque quasi quaerat fugiat, corporis reprehenderit quis alias accusantium, maxime harum consectetur minima ex sapiente consequuntur enim.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, rem soluta corrupti temporibus, repudiandae laudantium eaque sed ipsam reprehenderit explicabo suscipit iure, ea earum. Accusantium voluptate possimus reiciendis animi iste?</p>
    </article>
    <footer class="align-self-center">
      <div class="page-nav">
        <a class="btn btn-outline-primary">
          &lt; Prev
        </a>
        <a class="btn btn-outline-primary">
          Next &gt;
        </a>
      </div>
    </footer>
  </main>
</body>
</html>