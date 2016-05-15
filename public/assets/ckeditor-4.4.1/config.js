/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'zh-cn';
	config.skin = 'bootstrapck';
	// config.uiColor = '#AADC6E';
	config.toolbarCanCollapse = true;
	config.toolbarStartupExpanded = false;

	// Method 2
	// var csrf = '{{csrf_token()}}' ;
	// config.filebrowserImageUploadUrl= "{{ route($resource.'.postUploadGallery',$data->id) }}?csrf_token="+csrf;

	// Method 3
	// config.filebrowserImageUploadUrl= "localhost/laravel/public/upload.php";

	// Method 1
	// var csrf = '{{csrf_token()}}' ;
	// CKEDITOR.replace( '.editor11', {
	//         filebrowserUploadUrl: '{{URL::action("AdminArticlesController@postUploadToArt",$article->id)}}?csrf_token='+csrf

	//     });
	config.toolbar =
	[
	['Styles','Format','Font','FontSize'],
	['TextColor','BGColor'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	'/',
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	];
};

