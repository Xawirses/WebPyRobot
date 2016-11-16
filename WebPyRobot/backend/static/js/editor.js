(function ($) {
    $(function () {
        var cm = CodeMirror.fromTextArea(document.getElementById('ia'), {
            mode: 'python',
            theme: 'elegant',
            autoCloseBrackets: true,
            indentUnit: 4,
            lineNumbers: true,
            fixedGutter: true,
            matchBrackets: true,
            globalVars: true
        });
        $(".save").click(function (e) {
            e.preventDefault();
            $("#code").submit();
        });
        $("#code").submit(function () {
            alert("coucou");
            cm.save();
        });
    });
})(jQuery);
