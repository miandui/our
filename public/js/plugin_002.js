/**
 * Created by libo on 16/6/20.
 */
CKEDITOR.plugins.add('fillblank', {
    icons: 'fillblank',
    init: function(editor) {

        editor.addCommand('insertFillBlank', {
            exec: function(editor){
                editor.insertHtml('<span class="mod_fillblank">__</span>');
                $(editor.element.$).trigger('input');
            }
        });

        editor.ui.addButton('FillBlank', {
            label: '填空',
            command: 'insertFillBlank',
            toolbar: 'insert,0'
        });

    }
});
