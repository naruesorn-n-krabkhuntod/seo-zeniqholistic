<div class="banner">
    <!-- <div class="slider-container" id="slider">
        <img src="/assets/webp/Endoliftx-ยกกระชับด้วยเลเซอร์_converted.webp" alt="">
        <img src="/assets/webp/กายภาพบำบัด-เพื่อฟื้นฟูกล้ามเนื้อ_converted.webp" alt="">
        <img src="/assets/webp/ศูนย์สุขภาพและความงาม_converted.webp" alt="">
        <img src="/assets/webp/ศูนย์ฟิ้นฟูและชะลอวัย_converted.webp" alt="">
        <img src="/assets/webp/คลินิกดูแลผิวพรรณความงาม-โดยแพทย์เฉพาะทาง_converted.webp" alt="">
    </div> -->
    <div class="slider-container" id="slider">
        <img src="/assets/jpg/TEST BANNER.jpg" alt="">
        <img src="/assets/jpg/TEST BANNER.jpg" alt="">
        <img src="/assets/jpg/TEST BANNER.jpg" alt="">
        <img src="/assets/jpg/TEST BANNER.jpg" alt="">
    </div>


    <button onclick="scrollAction(-1); isAutoScroll = false;">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
        </svg>
    </button>
    <button onclick="scrollAction(1); isAutoScroll = false;">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
            fill="#f    ````````````````````````````````````````````````1   q9  1q2fffff">
            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
        </svg>
    </button>
    <div id="slider-nav"></div>
</div>

<script>
    let scrollIndex = 0;
    let isAutoScroll = true;
    function scrollAction(mode) {
        scrollIndex += mode;
        if (scrollIndex == document.getElementById("slider").children.length) scrollIndex = 0;
        else if (scrollIndex < 0) scrollIndex = document.getElementById("slider").children.length - 1
        document.getElementById("slider").scrollTo({ left: window.innerWidth * scrollIndex, behavior: "smooth" });
        scrollNaviget()
    }
    function scrollNaviget() {
        document.getElementById("slider-nav").innerHTML = '';
        for (let index = 0; index < document.getElementById("slider").children.length; index++) {
            let dot = document.createElement('div');
            if (index == scrollIndex) dot.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" width="20px" fill="#333"><path d="M480.19-252Q385-252 318.5-318.31T252-479.81q0-95.19 66.31-161.69t161.5-66.5q95.19 0 161.69 66.31t66.5 161.5q0 95.19-66.31 161.69T480.19-252Z"/></svg>`;
            else dot.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 -960 960 960" width="16px" fill="#333"><path d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-160q100 0 170-70t70-170q0-100-70-170t-170-70q-100 0-170 70t-70 170q0 100 70 170t170 70Z"/></svg>`
            document.getElementById("slider-nav").appendChild(dot)
        }
    }
    setInterval(() => {
        if (isAutoScroll) scrollAction(1);
    }, 3000);
    scrollNaviget()
</script>

<style>
    .banner {
            position: relative;
            width: 100%;
            height: fit-content;

            button {
                background-color: #0006;
                border: none;
                position: absolute;
                top: 50%;
                left: 8px;
                border-radius: 5px;
                rotate: 180deg;
                translate: 0 -50%;

                svg {
                    height: 64px;
                    width: 40px;
                    margin-left: 2px;
                    fill: #fff;
                }

                &+button {
                    right: 8px;
                    left: unset;
                    rotate: unset;
                }
            }

            #slider-nav {
                position: absolute;
                bottom: 8px;
                left: 50%;
                translate: -50% 0;
                display: flex;
                align-items: center;
                gap: 4px;
                background-color: #fff3;
                padding: 2px 4px;
                border-radius: 16px;
            }

            .slider-container {
                width: 100%;
                display: flex;
                align-items: center;
                overflow-x: scroll;
                scroll-snap-type: x mandatory;
                scroll-behavior: smooth;
                scrollbar-width: none;
                -ms-overflow-style: none;

                &::-webkit-scrollbar {
                    display: none;
                }

                img {
                    width: 100%;
                    scroll-snap-align: center;
                    flex-shrink: 0;
                }
            }
        }
</style>