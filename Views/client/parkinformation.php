<style>
    .park-information-page {
        margin-top: 70px;
    }

    h1 {
        font-size: 36px;
    }

    .icon-info {
        width: 36px;
    }

    .map {
        width: 100%;
        height: 400px;
    }

    .contact-container {
        gap: 3%;
    }

    .park-introduce,
    .park-aim,
    .park-guide,
    .park-contact {
        padding: 40px 100px;
    }

    .title-introduce,
    .title-aim,
    .title-guide {
        gap: 1%;
    }

    .content-introduce,
    .content-aim {
        gap: 5%;
    }

    .introduce-img,
    .aim-img {
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
        border-radius: 50%;
        position: absolute;
        width: 300px;
        height: 300px;
        object-fit: cover;
    }

    .introduce-img.img-1 {
        top: -32%;
        left: 5%;
    }

    .introduce-img.img-2 {
        bottom: -9%;
        right: 1%;
    }

    .introduce-img.img-3 {
        left: -1%;
        bottom: -42%;
    }

    .aim-img.img-1 {
        bottom: -15%;
        left: 5%;
    }

    .introduce-img:hover,
    .aim-img:hover {
        z-index: 10;
        transform: scale(1.05);
        transition: 0.3s;
    }

    .aim-img.img-2 {
        bottom: 15%;
        right: 0%;
    }

    .contact {
        width: 30%;
    }

    .feedback {
        width: 70%;
    }

    .info-form {
        margin-bottom: 15px;
    }

    .form-item {
        margin-top: 15px;
    }

    a {
        text-decoration: none;
    }

    .container-item {
        display: grid;
        grid-template-columns: repeat(5, minmax(50px, 1fr));
    }

    .container-item i {
        font-size: 36px;
        color: #191919;
        position: relative;
        top: 0px;
    }

    .container-item i:hover {
        position: relative;
        top: -3px;
        transition: 0.3s;
        color: #0d6efd;
    }

    .message-error,
    .name-error,
    .email-error {
        color: red;
    }

    .input-error {
        border-color: red;
    }

    .input-error:focus {
        box-shadow: 0 0 0 0.25rem rgba(255, 0, 0, 0.2) !important;
        border-color: red;
    }

    @media only screen and (max-width: 1200px) {

        .introduce-img,
        .aim-img {
            width: 250px;
            height: 250px;
        }

        .introduce-img.img-2 {
            bottom: 20%;
            right: 1%;
        }

        .introduce-img.img-3 {
            left: -1%;
            bottom: -8%;
        }
    }

    @media only screen and (max-width: 992px) {
        h1 {
            font-size: 30px !important;
        }

        .park-introduce,
        .park-aim,
        .park-guide,
        .park-contact {
            padding: 40px 60px;
        }

        .introduce-img,
        .aim-img {
            width: 200px;
            height: 200px;
        }

        .introduce-img.img-1 {
            top: -1%;
            left: 5%;
        }

        .introduce-img.img-2 {
            bottom: 30%;
            right: 4%;
        }

        .introduce-img.img-3 {
            left: -1%;
            bottom: 9%;
        }

        .aim-img.img-1 {
            bottom: 21%;
            right: -8%;
        }

        .aim-img.img-2 {
            bottom: 40%;
            right: 0%;
        }
    }

    @media only screen and (max-width: 768px) {
        h1 {
            font-size: 24px !important;
        }

        .content-aim,
        .content-introduce,
        .contact-container {
            display: block !important;
        }

        .park-introduce>div,
        .content-aim>div,
        .content-introduce>div,
        .contact-container>div {
            width: 100% !important;
        }

        .aim-img,
        .introduce-img {
            display: none;
        }
    }

    @media only screen and (max-width: 576px) {
        h1 {
            font-size: 18 !important;
        }

    }
</style>

