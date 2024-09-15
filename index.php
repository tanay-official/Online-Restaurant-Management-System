<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=10, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form,a{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 300px;
            font-size: 2rem;
        }  
    </style>

</head>

<body style="background-color: Blue ;" >
    
<form action="another.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <label for="username">Username/Email:</label>
                        <input type="text" id="username" name="username" placeholder="Enter Your Email or Username" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit">
                </div>
                
            </form>
            <a href="register1.php">
                New user? signup here.
            </a>    
</body>
</html>