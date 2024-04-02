<?php require_once './res/config/option.php'; ?>
<?php 
$ThanhDieuHeader = new ThanhDieuHeader();
$ThanhDieuLoveDays = new ThanhDieuLoveDays();
$ThanhDieuMusicList = new ThanhDieuMusicList();
$ThanhDieuHeader->CommonMethod();
$ThanhDieuLoveDays->CommonMethod();
$ThanhDieuMusicList->CommonMethod();
?>
<!DOCTYPE html>
<html lang="en" class="theme-custom">
<head>
    <!--/ @Meta Tag /-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#00FFFF">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" content="<?=$ThanhDieuHeader->description?>">
    <meta name="author" content="ThanhDieuTV">
    <meta name="keywords"
        content="<?=$ThanhDieuHeader->keywords?>">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <link rel="shortcut icon" href="<?=$ThanhDieuHeader->favicon?>?v=<?=rand(1,999)?>" type="image/x-icon">
    <meta property="og:title" content="<?=$ThanhDieuHeader->title?>">
    <meta property="og:url" content="//thanhdieu.com">
    <meta property="og:image" content="./res/v5/img/bg3.webp">
    <title><?=$ThanhDieuHeader->title?></title>
    <!--/ @StyleSheets /-->
    <link rel="stylesheet" href="./res/v5/css/ws.theme.css">
    <link rel="stylesheet" href="./res/v5/css/animation.css">
    <link rel="stylesheet" href="./res/v5/css/index.css?v=<?php echo rand(1,999)?>">
    <link rel="stylesheet" href="./res/v5/css/style.css">
    <link rel="stylesheet" href="./res/v5/css/custom-love.css">
    <!--/ @Frameworks /-->
    <link rel="stylesheet" href="./res/v5/libs/jbox@1.3.3/jBox.all.min.css">
    <!--/ @CDN /-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.thanhdieu.com/dialog/wstoast/ws.toast.css?v=1">
