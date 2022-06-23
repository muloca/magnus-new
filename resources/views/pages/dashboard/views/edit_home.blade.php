<div class="animation-scroll">
    <sl-animation name="bounceIn" duration="2000" iterations="1" easing="ease-in-out">
        <div class="box">
            <h3>Magnus</h3>
        </div>
    </sl-animation>
</div>

<script>
    const container = document.querySelector('.animation-scroll');
    const animation = container.querySelector('sl-animation');
    const box = animation.querySelector('.box');

    // Watch for the box to enter and exit the viewport. Note that we're observing the box, not the animation element!
    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            // Start the animation when the box enters the viewport
            animation.play = true;
        } else {
            animation.play = false;
            animation.currentTime = 0;
        }
    });
    observer.observe(box);
</script>

<style>
    .animation-scroll .box {
        display: inline-block;
        width: 100px;
        height: 100px;
    }
</style>
