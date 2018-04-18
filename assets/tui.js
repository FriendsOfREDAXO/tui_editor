$(function () {
    tui_init();

    // $(document).on('pjax:end', function () {
    // tui_init();
    // });
});

function tui_init() {

    var editor = new tui.Editor({
        el: document.querySelector('#editSection'),
        initialEditType: 'markdown',
        previewStyle: 'vertical',
        height: 'auto',
        minHeight: '200px',
        events: {
            change: function(){
                $('#formEditSection').val(editor.getValue());
            }
        }
    });


    // $('#REX_FORM').addEventListener('submit', function() {
    //     $('#editSectionText').val(editor.getValue());
    //
    //     return false;
    // });

}

