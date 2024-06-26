<style>
    button {
        border: none;
    }

    a {
        text-decoration: none;
    }

    input {
        display: block;
        width: 80%;
        padding: 15px;
        margin-top: 10px;
        margin-bottom: 40px;
        border: none;
        border-bottom: 2px solid green;
        font-family: sans-serif;
        font-size: 16px;
    }

    label {
        font-family: sans-serif;
    }

    .modal {
        border-radius: 10px;
        padding: 50px;
        margin-left: 30%;
        margin-right: 30%;
        box-shadow: 1px 1px 5px;
        background-color: white;
        visibility: hidden;
    }

    .modal h1,
    form {
        margin-left: 20%;
    }

    .modal h1 {
        margin-left: 40%;
        font-family: sans-serif;
    }

    .modal p {
        position: relative;
        left: 107%;
        bottom: 65px;
        font-size: 20px;
        background-color: white;
        display: inline;
        padding: 10px;
        border-radius: 50%;
    }

    .btn {
        color: white;
        width: 10%;
        height: 80px;
        font-size: 18px;
        background-color: #007bff;
        border-radius: 10px;
    }

    .btn2 {
        color: white;
        width: 40%;
        height: 40px;
        margin-left: 20%;
        background-color: #007bff;
        border: none;
        border-radius: 10px;
        font-size: 20px
    }

    .btn2:hover {
        background-color: #0F549B;
    }

    #wrab:target .modal {
        transition: 0.56s;
        transform: translateY(100px);
        position: relative;
        visibility: visible;
    }

    #wrab:target .bg-color {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background-color: rgb(0, 0, 0, .5);
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="modal.css">
</head>

<body>
    <div>
        <a href="#wrab"><button class="btn"> Open modal</button></a>
    </div>
    <div href="" class="wrab" id="wrab">
        <div class="bg-color">
            <div class="modal" id="modal">
                <p><a href="">X</a></p>
                <h1 class="label">Login</h1>
                <form action="" method="get" accept-charset="utf-8">
                    <label for="">Email:</label>
                    <input type="text" placeholder="Masukan Email" id="name">
                    <label for="">Password:</label>
                    <input type="password" placeholder="Masukan Password" id="sandi">
                    <button type="submit" class="btn2">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
