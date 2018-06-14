/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';

    config.filebrowserBrowseUrl = '/filemanager?type=Files';
    config.filebrowserUploadUrl = '/filemanager/upload?type=Files&_token=';
    config.filebrowserImageBrowseUrl = '/filemanager?type=Images';
    config.filebrowserImageUploadUrl = '/filemanager/upload?type=Images&_token='
};
