<style>
    .search-nav-container {
        background-color: #212529;
        border-radius: 10px;
        /* margin: 20px; */
        top: 90px;
        left: 20px;
        position: fixed;
        width: 20%;
        padding: 50px 0 50px 20px;
    }

    .hidden-search-nav-container {
        opacity: 0;
        pointer-events: none;
    }

    .search-nav-dinning {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        position: relative;
    }

    .search-nav-dinning.aside-nav-active:before {
        content: "";
        width: 20px;
        height: 20px;
        background-color: #212529;
        position: absolute;
        top: 0;
        right: 0;
        border-radius: 50%;
        transform: translateY(-100%);
        box-shadow: 10px 10px 0 0 white;
    }

    .search-nav-dinning.aside-nav-active:after {
        content: "";
        width: 20px;
        height: 20px;
        background-color: #212529;
        position: absolute;
        bottom: 0;
        right: 0;
        border-radius: 50%;
        transform: translateY(100%);
        box-shadow: 10px -10px 0 0 white;
    }

    /* .search-nav-dinning:hover {
        background-color: #624ffd;
    } */

    .aside-nav-selected {
        color: #624ffd;
        background-color: white;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    a {
        list-style: none;
    }

</style>

<?php if (isset($_GET['request']) and $_GET['request'] == 'dinning') : ?>
    <aside class="search-nav-container">
        <div class="search-nav-dinning <?php if (!isset($_GET['brandid'])) : echo "aside-nav-active";
                                        endif; ?>">
            <ul class="m-0 p-0">
                <a href="?request=dinning" class="text-decoration-none">
                    <li class="p-3 <?php if (!isset($_GET['brandid'])) : echo "aside-nav-selected";
                                    else : echo 'text-white';
                                    endif; ?>">Tất cả</li>
                </a>
            </ul>
        </div>
        <?php
        foreach ($this->brands() as $item) :

        ?>
            <div class="search-nav-dinning <?php if (isset($_GET['brandid']) and $_GET['brandid'] == $item['id']) : echo "aside-nav-active";
                                            endif; ?>">
                <ul class="m-0 p-0">
                    <a href="?request=dinning&brandid=<?php echo $item['id'] ?>" class="text-decoration-none">
                        <li class="p-3 <?php if (isset($_GET['brandid']) and $_GET['brandid'] == $item['id']) : echo "aside-nav-selected";
                                        else : echo 'text-white';
                                        endif; ?>"> <?php echo $item['name']; ?></li>
                    </a>
                </ul>
            </div>

        <?php endforeach; ?>
    </aside>

<?php endif; ?>
