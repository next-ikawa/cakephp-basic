<?php
/**
 * 独自の新しいトップ画面: templates/Pages/top.php
 */
$this->disableAutoLayout(); // 枠組みを自作するためCakePHP標準のレイアウトをオフにします
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>マイ・トップ画面</title>
</head>
<body style="font-family: sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">

    <div style="text-align: center; margin-top: 100px;">
        <h1 style="color: #333;">トップ画面</h1>
        
        <div style="margin-top: 40px;">
            <!-- 「登録」ボタン -->
            <?= $this->Html->link('登録', '/add', ['class' => 'button']) ?>
            
            <!-- 【修正】「一覧」ボタンのリンク先を /list に変更 -->
            <?= $this->Html->link('一覧', '/list', ['class' => 'button', 'style' => 'background-color: #2ecc71;']) ?>
            
            <!-- 【修正】「出力」ボタンのリンク先を /output に変更 -->
            <?= $this->Html->link('出力', '/output', ['class' => 'button', 'style' => 'background-color: #9b59b6;']) ?>
        </div>
    </div>

    <style>
        /* 簡単なボタンの見た目（装飾用） */
        .button {
            display: inline-block;
            padding: 12px 30px;
            margin: 0 15px;
            color: white;
            background-color: #3498db;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 16px;
            transition: opacity 0.2s;
        }
        .button:hover {
            opacity: 0.8;
        }
    </style>

</body>
</html>

