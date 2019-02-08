<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Practick 3</title>
</head>
<body>
    <section>
        <div>
        <h1>Регистрация</h1>
        <form action="all.php" method="POST">
            <input type="text" name="UserName" placeholder="Имя" autocomplete="off"> 
            <input type="text" name="UserLastName" placeholder="Фамилия" autocomplete="off" >
            <input type="text" name="UserFatherName" placeholder="Отчество" autocomplete="off" >
            <input type="email" name ="Email" placeholder="Email" autocomplete="off" >
            <input type="password" name="Password" placeholder="Пароль"   autocomplete="off">
            <input type="text" name="Login" placeholder="Логин" autocomplete="off" >
            
            <label for="College">Ваше учебное заведение:
                <select name="college" id="college">
                    <option>РКСИ</option>
                    <option>МГУ</option>
                    <option>MIT</option>
                    <option>ЮФУ</option>
                    <option>ДГТУ</option>
                </select>
            </label>
            
            <label for="course">Ваш курс:</label>
            <fieldset>
                <label for="one"><input type="radio" name="course" id="one" value="one" checked> 1 курс</label>
                <label for="two"><input type="radio" name="course" id="two" value="two"> 2 курс</label>
                <label for="three"><input type="radio" name="course" id="three" value="three"> 3 курс</label>
                <label for="four"><input type="radio"name="course" id="four" value="four"> 4 курс</label>
                <label for="five"><input type="radio" name="course" id="five" value="five"> 5 курс</label>
            </fieldset>
            <input type="submit" value="Зарегистрироваться">
        </form>    
        </div>
    </section>    
</body>
</html>