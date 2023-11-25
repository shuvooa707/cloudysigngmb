<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-center">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="card w-75 mt-5">
                        <div class="card-header bg-dark text-white">
                            login
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="text" name="password" id="password">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>