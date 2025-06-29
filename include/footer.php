<footer>
    <!-- <div class="sitemap">
        <div class="sitemap-item">
            <h2>บริการด้านความงาม</h2>
            <p>ฉีดฟิลเลอร์</p>
            <p>ฉีดโบท็อก</p>
            <p>กระตุ้นคอลลาเจน</p>
            <p>เมโสหน้าใส</p>
            <p>รักษาผมร่วง</p>
            <p>สกินบูสเตอร์</p>
            <p>Coolsculpting</p>
            <p>เลเซอร์ขน Diode Laser</p>
        </div>
        
        <div class="sitemap-item">
            <h2>บริการด้านความงาม</h2>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
        </div>
        
        <div class="sitemap-item">
            <h2>บริการด้านความงาม</h2>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
        </div>
        
        <div class="sitemap-item">
            <h2>บริการด้านความงาม</h2>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
            <p>test</p>
        </div>
    </div> -->

    <div class="social-footer">
        <div class="social-item">
            <img src="/assets/webp/facebook_icon.webp" alt="">
            <p>Zeniq Pain Center</p>
        </div>
        <div class="social-item line">
            <img src="/assets/webp/line_icon.webp" alt="">
            <p>@zeniqholistic</p>
        </div>
        <div class="social-item tiktok">
            <img src="/assets/webp/tiktok_icon.webp" alt="">
            <p>Zeniq Pain Center</p>
        </div>
        <div class="social-item instragram">
            <img src="/assets/webp/instagram_icon.webp" alt="">
            <p>Zeniq Pain Center</p>
        </div>
    </div>

    <div class="info">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.623611385687!2d100.55121347576376!3d13.741222997537015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f0042548287%3A0x7646b2b3823c8e6!2sZeniq%20Holistic!5e0!3m2!1sth!2sth!4v1749632729004!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="info-item">
            <div class="row">
                <img src="/assets/svg/location.svg" alt="">
                <div>
                    <p>เซนิก โฮลิสติก คลินิก ชั้น B โรงแรมแลนด์มาร์ค กรุงเทพ (ติด BTS นานา) ประเทศไทย, 10110</p>
                </div>
            </div>
            <div class="row">
                <img src="/assets/svg/clock.svg" alt="">
                <div>
                    <p>เวลาทำการ: เปิด 09.00-21.00น.</p>
                </div>
            </div>
            <div class="row">
                <img src="/assets/svg/call.svg" alt="">
                <div>
                    <p>022559298</p>
                    <p>022559299</p>
                </div>
            </div>
            <div class="row">
                <img src="/assets/svg/phone.svg" alt="">
                <div>
                    <p>098-764-7222</p>
                    <p>098-764-8222</p>
                </div>
            </div>
            <div class="row">
                <img src="/assets/svg/mail.svg" alt="">
                <div>
                    <p>contact@zeniqholistic.com</p>
                </div>
            </div>
        </div>
    </div>
</footer>



<style>
    footer {
        width: 100%;
        display: flex;
        flex-direction: column;
        /* gap: 16px; */
        align-items: center;
        .sitemap {
            width: 100%;
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            .sitemap-item {
                h2 {
                    width: 100%;
                    text-align: center;
                    font-size: 18px;
                    font-weight: 500;
                    color: #7a491a;
                    margin-bottom: 8px;
                }
            }
        }
        .social-footer {
            background-color: #e5e5e5;
            /* background-color: #E3B86945; */
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 0;
            gap: 16px;
            .social-item {
                display: flex;
                align-items: center;
                padding: 8px;
                padding-right: 16px;
                border-radius: 8px;
                gap: 4px;
                background-color: #1778F2;
                color: #fff;
                img {
                    width: 32px;
                }
                p {
                    margin: 0;
                    margin-top: 4px !important;
                    font-weight: bold;
                }
                &.line {
                    background-color: #3ACD00;
                }
                &.tiktok {
                    background-color: #0C0C0C;
                }
                &.instragram {
                    background: linear-gradient(115deg, #f9ce34, #ee2a7b, #6228d7);
                }

            }
        }
        .info {
            width: 100%;
            background-color: #0C1B5CEE;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
            /* padding: 8px; */
            iframe {
                width: 100%;
                height: 350px;
            }
            .info-item {
                width: 100%;
                padding: 16px;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: space-between;
                .row {
                    display: flex;
                    gap: 8px;
                    align-items: center;
                    color: #fff;
                    font-size: 16px;
                    img {
                        width: 24px;
                        height: auto;
                    }
                }
            }
        }
    }

    @media only screen and (max-width:800px){
        footer {
            .social-footer {
                display: flex;
                flex-direction: column;
            }
        }
    }
</style>