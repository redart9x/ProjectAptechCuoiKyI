<style>
  .toast-custom {
    position: fixed;
    bottom: 40px;
    right: 10px;
    z-index: 999;
    min-width: 250px;
    padding: 10px;
    gap: 3%;
    cursor: pointer;
  }

  .toast-hidden {
    pointer-events: none;
    opacity: 0;
    transition: opacity 2s;
    /* display: none; */
  }

  .toast-success-custom {
    background-color: #90bd99;
    border-left: 5px solid #1d6b15;
  }

  .toast-error-custom {
    background-color: #f29098;
    border-left: 5px solid #c8291e;
  }

  .toast-progress-custom {
    position: absolute;
    width: 100%;
    height: 5px;
    bottom: 0;
    left: 0;
  }

  .toast-success-custom .toast-progress-custom {
    background-color: #1d6b15;
  }

  .toast-error-custom .toast-progress-custom {
    background-color: #c8291e;
  }

  .toast-run-custom {
    width: 0;
    transition: width 4s;
  }
</style>

<div class="toast-success-custom toast-custom d-flex toast-hidden align-items-center">
  <div class="toast-icon-custom">
    <i class="fa-solid fa-circle-exclamation text-white fs-3 toast-icon"></i>
  </div>
  <div class="toast-message-custom text-white">
    This is a success message!
  </div>
  <div class="toast-progress-custom"></div>
</div>

<?php if (isset($_GET['delete'])) : ?>
  <div class="result-data" style="display: none;" data-result="<?= $_GET['delete'] ?>" data-action="delete" data-reason = "<?= isset($_GET['reason']) ? $_GET['reason'] : '' ?>"></div>
<?php elseif ((isset($_GET['update']))) : ?>
  <div class="result-data" style="display: none;" data-result="<?= $_GET['update'] ?>" data-action="update"></div>
<?php elseif ((isset($_GET['create']))) : ?>
  <div class="result-data" style="display: none;" data-result="<?= $_GET['create'] ?>" data-action="create"></div>
<?php elseif ((isset($_GET['send']))) : ?>
  <div class="result-data" style="display: none;" data-result="<?= $_GET['send'] ?>" data-action="send"></div>
<?php endif; ?>

<script>
  const resultData = document.querySelector(".result-data");
  let progressTimeout = undefined;
  const toastCustom = document.querySelector(".toast-custom");
  const toastProgressSuccess = document.querySelector(".toast-progress-custom");
  const toastMessage = document.querySelector(".toast-message-custom");
  const toastIcon = document.querySelector(".toast-icon");

  const openToast = () => {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if (urlParams.get('delete') || urlParams.get('update') || urlParams.get('create') || urlParams.get('send')) {
      const newUrl = `${window.location.pathname}?request=${urlParams.get('request')}`;
      window.history.pushState({}, null, newUrl);
    }
    if (toastCustom.classList.contains("toast-hidden")) {
      toastProgressSuccess.classList.add("toast-run-custom");
      if (toastCustom.classList.contains("toast-success-custom")) {
        toastProgressSuccess.style.backgroundColor = "#1d6b15"
      } else if (toastCustom.classList.contains("toast-error-custom")) {
        toastProgressSuccess.style.backgroundColor = "#d53f32"
      }
      progressTimeout = setTimeout(() => {
        if (!toastCustom.classList.contains("toast-hidden")) {
          toastCustom.classList.add("toast-hidden");
          toastProgressSuccess.classList.remove("toast-run-custom");
          toastProgressSuccess.style.backgroundColor = "transparent"
        }
      }, 4000)
      toastCustom.classList.remove("toast-hidden");
    }
  }
  const hiddenToast = () => {
    if (!toastCustom.classList.contains("toast-hidden")) {
      toastCustom.classList.add("toast-hidden");
      toastProgressSuccess.classList.remove("toast-run-custom");
      toastProgressSuccess.style.backgroundColor = "transparent"
      if (progressTimeout) {
        clearTimeout(progressTimeout);
      }
    }
  }

  toastCustom.onclick = () => {
    hiddenToast();
  }

  if (resultData) {
    const errorBrandFood = 'brand-has-food';
    const result = resultData.getAttribute("data-result");
    const action = resultData.getAttribute("data-action");
    const reason = resultData.getAttribute("data-reason");
    console.log(errorBrandFood)
    console.log(reason)
    if (result === '1') {
      toastCustom.classList.remove('toast-error-custom')
      toastCustom.classList.add('toast-success-custom')
      toastIcon.classList.add("fa-circle-check")
      toastIcon.classList.remove("fa-circle-exclamation")
      if (action === 'delete') {
        toastMessage.textContent = 'X??a th??nh c??ng!'
      } else if (action === 'update') {
        toastMessage.textContent = 'C???p nh???t th??nh c??ng!'
      } else if (action === 'create') {
        toastMessage.textContent = 'Th??m m???i th??nh c??ng!'
      } else if (action === 'send') {
        toastMessage.textContent = 'G???i Feedback th??nh c??ng!'
      }
      setTimeout(() => {
        openToast();
      }, 0)
    } else if (result === '0') {
      toastCustom.classList.add('toast-error-custom')
      toastCustom.classList.remove('toast-success-custom')
      toastIcon.classList.remove("fa-circle-check")
      toastIcon.classList.add("fa-circle-exclamation")
      if (action === 'delete') {
        toastMessage.textContent = 'X??a th???t b???i!'
        if (reason === errorBrandFood) {
          toastMessage.textContent = 'Kh??ng th??? x??a Brand ??ang c?? Food!'
        }
      } else if (action === 'update') {
        toastMessage.textContent = 'C???p nh???t th???t b???i!'
      } else if (action === 'create') {
        toastMessage.textContent = 'Th??m m???i th???t b???i!'
      } else if (action === 'send') {
        toastMessage.textContent = 'G???i Feedback th???t b???i!'
      }
      setTimeout(() => {
        openToast();
      }, 0)
    }
  }
</script>