$(function () {
    tui_init();

    $(document).on('pjax:success', function () {
        tui_init();
    });
});

function tui_init() {

    var editor1 = $('.tui-editor-default');

    editor1.each(function (index) {
        var tui_input = $(this);
        var tui_editor = $('<div id="input_' + index + '_0"></div>');

        tui_input.parent().append(tui_editor);

        var editor_tui = new tui.Editor({
            el: document.querySelector('#' + tui_editor.attr('id')),
            initialEditType: 'wysiwyg',
            previewStyle: 'vertical',
            initialValue: tui_input.val(),
            height: 'auto',
            events: {
                change: function () {
                    tui_input.val(editor_tui.getValue());
                }
            }
        });
    });

}
