<div class="sharer">
    <span class="share-text">{{ __('global.share') }}</span>
    <a href="https://www.facebook.com/share.php?u={{ url()->current() }}" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="https://twitter.com/intent/tweet?text={{ $title }}&amp;url={{ url()->current() }}" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="whatsapp://send?text={{ url()->current() }}" data-action="share/whatsapp/share" target="_blank" class="sharer-whatsapp"><i class="fa fa-whatsapp"></i></a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ url()->current() }}&amp;title={{ $title }}" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="mailto:?subject={{ $title }}&amp;body={{ url()->current() }}"><i class="fa fa-envelope"></i></a>

    @isset($createdAt)
        <span class="post-date">{{  date("d.m.Y", strtotime($createdAt)) }}</span>
    @endisset
</div>