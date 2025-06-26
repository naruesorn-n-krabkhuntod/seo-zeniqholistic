<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeniq Holistic</title>
    <link rel="stylesheet" href="/assets/css/style.css">

    <style>
        #header-placeholder {
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .service {
            display: flex;
            width: 100%;
            gap: 32px;

            .item {
                width: 100%;
                display: flex;
                flex-direction: column;

                h3 {
                    text-align-last: left;
                    font-size: 28px !important;
                    font-weight: 500 !important;
                    margin: 0 !important;
                }

                p {
                    height: 100px;
                }

                img {
                    width: 100%;
                }
            }

        }

        .medical {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            gap: 32px;

            img {
                width: 50% !important;
            }

            .medical-data {
                width: 50%;

                h2,
                h3 {
                    text-align-last: left;
                }

                button {
                    margin-top: 16px;
                }
            }
        }

        .other-service {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 8px;

            .service-item {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 8px;
                border: 1px solid #ccc;
                align-items: center;
                border-radius: 8px;
                box-shadow: 2px 2px 4px 1px #e5e5e5;

                &:hover {
                    scale: 1.01;
                    transition: 0.3s;
                    /* background-color: #e5e5e5; */
                }

                img {
                    width: auto;
                    height: 120px;
                }

                p {
                    font-size: 18px;
                    text-align: center;
                }
            }
        }

        .partner {
            display: grid;
            align-items: center;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 128px;
            img {
                width: 100%;
            }
        }

        .promotion {
            display: flex;
            align-items: start;
            flex-wrap: nowrap;
            gap: 16px;

            .promotion-item {
                width: 100%;
                box-shadow: 0 0 4px 1px #e5e5e5;
                border: 1px solid #ccc;

                video {
                    width: 100%;
                }
                iframe {
                    width: 100%;
                    height: auto;
                    aspect-ratio: 9/16;
                }

                
            }
        }

        .vid {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: space-between;
            gap: 24px;

            div {
                width: 70%;
            }
            video {
                width: 30%;
            }
            iframe {
                width: 30% !important;
                aspect-ratio: 3/4 !important;
                height: auto !important;
            }
            p {
                color: #fff;
            }
            h2 {
                color: #fff !important;
            }
        }

        .blog {
            display: flex;
            flex-wrap: nowrap;
            gap: 8px;
            .blog-item {
                border: 1px solid #ccc;
                background-color: #fff;
            }
            p {
                margin-top: 8px;
                padding: 0 8px;
            }
            h3 {
                padding: 0 8px;
            }
        }
    </style>

</head>

