<div id="endoliftx-popup" class="popup">
    <img onclick="document.getElementById('endoliftx-popup').innerHTML = ``; document.getElementById('endoliftx-popup2').classList.remove('hidden')" src="/assets/svg/close.svg" class="close">
    <img src="/assets/popup/512673333_122113406786894745_3648449795670535635_n.jpg" alt="">
</div>

<!-- <div id="endoliftx-popup2" class="popup hidden">
    <img onclick="document.getElementById('endoliftx-popup2').innerHTML = ``" src="/assets/svg/close.svg" class="close">
    <img src="/assets/popup/endoliftx2.webp" alt="">
</div>

<div id="endoliftx-popup3" class="popup hidden">
    <img onclick="document.getElementById('endoliftx-popup3').innerHTML = ``;" src="/assets/svg/close.svg" class="close">
    <iframe src="https://www.youtube.com/embed/4fbiMRB0GTE?si=S2rFXBI20Lt24Vs7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div> -->



<style>
    .popup {
        display: flex;
        flex-direction: column;
        align-items: end;
        justify-content: center;
        position: fixed;
        top: 50%;
        left: 50%;
        translate: -50% -50%;
        z-index: 999999;
        img:not(.close), iframe {
            height: 70dvh !important;
            box-shadow: 0 0 100vw 100vw #0008;
            /* border: 1px solid #fff; */
        }
        .close {
            width: 24px;
            height: 24px;
            margin-right: -24px;
            cursor: pointer;
            z-index: 999;
        }
        &.hidden {
            display: none;
        }
        iframe {
            aspect-ratio: 16/9;
            height: auto;
        }
    }
        
</style>