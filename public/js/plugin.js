/**
 * Created by Administrator on 2015/8/19.
 * Last Modified by Toti on 2017/9/11.
 * @description 这个插件的icon交给sprite管理，具体查找page_edit.less的.cke_button__tencentvideo_icon
 * 移置的时候注意这个耦合
 */
CKEDITOR.plugins.add('tencentvideo', {

    requires: ['dialog'],//依赖插件

    init: function(editor){
        var pluginName = 'tencentvideo';
        editor.addCommand(pluginName, new CKEDITOR.dialogCommand(pluginName));
        //添加按钮
        editor.ui.addButton('Tencentvideo', {
            label: '腾讯视频',
            command: pluginName
        });
        //显示弹窗
        CKEDITOR.dialog.add(pluginName, this.path + 'dialogs/tencentvideo.js');
    }
});
 