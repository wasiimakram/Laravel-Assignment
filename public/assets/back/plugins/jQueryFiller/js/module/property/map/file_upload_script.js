jQuery(document).ready(function($) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".map_image").filer({
            limit: 1,
            maxSize: 5,
            extensions: ['png','jpg','jpeg'],
            showThumbs: true,
            templates: {
                box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
                item: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                        <div class="jFiler-item-thumb">\
                                                <div class="jFiler-item-status"></div>\
                                                <div class="jFiler-item-thumb-overlay">\
                                                        <div class="jFiler-item-info">\
                                                                <div style="display:table-cell;vertical-align: middle;">\
                                                                      <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
                                                                        <span class="jFiler-item-others">{{fi-size2}}</span>\
                                                                </div>\
                                                        </div>\
                                                </div>\
                                                {{fi-image}}\
                                        </div>\
                                        <div class="jFiler-item-assets jFiler-row">\
                                                <ul class="list-inline pull-left">\
                                                        <li>{{fi-progressBar}}</li>\
                                                </ul>\
                                                <ul class="list-inline pull-right">\
                                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                                </ul>\
                                        </div>\
                                </div>\
                        </div>\
                    </li>',
                itemAppend: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                        <div class="jFiler-item-thumb">\
                                                <div class="jFiler-item-status"></div>\
                                                <div class="jFiler-item-thumb-overlay">\
                                                        <div class="jFiler-item-info">\
                                                                <div style="display:table-cell;vertical-align: middle;">\
                                                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name}}</b></span>\
                                                                        <span class="jFiler-item-others">{{fi-size2}}</span>\
                                                                </div>\
                                                        </div>\
                                                </div>\
                                                {{fi-image}}\
                                        </div>\
                                        <div class="jFiler-item-assets jFiler-row">\
                                                <ul class="list-inline pull-left">\
                                                        <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                                </ul>\
                                                <ul class="list-inline pull-right">\
                                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                                </ul>\
                                        </div>\
                                </div>\
                        </div>\
                </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: false,
                canvasImage: true,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-items-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action'
                }
            },
            dragDrop: {
                dragEnter: null,
                dragLeave: null,
                drop: null,
                dragContainer: null,
            },
            uploadFile: {
                // url:route('ajax_upload_image'),
                url: baseUrl + "ajax_upload_image",
                data: null,
                type: 'POST',
                enctype: 'multipart/form-data',
                synchron: true,
                beforeSend: function () {
                    $('#additem').hide();
                },
                success: function (data, itemEl, listEl, boxEl, newInputEl, inputEl, id) {
                    var parent = itemEl.find(".jFiler-jProgressBar").parent(),
                            new_file_name = JSON.parse(data),
                            filerKit = inputEl.prop("jFiler");
                    filerKit.files_list[id].name = new_file_name;
                    $('#map_attached_div').append('<input type="hidden" class="uploaded-pictures" name="map_uplaoded_image" value="' + new_file_name.metas[0].name + '" />');
                    $('#map_attached_div').append('<input type="hidden" class="" name="testM" value="ABC" />');
                    itemEl.find(".jFiler-jProgressBar").fadeOut("slow", function () {
                        $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
                    });
                    $('#additem').show();
                },
                error: function (el) {
                    console.log(el);
                    var parent = el.find(".jFiler-jProgressBar").parent();
                    el.find(".jFiler-jProgressBar").fadeOut("slow", function () {
                        $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                    });
                    $('#additem').show();
                },
                statusCode: null,
                onProgress: null,
                onComplete: null
            },
            files: null,
            addMore: false,
            allowDuplicates: true,
            clipBoardPaste: true,
            excludeName: null,
            beforeRender: null,
            afterRender: null,
            beforeShow: null,
            beforeSelect: null,
            onSelect: null,
            afterShow: null,
            onRemove: function (itemEl, file, id, listEl, boxEl, newInputEl, inputEl) {
                var filerKit = inputEl.prop("jFiler"),
                        file_name = filerKit.files_list[id].name;
                delete_image(file_name.metas[0].name);
            },
            onEmpty: null,
            options: null,
            dialogs: {
                alert: function (text) {
                    return alert(text);
                },
                confirm: function (text, callback) {
                    confirm(text) ? callback() : null;
                }
            },
            captions: {
                button: "Choose Files",
                feedback: "Choose Photo Files to Upload",
                feedback2: "files were chosen",
                drop: "Drop file here to Upload",
                removeConfirmation: "Are you sure you want to remove this file?",
                errors: {
                    filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                    filesType: "Only Images are allowed to be uploaded.",
                    filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                    filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
                }
            }
        });
});
function delete_image(file_name, obj){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // var url = route('ajax_remove_image');
    // $.post(url, {file_name: file_name});
    $.post(baseUrl + 'jax_remove_image', {file_name: file_name});
    $('.uploaded-pictures').each(function () {
        if ($(this).val() === file_name) {
            $(this).remove();
        }
    });
    $(obj).closest('li').hide('slow', function () {
        $(obj).closest('li').remove();
    });
}
