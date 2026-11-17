<?php
/**
 * 登録画面: templates/Pages/add.php
 */
?>
<div style="max-width: 500px; margin: 50px auto; padding: 20px; font-family: sans-serif; background-color: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
    
    <h1 style="text-align: center; color: #333; margin-bottom: 30px; font-size: 24px;">データ登録</h1>

    <!-- CakePHPのFormHelperを使ってフォームを開始します -->
    <?= $this->Form->create(null) ?>
    
    <div style="margin-bottom: 20px;">
        <!-- 「名前」を入力するテキストボックス -->
        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">お名前</label>
        <?= $this->Form->control('name', [
            'label' => false, 
            'type' => 'text', 
            'style' => 'width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;'
        ]) ?>
    </div>

    <div style="margin-bottom: 25px;">
        <!-- 「備考欄」を入力する少し大きめのテキストボックス（テキストエリア） -->
        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #555;">備考欄</label>
        <?= $this->Form->textarea('description', [
            'style' => 'width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; height: 100px; box-sizing: border-box;'
        ]) ?>
    </div>

    <div style="text-align: center; margin-bottom: 20px;">
        <!-- 送信ボタン -->
        <?= $this->Form->button('保存する', [
            'style' => 'display: block; width: 100%; height: 48px; line-height: 48px; padding: 0; background-color: #3498db; color: white; border: none; border-radius: 4px; font-weight: bold; font-size: 16px; cursor: pointer; text-align: center;'
        ]) ?>
    </div>

    <!-- フォームを終了します -->
    <?= $this->Form->end() ?>

    <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">

    <div style="text-align: center;">
        <!-- トップ画面（/）に戻るためのリンク -->
        <?= $this->Html->link('← トップ画面へ戻る', '/', [
            'style' => 'color: #7f8c8d; text-decoration: none; font-size: 14px;'
        ]) ?>
    </div>
</div>
