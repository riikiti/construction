<div class="footer">
    <div class="footer-logo" id="scroll-to-top1">
        @if(!empty($logo['image_logo']))
            <img src="{{$logo['image_logo']}}" alt="{{$logo['image_logo']}}">
        @else
            {{$logo['text_logo']}}
        @endif
    </div>
</div>

<script>
    document.getElementById('scroll-to-top1').addEventListener('click', function () {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
</script>