<body>
    <!-- Header -->
    <?php include('../include/header.php'); ?>

    <!-- POPUP -->
    <?php include('../include/popup.php'); ?>

    <!-- BANNER -->
    <?php include('../include/banner.php'); ?>


    <main>

        <!-- SERVICE -->
        <div class="container home">
            <h2>บริการจาก Zeniq Pain Center</h2>
            <div class="service">
                <div class="item">
                    <img src="/assets/webp/4_converted.webp" alt="">
                    <h3>RF Dicectomy</h3>
                    <p>ใช้คลื่นความถี่วิทยุ (RF) เพื่อรักษาหรือบรรเทา แรงกดทับที่หมอนรองกระดูกสันหลัง ลดอาการปวด</p>
                    <button>
                        ดูบริการเพิ่มเติม
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#7a491a">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </button>
                </div>
                <div class="item">
                    <img src="/assets/webp/8_converted.webp" alt="">
                    <h3>Epidural Steroid Injection</h3>
                    <p>ฉีดยาสเตียรอยด์รอบๆกระดูกสันหลัง เพื่อบรรเทาอาการปวด จากการอักเสบในคอหรือหลัง โดยเฉพาะการกดทับของเส้นประสาท หรือ อาการหมอนรองกระดูกสันหลัง</p>
                    <button>
                        ดูบริการเพิ่มเติม
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#7a491a">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </button>
                </div>
                <div class="item">
                    <img src="/assets/webp/10_converted.webp" alt="">
                    <h3>Caudal Epidural Ballon</h3>
                    <p>การใช้บอลลูนขยายช่องเอพิดูรัล (พื้นที่ระหว่างกระดูกสันหลังและเยื่อหุ้มสมอง) เพื่อช่วยรักษาในสภาวะโพรงกระดูกสันหลังตีบ</p>
                    <button>
                        ดูบริการเพิ่มเติม
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#7a491a">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>


        <div class="container home">
            <div class="medical">
                <img src="/assets/jpg/medical team.jpg" alt="">
                <div class="medical-data">
                    <h2>ทีมแพทย์ Zeniq Pain Center</h2>
                    <p>ที่ Zeniq Holistic เราภาคภูมิใจในทีมแพทย์ผู้เชี่ยวชาญที่มากประสบการณ์ในการรักษาที่ครบวงจร
                        อีกทั้งยังมีระบบการดูแลที่เน้นผู้ป่วยเป็นศูนย์กลาง คอยให้คำปรึกษาและวางแผนการรักษาที่ตรงจุด
                        ตอบโจทย์ความต้องการเฉพาะบุคคล
                        เพื่อให้ผู้ป่วยได้รับการรักษาที่ดีที่สุดและมีสุขภาพที่แข็งแรงอย่างยั่งยืน</p>
                    <button>
                        ดูข้อมูลเพิ่มเติม
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#7a491a">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="fullwidth" style="background-color:#0C1B5CEE;">
            <div class="container home vid">
                <div>
                    <h2>ชีวิตที่ยั่งยืน: เริ่มต้นด้วยสุขภาพที่ดี</h2>
                    <p>Zeniq Holistic เชื่อว่าการมีชีวิตที่ยืนยาวและมีคุณภาพนั้น เริ่มต้นจากการดูแลสุขภาพแบบองค์รวม
                        ไม่ว่าจะเป็นร่างกาย จิตใจ หรืออารมณ์ เราจึงนำเสนอการรักษาที่ผสมผสานทั้งเทคโนโลยีและการรักษาแบบธรรมชาติ
                        เพื่อช่วยให้คุณมีสุขภาพแข็งแรงและมีชีวิตชีวาอย่างยั่งยืน ไม่ว่าจะเป็นการปรับพฤติกรรมชีวิต
                        การดูแลสุขภาพเชิงป้องกัน หรือการใช้นวัตกรรมทางการแพทย์ที่ทันสมัย</p>
                    <p>สุดท้ายเพราะเราเข้าใจว่าทุกคนมีความต้องการและเป้าหมายที่แตกต่างกัน
                        เราจึงมุ่งมั่นที่จะสร้างแผนการดูแลสุขภาพที่เป็นส่วนตัวและตอบโจทย์ความต้องการของคุณทั้งในวันนี้และในปีต่อ
                        ๆ ไป</p>
                </div>
                <!-- <video src="/assets/video/การปวดหลังเกิดได้หลายปัจจัย.mp4" controls autoplay muted></video> -->
                <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F61576842373479%2Fvideos%2F1696560804308917%2F&show_text=false&width=380&t=0" width="380" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

            </div>
        </div>
        

        <div class="container home">
            <!-- <h2>โปรโมชั่น</h2> -->
            <h2>คลิปวีดีโอ สาระความรู้ดีๆ จาก Zeniq Pain Center </h2>
            <div class="promotion">
                <div class="promotion-item">
                    <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F61576842373479%2Fvideos%2F24649541144647575%2F&show_text=false&width=267&t=0" width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>

                <div class="promotion-item">
                    <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F61576842373479%2Fvideos%2F724920716692099%2F&show_text=false&width=267&t=0" width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>
                <div class="promotion-item">
                    <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F61576842373479%2Fvideos%2F983596043670636%2F&show_text=false&width=267&t=0" width="267" height="476" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                </div>
            </div>
        </div>


        

        <!-- REVIEWS -->
        <?php include('../include/reviews.php'); ?>


        <!-- <div class="container home">
            <h2>สาระความรู้ดีๆ ที่ Zeniq Holistic </h2>
            <div class="blog">
                <div class="blog-item">
                    <img src="/assets/webp/blog/Endolift-ยกกระชับผิวหน้า-1024x637.webp" alt="">
                    <h3>EndoliftX คืออะไร? ยกหน้าให้ตึงกระชับ กู้ผิวหย่อนคล้อย ไม่ต้องผ่าตัด</h3>
                    <p>อัพเดตเมื่อ อัพเดตเมื่อ 22 เมษายน 2025</p>
                </div>
                <div class="blog-item">
                    <img src="/assets/webp/blog/ดริปผิวกับฉีดผิวต่างกันอย่างไร-1024x637.webp" alt="">
                    <h3>EndoliftX คืออะไร? ยกหน้าให้ตึงกระชับ กู้ผิวหย่อนคล้อย ไม่ต้องผ่าตัด</h3>
                    <p>อัพเดตเมื่อ อัพเดตเมื่อ 22 เมษายน 2025</p>
                </div>
                <div class="blog-item">
                    <img src="/assets/webp/blog/สาเหตุ-หน้าแก่ก่อนวัย-เกิดจาก_1024x637.webp" alt="">
                    <h3>EndoliftX คืออะไร? ยกหน้าให้ตึงกระชับ กู้ผิวหย่อนคล้อย ไม่ต้องผ่าตัด</h3>
                    <p>อัพเดตเมื่อ อัพเดตเมื่อ 22 เมษายน 2025</p>
                </div>
            </div>
        </div> -->

        <div class="container home">
            <h2>พันธมิตรผู้เชี่ยวชาญ เพื่อสุขภาพและความงามที่ยั่งยืน</h2>
            <div class="partner">
                <!-- <img src="/assets/webp/zbyzeniq-logo.webp" alt=""> -->
                <img src="/assets/webp/prolab-logo.webp" alt="">
                <img src="/assets/webp/landmark-logo.webp" alt="">
                <img src="/assets/webp/inspireivf-logo.webp" alt="">
                <img src="/assets/webp/dusit-logo.webp" alt="">
            </div>
        </div>
        <div class="container">
        </div>

    </main>
    <?php include('../include/footer.php'); ?>
</body>

</html>