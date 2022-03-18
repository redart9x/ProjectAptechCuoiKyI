<style>
    .sponsor-header {
        width: 100%;
        height: 500px;
        position: relative;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.69) 0%, rgb(0, 0, 0) 100%), url("image/carousel/4.jpg") no-repeat center;
        background-size: cover;
    }

    h1 {
        font-size: 36px;
    }

    .icon-info {
        width: 36px;
    }

    .text-intro {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }

    .text-intro>.btn-href {
        border: 2px solid black;
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        background-color: #00a1de;
    }

    .text-intro>a:hover {
        background-color: #e8b954;
    }

    .sponsor-intro p {
        margin-top: 15px;
    }

    .sponsor-title {
        gap: 1%;
    }

    /* .sponsor-header>img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(35%);
    } */

    .sponsor-content,
    .list-pros {
        padding: 40px 100px;
    }

    .sponsor-pros {
        display: grid;
        grid-template-columns: repeat(3, minmax(200px, 1fr));
        grid-row-gap: 30px;
    }

    .pros-icon {
        color: #05a3df;
        font-size: 54px;
        cursor: pointer
    }

    .pros-info {
        font-size: 16px;
        margin-bottom: 0;
    }

    .pros-sub {
        font-size: 12px;
    }

    .sub-title {
        font-size: 36px;
        text-align: left;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
        left: 50%;
        transform: translateX(-50%);
    }

    .sub-title:after {
        content: "";
        position: absolute;
        bottom: -5px;
        width: 70%;
        height: 1px;
        left: 15%;
        background-color: black;
    }

    .sponsor-image {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 100px;
        margin-top: 50px;
    }

    .pros-item {
        overflow-x: hidden;
        padding: 10px;
    }

    .sponsor-image img:hover {
        transform: scale(1.1);
        transition: 0.3s;
    }

    .pros-item:hover .pros-icon {
        transform: scale(1.2);
        transition: 0.3s;
    }

    .sponsor-image img {
        max-width: 200px;
        object-fit: cover;
    }

    @media only screen and (max-width: 1200px) {

        .sponsor-content,
        .list-pros {
            padding: 40px 60px;
        }
    }

    @media only screen and (max-width: 992px) {
        h1 {
            font-size: 30px !important;
        }

        .sponsor-image img {
            max-width: 170px;
        }

        .sponsor-image {
            padding: 0 50px;
        }
    }

    @media only screen and (max-width: 768px) {
        h1 {
            font-size: 24px !important;
        }

        .sponsor-image img {
            max-width: 100px;
        }

        .sponsor-image {
            padding: 0 30px;
        }

        .sponsor-pros {
            display: grid;
            grid-template-columns: repeat(2, minmax(200px, 1fr));
            grid-row-gap: 30px;
        }
    }

    @media only screen and (max-width: 576px) {
        h1 {
            font-size: 18px !important;
        }

        .sponsor-content,
        .list-pros {
            padding: 40px 30px;
        }

        .sponsor-image img {
            max-width: 100px;
        }

        .sponsor-image {
            padding: 0;
        }

        .sponsor-pros {
            display: grid;
            grid-template-columns: repeat(2, minmax(200px, 1fr));
            grid-row-gap: 30px;
        }
    }

    #sponsor {
        position: relative;
        top: -50px;
    }
