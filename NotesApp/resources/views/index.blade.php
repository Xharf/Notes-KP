<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <title>Notes Application</title>
  </head>
  <body>
    <nav
      class="
        mt-1
        navbar navbar-expand-lg navbar-light
        bg-white bg-light
        px-lg-4
        border-top border-2 border-dark
      "
    >
      <div class="container-fluid border-bottom border-4 border-light">
        <button
          class="navbar-toggler mb-3"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand fw-bold fs-3" href="#">Notes App</a>
          <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fw-bold" aria-current="page" href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#">Logout</a>
            </li>
          </ul> -->
        </div>
      </div>
    </nav>

    <a
      type="button"
      class="btn btn-dark position-fixed bottom-0 end-0 me-5 mb-5"
      href="/addnotes.html"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="25"
        height="25"
        fill="currentColor"
        class="bi bi-plus-lg"
        viewBox="1 1 16 16"
      >
        <path
          fill-rule="evenodd"
          d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"
        />
      </svg>
      ADD Note
    </a>

    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ini Catatan 1</h5>
              <p class="card-text text-truncate-container">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Exercitationem repellat adipisci, accusamus ad sapiente enim
                magni. Cupiditate earum illo odit, culpa nobis voluptatibus,
                dolores numquam ea quod enim, a quaerat. Lorem ipsum dolor sit
                amet consectetur adipisicing elit. Reprehenderit eum ullam,
                animi aperiam esse qui sunt sapiente temporibus officia
                provident? Quisquam aperiam ratione quibusdam mollitia
                praesentium, pariatur vero reiciendis consequatur!
              </p>
              <a href="#" class="btn btn-outline-dark border-2 rounded-3"
                >View Notes</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
