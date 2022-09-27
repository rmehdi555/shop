/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'fa';
	// config.uiColor = '#AADC6E';

    config.filebrowserBrowseUrl= '/ckfinder/browser';
        // Use named CKFinder connector route
    config.filebrowserUploadUrl= '/ckfinder/connector?command=QuickUpload&type=Files';
    config.filebrowserWindowWidth= '1000';
    config.filebrowserWindowHeight= '700';
	
	      config.contentsCss = 'http://www.wilsea.com/ckeditor2/fonts/fonts.css';
          config.contentsCss = 'http://fonts.googleapis.com/css?family=Lobster';
          config.contentsCss = 'http://fonts.googleapis.com/css?family=Cardo:400,400italic,700';
		  config.contentsCss = '/ckeditor/fonts.css';

//the next line add the new font to the combobox in CKEditor
         config.font_names =  'Hoefler Text/Hoefler Text;'+config.font_names;
         config.font_names =  'Cardo; serif;'+config.font_names;
		 config.font_names = 'IRANSans; Vazir;'+config.font_names;;
         config.font_names =  'serif;sans serif;monospace;cursive;fantasy;Lobster;'+config.font_names;

};
