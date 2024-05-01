<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container border border-4 mt-5 rounded-5 position-relative p-5">
      <h2 class="mb-5">Enter the Number</h2>
      <form action="multiblicationTable.php" method="post" >
        <div class="form-floating my-3">
          <input type="number" class="form-control" id="floatingInput" name="number"/>
          <label for="floatingInput">Enter the Number</label>
        </div>
        <div class="form-group text-end">
          <button type="submit" class="btn btn-outline-primary mb-3 p-2 px-5">
            Submit
          </button>
        </div>
      </form>

      <p class="fw-semibold">
        <small>A journey of a thousand miles begins with a single step😊✨</small>
      </p>
    </div>
  </body>
</html>
