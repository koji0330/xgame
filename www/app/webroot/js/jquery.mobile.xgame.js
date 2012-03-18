(function($, undefined) {

/**
 * jQuery Mobile XGAME 0.1
 *
 * @fileOverfiew  XGAME GENERATOR Widget
 * @version       0.1
 * @name          $.mobile.xgame
 * @namespace     xgame mobile widget
 *
 * @requires
 *   jquery.mobile-1.0.js
 *   jquery-1.6.4.js
 *
 * @example
 * $('div[data-role="content"]').xgame({
 *   // option parameters
 * });
 *
 */
/**
 * TODO:
 * シーンで選ぶ	飲み会、ホームパーティー、学校、会社、合コン
 * ジャンルで選ぶ	ガテン系、秘密の打ち明け、ものまね、ドキドキ
 */

$.mobile.xgame = function(){};
$.widget("mobile.xgame",
/**
 * @lends  $.mobile.xgame.prototype
 */
{
    /**
     * Default settings for the xgame widget.
     *
     * @namespace Default settings for xgame widget
     * @extends   $.mobile.xgame
     */
    options: {
        /**
         * List
         *
         * @type    Array
         */
        list: undefined,
        /**
         * Interval start value
         *
         * @type    Number
         * @default 100
         */
        intervalStart: 100,
        /**
         * Interval step value
         *
         * @type    Number
         * @default 100
         */
        intervalStep: 100,
        /**
         * Interval end value
         *
         * @type    Number
         * @default 700
         */
        intervalEnd: 700,
        /**
         * View count
         *
         * @type    Number
         * @default 4
         */
        viewCount: 4,
        /**
         * Start button label
         *
         * @type    String
         * @default 'Start'
         */
        labelStart: 'Start',
        /**
         * Stop button label
         *
         * @type    String
         * @default 'Stop'
         */
        labelStop: 'Stop',
        /**
         * Roller box element
         *
         * @type    jQuery Object
         */
        roller: undefined,
        /**
         * Button element
         *
         * @type    jQuery object
         */
        button: undefined
    },
    /**
     * Run flag
     *
     * @type    Boolean
     */
    run: false,
    /**
     * List element
     *
     * @type    jQuery object
     */
    ul: $('<ul></ul>'),
    /**
     * Initialize
     */
    _init: function(){
        var _self = this;
        _self._initRoller();
        _self._initButton();
    },
    /**
     * Initialize roller
     */
    _initRoller: function(){
        var _self = this,
            index,
            pushList,
            i;
        _self.element.append(_self.ul);
        for(i = _self.options.viewCount; i !== 0; i--){
            index = Math.floor(Math.random() * _self.options.list.length),
            pushList = $('<li>' + _self.options.list[index] + '</li>');
            _self.ul.append(pushList);
        }
    },
    /**
     * Initialize button
     */
    _initButton: function(){
        var _self = this;
        _self.options.button.parent().find('.ui-btn-text').text(_self.options.labelStart);
        _self.options.button.bind('click', function(){
            _self.run = !_self.run;
            if(_self.run){
                _self.interval = _self.options.intervalStart;
                _self._wheel();
                $(this).parent().find('.ui-btn-text').text(_self.options.labelStop);
            }else{
                $(this).val('Start');
                $(this).parent().find('.ui-btn-text').text(_self.options.labelStart);
            }
            return false;
        });
    },
    /**
     * Wheel
     */
    _wheel: function(){
        var _self = this,
            index = Math.floor(Math.random() * _self.options.list.length),
            pushList = $('<li>' + _self.options.list[index] + '</li>');
        _self.ul.animate({'marginTop': '-=1.25em'}, _self.interval, 'linear', function(){
            _self.ul.css({'marginTop': '-0.375em'}).append(pushList).find('li:first-child').remove();
            if(_self.run){
                _self._wheel();
            }else{
                _self.interval += _self.options.intervalStep;
                if(_self.interval < _self.options.intervalEnd){
                    _self._wheel();
                }
            }
        });
    },
    setList: function(list){
        var _self = this;
        _self.options.list = list;
    }
});
}(jQuery));
