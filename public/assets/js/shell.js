$(document).ready(function () {
    //ck editor configuration
    CKEDITOR.config.height = 440;
    CKEDITOR.config.allowedContent = true;
    CKEDITOR.config.protectedSource.push(/<i[^>]*><\/i>/g);

    var leftColumn = $('#left-column');

    $('#lang-tabs').find('li:first-child > a').trigger('click');

    /* 
    //mark current
    leftColumn.find('ul.left-menu>li').each(function () {
        var elem = $(this);
        if (elem.data("controller") === leftColumn.data('current')) {
            elem.addClass('active');
        }
    }); */

    //show alert message
    if ($('#alert-message').length > 0) {
        setTimeout(function () {
            $('#alert-message').fadeOut();
        }, 5000);
    }

    //mobile
    $('#menu-switch').click(function () {
        leftColumn.find('#menu-holder').slideToggle();
    });

    var folders = [];
    var currentFolder = null;
    var currentInput, featuredMedia;
    var mediaPicker = $('#media-picker');
    var mediaToolbar = mediaPicker.find('#media-toolbar');
    var mediaItems = mediaPicker.find('#media-items');
    var mediaUpload = mediaPicker.find('#media-upload');
    var mediaUploadFolder = mediaPicker.find('#input-upload-folder');
    var galleryItems = $('#gallery-items');
    var isGallery = false;
    var mediaType = "image";
    var form = $('#page-wrapper > form');

    mediaToolbar.on('click', '.btn-folder', function () {
        var elem = $(this);
        currentFolder = elem.data('folder');
        loadMedias();
        mediaToolbar.find('.btn-folder.active').removeClass('active');
        elem.addClass('active');
        return false;
    });
    mediaToolbar.find('.form-control').on("input", function () {
        var filter = $(this).val().toLowerCase();
        mediaItems.find('.media-item').each(function () {
            var elem = $(this);
            if (elem.find('p').text().toLowerCase().indexOf(filter) > -1) {
                elem.show();
            } else {
                elem.hide();
            }
        });
    });

    mediaPicker.find('#btn-apply').click(function () {
        if (isGallery) {
            var currentGalleryItems = [];
            galleryItems.find('.media-item').each(function () {
                currentGalleryItems.push($(this).data('media-id'));
            });
            mediaPicker.find('.media-item.active').each(function () {
                var elem = $(this);
                elem.removeClass('active');
                if (!currentGalleryItems.includes(elem.data('media-id'))) {
                    elem.clone().appendTo(galleryItems);
                }
            });
        } else {
            var activeMediaItem = mediaItems.find('.media-item.active');
            if (activeMediaItem.length > 0) {
                var featuredHtml = '';
                if (mediaType === "image") {
                    var newSrc = activeMediaItem.find('img').attr('src');
                    newSrc = newSrc.replace("uploads/cache", "uploads").replace("-library.", ".");
                    featuredHtml = '<img src="' + newSrc + '">';
                } else {
                    var iconClass = 'file';
                    if (mediaType === "audio" || mediaType === "video") {
                        iconClass = 'play-circle';
                    }
                    featuredHtml = '<i class="fa fa-' + iconClass + '"></i><p>' + activeMediaItem.find('p').text() + '</p>';
                }
                featuredMedia.html(featuredHtml);
                currentInput.val(activeMediaItem.data('media-id'));
            }
        }
        mediaPicker.hide();
        return false;
    });
    mediaPicker.find('#btn-cancel').click(function () {
        mediaPicker.hide();
        return false;
    });
    mediaPicker.find('#btn-remove-media').click(function () {
        featuredMedia.html('');
        currentInput.val('');
        mediaPicker.hide();
        mediaItems.find('.media-item.active').removeClass('active');
        return false;
    });
    mediaPicker.find('#btn-upload-media').click(function () {
        mediaUploadFolder.val(currentFolder);
        mediaUpload.css('display', 'flex');
    });

    mediaUpload.submit(function () {
        mediaUpload.addClass('uploading');
        var data = new FormData(mediaUpload[0]);
        $.ajax({
            url: '/shell/media/upload',
            type: 'POST',
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response > 0) {
                    if (folders.includes(mediaUploadFolder.val())) {
                        if (currentFolder == mediaUploadFolder.val()) {
                            loadMedias();
                        }
                    } else {
                        loadFolders(false);
                    }
                }
            },
            error: function (error) {
                console.log(error.responseText);
            },
            complete: function () {
                mediaUpload.removeClass('uploading').hide();
            }
        });
        return false;
    });
    mediaUpload.find('#btn-cancel-upload').click(function () {
        mediaUpload.hide();
        return false;
    });

    $('.pick-media').click(function () {
        var elem = $(this);
        isGallery = elem.hasClass('multiple');
        currentInput = elem.parent().find('input');
        featuredMedia = elem.parent().find('.featured-media');

        if (featuredMedia.data('type') != mediaType) {
            mediaItems.empty();
        }

        mediaType = featuredMedia.data('type');
        mediaPicker.show();

        if (folders.length < 1) {
            loadFolders(true);
        } else {
            if (mediaItems.find('.media-item').length < 1) {
                mediaToolbar.find('.btn-folder:nth-child(2)').trigger('click');
            }
        }
        return false;
    });

    mediaItems.on('click', '.pagination .page-link', function () {
        loadMedias($(this).attr('href').split('?page=')[1]);
        return false;
    });

    mediaPicker.on('click', '.media-item', function () {
        var elem = $(this);
        if (isGallery) {
            elem.toggleClass('active');
        } else {
            mediaPicker.find('.media-item.active').removeClass('active');
            elem.addClass('active');
        }
    });

    form.submit(function () {
        if (galleryItems.length > 0) {
            var mediaIDs = [];
            galleryItems.find('.media-item').each(function () {
                var elem = $(this);
                if (mediaIDs.indexOf(elem.data('media-id')) > -1) {
                    elem.remove();
                } else {
                    mediaIDs.push(elem.data('media-id'));
                }
            });
            galleryItems.parent().find('input').val(mediaIDs.join());
        }
    });

    if (galleryItems.length > 0) {
        new Sortable(galleryItems[0], { animation: 200 });
    }

    function loadFolders(populateFirstFolder = false) {
        mediaToolbar.find('.btn-folder').remove();

        $.ajax({
            url: "/shell/media-folders",
            method: 'GET',
            dataType: 'json',
            success: function (result) {
                folders = result;
                $.each(folders, function (index, item) {
                    if (item === null) {
                        item = "";
                    }
                    mediaToolbar.append('<button class="btn btn-folder btn-sm" data-folder="' + item + '"><i class="fa fa-folder"></i> ' + item + '</button> ');
                });
                if (populateFirstFolder) {
                    mediaToolbar.find('.btn-folder:nth-child(2)').trigger('click');
                }
            }
        });
    }

    function loadMedias(page = 1)
    {
        mediaItems.empty();
        var data = {
            type: mediaType,
            page: page
        };
        if (currentFolder !== "") {
            data.folder = currentFolder;
        }

        $.ajax({
            url: "/shell/media-thumbnails",
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (html) {
                mediaItems.html(html);
                mediaItems.find('.media-item').each(function () {
                    var elem = $(this);
                    if (elem.data('media-id') == currentInput.val()) {
                        elem.addClass('active');
                    }
                });
            }
        });
    }

    galleryItems.on('click', '.media-item', function () {
        $(this).remove();
    });

});