<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    
    <title>LOGIN</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="POST">
                <h1>Create Account</h1>
                
                <div class="input-container">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="name" placeholder="Name" required>
                </div>

                <div class="input-container">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-container">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                
                <button type="submit">Create Account</button>
            </form>
        </div>

        
        <div class="form-container sign-in">
            <form action="login.php" method="POST">
                <h1>Sign In</h1>

                <div class="input-container">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-container">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                
                <button type="submit">Log In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hello!</h1>
                    <p>Already have an account? Log in now</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome</h1>
                    <p>Don't have an account? Sign up now!</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>

     
    </div>

    <script src="register.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
