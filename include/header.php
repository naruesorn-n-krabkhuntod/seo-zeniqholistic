<header>
    <img src="/assets/webp/logo_crop.webp" alt="">
    <a href="/th">หน้าแรก</a>
    <div class="menu">
        <a href="/th/service.php">บริการ</a>
        <img src="/assets/svg/icon-menu.svg" alt="">
        <div class="dropdown">
            <a href="/th/aesthetic/test">กายภาพบำบัด</a>
            <a href="/th/aesthetic/test">บำบัดร่างกายด้วยความเย็น</a>
            <a href="/th/aesthetic/test">Shockwave</a>
            <a href="/th/aesthetic/test">PMS</a>
            <a href="">High power laser therapy</a>
            <a href="">ออฟฟิศซินโดรม</a>
        </div>
    </div>


    




    <!-- <div class="menu">
        <a href="/th/aesthetic">ชะลอวัย</a>
        <img src="/assets/svg/icon-menu.svg" alt="">
        <div class="dropdown">
            <a href="/th/aesthetic/test">โอโซนบำบัด</a>
            <a href="/th/aesthetic/test">PRP เกล็ดเลือด</a>
            <a href="/th/aesthetic/test">ดริปวิตามิน</a>
            <a href="/th/aesthetic/test">DFPP กรองเลือด</a>
            <a href="/th/aesthetic/test">IV laser therapy</a>
        </div>
    </div> -->
    <!-- <div class="menu">
        <a href="/th/aesthetic">กายภาพบำบัด</a>
        <img src="/assets/svg/icon-menu.svg" alt="">
        <div class="dropdown">
            <a href="/th/aesthetic/test">กายภาพบำบัด</a>
            <a href="/th/aesthetic/test">บำบัดร่างกายด้วยความเย็น</a>
            <a href="/th/aesthetic/test">Shockwave</a>
            <a href="/th/aesthetic/test">PMS</a>
            <a href="/th/aesthetic/test">High power laser therapy</a>
            <a href="/th/aesthetic/test">ออฟฟิศซินโดรม</a>
        </div>
    </div> -->
    <a href="/th/news.php">ข่าวสารและกิจกรรม <div class="noti"></div></a>
    <a href="/th/blog.php">สาระความรู้</a>
    <a href="/th/faq.php">คำถามที่พบบ่อย</a>
    <a href="/th/contact-us.php">ติดต่อเรา</a>
</header>

<style>
    header {
        top: 0;
        gap: 24px;
        width: 100%;
        padding: 8px 16px;
        display: flex;
        position: sticky;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid #0003;
        z-index: 888;
        background-color: #fff4;
        background: rgba(255, 255, 255, 0.8); /* Semi-transparent */
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(10px); /* For Safari */
        font-size: 1.1rem;
        img {
            width: 54px;
            height: 56px;
        }
        .menu {
            display: flex;
            align-items: center;
            position: relative;
            img {
                margin-top: 2px;
                width: 20px;
                filter: invert(33%) sepia(2%) saturate(6533%) hue-rotate(349deg) brightness(118%) contrast(104%);         
            }
            .dropdown {
                position: absolute;
                top: calc(100% - 8px);
                left: -8px;
                min-width: 200px;
                width: fit-content;
                height: 0px;
                background-color: #fff;
                border: none;
                overflow: hidden;
                a {
                    padding: 12px;
                    text-wrap: nowrap;
                    &:hover {
                        background-color: #0002;
                        transition: linear 0.2s;
                        color: #7B5F43;
                    }
                }
            }
            &:hover {
                .dropdown {
                    height: fit-content;
                    box-shadow: 0 0 5px 1px #0003;
                }   
                img {
                    rotate: -180deg;
                    transition: all 0.3s;
                }
            }
        }
        a {
            color: #7B5F43;
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
            &:hover {
                color: #bba285;
            }
            .noti {
                background-color: #f00;
                font-size: 10px;
                transform: translateY(-0.4rem);
                color: #fff;
                margin-left: 2px;
                border-radius: 100%;
                width: 8px !important;
                height: 8px !important;
            }
        }
    }
</style>