<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulär med get å post</h1>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $postData = $_POST;
    } else {
        $postData = array();
    }
    ?>

    <h2>post formulär</h2> 
    <form method="POST">
        <label for="post_name">Namn:</label>
        <input type="text" id="post_name" name="name" value="<?php echo htmlspecialchars($postData['name'] ?? ''); ?>">
        
        <label for="post_email">E-mail:</label>
        <input type="email" id="post_email" name="email" value="<?php echo htmlspecialchars($postData['email'] ?? ''); ?>">
        
        <button type="submit">Skicka</button>
    </form>

    <?php if (!empty($postData)): ?>
        <h2>get (data från post)</h2>
        <form method="GET"> 
            <label for="get_name">Namn:</label>
            <input type="text" id="get_name" name="name" value="<?php echo htmlspecialchars($postData['name'] ?? ''); ?>" readonly>
            
            <label for="get_email">E-mail:</label>
            <input type="email" id="get_email" name="email" value="<?php echo htmlspecialchars($postData['email'] ?? ''); ?>" readonly>
        </form>
    <?php endif; ?>
</body>
</html>