</head>
<body class="BodyStyle">
    <div class="td-lock-screen">
        <section class="td-welcome">
            <div class="medias">
                <video class="item_video" autoplay loop muted playsinline>
                    <source src="./res/v5/files/video/hutao.mp4" type="video/mp4">
                </video>
                <div class="date"></div>
            </div>
            <div class="infos">
                <div class="logo-web-title">
                    <img class="logo-ws" src="https://i.imgur.com/dxVZLOG.png" alt="Vương Thanh Diệu">
                    <span class="web-title">
                        <!-- <span class="td-lock"></span>𝗟𝗼𝗰𝗸 𝗦𝗰𝗿𝗲𝗲𝗻 <span class="td-lock"></span> -->
                  𝑻𝒉𝒂𝒏𝒉𝑫𝒊𝒆𝒖
                    </span>
                </div>
                <span class="web_desc"></span>
                <div>
                <i class="icon ni ni-arrow-down close-lockscreen"></i>
                </div>
            </div>
        </section>
    </div>
    <div class="pace pace-active">
        <div class="pace-progress" data-progress-text="0%" data-progress="0"
            style="transform: translate3d(0%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
    </div>
    <div id="loading-box">
        <div class="loading-bg">
            <img class="loading-img entered loading" src="<?=$ThanhDieuHeader->favicon?>?v=<?=rand(1,999)?>" data-ws-status="loading">
            <div class="loading-image-dot"></div>
            <div id="loading-percentage">0%</div>
        </div>
    </div>
    <!--/ @End Loader /-->
    <main id="td-main">
        <nav id="nav" class="hide">
            <div class="td-popup" id="share_card">
                <div class="left">
                    <div class="title">Chia Sẽ Đến Mọi Người</div>
                    <span class="td_copy" title="Nhấn để sao chép">
                        <i class="ri-file-copy-line"></i>&nbsp;https://<?php echo $_SERVER['HTTP_HOST']; ?>?t=share
                    </span>
                    <div class="button mt-2">
                        <span class="td-btn"
                            onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href),'top');"
                            style="color:#3C8AFF;font-size: 1.5rem; cursor: pointer;" type="submit">
                            <i class="ri-facebook-circle-fill"></i>
                        </span>
                        <span class="td-btn"
                            onclick="window.open('https://www.messenger.com/t/' + encodeURIComponent('wusthanhdieu'),'top');"
                            style="color:#00A0DC;font-size: 1.5rem;" type="submit">
                            <i class="ri-messenger-fill"></i>
                        </span>
                        <span class="td-btn"
                            onclick="window.open('https://t.me/share/url?url=' + encodeURIComponent(window.location.href),'top');"
                            style="color:#03A5F0;font-size: 1.5rem;" type="submit">
                            <i class="ri-telegram-line"></i>
                        </span>
                    </div>
                </div>
                <div class="right">
                    <div style="color:#009d0a;padding: 0.5rem;">
                        <i class="ri-qr-code-line"></i>&ensp;Quét Mã
                    </div>
                    <img class="avatar-nav"
                        src="https://chart.googleapis.com/chart?chs=96x96&cht=qr&chl=https%3A%2F%2F<?=$_SERVER['HTTP_HOST']?>&choe=UTF-8"
                        alt="Qr-code">
                </div>
            </div>
        </nav>
        <header id="header">
            <h2>
                <a href="#" class="site-icon"><?=$ThanhDieuHeader->namesite?></a>
            </h2>
            <div class="site-buttons">
                <button class="site-button mode-loveday">
                    <i class="ri-heart-2-line"></i>
                </button>
                <!-- <button class="site-button full-screen">
                    <i class="ri-fullscreen-line"></i>
                </button> -->
                <button class="site-button change-skin">
                    <em class="theme-icon ni ni-sun"></em>
                    <button class="site-button setting-site">
                        <i class="ri-share-forward-line"></i>
                    </button>
            </div>
        </header>
        <section class="td-content">
            <div class="about-me">
                <div class="info-left">
                    <span class="tag"><?=$ThanhDieuHeader->bio1?></span>
                    <span class="tag"><?=$ThanhDieuHeader->bio2?></span>
                    <span class="tag"><?=$ThanhDieuHeader->bio3?></span>
                </div>
                <div class="avatar">
                    <img class="avatar-img" src="<?=$ThanhDieuHeader->avatar?>?v=<?=rand(1,999)?>" alt="Vương Thanh Diệu">
                    <img class="crown" src="./res/v5/img/crown/mong-vuot-rong.png">
                    <!-- <img class="crown2" src="./res/v5/img/crown/vip-crown.png"> -->
                </div>
                <div class="info-right">
                    <span class="tag"><?=$ThanhDieuHeader->bio4?></span>
                    <span class="tag"><?=$ThanhDieuHeader->bio5?></span>
                    <span class="tag"><?=$ThanhDieuHeader->bio6?></span>
                </div>
            </div>
            <div class="padding" style="height:2em;"></div>
            <h2 class="HoVaTen__">
                <span id="userName" data-userName='<?= json_encode($ThanhDieuHeader->userName ?? []) ?>'></span>
            </h2>
            <div class="about-me-2">
                <button class="trigger"><?=$ThanhDieuHeader->trigger?></button>
                <button class="trigger"><?=$ThanhDieuHeader->bio1?></button>
                <button class="trigger"><?=$ThanhDieuHeader->bio2?></button>
                <button class="trigger"><?=$ThanhDieuHeader->bio3?></button>
                <button class="trigger"><?=$ThanhDieuHeader->bio4?></button>
                <button class="trigger"><?=$ThanhDieuHeader->bio5?></button>
                <button class="trigger"><?=$ThanhDieuHeader->bio6?></button>
            </div>
            <div class="padding" style="height:1em;"></div>
            <section id="hr-mod">
                <?php foreach ($ThanhDieuHeader->SocialNetworks as $network => $url): ?>
                <a class="link-item <?= $network ?>" data-href="<?= $url ?>">
                    <div class="icon" style="background-image: url(./res/v5/img/social/<?= $network ?>.webp)"></div>
                </a>
                <?php endforeach; ?>
            </section>
        </section>
        <!-- <div class="website-container">
        </div> -->
        <!-- <div id="hr-mod">
      <h2 class="td-title"><u>- Language Skill -</u></h2>
      </div> -->
        </div>
        </div>
    </main>
    <main id="td-lovedays">
    <div class="padding" style="height:4em;"></div>
        <div class="love-time1 mt-5">
            <div class="hide" data-ngayyeu="<?= $ThanhDieuLoveDays->ConfigLove['time_relashiption']; ?>"></div>
            <span class="love-time1-item" id="day">00</span> Ngày <span class="love-time1-item" id="hours">00</span>
            Giờ <span class="love-time1-item" id="minute">00</span> Phút <span class="love-time1-item"
                id="seconds">00</span> Giây
        </div>
        <div class="bg-wrap central mt-5">
            <div class="bg-img">
                <div class="middle animated">
                    <div class="img-male">
                        <img src="<?=$ThanhDieuLoveDays->ConfigLove['avatar_male'];?>"
                            alt="<?=$ThanhDieuLoveDays->ConfigLove['name_male'];?>">
                        <img class="crown-love" src="./res/v5/img/crown/khung-4.png">
                        <span><?=$ThanhDieuLoveDays->ConfigLove['name_male'];?></span>
                    </div>
                    <div class="heart"></div>
                    <div class="img-female">
                        <img src="<?=$ThanhDieuLoveDays->ConfigLove['avatar_female'];?>"
                            alt="<?=$ThanhDieuLoveDays->ConfigLove['name_female'];?>">
                        <img class="crown-love" src="./res/v5/img/crown/khung-4.png">
                        <span><?=$ThanhDieuLoveDays->ConfigLove['name_female'];?></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--/ @Setting ThanhDieuV5 /-->
    <ul class="nk-sticky-toolbar">
        <li class="demo-settings">
            <a class="toggle tipinfo" data-target="SettingPanel">
                <svg class="icon-spin" viewBox="0 0 30 30" id="Layer_1" version="1.1" xml:space="preserve"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path class="st2"
                            d="M26.6,12.9l-2.9-0.3c-0.2-0.7-0.5-1.4-0.8-2l1.8-2.3c0.2-0.2,0.1-0.5,0-0.7l-2.2-2.2c-0.2-0.2-0.5-0.2-0.7,0 l-2.3,1.8c-0.6-0.4-1.3-0.6-2-0.8l-0.3-2.9C17,3.2,16.8,3,16.6,3h-3.1c-0.3,0-0.5,0.2-0.5,0.4l-0.3,2.9c-0.7,0.2-1.4,0.5-2,0.8 L8.3,5.4c-0.2-0.2-0.5-0.1-0.7,0L5.4,7.6c-0.2,0.2-0.2,0.5,0,0.7l1.8,2.3c-0.4,0.6-0.6,1.3-0.8,2l-2.9,0.3C3.2,13,3,13.2,3,13.4v3.1 c0,0.3,0.2,0.5,0.4,0.5l2.9,0.3c0.2,0.7,0.5,1.4,0.8,2l-1.8,2.3c-0.2,0.2-0.1,0.5,0,0.7l2.2,2.2c0.2,0.2,0.5,0.2,0.7,0l2.3-1.8 c0.6,0.4,1.3,0.6,2,0.8l0.3,2.9c0,0.3,0.2,0.4,0.5,0.4h3.1c0.3,0,0.5-0.2,0.5-0.4l0.3-2.9c0.7-0.2,1.4-0.5,2-0.8l2.3,1.8 c0.2,0.2,0.5,0.1,0.7,0l2.2-2.2c0.2-0.2,0.2-0.5,0-0.7l-1.8-2.3c0.4-0.6,0.6-1.3,0.8-2l2.9-0.3c0.3,0,0.4-0.2,0.4-0.5v-3.1 C27,13.2,26.8,13,26.6,12.9z M15,19c-2.2,0-4-1.8-4-4c0-2.2,1.8-4,4-4s4,1.8,4,4C19,17.2,17.2,19,15,19z">
                        </path>
                    </g>
                </svg>
            </a>
        </li>
    </ul>
    <div class="nk-demo-panel toggle-slide toggle-slide-right toggle-screen-any content-active" id="SettingPanel"
        data-content="SettingPanel" data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Ws Settings</h6>
            <a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2 active" data-target="SettingPanel"
                href="#">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        <div class="nk-opt-panel" data-simplebar="init">
            <div class="simplebar-wrapper">
                <div class="simplebar-mask">
                    <div class="simplebar-offset">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                            aria-label="scrollable content" style="height: auto; overflow: hidden scroll;">
                            <div class="simplebar-content">
                                <div class="nk-opt-set nk-opt-set-aside-apps change-bg">
                                    <div class="nk-opt-set-title">Nền BackGround</div>
                                    <div class="nk-opt-list col-4x">
                                        <div class="nk-opt-item active" data-bg="./res/v5/img/bg.gif">
                                            <span class="nk-opt-item-bg">
                                                <img src="./res/v5/img/bg.gif">
                                            </span>
                                            <span class="nk-opt-item-name">Default</span>
                                        </div>
                                        <div class="nk-opt-item" data-bg="./res/v5/img/anime-wall.jpg">
                                            <span class="nk-opt-item-bg">
                                                <img src="./res/v5/img/anime-wall.jpg">
                                            </span>
                                            <span class="nk-opt-item-name">Anime</span>
                                        </div>
                                        <div class="nk-opt-item" data-bg="./res/v5/img/bg3.webp">
                                            <span class="nk-opt-item-bg">
                                                <img src="./res/v5/img/bg3.webp">
                                            </span>
                                            <span class="nk-opt-item-name">Sosuke</span>
                                        </div>
                                        <div class="nk-opt-item"
                                            data-bg="https://api.thanhdieu.com/random-background.php">
                                            <span class="nk-opt-item-bg">
                                                <img src="./res/v5/img/random.jpeg">
                                            </span>
                                            <span class="nk-opt-item-name">Random</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-opt-set">
                                <div class="nk-opt-set-title">Danh Sách Nhạc</div>
                                <br />
                                <div class="nk-opt-list">
                                    <ul class="music_menu_list">
                                        <?php foreach ($ThanhDieuMusicList->songs as $song): ?>
                                        <li url="<?= $song['url'] ?>">
                                            <span class="name">
                                                <img class="singer-avatar ls-is-cached" src="<?= $song['avatar'] ?>">
                                                <span class="title">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;"><?= $song['title'] ?>
                                                        </font>
                                                    </font>
                                                </span>
                                            </span>
                                            <span class="author">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;"><?= $song['author'] ?></font>
                                                </font>
                                            </span>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="nk-opt-set comming-soon" style="pointer-events:none;opacity: 0.5;">
                                <div class="nk-opt-set-title">Hiệu Ứng Effect</div>
                                <div class="nk-opt-list col-3x">
                                    <div class="nk-opt-item active" data-key="effect" data-update="tathieuung">
                                    <div class="custom-control custom-control-sm custom-radio">
                                            <input type="radio" id="tathieuung" disabled class="custom-control-input">
                                            <label class="custom-control-label" for="tathieuung">Tắt Effect</label>
                                        </div>
                                    </div>
                                    <div class="nk-opt-item" data-key="effect" data-update="laroi">
                                        <div class="custom-control custom-control-sm custom-radio">
                                            <input type="radio" id="laroi" disabled class="custom-control-input">
                                            <label class="custom-control-label" for="laroi">Lá Rơi</label>
                                        </div>
                                    </div>
                                    <div class="nk-opt-item" data-key="effect" data-update="tuyetroi">
                                        <div class="custom-control custom-control-sm custom-radio">
                                            <input type="radio" id="tuyetroi" disabled class="custom-control-input">
                                            <label class="custom-control-label" for="tuyetroi">Hiện FPS</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="nk-opt-set">
                                <div class="nk-opt-set-title">Giao Diện Theme</div>
                                <div class="nk-opt-list col-2x">
                                    <div class="nk-opt-item active" data-key="mode" data-update="light-mode">
                                        <span class="nk-opt-item-bg is-light">
                                            <span class="theme-light"></span>
                                        </span>
                                        <span class="nk-opt-item-name">Màu Trắng</span>
                                    </div>
                                    <div class="nk-opt-item" data-key="mode" data-update="dark-mode">
                                        <span class="nk-opt-item-bg">
                                            <span class="theme-dark"></span>
                                        </span>
                                        <span class="nk-opt-item-name">Màu Tối</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-opt-set">
                                <div class="nk-opt-set-title">Chế Độ Destroy</div>
                                <div class="nk-opt-list col-2x">
                                    <div class="nk-opt-item active" data-mode="DisableDestroy">
                                        <span class="nk-opt-item-bg">
                                            <span class="bg-danger"></span>
                                        </span>
                                        <span class="nk-opt-item-name">Vô Hiệu Hoá</span>
                                    </div>
                                    <div class="nk-opt-item" data-mode="EnableDestroy">
                                        <span class="nk-opt-item-bg">
                                            <span class="bg-success"></span>
                                        </span>
                                        <span class="nk-opt-item-name">Kích Hoạt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width:auto;height:1050px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal">
                <div class="simplebar-scrollbar"></div>
            </div>
            <div class="simplebar-track simplebar-vertical">
                <div class="simplebar-scrollbar"></div>
            </div>
        </div>
    </div>
    <div class="running-cat">
        <img src="./res/v5/img/cat.webp" alt="Running Cat">
    </div>
    <span id="fps">
        <font color="#640366">FPS: 60 </font>
        <span style="color:#009e45">Bình Thường😂</span>
    </span>
    <footer id="footer">
        <span>
            <a href="//thanhdieu.com" target="_blank">&copy; Copyright&nbsp;ThanhDieu 2024</a>
        </span>
    </footer>
    <div class="time-now" id="real-time">00:00:00</div>
    <div id="Toast">Resources Code V4.0.2</div>

    <!--/ @Framework /-->
    <script src="./res/v5/libs/jquery/jquery-3.6.0.min.js"></script>
    <script src="./res/v5/libs/jquery.pjax/jquery.pjax.min.js"></script>
    <script src="./res/v5/libs/jbox@1.3.3/jBox.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"
        data-pace-options='{"restartOnRequestAfter":false,"eventLag":false}'></script>
    <!--/ @Index Resource /-->
    <script src="./res/v5/js/index.js?v=<?php echo rand(1,999)?>">
    </script>
    <!--/ @CDN /-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="//cdn.thanhdieu.com/dialog/wstoast/ws.toast.js"></script>
    <!-- <?php require_once './res/function/fuck-devtools.php'; ?> -->
</body>
</html>
<!-- Thank you so much 💝 -->