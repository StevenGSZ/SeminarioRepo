<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/seminario/app/views/public/css/adminlogin.css">
    <title>Seminario Mayor Pio XII</title>
</head>
<body>
    <div class="containerLogin">
        <div>
            <h2>Login Administrador</h2>

            <form method="POST" action="/seminario/access/admin/login">
                <input type="email" name="email" placeholder="Email" required>
                <br><br>

                <input type="password" name="password" placeholder="Password" required>
                <br><br>

                <button>Ingresar</button>
            </form>
        </div>
    </div>
</html>