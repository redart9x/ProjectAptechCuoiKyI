<style>
    .container-page {
        gap: 5px;
        margin-top: 30px;
    }

    .container-page a {
        text-decoration: none;
        color: black;
    }

    .paginator {
        /* border: 1px solid rgba(125, 125, 125, 0.5); */
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        vertical-align: middle;
        cursor: pointer;
    }

    .link-page,
    .paginator {
        border-radius: 10px;
    }

    .paginator:hover {
        background-color: rgba(108, 117, 125, 0.2);
    }

    .text-muted {
        cursor: not-allowed;
        position: relative;
    }

    .select-page {
        background-color: rgba(108, 117, 125, 0.5);
        pointer-events: none;
    }
</style>
<div data-name-page="<?= isset($_GET['request']) ? $_GET['request'] : '' ?>" data-current-page="<?= isset($_GET['page']) && isset($maxPage) && $_GET['page'] <= $maxPage ? $_GET['page'] : 1 ?>" data-max-page="<?= isset($maxPage) ? $maxPage : null ?>" data-add-url="<?= isset($_GET['brandid']) ? $_GET['brandid'] : '' ?>" class="data-current-page"></div>
<div class="container-page d-flex justify-content-center align-items-center">
    <a href="!#" class="paginator first-page">
        <div>
            <i class="fa-solid fa-angles-left"></i>
        </div>
    </a>
    <a href="?request=whatsup&page=<?= isset($_GET['page']) ? $_GET['page'] - 1 : 1 ?>" class="paginator prev-page">
        <div>
            <i class="fa-solid fa-angle-left"></i>
        </div>
    </a>
    <a href="!#" class="link-page paginator">
        <div class="page-1 paginator-number">1</div>
    </a>
    <a href="!#" class="link-page paginator">
        <div class="page-1 paginator-number">2</div>
    </a>
    <a href="!#" class="link-page paginator">
        <div class="page-1 paginator-number">3</div>
    </a>
    <a href="!#" class="link-page paginator">
        <div class="page-1 paginator-number">4</div>
    </a>
    <a href="!#" class="link-page paginator">
        <div class="page-1 paginator-number">5</div>
    </a>
    <a href="?request=whatsup&page=<?= isset($_GET['page']) ? $_GET['page'] + 1 : 1 ?>" class="paginator next-page">
        <div>
            <i class="fa-solid fa-angle-right"></i>
        </div>
    </a>
    <a href="?request=whatsup&page=<?= isset($maxPage) ? $maxPage : 1 ?>" class="paginator last-page">
        <div>
            <i class="fa-solid fa-angles-right"></i>
        </div>
    </a>
</div>

<script>
    const pageNumber = document.querySelectorAll(".paginator-number");
    const firstPageIcon = document.querySelector(".first-page");
    const lastPageIcon = document.querySelector(".last-page");
    const prevPageIcon = document.querySelector(".prev-page");
    const nextPageIcon = document.querySelector(".next-page");
    const dataCurPageElement = document.querySelector(".data-current-page");
    const curPage = dataCurPageElement ? +dataCurPageElement.getAttribute('data-current-page') : 1
    if (curPage <= 0) {
        curPage = 1
    }
    let handlePage = curPage;
    const maxPage = dataCurPageElement ? +dataCurPageElement.getAttribute('data-max-page') : 1
    const namePage = dataCurPageElement.getAttribute('data-name-page')
    const brandId = dataCurPageElement.getAttribute('data-add-url')
    let pageValue = ''
    if (namePage === 'dinning') {
        pageValue = '?request=dinning&page='
        if (brandId !== '') {
            pageValue = `?request=dinning&brandid=${brandId}&page=`
        }
    } else if (namePage === 'whatsup') {
        pageValue = '?request=whatsup&page='
    } else if (namePage === 'experience' || namePage === '') {
        pageValue = '?request=experience&page='
    } else if (namePage === 'parkcharacters') {
        pageValue = '?request=parkcharacters&page='
    } else if (namePage === 'event') {
        pageValue = '?request=event&page='
    } else if (namePage === 'brands') {
        pageValue = '?request=brands&page='
    } else if (namePage === 'product') {
        pageValue = '?request=product&page='
    } else if (namePage === 'character') {
        pageValue = '?request=character&page='
    }
    firstPageIcon.href = pageValue + '1'
    prevPageIcon.href = pageValue + `${curPage - 1}`;
    nextPageIcon.href = pageValue + `${curPage + 1}`;
    lastPageIcon.href = pageValue + `${maxPage}`
    const linkPage = document.querySelectorAll(".link-page");
    linkPage.forEach((page, i) => {
        copyPageValue = pageValue;
        if (curPage <= 3 && curPage > 0) {
            if (i < maxPage) {
                page.href = pageValue + `${i + 1}`
            }
        } else if (curPage > 3) {
            if (i !== 2) {
                pageNumber[i].textContent = handlePage + i - 2;
                copyPageValue += `${handlePage + i - 2}`
            } else {
                pageNumber[i].textContent = handlePage;
                copyPageValue += `${handlePage}`
            }
            page.href = copyPageValue
        }
        if (+pageNumber[i].textContent > maxPage) {
            page.style.display = 'none';
        } else if (+page.textContent === curPage) {
            page.classList.add("select-page");
        }
        i++;
    })
    if (curPage === 1) {
        firstPageIcon.classList.add('text-muted')
        prevPageIcon.classList.add('text-muted')
        prevPageIcon.onclick = e => {
            e.preventDefault()
        }
        firstPageIcon.onclick = e => {
            e.preventDefault()
        }
    }
    if (curPage === maxPage) {
        lastPageIcon.classList.add("text-muted")
        nextPageIcon.classList.add("text-muted")
        nextPageIcon.onclick = e => {
            e.preventDefault()
        }
        lastPageIcon.onclick = e => {
            e.preventDefault()
        }
    }
</script>