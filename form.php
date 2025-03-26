<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявки</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="index.php" method="POST">
        <label>ФИО: <input type="text" name="fio" required pattern="[A-Za-zА-Яа-яЁё\s]+" maxlength="150"></label><br>
        <label>Телефон: <input type="tel" name="phone" required pattern="\+?[0-9]{11,15}"></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Дата рождения: <input type="date" name="birth_date" required></label><br>
        
        <label>Пол:</label>
        <input type="radio" name="gender" value="male" required> Мужской
        <input type="radio" name="gender" value="female"> Женский<br>
        
        <label>Любимый язык программирования:</label>
        <select name="languages[]" multiple required>
            <option value="1">Pascal</option>
            <option value="2">C</option>
            <option value="3">C++</option>
            <option value="4">JavaScript</option>
            <option value="5">PHP</option>
            <option value="6">Python</option>
            <option value="7">Java</option>
            <option value="8">Haskel</option>
            <option value="9">Clojure</option>
            <option value="10">Prolog</option>
            <option value="11">Scala</option>
            <option value="12">Go</option>
        </select><br>
        
        <label>Биография:</label><br>
        <textarea name="bio" rows="5" required></textarea><br>
        
        <label><input type="checkbox" name="agreement" required> С контрактом ознакомлен(а)</label><br>
        
        <input type="submit" value="Сохранить">
    </form>
</body>
</html>
