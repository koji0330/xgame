<?php
$this->Html->scriptBlock("
$(function(){
    $.ajax({
        url: '/motions/json/',
        dataType: 'json',
        success: function(json){
            $('#roller').xgame({
                list: json,
                button: $('#button-wrapper input'),
                labelStart: 'スタート',
                labelStop: 'ストップ'
            });
        }
    });
    $('input[name=\"data[scene]\"], input[name=\"data[Category][]\"]').on('change', function(){
        console.log($('input[name=\"data[scene]\"][checked]').val());
        console.log($('input[name=\"data[Category][]\"]').val());
        $.ajax({
            url: '/motions/json/',
            dataType: 'json',
            success: function(json){
                $('#roller').xgame('setList', json);
            }
        });
    });
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
    <div data-role="collapsible-set">
        <div data-role="collapsible" data-content-theme="c">
            <h3>シーン</h3>
            <fieldset data-role="controlgroup">
            <legend>シーンを選択:</legend>
            <?php echo $this->Form->radio('scene', $scenes, array('legend' => false)); ?>
            </fieldset>
        </div>
        <div data-role="collapsible" data-content-theme="c">
            <h3>ジャンル</h3>
            <fieldset data-role="controlgroup">
            <legend>ジャンルを選択:</legend>
            <?php echo $this->Form->input('Category', array('options' => $categories, 'multiple' => 'checkbox', 'legend' => false)); ?>
             </fieldset>
        </div>
    </div>
</div><!-- /content -->
<!--
<div data-role="footer" data-position="fixed" class="ui-bar">
    <a href="#config" data-role="button" data-icon="gear">Config</a>
    <a href="#config" data-role="button" data-icon="info">Help</a>
</div>
-->
<!-- /footer -->
</div>