<!-- MAP -->
<!-- <div id="map">Map</div> -->
<div class="park-information-page">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9816317015897!2d105.81840342920385!3d21.035625650854865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d6e603741%3A0x208a848932ac2109!2sAptech%20Computer%20Education!5e0!3m2!1svi!2s!4v1645102623406!5m2!1svi!2s" style="border:0;" allowfullscreen="false" loading="lazy" class="w-100 h-100"></iframe>
    </div>
    <div class="park-introduce">
        <div class="title-introduce d-flex align-items-center mb-3">
            <div>
                <img class="icon-info" src="./image/information/index-icon7.png" />
            </div>
            <h1 class="m-0">GI???I THI???U CHUNG</h1>
        </div>
        <div class="content-introduce d-flex">
            <div class="w-50">
                <p>Funzone l?? t??? h???p gi???i tr?? C??ch trung t??m H?? N???i kho???ng 10km. Nh???ng n??m g???n ????y, Funzone l?? ?????a ??i???m l?? t?????ng cho nh???ng ai y??u th??ch h??nh th???c du l???ch kh??m ph?? thi??n nhi??n. Tr???n b??? h?????ng d???n ??n - ch??i - ng??? - ngh??? v???a vui v???a ti???t ki???m cho nh???ng du kh??ch khi t???i tham quan tr???i nghi???m t???i ????y.</p>
                <p>T???a l???c tr??n m???t kh??ng gian r???ng l???n v?? tho??ng ????ng, ch??? c??ch Trung t??m h???i ngh??? Qu???c gia 6km, d???c theo ?????i l??? Th??ng Long. C??ng vi??n n???m ??? ???????ng L?? Tr???ng T???n, An Kh??nh, Ho??i ?????c, H?? N???i (g???n ?????i l??? Th??ng Long).</p>
                <p>????? c?? th??? di chuy???n ?????n Funzone qu?? kh??ch c?? th??? s??? d???ng ph????ng ti???n c?? nh??n ho???c xe bu??t ????? thu???n ti???n. D?????i ????y s??? l?? nh???ng h?????ng d???n c??? th??? nh???t gi??p c??c b???n c?? th??? gh?? c??ng vi??n gi???i tr?? m???t c??ch nhanh nh???t:</p>
            </div>
            <div class="position-relative w-50">
                <img class="introduce-img img-1" src="./image/information/8.jpg" alt="#" />
                <img class="introduce-img img-2" src="./image/information/9.jpg" alt="#" />
                <img class="introduce-img img-3" src="./image/information/12.jpg" alt="#" />
            </div>
        </div>
    </div>
    <div class="park-aim">
        <div class="title-aim d-flex align-items-center mb-3">
            <div>
                <img class="icon-info" src="./image/information/gioithieu-icon1.png" />
            </div>
            <h1 class="m-0">M???C TI??U</h1>
        </div>
        <div class="content-aim d-flex">
            <div class="position-relative w-50">
                <img class="aim-img img-1" src="./image/information/10.jpg" alt="#" />
                <img class="aim-img img-2" src="./image/information/11.jpeg" alt="#" />
            </div>
            <div class="w-50">
                <p><b>Funzone ???????c x??y d???ng v???i m???c ti??u tr??? th??nh:</b></p>
                <ul>
                    <li>C???a ng?? du l???ch c???a H?? N???i, ??i???m ?????n c???a du kh??ch trong n?????c v?? qu???c t??? khi ?????n H?? N???i mu???n t??m hi???u, kh???o s??t, nghi??n c???u v??? v??n h??a, truy???n th???ng Vi???t Nam.</li>
                    <li>M???t ?????a ??i???m vui ch??i gi???i tr?? ??a n??ng, ti???p c???n c??ng ngh??? hi???n ?????i.</li>
                    <li>?????a ??i???m h??ng ?????u cho ho???t ?????ng t??? ch???c s??? ki???n v??n h??a, kinh t???, ch??nh tr??? tr???ng ?????i c???a qu???c gia.</li>
                    <li>Gi?? tr??? x?? h???i: T???o vi???c l??m cho l???c l?????ng lao ?????ng ?????a ph????ng, g??p ph???n th??c ?????y kinh t??? ?????a ph????ng v?? qu???c gia, tr??? th??nh nh??n t??? c??n b???ng cho h??? th???ng du l???ch, d???ch v??? v?? ngu???n l???c c???a to??n b??? khu v???c l??n c???n.</li>
                    <li>Gi?? tr??? gi???i tr??: Th???a m??n nhu c???u gi???i tr?? ng??y c??ng cao c???a kh??ch h??ng trong n?????c v?? du kh??ch qu???c t???.</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="park-guide">
        <div class="title-guide mb-3">
            <div>
                <img class="icon-info" src="./image/information/menu-icon6.png" />
            </div>
            <h1 class="m-0">H?????NG D???N</h1>
        </div>
    </div> -->
    <div class="park-contact">
        <div class="title-guide d-flex align-items-center mb-3">
            <div>
                <img class="icon-info" src="./image/information/lien-he-icon.png" />
            </div>
            <h1 class="m-0">LI??N H???</h1>
        </div>
        <div class="contact-container d-flex justify-content-between">

            <div class="contact">
                <div>
                    <div class="fw-bold fs-3 my-3">Contact Info</div>
                    <div class="d-flex">
                        <div class="fw-bold w-25">Address: </div>
                        <div class="mb-2 fw-bold w-75">285 ?????i C???n, Li???u Giai, Ba ????nh, H?? N???i</div>
                    </div>
                    <div class="d-flex">
                        <div class="fw-bold w-25">Phone: </div>
                        <div class="mb-2 fw-bold w-75"><a href="tel:123 456 789"><span>123 456 789</span></a></div>
                    </div>
                    <div class="d-flex">
                        <div class="fw-bold w-25">Email: </div>
                        <div class="mb-2 fw-bold w-75"><a href="mailto:funzone@funzone.com"></i><span>funzone@funzone.com</span></a></div>
                    </div>
                </div>
                <div style="margin-top: 40px;">
                    <div class="fw-bold fs-3 my-3">Get Social</div>
                    <div class="container-item gap-2">
                        <a href="#!"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="#!"><i class="fa-brands fa-twitter-square"></i></a>
                        <a href="#!"><i class="fa-brands fa-instagram-square"></i></a>
                        <a href="#!"><i class="fa-brands fa-youtube-square"></i></a>
                        <a href="#!"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#!"><i class="fa-brands fa-pinterest-square"></i></a>
                        <a href="#!"><i class="fa-brands fa-twitch"></i></a>
                        <a href="#!"><i class="fa-brands fa-google-plus-square"></i></a>
                        <a href="#!"><i class="fa-brands fa-reddit-square"></i></a>
                        <a href="#!"><i class="fa-brands fa-pied-piper-pp"></i></a>
                    </div>
                </div>
            </div>
            <div class="feedback">
                <div class="fw-bold fs-3 my-3">Li??n h??? v???i ch??ng t??i</div>
                <div class="info-form">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita possimus suscipit, repellat ducimus deserunt excepturi.</div>
                <form class="form-group" method="POST" id="user-add-feedback-form">
                    <div class="form-item">
                        <label class="d-block fw-bold" for="name">Your Name <span style="color: red;">*</span>: </label>
                        <input type="text" id="name" name="name" class="form-control" />
                        <div class="name-error"> </div>
                    </div>
                    <div class="form-item">
                        <label class="d-block fw-bold" for="email">Your Email <span style="color: red;">*</span>: </label>
                        <input class="form-control" type="text" id="email" name="email" />
                        <div class="email-error"> </div>
                    </div>
                    <div class="form-item">
                        <label class="d-block fw-bold" for="message">Your Message <span style="color: red;">*</span>: </label>
                        <textarea class="form-control" type="text" id="message" name="message" rows="5"></textarea>
                        <div class="message-error"> </div>
                    </div>
                    <div>
                        <button disabled class="submit-feedback mt-3 btn btn-primary" tyle="submit">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "./layout/validate.php" ?>
<?php include "./layout/toast.php" ?>