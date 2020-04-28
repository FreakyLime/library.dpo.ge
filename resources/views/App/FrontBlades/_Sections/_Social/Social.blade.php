<div class="share-row"> <strong class="title">{{ trans('web.share') }}:</strong>
    <ul>
        <li><a target="_blank" href="https://www.facebook.com/sharer.php?u={{ url()->current() }}"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/home?status={{ url()->current() }}"><i class="fa fa-twitter"></i></a></li>
        <li><a target="_blank" href="https://plus.google.com/share?url={{ url()->current() }}"><i class="fa fa-google-plus"></i></a></li>
        <li><a target="_blank" href="https://pinterest.com/pin/create/button/?url=&media={{ url()->current() }}&description="><i class="fa fa-pinterest"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title=&summary=&source="><i class="fa fa-linkedin"></i></a></li>
    </ul>
</div>

