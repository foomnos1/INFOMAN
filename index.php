<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="baseColorAndTypeface.css">
    <style>
        /* Kamo na diri */
        /* Mubutang rako kung kailangan nako iri daan*/

        *{
            font-family: Arial, Helvetica, sans-serif;
            color: var(--textColor);
        }

        body{
            height: 100%;
        }

        .container{
            display: flex;
        }

        .left{
            height: 100vh;
            width: 50vw;
            background: #000; /* elisi ang #000. image ebutang. kopyaha rani "url(images/<name of image>)" */
        }

        .right{
            height: 100vh;
            width: 50vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input, .form button{
            padding: 5px 15px;
            width: 20vw;
        }

        .form{
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 30px;
            border: 2px solid black;
            border-radius: 25px;
        }

        .form button{
            background-color: var(--accent);
            display: block;
            margin: 0 auto;
            width: auto !important;
            border: 1px solid black;
        }

        label{
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">t</div>
        <div class="right">
            <form action="function/process.php" method="post">
                <div class="form">
                    <label>Enter your username: </label>
                    <input type="text" name="username" autocomplete="off">
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>