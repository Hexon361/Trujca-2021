<!DOCTYPE HTML>
<html>

<head>
    <html lang="pl-PL">
    <title>Trujca.pl</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- OG -->
    <meta name="theme-color" content="#80e03f" />
    <meta name="Description" content="Największy i najlepszy serwer DM w Polsce!">
    <meta property="og:title" content="Trujca.pl" />
    <meta property="og:description" content="Największy i najlepszy serwer DM w Polsce!" />
    <meta property="og:image" content="http://www.trujca.pl/images/main/logo.webp">
    <!-- stylesheet -->
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon.ico" sizes="196x196" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>

<body>

    <body class="is-preload">
        <!--navbar-->
        <header>
            <img class="logo" src="images/main/logo.png" alt="logo" width="auto" height="auto">
            <div class="navbar">
                <ul class="nav_links">
                    <li><a href="#opis">O nas</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#klawiszologia">Klawiszologia</a></li>
                    <li><a href="#regulamin">Regulamin</a></li>
                </ul>
            </div>
            <a href="https://discord.com/invite/trujca" target="_blank" rel="noopener"><button class="button"><i class="fab fa-discord"></i> Dołącz do nas</button></a>
        </header>
        <!--Góra-->
        <header id="header">
            <div class="content">
                <h1>AKTUALNIE ONLINE:</h1>
                <p><span><?php echo count(json_decode(file_get_contents("http://193.41.226.58:30120/players.json"))); ?></span>/<span>512</span></p>
                <img src="images/main/myszka.png" alt="" width="24" height="auto">
            </div>
        </header>
        <!-- Opis serwera -->
        <div id="opis">
            <section id="two" class="wrapper">
                <div class="inner alt">
                    <section class="spotlight">
                        <img class="image" src="images/main/opis.png" width="auto" height="auto" alt="opis" />
                        <div class="content">
                            <h2>TrujcaRDM</h2>
                            <p>Trujca to największy serwer tego typu w Polsce. Nasza społeczność liczy aktualnie ponad 35 tys. osób, a liczba ta ciągle rośnie.</p>
                            <p>Tylko u nas spotkasz administrację, która zawsze chętnie pomoże oraz developerów, którzy tworzą z pasji.</p>
                            <a href="https://discord.com/invite/trujca" target="_blank" rel="noopener"><button class="button"><i class="fab fa-discord"></i> Zapraszamy na nasz Discord</button></a>
                        </div>
                    </section>
                </div>
            </section>
        </div>
        <br>
        <div id="team">
            <!-- 1 -->
            <!-- Alku -->
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="images/avatar/alku.webp" id="info-image" alt="">
                        <div class="container">
                            <h3>Alku</h3>
                            <p class="title">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <!-- Bitsu -->
                <div class="column">
                    <div class="card">
                        <img src="images/avatar/bitsu.webp" id="info-image" alt="">
                        <div class="container">
                            <h3>BitSu</h3>
                            <p class="title">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <!-- Rusek -->
                <div class="column">
                    <div class="card">
                        <img src="images/avatar/rusek.webp" id="info-image" alt="">
                        <div class="container">
                            <h3>Rusek</h3>
                            <p class="title">CEO</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- 2 -->
            <!-- Hexon -->
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="images/avatar/hexon.webp" id="info-image" alt="">
                        <div class="container">
                            <h3>Hexon361</h3>
                            <p class="title">Zarząd & Web Developer</p>
                        </div>
                    </div>
                </div>
                <!-- DEjsu -->
                <div class="column">
                    <div class="card">
                        <img src="images/avatar/dejsu.webp" id="info-image" alt="">
                        <div class="container">
                            <h3>DEjsu</h3>
                            <p class="title">Zarząd</p>
                        </div>
                    </div>
                </div>
                <!-- Lukname -->
                <div class="column">
                    <div class="card">
                        <img src="images/avatar/lukname.webp" id="info-image" alt="">
                        <div class="container">
                            <h3>lukname</h3>
                            <p class="title">Car Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- 3 -->
            <div class="row">
                <!-- Misiaczek -->
                <div class="column">
                    <div class="card">
                        <img src="images/avatar/misiaczek.webp" id="info-image" alt="">
                        <div class="container">
                            <h3>Misiaczek</h3>
                            <p class="title">Server Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--KLAWISZOLOGIA-->
        <div id="klawiszologia">
            <div class="img-box">
                <img class="image" src="images/main/klawiszologia.webp" width="100%" height="auto">
                <h4 class="centered">Klawiszologia</h4>
            </div>
            <ol class="boardrules-rules">
                <span style="text-align:left;display:flexbox;padding: 5em;">
                    <p><b>F1</b> Pojazdy</p>
                    <p><b>F2</b> Noclip</p>
                    <p><b>F3</b> Emotki</p>
                    <p><b>F5</b> Zmiana zasięgu voice chat</p>
                    <p><b>E</b> Revive</p>
                    <p><b>Y</b> Podstawowe bronie dla graczy</p>
                    <p><b>Z</b> Lista graczy (obręb 30m)</p>
                    <p><b>M</b> Menu tunningowania pojazdu</p>
                    <!-- Komendy -->
                    <hr>
                    <p><b>/heal</b> Leczenie</p>
                    <p><b>/dv</b> Usunięcie pojazdu, w którym siedzimy</p>
                    <p><b>/fix</b> Naprawa pojazdu</p>
                    <p><b>/tpm</b> Teleportowanie się do miejsca zaznaczonego na mapie</p>
                    <p><b>/report</b> Zgłoszenie do administracji</p>
                    <p><b>/tunning</b> Pełny tuning mechaniczny do auta</p>
                    <p><b>/skin</b> Tworzenie postaci</p>
                    <p><b>/tpa ID</b> Teleportowanie się do gracza</p>
                    <p><b>/shuff</b> Przesiadanie się w pojeździe</p>
                    <p><b>/pierwsza</b> Zmiana perspektywy na pierwsza</p>
                    <p><b>/trzecia</b> Zmiana perspektywy na trzecia</p>
                    <p><b>/kropka</b> Włącza i wyłącza kropkę</p>
                    <p><b>/resetujstatystyki</b> Zeruje licznik K/D</p>
                    <p><b>/clean</b> Mycie pojazdu</p>
                </span>
            </ol>
        </div>
        <br>
        <div id="regulamin">
            <div class="img-box">
                <img src="images/main/regulamin.webp" width="100%" height="auto">
                <h4 class="centered">Regulamin</h4>
            </div>
            <ol class="boardrules-rules">
                <span style="text-align:left;display:flexbox;padding: 5em;">
                    <p><b>1.</b> Jeżeli chcesz dołączyć się do ludzi, którzy się strzelają - zapytaj o pozwolenie, a nie pakuj się na chama.</p>
                    <p><b>2.</b> Podczas rozgrywki na serwerze obowiązuje całkowity zakaz korzystania z cheatów, exploitów oraz wszelkich wspomagaczy rozgrywki.</p>
                    <p><b>3.</b> Każdy z graczy odpowiada za porządek na serwerze, dlatego też koniecznie rób po sobie porządek /dv-kując auta.</p>
                    <p><b>4.</b> Składając aplikacje na whitelist potwierdzasz zapoznanie się z regulaminem i akceptujesz go.</p>
                    <p><b>5.</b> Od każdej osoby posiadającej rangę @.whitelist wymaga się włączonego voice czatu - ułatwia nam to wzajemną komunikację podczas wyjaśniania problemów.</p>
                    <p><b>6.</b> Wszelkie n-wordy, p-wordy i inne określenia obrażające na tle rasistowskim, ksenofobicznym, homofobicznym i antysemitycznym są zakazane.</p>
                    <p><b>7.</b> Nick steam oraz ten na discordzie mają być takie same (można również ustawić sobie pseudonim na dc, który jest zgodny z nazwą steam).</p>
                    <p><b>8.</b> Obowiązuje kategoryczny zakaz reklamowania stron i innych serwerów w nickach oraz poprzez wrzucanie ogłoszeń na serwerze i discordzie Trujca.</p>
                    <p><b>9.</b> Administracja zastrzega sobie prawo do zbanowania osoby za przewinienia, które nie znajdują się w regulaminie, nawet bez podania przyczyny.</p>
                    <p><b>10.</b> Administracja zastrzega sobie prawo do zmiany regulaminu w dowolnym momencie, obowiązuje on od momentu ogłoszenia tych zmian.</p>
                    <p><b>11.</b> Do zgłaszania problemów, graczy, etc służy /report na serwerze albo tickety na discordzie (#pomoc). Wszelkie wiadomości pw, np. "można perma id X, za vdm'a" będą ignorowane.</p>
                    <p><b>12.</b> Każdy /report, który nie będzie dotyczył prośby o pomoc lub zgłoszenia łamania regulaminu będzie nagradzany banem od 12h w górę. Zakazuje się również spamowania zgłoszeniami.</p>
                    <p><b>13.</b> Każda osoba z rangą nakaz nagrywania ma obowiązek posiadania VOD'a z całego czasu rozgrywki na serwerze od momentu wejścia, aż do wyjścia z serwera. Dodatkowo posiadać trzeba nagrania do 72h wstecz.</p>
                </span>
            </ol>
        </div>
        <br>
        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; <a href="https://github.com/Hexon361" class="brand" target="_blank" rel="noopener">Hexon361</a></p>
        </footer>
        <!-- JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/smooth-scroll.js"></script>
        <script src="assets/js/anchor.js"></script>
    </body>

</html>