<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tevich</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="signup/style.css">
    <link rel="stylesheet" href="login/style.css">
</head>
<body>
    <header class="header">
        <div class="tools-container">
            <a class="home-icon" href="">
                <img src="assets/TevichIcon.svg" style="width: 24px; height: 28px;" alt="">
            </a>
            <a class="browse-icon" href="">Browse</a>
            <button class="more-btn">
                <svg width="20" height="20" viewBox="0 0 20 20" focusable="false" aria-hidden="true" role="presentation">
                    <path d="M10 18a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zM8 4a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"></path>
                </svg>
            </button>
        </div>
        <div class="search-container">
                <input class="search-input" type="search" placeholder="Search">
            <button class="search-btn">
                <svg width="24px" height="24px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" data-a-selector="tw-core-button-icon" class="ScIconSVG-sc-1q25cff-1 jpczqG">
                    <g>
                        <path fill-rule="evenodd" d="M13.192 14.606a7 7 0 111.414-1.414l3.101 3.1-1.414 1.415-3.1-3.1zM14 9A5 5 0 114 9a5 5 0 0110 0z" clip-rule="evenodd"></path>
                    </g>
                </svg>
            </button>
        </div>
        <div class="user-mng-container">
            <button class="prime-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" focusable="false" aria-hidden="true" role="presentation">
                    <path fill-rule="evenodd" d="M13.798 10.456 10 6.657l-3.798 3.799L4 8.805V13h12V8.805l-2.202 1.65zM18 5v8a2 2 0 0 1-2 2H4a2.002 2.002 0 0 1-2-2V5l4 3 4-4 4 4 4-3z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <button id="login-btn" class="login-btn">Log In</button>
            <button id="signup-btn" class="signup-btn">Sign UP</button>
            <button class="account-btn">
                <svg width="20" height="20" viewBox="0 0 20 20" focusable="false" aria-hidden="true" role="presentation">
                    <path fill-rule="evenodd" d="M5 7a5 5 0 1 1 6.192 4.857A2 2 0 0 0 13 13h1a3 3 0 0 1 3 3v2h-2v-2a1 1 0 0 0-1-1h-1a3.99 3.99 0 0 1-3-1.354A3.99 3.99 0 0 1 7 15H6a1 1 0 0 0-1 1v2H3v-2a3 3 0 0 1 3-3h1a2 2 0 0 0 1.808-1.143A5.002 5.002 0 0 1 5 7zm5 3a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </header>
    <div class="main-container">
        <nav class="side-nav">
            <div class="side-nav-title-container">
                <h2>RECOMMENDED CHANNELS</h2>
                <button>
                    <svg width="100%" height="100%" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" aria-hidden="true" focusable="false" class="ScIconSVG-sc-1q25cff-1 jpczqG">
                        <g>
                            <path d="M16 16V4h2v12h-2zM6 9l2.501-2.5-1.5-1.5-5 5 5 5 1.5-1.5-2.5-2.5h8V9H6z"></path>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="side-nav-streams">

                <?php
                    $link = mysqli_connect("localhost","root","","tevich");
                    if (mysqli_connect_errno())
                        exit("khata!!!". mysqli_connect_error());

                    $user_query = "SELECT * FROM `user`";
                    $data = mysqli_query($link, $user_query);
  
                    for ($i=0; $i < $data->num_rows; $i++) { 
                        $user = mysqli_fetch_assoc($data);
                        $pp_query = "SELECT * FROM `image` WHERE id = {$user["profile_icon_id"]}";
                        $user_pp = mysqli_fetch_assoc(mysqli_query($link, $pp_query));
                        echo("<a href=''>
                            <div class='side-nav-stream-icon'>
                                <img src='{$user_pp['url']}' alt=''>
                            </div>
                            <div class='side-nav-stream-info'>
                                <p title={$user['user_name']}>{$user['user_name']}</p>
                                <p title='the game'>the game</p>
                            </div>
                            <div class='side-nav-stream-viewers'>
                                <div></div>
                                <p>{$user['view_count']}K</p>
                            </div>
                        </a>");
                    };
                    mysqli_close($link);
                ?>
            </div>
        </nav>
        <main class="twilight-main">
            <div class="main-slider">
                <button class="slider-controls-previous">
                <svg width="30px" height="30px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" aria-hidden="true" focusable="false" class="ScIconSVG-sc-1q25cff-1 jpczqG">
                    <g>
                        <path d="M13.5 14.5L9 10l4.5-4.5L12 4l-6 6 6 6 1.5-1.5z"></path>
                    </g>
                </svg>
                </button>
                <div class="slider-container">
                    <?php
                        $link = mysqli_connect("localhost","root","","tevich");
                        if (mysqli_connect_errno())
                            exit("khata!!!". mysqli_connect_error());
                        $query = "SELECT * FROM `image`";
                        $data = mysqli_query($link, $query);
                        for ($i=1; $i <= 5; $i++) { 
                            $image = mysqli_fetch_array($data);
                            echo("<img class='main-slider-slide main-slider-slide-$i' data-index='$i' src='{$image['url']}' alt=''>");
                        }
                        mysqli_close($link);
                    ?>
                </div>
                <button class="slider-controls-next">
                <svg width="30px" height="30px" version="1.1" viewBox="0 0 20 20" x="0px" y="0px" aria-hidden="true" focusable="false" class="ScIconSVG-sc-1q25cff-1 jpczqG">
                    <g>
                        <path d="M6.5 5.5L11 10l-4.5 4.5L8 16l6-6-6-6-1.5 1.5z"></path>
                    </g>
                </svg>
                </button>
            </div>
            <div class="main-streams-container">
                <div class="streams-container">
                    <div class="streams-container-title">
                        <a href="">Live streams </a>
                        <p> we think you'll like</p>
                    </div>
                    <div class="streams-container-streams">
                        <?php
                            for ($i=0; $i < 5; $i++) { 
                                echo(
                                    '<article class="stream">
                                        <div class="stream-card-container">
                                            <div class="stream-card-edge-corner-left"></div>
                                            <div class="stream-card-edge-corner-bottom"></div>
                                            <div class="stream-card-edge-left"></div>
                                            <div class="stream-card-edge-bottom"></div>
                                            <a class="stream-card">
                                                <p class="stream-live-icon">LIVE</p>
                                                <p class="stream-viewers">666K viewers</p>
                                            </a>
                                        </div>
                                        <div class="stream-info-container">
                                            <div class="stream-icon">
                                                <img src="assets/ghorbanzadee.jpg" alt="">
                                            </div>
                                            <div class="stream-info">
                                                <a title="the title" class="stream-title" href="">the title</a>
                                                <a title="the dude" class="stream-name" href="">the dude</a>
                                                <a title="the game" class="stream-game-name" href="">the game</a>
                                                <div class="stream-tags" href="">
                                                    <a title="the tag" href="">
                                                        <p>the tag</p>
                                                    </a>
                                                    <a title="the tag" href="">
                                                        <p>the tag</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>'
                                );
                            };
                        ?>
                    </div>
                    <div style="display: none;" id="streams-sec-row" class="streams-container-streams">
                        <?php
                            for ($i=0; $i < 5; $i++) { 
                                echo(
                                    '<article class="stream">
                                        <div class="stream-card-container">
                                            <div class="stream-card-edge-corner-left"></div>
                                            <div class="stream-card-edge-corner-bottom"></div>
                                            <div class="stream-card-edge-left"></div>
                                            <div class="stream-card-edge-bottom"></div>
                                            <a class="stream-card">
                                                <p class="stream-live-icon">LIVE</p>
                                                <p class="stream-viewers">666K viewers</p>
                                            </a>
                                        </div>
                                        <div class="stream-info-container">
                                            <div class="stream-icon">
                                                <img src="assets/ghorbanzadee.jpg" alt="">
                                            </div>
                                            <div class="stream-info">
                                                <a title="the title" class="stream-title" href="">the title</a>
                                                <a title="the dude" class="stream-name" href="">the dude</a>
                                                <a title="the game" class="stream-game-name" href="">the game</a>
                                                <div class="stream-tags" href="">
                                                    <a title="the tag" href="">
                                                        <p>the tag</p>
                                                    </a>
                                                    <a title="the tag" href="">
                                                        <p>the tag</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>'
                                );
                            };
                        ?>
                    </div>
                    <div id="show-more-container" class="streams-container-more-btn">
                        <div></div>
                        <button id="show-more-btn">
                            <p>Show more</p>
                            <svg width="20" height="20" viewBox="0 0 20 20">
                                <path d="M14.5 6.5 10 11 5.5 6.5 4 8l6 6 6-6-1.5-1.5z"></path>
                            </svg>
                        </button>
                        <div></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php
        include("signup/index.php");
        include("login/index.php");
    ?>
</body>
<script src="app.js"></script>
<script src="signup/app.js"></script>
<script src="login/app.js"></script>
</html>