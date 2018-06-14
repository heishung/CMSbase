<script src="{{asset('libs/ckeditor/ckeditor.js')}}"></script>
<script>
    var config = {
        extraPlugins: 'embed,autoembed,youtube',
        height: '{{$h or 200}}',
        youtube_responsive: true,

        // Load the default contents.css file plus customizations for this sample.
        contentsCss: [CKEDITOR.basePath + 'contents.css', 'http://sdk.ckeditor.com/samples/assets/css/widgetstyles.css'],
        // Setup content provider. See http://docs.ckeditor.com/#!/guide/dev_media_embed
        embed_provider: '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}',
        "font_names": "Open Sans, Arial/Arial, Helvetica, sans-serif;Comic Sans MS/Comic Sans MS, cursive;Courier New/Courier New, Courier, monospace;Georgia/Georgia, serif;Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;Tahoma/Tahoma, Geneva, sans-serif;Times New Roman/Times New Roman, Times, serif;Trebuchet MS/Trebuchet MS, Helvetica, sans-serif;Verdana/Verdana, Geneva, sans-serif"
    };

    var elements = $('.ckeditor');
    elements.each(function (i, element) {
        var elementId = element.id;
        var editor = CKEDITOR.replace(elementId, config);
        CKFinder.setupCKEditor(editor);
    });

</script>