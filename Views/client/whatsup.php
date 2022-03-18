<style>
	.title-whats-up {
		display: flex;
		align-items: center;
		gap: 1%;
		width: 25%;
	}

	.icon-info {
		width: 36px;
	}

	h1 {
		font-size: 36px;
		text-transform: uppercase;
	}

	.page-container {
		/* background-color: #e6e6e6; */
		height: 100%;
		min-height: 800px;
		margin-top: 70px;
	}

	.whats-up-header {
		position: relative;
		width: 100%;
		height: 500px;
		position: relative;
		background: url("image/carousel/5-1.PNG") no-repeat center;
		background-size: cover;
	}

	.whats-up-content {
		padding: 40px 100px;
	}

	.event-container {
		background-color: white;
		display: flex;
		margin-top: 40px;
		position: relative;
		/* height: 300px; */
	}

	.event-container~.event-container {
		margin-top: 100px;
	}

	.expired-event {
		position: relative;
		/* position: absolute;
		top: 0;
		left: 50%;
		transform: translate(-50%, -50%); */
		/* min-width: 450px; */
		/* z-index: 10; */
		/* background-color: #585c5d; */
		background: linear-gradient(to right, #4e54c8, #8f94fb);
		padding: 10px 30px;
		border-radius: 10px;
		/* background: linear-gradient(to right, #ad5389, #3c1053); */
	}

	.day-time,
	.hour-time,
	.minute-time,
	.second-time {
		width: 20%;
		/* border: 1px solid black; */
		position: relative;
		/* border-radius: 10px; */
	}

	.minute-time {
		width: 25%;
	}

	.day-time:before,
	.hour-time:before,
	.second-time:before,
	.minute-time:before {
		width: 2px;
		height: 80%;
		content: "";
		background-color: white;
		top: 10%;
		left: -15%;
		position: absolute;
		z-index: 10;
	}

	.time-number {
		font-size: 36px;
	}

	.time-info {
		text-transform: uppercase;
		font-size: 14px;
		color: #2c2f50;
	}

	.intro {
		padding: 20px;
		position: relative;
		width: 40%;
		z-index: 9;
		background-color: #e6e6e6;
	}

	.intro:after {
		content: "";
		width: 35px;
		height: 35px;
		display: inline-block;
		background-color: #e6e6e6;
		position: absolute;
		top: 40px;
		right: 0;
		transform: rotate(45deg) translate(66.67%, 0%);
	}

	/* .event-time:after {
		content: "";
		width: 35px;
		height: 35px;
		display: inline-block;
		background-color: #0097de;
		position: absolute;
		top: 40px;
		right: 0;
		transform: rotate(45deg) translate(66.67%, 0%);
		z-index: 9;
	} */

	.title {
		color: #1e88e5;
		font-size: 24px;
	}

	/* .favourite {
		position: absolute;
		bottom: 0;
		width: 100%;
		left: 0;
		text-align: justify;
		padding: 20px;
	}
	*/

	.event-time {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: space-around;
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
		/* background-color: #0097de !important; */
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

	.filter-time-item {
		width: 20%;
	}

	.filter-time-item a {
		color: white;
		text-decoration: none;
	}

	#scroll-to {
		position: absolute;
		bottom: 50px;
	}


	@media only screen and (max-width: 1200px) {
		.time-info {
			font-size: 12px;
		}

		.time-number {
			font-size: 28px;
		}
	}

	@media only screen and (min-width: 993px) {
		.event-time-background {
			/* background-color: #0097de; */
			background: #0097de !important;
			filter: brightness(100%) !important;
		}

		.event-time:after {
			content: "";
			width: 35px;
			height: 35px;
			display: inline-block;
			background-color: #0097de;
			position: absolute;
			top: 40px;
			right: 0;
			transform: rotate(45deg) translate(66.67%, 0%);
			z-index: 9;
		}

		.filter-time-container-md {
			display: none;
		}
	}

	@media only screen and (max-width: 992px) {
		h1 {
			font-size: 30px !important;
		}
		.whats-up-content {
			padding: 40px 50px;
		}

		.event-image-hidden {
			display: none;
		}

		.intro,
		.event-time {
			width: 50%;
		}

		.filter-time-container-lg {
			display: none !important;
		}

		.title-whats-up {
			width: 50%;
		}
	}
	.time-screen-md {
			display: none;
		}

	@media only screen and (max-width: 768px) {
		h1 {
			font-size: 24px !important;
		}
		.time-screen-md {
			display: block;
		}
		.event-time, .event-image {
			display: none;
		}
		.intro {
			width: 100%;
		}
	}
</style>
<div class="page-container">
	<div class="whats-up-header">
		<div id="scroll-to"></div>
	</div>
	<div class="whats-up-content">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<div class="title-whats-up">
				<div>
					<img class="icon-info" src="./image/events/index-icon1.png" />
				</div>
				<h1 class="m-0">Sự kiện</h1>
			</div>
			<div class="filter-time-container-lg d-flex justify-content-between align-items-center w-75">
				<a href="?request=whatsup#scroll-to" class="btn <?= !isset($_GET['status']) || $_GET['status'] == 'all' ? 'btn-success' : 'btn-secondary' ?> filter-time-item">Tất cả</a>
				<a href="?request=whatsup&status=upcoming#scroll-to" class="btn <?= isset($_GET['status']) && $_GET['status'] == 'upcoming' ? 'btn-success' : 'btn-secondary' ?> filter-time-item">Sắp diễn ra</a>
				<a href="?request=whatsup&status=openning#scroll-to" class="btn <?= isset($_GET['status']) && $_GET['status'] == 'openning' ? 'btn-success' : 'btn-secondary' ?> filter-time-item">Đang diễn ra</a>
				<a href="?request=whatsup&status=end#scroll-to" class="btn <?= isset($_GET['status']) && $_GET['status'] == 'end' ? 'btn-success' : 'btn-secondary' ?> filter-time-item">Đã kết thúc</a>
			</div>
			<div class="filter-time-container-md">
				<select class="form-filter-time-container-md form-select form-select-lg">
					<option value="all" <?= !isset($_GET['status']) || $_GET['status'] == 'all' ? 'selected' : '' ?>>Tất cả</option>
					<option value="upcoming" <?= isset($_GET['status']) && $_GET['status'] == 'upcoming' ? 'selected' : '' ?>>Sắp diễn ra</option>
					<option value="openning" <?= isset($_GET['status']) && $_GET['status'] == 'openning' ? 'selected' : '' ?>>Đang diễn ra</option>
					<option value="end" <?= isset($_GET['status']) && $_GET['status'] == 'end' ? 'selected' : '' ?>>Đã kết thúc</option>
				</select>
			</div>
		</div>
		<?php
		if (mysqli_num_rows($result) > 0) :
			foreach ($result as $item) : ?>
				<div class="data-event-date" data-end-date="<?= $item['end_date'] ?>" data-start-date="<?= $item['open_date'] ?>"></div>
				<div class="event-container">
					<div class="intro">
						<div class="title"><?= $item['name']; ?></div>
						<div class="info content-section three-line-text"><?= $item['content']; ?></div>
						<div class="mt-2 detail-btn-section text-decoration-underline text-end text-primary btn-cursor">Xem chi tiết</div>
						<div class="mt-3 time-screen-md fw-bold">
							<div>Thời gian bắt đầu: <?php
													$date = date_create($item['open_date']);
													echo '<span class="text-success">' . date_format($date, "d-m/Y H:i:s") . '</span>';
													?></div>
							<div>Thời gian kết thúc: <?php
														$date = date_create($item['end_date']);
														echo '<span class="text-danger">' . date_format($date, "d-m-Y H:i:s") . '</span>';
														?></div>
						</div>
						<div class="title-expired-event fw-bold mt-3"></div>
						<div class="expired-event d-flex justify-content-between align-items-center">
							<div class="day-time text-white">
								<div class="time-number time-number-days fw-bold">--</div>
								<div class="time-info">days</div>
							</div>
							<div class="hour-time text-white">
								<div class="time-number time-number-hours fw-bold">--</div>
								<div class="time-info">hours</div>
							</div>
							<div class="minute-time text-white">
								<div class="time-number time-number-minutes fw-bold">--</div>
								<div class="time-info">minutes</div>
							</div>
							<div class="second-time text-white">
								<div class="time-number time-number-seconds fw-bold">--</div>
								<div class="time-info">seconds</div>
							</div>
						</div>
					</div>
					<div class="event-time text-center" class="position-relative">
						<div class="position-absolute event-time-background" style="background: url('image/events/<?= $item['image'] ?>') no-repeat center; background-size: cover; top: 0; left: 0;
						right: 0; bottom: 0; filter: brightness(50%);"></div>
						<div class="open-event">
							<div class="time-title">OPENNING DATE</div>
							<div class="hour-text  position-relative">
								<?php
								$date = date_create($item['open_date']);
								echo date_format($date, "H:i:s");
								?>
							</div>
							<div class="date-text  position-relative">
								<?php
								$date = date_create($item['open_date']);
								echo date_format($date, "d/m/Y");
								?>
							</div>
						</div>
						<div class="end-event">
							<div class="time-title">ENDDING DATE</div>
							<div class="hour-text position-relative">
								<?php
								$date = date_create($item['end_date']);
								echo date_format($date, "H:i:s");
								?>
							</div>
							<div class="date-text position-relative">
								<?php
								$date = date_create($item['end_date']);
								echo date_format($date, "d/m/Y");
								?>
							</div>
						</div>
					</div>
					<div class="event-image event-image-hidden">
						<img src="image/events/<?= $item['image']; ?>" alt="lmht-image" />
						<div class="slogan"><?= $item['slogan']; ?></div>
					</div>
				</div>
			<?php endforeach; include "./layout/paginator.php";
		else : ?>
			<div class="text-center mb-5 display-5">Không có dữ liệu</div>
		<?php endif; ?>
	</div>
</div>
<?php include "./admin/partial/renderFullItem.php"; ?>

<script>
	const formFilterTimeSelect = document.querySelector(".form-filter-time-container-md");
	const timeDays = document.querySelectorAll(".time-number-days");
	const timeHours = document.querySelectorAll(".time-number-hours");
	const timeMinutes = document.querySelectorAll(".time-number-minutes");
	const timeSeconds = document.querySelectorAll(".time-number-seconds");
	const dataEventDate = document.querySelectorAll(".data-event-date")
	const titleExpiredEvent = document.querySelectorAll(".title-expired-event")
	dataEventDate.forEach((end, i) => {
		let timeStampEnd = Math.floor((new Date(end.getAttribute("data-end-date")).getTime() - new Date().getTime()) / 1000)
		let timeStampStart = Math.floor((new Date(end.getAttribute("data-start-date")).getTime() - new Date().getTime()) / 1000)

		let days = 0;
		let hours = 0;
		let minutes = 0;
		let seconds = 0;
		if (timeStampStart > 0) {
			titleExpiredEvent[i].classList.add('text-primary')
			titleExpiredEvent[i].textContent = 'Sự kiện sắp tới: '
		} else if (timeStampStart < 0 && timeStampEnd > 0) {
			titleExpiredEvent[i].classList.add('text-success')
			titleExpiredEvent[i].textContent = 'Sự kiện còn: '
		} else if (!(timeStampEnd > 0)) {
			titleExpiredEvent[i].classList.add('text-danger')
			titleExpiredEvent[i].textContent = 'Sự kiện đã kết thúc! '
			return
		}
		days = Math.floor(timeStampEnd / 60 / 60 / 24);
		timeStampEnd -= days * 60 * 60 * 24;
		if (timeStampEnd > 0) {
			hours = Math.floor(timeStampEnd / 60 / 60);
			timeStampEnd -= hours * 60 * 60;
		}
		if (timeStampEnd > 0) {
			minutes = Math.floor(timeStampEnd / 60);
			timeStampEnd -= minutes * 60;
		}
		if (timeStampEnd > 0) {
			seconds = Math.floor(timeStampEnd);
		}
		const countdownTime = setInterval(() => {
			seconds -= 1
			if (seconds < 0 && minutes >= 0) {
				seconds = 59
				minutes -= 1
				if (minutes < 0 && hours >= 0) {
					minutes = 60;
					hours -= 1
				}
				if (hours < 0 && days >= 0) {
					hours = 24;
					days -= 1
				}
				if (days < 0) {
					clearInterval(countdownTime);
					days = 0;
					hours = 0
					minutes = 0
					seconds = 0
				}
			}
			if (hours < 10 && `${hours}`.length < 2) {
				hours = `0${hours}`
			}
			if (minutes < 10 && `${minutes}`.length < 2) {
				minutes = `0${minutes}`
			}
			if (seconds < 10 && `${seconds}`.length < 2) {
				seconds = `0${seconds}`
			}
			timeDays[i].textContent = `${days}`
			timeHours[i].textContent = `${hours}`
			timeMinutes[i].textContent = `${minutes}`
			timeSeconds[i].textContent = `${seconds}`
		}, 1000)
	})

	formFilterTimeSelect.onchange = () => {
		if (formFilterTimeSelect.value === 'all') {
			window.location.href = "?request=whatsup&status=all#scroll-to";
		} else if (formFilterTimeSelect.value === 'openning') {
			window.location.href = "?request=whatsup&status=openning#scroll-to";
		} else if (formFilterTimeSelect.value === 'end') {
			window.location.href = "?request=whatsup&status=end#scroll-to";
		} else if (formFilterTimeSelect.value === 'upcoming') {
			window.location.href = "?request=whatsup&status=upcoming#scroll-to";
		}
	}
</script>
