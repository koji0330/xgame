<?php
$this->Html->scriptBlock("
$(function(){
    $('#roller').xgame({
        button: $('#button-wrapper input'),
        labelStart: 'スタート',
        labelStop: 'ストップ'
    });
    $('form input, form select').on('change', function(){
        $.ajax({
            url: '/motions/json/',
            data: $('form').serialize(),
            dataType: 'json',
            success: function(json){
                $('#roller').xgame('setList', json);
            }
        });
    }).trigger('change');
});
", array('inline' => false));
?>
<div data-role="page">
<div data-role="header">
    <h1>罰ゲームジェネレータ</h1>
</div><!-- /header -->
<div data-role="content" id="content">
    <div id="roller-wrapper">
        <div id="roller"></div>
        <div id="button-wrapper">
            <input type="button" value="start / stop" data-inline="true" data-theme="a">
        </div>
    </div>
    <form method="get" action="./">
        <div data-role="collapsible-set">
<!--
            <div data-role="collapsible" data-content-theme="c">
                <h3>シーン</h3>
                <fieldset data-role="controlgroup">
                <legend>シーンを選択:</legend>
                <?php
                echo $this->Form->input('scene', array(
                    'options' => $scenes,
                    'legend' => false
                )); ?>
                </fieldset>
            </div>
-->
            <div data-role="collapsible" data-content-theme="c">
                <h3>ジャンル</h3>
                <fieldset data-role="controlgroup">
                <legend>ジャンルを選択:</legend>
                <?php
                echo $this->Form->input('category', array(
                    'options' => $categories,
                    'multiple' => 'checkbox',
                    'selected' => array_keys($categories),
                    'label' => false
                )); ?>
                 </fieldset>
            </div>
        </div>
    </form>
</div><!-- /content -->
</div>