</style>
<div class="sponsor-page">
    <div class="sponsor-header">
        <!-- <img src="image/carousel/4.jpg" alt = "#"/> -->
        <div class="text-intro">
            <h1 class="title-intro">FUNZONE SPONSORSHIP</h1>
            <p>Trở thành đối tác phát triển của Funzone để giúp chúng tôi tiếp tục phát triển Funzone trở thành khu vui chơi lớn nhất của cả nước, đồng thời cũng được nhận những ưu đãi đặc biệt. <a href="#sponsor">Xem ngay</a></p>
            <!-- <a class="btn-href" href="mailto:funzone@funzone.com">BECOME A SPONSOR</a> -->
            </a>
        </div>
    </div>
    <div class="sponsor-content">
        <div class="sponsor-intro">
            <div class="sponsor-title d-flex align-items-center mb-3">
                <div>
                    <img class="icon-info" src="./image/sponsor/intro.png" />
                </div>
                <h1 class="m-0">Giới thiệu về FAMILY FUNZONE</h1>
            </div>
            <p>Đây là sân chơi dành cho Funzone cùng các đối tác phát triển của Funzone, cùng nhau tạo điều kiện để cùng phát triển, tạo ra nhiều giá trị mới hơn, nhiều cơ hội để phát triển hơn.</p>
            <p>Hằng năm, Family Funzone đều tổ chức các sự kiện để tạo điều kiện cho các đối tác gặp gỡ, trao đổi, tìm kiếm các cơ hội đầu tư mới. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima nulla consequatur obcaecati aut provident itaque non distinctio assumenda veniam porro, numquam exercitationem, et deleniti est.</p>
            <p>Đừng bỏ lỡ các cơ hộ để trở thành đối tác của Funzone ngay hôm nay! Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias similique, minima ipsa debitis enim ad.</p>
            <p>Admission is free but limited to the first 250 applicants, who need to be a Season-Ticket or Flexi-Ticket Holder; a Club Argyle Member; 1886 Member; or Big Green Lottery subscriber.</p>
            <p>Ticket are available from the Home Park Ticket Office and on line at now.</p>
        </div>
        <div class="list-sponsor mt-5">
            <div class="sponsor-title d-flex align-items-center mb-3">
                <div>
                    <img class="icon-info" src="./image/sponsor/dollar-icon.png" />
                </div>
                <h1 class="m-0">Các nhà tài trợ chính</h1>
            </div>
            <!-- <p class="text-center">We are happy to share the success with out long term partners</p> -->
            <div class="sponsor-image">
                <div class="sponsor-item">
                    <img src="image/sponsor/EmailTree-logo-1.png" alt="#" />
                </div>
                <div class="sponsor-item">
                    <img src="image/sponsor/logo-sustainabletourism.png" alt="#" />
                </div>
                <div class="sponsor-item">
                    <img src="image/sponsor/logo-greenbeehave-150px.png" alt="#" />
                </div>
            </div>

        </div>
    </div>
    <div id="sponsor"></div>
    <div class="list-pros">
        <div class="sponsor-title d-flex align-items-center mb-3">
            <div>
                <img class="icon-info" src="./image/sponsor/sponsor-icon.png" />
            </div>
            <h1 class="m-0">Các ưu đãi đặc biệt cho đối tác của Funzone</h1>
        </div>
        <div class="sponsor-pros">
            <div class="pros-item">
                <div class="pros-icon text-center">200+</div>
                <p class="pros-info text-center">Videos per year</p>
                <p class="pros-sub text-center">To publish the sponsors' advertisements.</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">10000+</div>
                <p class="pros-info text-center">Minutes of video content</p>
                <p class="pros-sub text-center">Published through social media channels, each year.</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">100000+</div>
                <p class="pros-info text-center">Raw size audience</p>
                <p class="pros-sub text-center">Qualified lead generation.</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <p class="pros-info text-center">Highly engaged audience</p>
                <p class="pros-sub text-center">Through a weekly sport event</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <p class="pros-info text-center">Launch marketing campaigns</p>
                <p class="pros-sub text-center">Through 8 different marketing channels.</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <p class="pros-info text-center">Higher conversion rates</p>
                <p class="pros-sub text-center">Targeted audience which allows speedier conversions.</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <p class="pros-info text-center">Halo effect</p>
                <p class="pros-sub text-center">Prestige, awareness, audience loyalty, activation opportunities.</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <p class="pros-info text-center">Permanent event</p>
                <p class="pros-sub text-center">The opportunity to advertise for the entire year.</p>
            </div>
            <div class="pros-item">
                <div class="pros-icon text-center">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <p class="pros-info text-center">Intelligent advertising</p>
                <p class="pros-sub text-center">Using the latest marketing techniques, for all devices and screens.</p>
            </div>
        </div>
    </div>
</div>
</div>