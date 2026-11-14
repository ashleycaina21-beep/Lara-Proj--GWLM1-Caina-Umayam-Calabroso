
document.addEventListener('DOMContentLoaded', () => {
    const stage = document.querySelector('.noir-stage');
    if (!stage) return;

    const videos = [...stage.querySelectorAll('.noir-film')];
    const prev = stage.querySelector('.noir-prev');
    const next = stage.querySelector('.noir-next');
    const name = stage.querySelector('.noir-scene-name');
    const count = stage.querySelector('.noir-scene-count');
    const progress = stage.querySelector('.noir-progress-fill');

    if (!videos.length) return;

    const titles = [
        'THE FIRST POUR',
        'THE VELVET BLEND',
        'THE GOLDEN RITUAL'
    ];

    const reducedMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    let current = 0;
    let timer = null;

    // Remove conflicting CSS animations from the videos.
    videos.forEach(video => {
        video.style.setProperty('animation', 'none', 'important');
        video.style.setProperty('transition', 'none', 'important');
        video.muted = true;
    });

    // Create the cinematic golden light effect.
    const spotlight = document.createElement('div');
    spotlight.className = 'noir-js-spotlight';
    spotlight.setAttribute('aria-hidden', 'true');

    Object.assign(spotlight.style, {
        position: 'absolute',
        inset: '0',
        zIndex: '1',
        pointerEvents: 'none',
        opacity: '0',
        background: `radial-gradient(
            ellipse at 65% 45%,
            rgba(201,164,106,.30),
            transparent 65%
        )`
    });

    stage.appendChild(spotlight);

    function play(video) {
        video.muted = true;

        const promise = video.play();
        if (promise) promise.catch(() => {});
    }

    function animateSpotlight() {
        if (reducedMotion) return;

        spotlight.getAnimations().forEach(a => a.cancel());

        spotlight.animate([
            {
                opacity: 0,
                transform: 'translateX(-12%) scale(.8)'
            },
            {
                opacity: .85,
                transform: 'translateX(5%) scale(1.2)',
                offset: .45
            },
            {
                opacity: 0,
                transform: 'translateX(12%) scale(1.4)'
            }
        ], {
            duration: 2400,
            easing: 'ease-in-out'
        });
    }

    function showScene(index, firstLoad = false) {
        const target = (index + videos.length) % videos.length;
        if (!firstLoad && target === current) return;

        const oldIndex = current;
        current = target;

        videos.forEach((video, i) => {
            video.getAnimations().forEach(a => a.cancel());

            video.classList.remove('is-active', 'is-leaving');

            if (i !== current && i !== oldIndex) {
                video.pause();
                video.style.zIndex = '0';
            }
        });

        const incoming = videos[current];
        const outgoing = videos[oldIndex];

        incoming.classList.add('is-active');
        incoming.style.zIndex = '3';

        if (!firstLoad && outgoing !== incoming) {
            outgoing.classList.add('is-leaving');
            outgoing.style.zIndex = '2';

            if (!reducedMotion) {
                const exit = outgoing.animate([
                    {
                        opacity: 1,
                        transform: 'scale(1)',
                        filter: 'blur(0px) brightness(.75)'
                    },
                    {
                        opacity: 0,
                        transform: 'translateX(-12%) scale(1.25)',
                        filter: 'blur(22px) brightness(.2)'
                    }
                ], {
                    duration: 1350,
                    easing: 'ease-in-out',
                    fill: 'forwards'
                });

                exit.onfinish = () => {
                    outgoing.pause();
                    outgoing.classList.remove('is-leaving');
                };
            } else {
                outgoing.pause();
            }
        }

        try {
            incoming.currentTime = 0;
        } catch (error) {}

        play(incoming);

        if (!reducedMotion) {
            incoming.animate([
                {
                    opacity: 0,
                    transform: 'translateX(18%) scale(1.4)',
                    filter: 'blur(28px) brightness(.2)'
                },
                {
                    opacity: .7,
                    transform: 'translateX(4%) scale(1.1)',
                    filter: 'blur(6px) brightness(.6)',
                    offset: .6
                },
                {
                    opacity: 1,
                    transform: 'translateX(0) scale(1)',
                    filter: 'blur(0px) brightness(.78)'
                }
            ], {
                duration: 1800,
                easing: 'cubic-bezier(.16,1,.3,1)'
            });

            animateSpotlight();
        }

        if (name) name.textContent = titles[current];

        if (count) {
            count.textContent =
                String(current + 1).padStart(2, '0') +
                ' / ' +
                String(videos.length).padStart(2, '0');
        }

        if (progress) {
            progress.style.setProperty('animation', 'none');
            void progress.offsetWidth;
            progress.style.removeProperty('animation');

            progress.classList.remove('is-running');
            void progress.offsetWidth;

            if (!reducedMotion) {
                progress.classList.add('is-running');
            }
        }
    }

    function restartTimer() {
        clearInterval(timer);

        if (!reducedMotion && !document.hidden) {
            timer = setInterval(() => {
                showScene(current + 1);
            }, 9000);
        }
    }

    prev?.addEventListener('click', () => {
        showScene(current - 1);
        restartTimer();
    });

    next?.addEventListener('click', () => {
        showScene(current + 1);
        restartTimer();
    });

    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            clearInterval(timer);
            videos.forEach(video => video.pause());
        } else {
            play(videos[current]);
            restartTimer();
        }
    });

    // Reveal collection cards on scroll.
    const reveals = document.querySelectorAll('.noir-reveal');

    if ('IntersectionObserver' in window && !reducedMotion) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: .12 });

        reveals.forEach(el => observer.observe(el));
    } else {
        reveals.forEach(el => el.classList.add('is-visible'));
    }

    // Play videos in collection when visible.
    const collection = document.querySelectorAll(
        '[data-collection-video]'
    );

    if ('IntersectionObserver' in window && !reducedMotion) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                const video = entry.target;
                if (entry.isIntersecting && !document.hidden) {
                    video.play().catch(() => {});
                } else {
                    video.pause();
                }
            });
        }, { threshold: .3 });

        collection.forEach(video => observer.observe(video));
    }

    showScene(0, true);
    restartTimer();
});
