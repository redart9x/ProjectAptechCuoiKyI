<style>
    .title-whats-up {
        gap: 1%;
    }

    .icon-info {
        width: 36px;
    }

    h1 {
        font-size: 36px;
        text-transform: uppercase;
    }

    .whats-up-content {
        padding: 40px 100px;
    }



    .intro {
        padding: 20px;
        position: relative;
        width: 40%;
        z-index: 20;
        background-color: #e6e6e6;
    }

    .intro:after {
        content: "";
        width: 35px;
        height: 35px;
        display: inline-block;
        background-color: #e6e6e6;
        position: absolute;
        top: 20px;
        right: 0;
        transform: rotate(45deg) translate(66.67%, 0%);
    }

    .event-time:after {
        content: "";
        width: 35px;
        height: 35px;
        display: inline-block;
        background-color: #0097de;
        position: absolute;
        top: 20px;
        right: 0;
        transform: rotate(45deg) translate(66.67%, 0%);
        z-index: 10;
    }

    .title {
        color: #1e88e5;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .favourite {
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 0;
        text-align: justify;
        padding: 20px;
    }

    .btn-favourite {
        position: absolute;
        right: 20px;
    }

    .event-time {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .time-title {
        position: relative;
        margin-bottom: 20px;
    }

    .time-title:after {
        content: "";
        position: absolute;
        bottom: -5px;
        left: 15%;
        width: 70%;
        height: 3px;
        background-color: white;
    }

    .date-text {
        font-size: 32px;
    }

    .hour-text {
        font-size: 18px;
    }

    .event-time {
        background-color: #0097de;
        width: 20%;
        color: white;
    }

    .event-image {
        width: 40%;
        position: relative;
        /* height: 100%; */
        overflow: hidden;
    }

    .event-image>img {
        width: 100%;
        height: 100%;
        filter: brightness(55%);
        object-fit: cover;
    }

    .event-image>img:hover {
        transform: scale(1.1);
        transition: 0.3s;
    }

    .event-image>.slogan {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 24px;
        width: 100%;
        text-align: center;
        pointer-events: none;
    }
</style>
<div style="display: none" data-type="events" id="info-type"></div>
<div>
    <?php $addItem = mysqli_fetch_assoc($result) ?>
    <div class="whats-up-content">
        <div class="d-flex justify-content-between align-items-center">
            <div class="title-whats-up d-flex align-items-center w-50">
                <div>
                    <img class="icon-info" src="../image/events/index-icon1.png" />
                </div>
                <h1 class="m-0">Sự kiện</h1>
            </div>
            <div class="btn-container">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#CreateModal" data-item='' data-type="events">Thêm mới</button>
            </div>
        </div>
        <?php
        $arrItem = [];
        if (mysqli_num_rows($result) > 0) :
            foreach ($result as $item) :
                array_push($arrItem, $item);
            ?>
                <div class="bg-light d-flex mt-5">
                    <div class="intro">
                        <div class="intro-text">
                            <div class="title"><?= $item['name']; ?></div>
                            <div class="content-section three-line-text"><?= $item['content']; ?></div>
                        </div>
                        <div class="mb-4 detail-btn-section text-decoration-underline text-end text-primary btn-cursor">Xem chi tiết</div>
                        <div class="event-button d-flex justify-content-between">
                            <div class="btn-container">
                                <button data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn btn-danger" id="<?= $item['id'] ?>" data-item='<?= json_encode($item) ?>' data-type="events">Xóa</button>
                            </div>
                            <div class="btn-container">
                                <button data-bs-toggle="modal" data-bs-target="#EditModal" id="<?= $item['id'] ?> " class="btn btn-primary" data-item='<?= json_encode($item) ?>' data-type="events">Sửa</button>
                            </div>
                        </div>
                    </div>
                    <div class="event-time">
                        <div class="time-title">OPENNING DATE</div>
                        <div class="hour-text">
                            <?php
                            $date = date_create($item['open_date']);
                            echo date_format($date, "H:i:s");
                            ?>
                        </div>
                        <div class="date-text">
                            <?php
                            $date = date_create($item['open_date']);
                            echo date_format($date, "d/m/Y");
                            ?>
                        </div>
                    </div>
                    <div class="event-image">
                        <img src="../image/events/<?= $item['image']; ?>" alt="#" />
                        <div class="slogan"><?= $item['slogan']; ?></div>
                    </div>
                </div>
            <?php

            endforeach;
            include "./../layout/paginator.php";

        else : ?>
            <div class="text-center mb-5 display-5">Không có dữ liệu</div>
        <?php
        endif;
        ?>

    </div>
</div>

<?php include "./partial/modal.php"; ?>
<?php include "./partial/renderFullItem.php"; ?>
