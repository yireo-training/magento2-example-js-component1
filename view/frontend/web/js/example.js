define([
    "jquery"
], function ($) {

    "use strict";

    var example = function (config) {

        var element = config.element;
        var text = config.text;

        var message = '[ExampleJsComponent] Message = ' + text;
        $(element).html(message);
        console.log(message);
    };

    return example;
});