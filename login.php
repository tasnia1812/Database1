
<?php include ('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: url('img/bg.avif') no-repeat center/ cover;
  -webkit-backdrop-filter: blur(5px);
  backdrop-filter: blur(5px);
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .container {
			
            display: flex;
            width: 900px;
            height: 500px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .left-panel {
            width: 50%;
            background: url('img/bg1.avif') no-repeat left/cover;
            background-position: bottom right;
			height: 100vh;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
        .left-panel h2 {
            font-size: 24px;
			padding: 10px;
			border-radius: 10px;
			
        }
        .left-panel p {
            color: #f8f9fd;
            font-size: 14px;
            margin-top: 10px;
        }
        .right-panel {
            width: 50%;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        .right-panel h2 {
            color:rgba(131, 35, 153, 0.73);
            margin-bottom: 10px;
        }
        .input-group {
            width: 100%;
            margin-bottom: 15px;
        }
        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
        }
        .input-group input:focus {
            border-color:rgba(131, 35, 153, 0.73);

        }
        .login_user {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background:rgba(131, 35, 153, 0.73);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .login_user:hover {
            background: #0056b3;
        }
		form {
    width: 100%;
    max-width: 350px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    background: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.input-group {
    display: flex;
    flex-direction: column;
}

.input-group label {
    font-size: 14px;
    color: #333;
    font-weight: 500;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
    background: #f8f9fd;
    transition: all 0.3s ease;
}

.input-group input:focus {
    border-color:rgba(131, 35, 153, 0.73);
    background: #ffffff;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
}

.btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 50px;
    background:rgba(131, 35, 153, 0.73);
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
    text-transform: uppercase;
}

.btn:hover {
    background:rgb(100, 26, 122);
}

p {
    font-size: 13px;
    text-align: center;
    color: #333;
}

p a {
    color:rgba(131, 35, 153, 0.73);
    text-decoration: none;
    font-weight: 500;
}

p a:hover {
    text-decoration: underline;
}

        .links {
            display: flex;
            justify-content: space-between;
            width: 100%;
            font-size: 12px;
            margin-top: 10px;
        }
        .links a {
            text-decoration: none;
            color: #007bff;
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
			
            <h2>WELCOME BACK</h2>
            <p>I see you've decided to finally show up. You know the drill. Login or goodbye.</p>

        </div>
        <div class="right-panel">
            <h2>Login Account</h2>
			<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
        </div>
    </div>
</body>
</html>

