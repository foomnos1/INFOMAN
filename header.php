<head>
    <style>
        header{
            display: flex;
            justify-content: space-between;
            padding: 0 50px;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            z-index: 1;
            background-color: white;
        }

        header .right{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        header .right input,
        header .right button{
            padding: 5px;
            border-radius: 15px;
            border: 1px solid #ccc;
        }

        header .right button{
            background-color: var(--accent);
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <h1>Lodging Reservation Management System</h1>
        </div>
        <div class="right">
            <form action="../function/process.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </header>
</body>