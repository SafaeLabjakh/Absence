<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page d'Authentification</title>
    <style>
        body {
     background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: pink;
}

.container {
    background-image: linear-gradient(to top, #d48704, #e82f7f);
    background-repeat: no-repeat;;
    padding: 20px;
    border-radius: 20px;
    border-color:rgb(127, 14, 33);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
    max-width: 300px;
    margin: auto;
}

label {
    margin-top: 10px;
}

input, select, button {
    margin-top: 5px;
    padding: 10px;
    background-color: antiquewhite;
}
.btn{
    border-radius: 30px;
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 30px;
    color: black;
    font-size: 20px;
}
.btn:hover{
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
}
.sign{
    background-color:transparent;
    border: none;
    font-size: 20px;
}

    </style>
</head>
<body>

    <div class="container">
          <form method="post" action="trait.php">
            <label for="role">Sélectionnez votre rôle:</label>
            <select name="role"  required>
                <option value="etudiant">Etudiant</option>
                <option value="professeur">Professeur</option>
            </select>
            <label >Email:</label>
            <input type="email"  name="email" placeholder="your mail" required>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" placeholder="your password" required>
            <button class="btn" name="sub" type="submit">Se connecter</button>
            </form>
            <button class="sign">You don't have an account? <a href="registre.html">Sign up Now</a></button>
    </div>
        
</body>
</html>

