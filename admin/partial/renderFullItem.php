<style>
    .three-line-text {
        overflow: hidden;
        /* word-break: break-all; */
        text-overflow: ellipsis;
        /* white-space: nowrap; */
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        /* width: 100%; */
    }
    .btn-cursor {
        cursor: pointer;
    }
</style>

<script>
    // phần content muốn toggle
    const contentSection = document.querySelectorAll(".content-section");

    // button toggle
    const btnDetailSection = document.querySelectorAll(".detail-btn-section");

    btnDetailSection.forEach((dbs, i) => {
        dbs.onclick = (e) => {
            dbs.textContent = dbs.textContent == "Ẩn chi tiết" ? "Xem chi tiết" : "Ẩn chi tiết";
            contentSection[i].classList.toggle("three-line-text")
        }
    })
</script>