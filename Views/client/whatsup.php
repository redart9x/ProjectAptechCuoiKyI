<style>
	.title-whats-up {
		display: flex;
		align-items: center;
		gap: 1%;
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

	.event-container ~ .event-container {
		margin-top: 100px;
	}

	.expired-event {
		position: absolute;
		top: 0;
		left: 50%;
		transform: translate(-50%, -50%);
		min-width: 450px;
		z-index: 10;
		/* background-color: #585c5d; */
		background: linear-gradient(to right, #4e54c8, #8f94fb);
		padding: 10px 30px;
		border-radius: 10px;
		/* background: linear-gradient(to right, #ad5389, #3c1053); */
	}

	.day-time, .hour-time, .second-time, .minute-time {
		width: 20%;
		/* border: 1px solid black; */
		position: relative;
		/* border-radius: 10px; */
	}

	.day-time:before, .hour-time:before, .second-time:before, .minute-time:before {
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
		bottom: 40px;
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
		bottom: 40px;
		right: 0;
		transform: rotate(45deg) translate(66.67%, 0%);
		z-index: 9;
	}

	.title {
		color: #1e88e5;
		font-size: 24px;
		margin-bottom: 20px;
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
<div class="page-container">
	<div class="whats-up-header"></div>
	<div class="whats-up-content">
		<div class="title-whats-up mb-3">
			<div>
				<img class="icon-info" src="./image/events/index-icon1.png" />
			</div>
			<h1 class="m-0">Sự kiện</h1>
		</div>
		<?php foreach ($result as $item) : ?>
			<div class="data-end-date" data-end-date="<?=$item['end_date']?>"></div>
			<div class="event-container">
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
				<div class="intro">
					<!-- ádadasdsadqwd -->
					<div class="title"><?= $item['name']; ?></div>
					<div class="info content-section three-line-text"><?= $item['content']; ?></div>
					<div class="mt-5 detail-btn-section text-decoration-underline text-end text-primary btn-cursor">Xem chi tiết</div>
					<!-- <div class="favourite">

					</div> -->
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
					<img src="image/events/<?= $item['image']; ?>" alt="lmht-image" />
					<div class="slogan"><?= $item['slogan']; ?></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php include "./admin/partial/renderFullItem.php"; ?>

<script>
	const timeDays = document.querySelectorAll(".time-number-days");
	const timeHours = document.querySelectorAll(".time-number-hours");
	const timeMinutes = document.querySelectorAll(".time-number-minutes");
	const timeSeconds = document.querySelectorAll(".time-number-seconds");
	const dataEndDate = document.querySelectorAll(".data-end-date")
	dataEndDate.forEach((end, i) => {
		let timeStamp = Math.floor((new Date(end.getAttribute("data-end-date")).getTime() - new Date().getTime()) / 1000)
		let days = 0;
		let hours = 0;
		let minutes = 0;
		let seconds = 0;
		if (!(timeStamp > 0)) {
			return
		}
		days = Math.floor(timeStamp / 60 / 60 / 24);
		timeStamp -= days * 60 * 60 * 24;
		if (timeStamp > 0) {
			hours = Math.floor(timeStamp / 60 / 60);
			timeStamp -= hours * 60 * 60;
		}
		if (timeStamp > 0) {
			minutes = Math.floor(timeStamp / 60);
			timeStamp -= minutes * 60;
		}
		if (timeStamp > 0) {
			seconds = Math.floor(timeStamp);
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
</script>