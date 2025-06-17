<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <div class="child-container">
            <header>
                <h1>Since You Are A Admin,You Can Add Users</h1>
            </header>
            <main>
                <form class=add-user-form>
                    <div class="mb-3">
                        <label for="user_type_id" class="form-label">User Type Id</label>
                        <input type="text" class="form-control" id="user_type_id">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.add-user-form').on('submit', function(e){
                e.preventDefault();
                let userTypeId=$('#user_type_id').val();
                let name=$('#name').val();
                let email=$('#email').val();
                let password=$('#password').val();
                $.ajax({
                    url:'add_users.php',
                    type:'post',
                    data:{
                        user_type_id:userTypeId,
                        name:name,
                        email:email,
                        password:password
                    },
                    success:function(response){
                        alert(response);
                    }
                });
            });
        });
    </script>
</body>

</html>