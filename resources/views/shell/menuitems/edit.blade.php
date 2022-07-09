@extends('shell.shared.layout')

@section('content')
    <h2 class="page-header">Menü Düzenle: {{ $position . " - " . $language }}</h2>

    <form id="menu-form" action="{{ route('menuitems.save') }}" method="POST">
        @csrf
        <input type="hidden" name="position" value="{{ $position }}" />
        <input type="hidden" name="language" value="{{ $language }}" />
        <input type="hidden" id="Value" name="Value" value="" />

        <ul id="menu-tree">
            @foreach($menuItems as $menuItem)
                @component('shell.menuitems.menuitem', ['menuItem' => $menuItem])
                @endcomponent
            @endforeach
        </ul>

        <hr />

        <div class="row justify-content-end">
            <div class="col-lg-4 col-xl-3">
                <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
            </div>
        </div>

        <div class="modal" id="edit-menu-item">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Metin: </label>
                            <input type="text" id="input-text" class="form-control" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <label>Bağlantı</label>
                            <input type="text" id="input-link" class="form-control" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <input id="input-private" type="checkbox" name="private" /> <label for="input-private">Üyelere Özel</label>
                        </div>
                        <div class="form-group">
                            <input id="input-newtab" type="checkbox" name="newtab" /> <label for="input-newtab">Yeni Sekmede Aç</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btn-modal-cancel" type="button" class="btn btn-secondary">Vazgeç</button>
                        <button id="btn-modal-apply" type="button" class="btn btn-primary">Uygula</button>
                    </div>
                </div>
            </div>
        </div>
    
    </form>

@endsection

@push('scripts')

    <script type="text/javascript">
        $(document).ready(function () {
            var menuItemHtml = '<div class="menu-item"><span class="text">metin</span><span class="link">link</span><span class="private"></span><span class="newtab"></span><div class="btn-group btn-group-sm"><button type="button" class="btn btn-primary btn-edit">Düzenle</button><button type="button" class="btn btn-info btn-add">Yeni Ekle</button><button type="button" class="btn btn-info btn-add-sub">Alt Menü Ekle</button><button type="button" class="btn btn-danger btn-delete">Sil</button></div></div>';

            var menuTree = $('#menu-tree');
            var modal = $('#edit-menu-item');
            var modalText = modal.find('#input-text');
            var modalLink = modal.find('#input-link');
            var modalPrivate = modal.find('#input-private');
            var modalNewTab = modal.find('#input-newtab');

            menuTree.on('click', '.btn-delete', function () {
                var listItem = $(this).parent().parent().parent();
                var ulItem = listItem.parent();
                listItem.remove();
                if (ulItem.find('>li').length < 1) {
                    ulItem.remove();
                }
                return false;
            });

            menuTree.on('click', '.btn-add', function () {
                var listItem = $(this).parent().parent().parent();
                listItem.after('<li>' + menuItemHtml + '</li>');
                return false;
            });

            menuTree.on('click', '.btn-add-sub', function () {
                var listItem = $(this).parent().parent().parent();
                if (listItem.find('>ul').length < 1) {
                    listItem.append('<ul><li>' + menuItemHtml + '</li></ul>');
                }
                return false;
            });

            menuTree.on('click', '.btn-edit', function () {
                var menuItem = $(this).parent().parent();
                menuItem.addClass('menu-item-being-edited');
                modalText.val(menuItem.find('span.text').text());
                modalLink.val(menuItem.find('span.link').text());
                if (menuItem.find('span.private>i').length > 0) {
                    modalPrivate.prop('checked', true);
                } else {
                    modalPrivate.prop('checked', false);
                }
                if (menuItem.find('span.newtab>i').length > 0) {
                    modalNewTab.prop('checked', true);
                } else {
                    modalNewTab.prop('checked', false);
                }

                modal.modal('show');
                return false;
            });

            modal.find('#btn-modal-apply').click(function () {
                var menuItemBeingEdited = menuTree.find('.menu-item-being-edited');
                menuItemBeingEdited.find('span.text').text(modalText.val());
                menuItemBeingEdited.find('span.link').text(modalLink.val());
                if (modalPrivate.is(':checked')) {
                    menuItemBeingEdited.find('span.private').html('<i class="fa fa-user-secret"></i>');
                } else {
                    menuItemBeingEdited.find('span.private').html('');
                }

                if (modalNewTab.is(':checked')) {
                    menuItemBeingEdited.find('span.newtab').html('<i class="fa fa-external-link"></i>');
                } else {
                    menuItemBeingEdited.find('span.newtab').html('');
                }

                menuItemBeingEdited.removeClass('menu-item-being-edited');
                modal.modal('hide');
                return false;
            });

            modal.find('#btn-modal-cancel').click(function () {
                menuTree.find('.menu-item-being-edited').removeClass('menu-item-being-edited');
                modal.modal('hide');
                return false;
            });

            function calculateSubTree(ul) {
                var result = [];
                ul.find('>li').each(function () {
                    var listItem = $(this);
                    var menuItem = listItem.find('>.menu-item');

                    var data = {
                        text: menuItem.find('span.text').text(),
                        link: menuItem.find('span.link').text(),
                        private: menuItem.find('span.private>i').length > 0,
                        newtab: menuItem.find('span.newtab>i').length > 0
                    };

                    if (listItem.find('>ul').length > 0) {
                        data.children = calculateSubTree(listItem.find('>ul'));
                    }
                    result.push(data);
                });
                return result;
            }

            $('#menu-form').submit(function(){
                var result = calculateSubTree(menuTree);
                $('input#Value').val(JSON.stringify(result));
            });
        });
    </script>

@endpush