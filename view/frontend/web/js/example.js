define([
    "jquery"
], function ($) {

    "use strict";

    var example = function (config, element) {

        var text = config.text;

        var message = '[ExampleJsComponent1] Message = ' + text;
        $(element).html(message);
        console.log(message);
    };

    return example;
});
