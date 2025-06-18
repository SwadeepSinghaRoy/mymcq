<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="main-container">
        <div class="child-container">
            <header>
              <div class="heading">
                <strong><u>Search For</u></strong>
              </div>
              <div class="buttons">
                <button class="btn" value="1">ADMINS</button>
                <button class="btn" value="2">INSTRUCTORS</button>
                <button class="btn" value="3">STUDENTS</button>
              </div>
              <div class="search-bar-section">
                <input type="text" placeholder=" Search..." class="search-bar">
              </div>
            </header>
            <main>
              <div class="show-users">
                <div class="table-section">
                  <table class="user-info-table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>User Type Id</th>
                        <th>Name</th>
                        <th>User Email</th>
                        <th>User Password</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>