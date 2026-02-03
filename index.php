<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulär med GET och POST</h1>
    
    <?php
    // Hantera POST-data
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $postData = $_POST;
    } else {
        $postData = array();
    }
    
    $getData = $_GET;
    ?>

    <h2>GET-formulär</h2>
    <form method="GET">
        <label for="get_name">Namn:</label>
        <input type="text" id="get_name" name="name" value="<?php echo htmlspecialchars($getData['name'] ?? ''); ?>">
        
        <label for="get_email">E-mail:</label>
        <input type="email" id="get_email" name="email" value="<?php echo htmlspecialchars($getData['email'] ?? ''); ?>">
        
        <button type="submit">Skicka GET</button>
    </form>

    /*/ Exact samma som get men post moethod istället /*/
    <h2>POST-formulär</h2>
    <form method="POST">
        <label for="post_name">Namn:</label>
        <input type="text" id="post_name" name="name" value="<?php echo htmlspecialchars($postData['name'] ?? ''); ?>">
        
        <label for="post_email">E-mail:</label>
        <input type="email" id="post_email" name="email" value="<?php echo htmlspecialchars($postData['email'] ?? ''); ?>">
        
        <button type="submit">Skicka POST</button>
    </form>

    <?php if (!empty($postData)): ?>
        <h2>Data från POST-formulär</h2>
        <ul>
            <?php foreach ($postData as $key => $value): ?>
                <li><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if (!empty($getData)): ?>
        <h2>Data från GET-formulär</h2>
        <ul>
            <?php foreach ($getData as $key => $value): ?>
                <li><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>