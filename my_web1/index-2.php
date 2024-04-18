<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
    <main>
        <form action="form.php" method="post">
            <label for="firstname">名:</label>
            <input type="text" name="firstname" placeholder="填入名" required>
            <label for="lastname">姓:</label>
            <input type="text" name="lastname" placeholder="填入姓">

            <label for="q1">最愛的動物是?</label>
            <select name="q1" id="q1">
                <option value="none">none</option>
                <option value="dog">dog</option>
                <option value="cat">cat</option>
                <option value="bird">bird</option>

            </select>

            <button type="submit">提交</button>
        </form>
    </main>

    
</body>
</html>