
// NOIR CAFE — FINAL ENHANCEMENTS
// Does not replace the existing home.js

document.addEventListener('DOMContentLoaded', () => {

    // Fix coffee collection videos
    const clips = [
        ...document.querySelectorAll(
            '.noir-product-media video'
        )
    ];

    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    clips.forEach(video => {
        video.muted = true;
        video.loop = true;
        video.playsInline = true;
        video.preload = 'metadata';

        function ready() {
            video.classList.add('noir-ready');
        }

        video.addEventListener('loadeddata', ready);
        video.addEventListener('canplay', ready);

        if (video.readyState >= 2) {
            ready();
        }

        video.addEventListener('error', () => {
            console.warn(
                'NOIR video failed:',
                video.querySelector('source')?.src
            );
        });

        video.load();
    });

    function updateClips() {
        clips.forEach(video => {
            const bounds = video.getBoundingClientRect();

            const visible =
                bounds.bottom > 0 &&
                bounds.top < window.innerHeight &&
                !document.hidden;

            if (visible && !reduceMotion) {
                const playback = video.play();

                if (playback) {
                    playback.catch(() => {});
                }
            } else {
                video.pause();
            }
        });
    }

    if (clips.length) {
        window.addEventListener(
            'scroll',
            updateClips,
            { passive: true }
        );

        document.addEventListener(
            'visibilitychange',
            updateClips
        );

        updateClips();
    }

    // Contact form demo
    const form = document.getElementById(
        'noir-demo-contact'
    );

    form?.addEventListener('submit', event => {
        event.preventDefault();

        if (!form.reportValidity()) return;

        const feedback = document.getElementById(
            'noir-form-feedback'
        );

        if (feedback) {
            feedback.textContent =
                'Demo only. Your message was not sent.';
        }
    });

});
