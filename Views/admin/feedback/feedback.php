<style>
    .container-feedback {
        padding: 40px 100px;
    }

    .title-feedback {
        gap: 1%
    }

    .icon-info {
        width: 36px;
    }

    .feedback {
        padding: 30px;
        background-color: #e6e6e6;
    }

    .info-user {
        width: 70%;
    }

    .user-feedback {
        width: 30%;
    }

    .avatar-user {
        width: 10%;
    }

    .avatar-user>i {
        font-size: 36px;
    }

    .email-user {
        font-size: 12px;
    }

    .content-feedback {
        margin: 20px 0;
    }
</style>
<div class="container-feedback">
    <div class="title-feedback d-flex align-items-center">
        <div>
            <img class="icon-info" src="../image/information/lien-he-icon.png" />
        </div>
        <h1 class="m-0">FEEDBACK</h1>
    </div>
    <?php
    if (mysqli_num_rows($data) > 0) :
        foreach ($data as $result) : ?>
            <div class="feedback mt-5">
                <div class="header-feedback d-flex justify-content-between">
                    <div class="user-feedback d-flex align-items-center w-50">
                        <div class="avatar-user">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                        <div class="info-user">
                            <div class="fw-bold"><?= $result['name'] ?></div>
                            <div class="email-user"><?= $result['email'] ?></div>
                        </div>
                    </div>
                    <div class="time-feedback">
                        <i class="fa-solid fa-clock"></i>
                        <span>Tạo lúc: </span>
                        <span><?php
                                $date = date_create($result['send_time']);
                                echo date_format($date, "H:i:s d-m-Y"); ?>
                        </span>
                    </div>
                </div>
                <div class="content-feedback content-section three-line-text">
                    <div><?= $result['message'] ?></div>
                </div>
                <div class="btn-group-detail d-flex justify-content-between align-items-center">
                    <div>
                        <button data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn btn-danger" data-id="<?= $result['id'] ?>">Xóa</button>
                    </div>
                    <div class="text-primary btn-cursor detail-btn-section">Xem chi tiết</div>
                </div>
            </div>
        <?php endforeach;
        include "../layout/paginator.php";
    else : ?>
        <div class="text-center mb-5 display-5">Không có dữ liệu</div>
    <?php endif; ?>
</div>

<?php include "./partial/modal.php"; ?>
<?php include "./partial/renderFullItem.php"; ?>