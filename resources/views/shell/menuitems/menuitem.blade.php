<li>
    <div class="menu-item">
        <span class="text">{{ $menuItem->title }}</span><span class="link">{{ $menuItem->url }}</span>
        <span class="private">
            @if($menuItem->private)
                <i class="fa fa-user-secret"></i>
            @endif
        </span>
        <span class="newtab">
            @if($menuItem->newtab)
                <i class="fa fa-external-link"></i>
            @endif
        </span>
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-primary btn-edit">Düzenle</button>
            <button type="button" class="btn btn-info btn-add">Yeni Ekle</button>
            <button type="button" class="btn btn-info btn-add-sub">Alt Menü Ekle</button>
            <button type="button" class="btn btn-danger btn-delete">Sil</button>
        </div>
    </div>
    @if($menuItem->children->count() > 0)
        <ul>
            @foreach($menuItem->children as $child)
                @component('shell.menuitems.menuitem', ['menuItem' => $child])
                @endcomponent
            @endforeach
        </ul>
    @endif
</li>