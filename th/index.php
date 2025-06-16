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

                &:hover {
                    translate: 0 -8px;
                }

                
            }
        }

        .vid {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            gap: 24px;

            iframe {
                width: 50%;
                aspect-ratio: 16/9;
                height: auto;
                box-shadow: 0 0 8px 1px #ccc;
            }

            div {
                width: 50%;
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
        <div class="container home">
            <!-- <h2>โปรโมชั่น</h2> -->
            <h2>โปรโมชั่นพิเศษจาก Zeniq Holistic </h2>
            <div class="promotion">
                <div class="promotion-item">
                    <img src="/assets/webp/promotion01.webp" alt="">
                </div>
                <div class="promotion-item">
                    <img src="/assets/webp/promotion02.webp" alt="">
                </div>
                <div class="promotion-item">
                    <img src="/assets/webp/promotion03.webp" alt="">
                </div>
            </div>
        </div>


        <div class="container home">
            <div class="medical">
                <img src="/assets/webp/final-th-1536x1536_converted.webp" alt="">
                <div class="medical-data">


                    <h2>ทีมแพทย์ Zeniq Holistic</h2>
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
            <iframe src="https://www.youtube.com/embed/4fbiMRB0GTE?si=S2rFXBI20Lt24Vs7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <div class="fullwidth">
            <div class="container home">
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
            </div>
        </div>
        


        <!-- SERVICE -->
        <!-- <div class="container home">
            <h2>บริการจาก Zeniq Holistic</h2>
            <div class="service">
                <div class="item">
                    <img src="/assets/webp/Aesthetics-Therapy_converted.webp" alt="">
                    <h3>ผิวพรรณและความงาม</h3>
                    <p>การปรับรูปหน้าแบบไม่ผ่าตัด ด้วยเทคโนโลยีใหม่ Endolifts, โบทูลินัม ท็อกซิน และฟิลเลอร์
                        เพื่อผิวหน้าที่อ่อนเยาว์ ดูเป็นธรรมชาติ</p>
                    <button>
                        ดูบริการเพิ่มเติม
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#7a491a">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </button>
                </div>
                <div class="item">
                    <img src="/assets/webp/Anti-aging-Longevity_converted.webp" alt="">
                    <h3>เวชศาสตร์ชะลอวัย</h3>
                    <p>ดูแลสุขภาพแบบองค์รวม ด้วยการบำบัดเซลล์ อย่าง พร้อมคำแนะนำในการปรับเปลี่ยนพฤติกรรม เพื่อคุณภาพชีวิตที่ดีขึ้น</p>
                    <button>
                        ดูบริการเพิ่มเติม
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#7a491a">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </button>
                </div>
                <div class="item">
                    <img src="/assets/webp/Rehab-Physiotherapy_converted.webp" alt="">
                    <h3>กายภาพบำบัด</h3>
                    <p>ฟื้นฟูร่างกายให้แข็งแรง ด้วยโปรแกรมเฉพาะบุคคล บำบัดอาการบาดเจ็บจากการเล่นกีฬา และการรักษาอาการปวดแบบองค์รวม</p>
                    <button>
                        ดูบริการเพิ่มเติม
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#7a491a">
                            <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- REVIEWS -->
        <?php include('../include/reviews.php'); ?>



        <!-- <div class="container home">
            <h2>บริการพิเศษจากเรา</h2>
            <h3>เพื่อตอบสนอง ความต้องการเฉพาะคุณ จาก Zeniq Holistic</h3>
            <div class="other-service">
                <div class="service-item">
                    <img style="padding: 12px 0;" src="/assets/webp/endoliftx.webp" alt="">
                    <p>EndoliftX ยกกระชับไม่ต้องผ่าตัด</p>
                </div>
                <div class="service-item">
                    <img src="/assets/webp/coolscrupting.webp" alt="">
                    <p>ลายไขมันด้วยความเย็น</p>
                </div>
                <div class="service-item">
                    <img style="padding: 20px 0;" src="/assets/webp/IVDrip.webp" alt="">
                    <p>ดริปวิตามินเฉพาะบุคคล</p>
                </div>
                <div class="service-item">
                    <img style="padding: 19px 0;" src="/assets/webp/cell.png" alt="">
                    <p>บริการเซลล์บำบัด</p>
                </div>
                <div class="service-item">
                    <img style="padding: 22px 0;" src="/assets/webp/Sexual-Wellness.webp" alt="">
                    <p>บริการเพื่อสุขภาพทางเพศ</p>
                </div>
                <div class="service-item">
                    <img style="padding: 20px 0;" src="/assets/webp/Spine.webp" alt="">
                    <p>กายภาพบำบัด และกระดูกสันหลัง</p>
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