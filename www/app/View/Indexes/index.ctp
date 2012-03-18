<?php
$this->Html->scriptBlock("
$(function(){
    $('#roller').xgame({
        list: [
            '一気飲み',
            '変顔',
            '近くの人から肩パンチ',
            '変顔',
            '一発ギャグ',
            '全員からビンタ',
            '右隣の人からビンタ',
            '全員からシッペ',
            '右隣の人かシッペ',
            'ものまね'
        ],
        button: $('#button-wrapper input'),
        labelStart: 'スタート',
        labelStop: 'ストップ'
    });
});
", array('inline' => false));
?>
</script>
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
             <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
             <label for="radio-choice-1">合コン</label>
             <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2" checked="checked" />
             <label for="radio-choice-2">学校</label>
             <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3" checked="checked" />
             <label for="radio-choice-3">ホームパーティ</label>
             </fieldset>
        </div>
        <div data-role="collapsible" data-content-theme="c">
            <h3>ジャンル</h3>
            <fieldset data-role="controlgroup">
            <legend>ジャンルを選択:</legend>
             <input type="checkbox" name="checkbox-choice-1" id="checkbox-choice-1" value="choice-1" checked="checked" />
             <label for="checkbox-choice-1">ガテン系</label>
             <input type="checkbox" name="checkbox-choice-2" id="checkbox-choice-2" value="choice-2" checked="checked" />
             <label for="checkbox-choice-2">ものまね</label>
             <input type="checkbox" name="checkbox-choice-3" id="checkbox-choice-3" value="choice-3" checked="checked" />
             <label for="checkbox-choice-3">ネタ</label>
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