/* global tinymce, MakeIconPicker */
var MakeIconPicker = MakeIconPicker || {};

(function(tinymce, picker) {
	tinymce.PluginManager.add('ttfmake_icon_picker', function (editor, url) {
		editor.addCommand('Make_Icon_Picker', function () {
			picker.open(editor, function(value, unicode) {
				if ('undefined' !== unicode) {
					var icon = ' <span class="ttfmake-icon mceNonEditable fa">&#x' + unicode + ';</span> ';
					editor.insertContent(icon);
				}
			});
		});

		editor.addButton('ttfmake_icon_picker', {
			icon   : 'ttfmake-icon-picker',
			tooltip: 'Insert Icon',
			cmd    : 'Make_Icon_Picker'
		});
	});
})(tinymce, MakeIconPicker);