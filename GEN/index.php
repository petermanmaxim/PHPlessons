<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GEN</title>
</head>
<body>
<div>
<form action="receiver.php" method="post">
    <p>Name: <input type="text" name="name"><br></p>

    <p>Grupa: <select name="grupa">
            <option value="Is31z">Is31z</option>
            <option value="Mi31z">Mi31z</option>
            <option value="Gi31z">Gi31z</option>
              </select>
    </p>

    <p>Половой род:<br></p>
    <label>М<input type="radio" name="people" value="man"></label>
    <label>Ж<input type="radio" name="people" value="woman"></label>

    <p>Ваш(и) разговорный(ые) язык(и):<br></p>
    <label><input type="checkbox" name="lang[]" value="Русский">Русский</label>
    <label><input type="checkbox" name="lang[]" value="Румынский">Румынский</label>
    <label><input type="checkbox" name="lang[]" value="Английский">Английский</label>
    <p>Выберите курсы: <br>
        <select name="courses[]" size="5" multiple="multiple">
            <option value="ASP.NET">ASP.NET</option>
            <option value="PHP">PHP</option>
            <option value="Ruby">RUBY</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
        </select></p>

    <p><input type="submit" value="go" name="bath"/><br></p>
</form>
</div>
</body>
</html>
