<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="QCkU7jtrAqFaZKwSC_eNzIq-GxSNSwJnyUNICgAFDpwBU1uBcB1G0BMIwip7x9-a34h-XMcgOxS6KnB-SUx0-g==">
    <title>SPMB</title>
    <link rel="shortcut icon" href="/assets/images/logo_del.png" type="image/x-icon">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/chatbot.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .chat-input {
            display: flex;
            align-items: center;
        }

        .chat-input input[type="text"] {
            flex: 1;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <nav id="w0" class="navbar-inverse2 navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span></button><a class="navbar-brand" href="/index.php"></a>
                </div>
                <div id="w0-collapse" class="collapse navbar-collapse">
                    <ul id="w1" class="navbar-nav navbar-right nav">
                        <li class="active"><a href="/index.php?r=site%2Findex">HOME</a></li>
                        <li id="info-pendaftaran" class="dropdown"><a id="menu-info" class="dropdown-toggle" href="#" data-toggle="dropdown">INFO &amp; PENDAFTARAN <span class="caret"></span></a>
                            <ul id="dropdown-info" class="dropdown-menu">
                                <li><a href="/index.php?r=pmb-pendaftaran%2Findex" tabindex="-1">PENDAFTARAN</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu"><a href="#" tabindex="-1">SYARAT</a>
                                    <ul>
                                        <li><a href="/index.php?r=pmb-syarat-usm%2Fview&amp;id=1" tabindex="-1">PMDK</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/index.php?r=pmb-syarat-usm%2Fview&amp;id=2" tabindex="-1">USM 1</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/index.php?r=pmb-syarat-usm%2Fview&amp;id=5" tabindex="-1">USM 3</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/index.php?r=pmb-syarat-usm%2Fview&amp;id=9" tabindex="-1">USM 2</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/index.php?r=pmb-syarat-usm%2Fview&amp;id=10" tabindex="-1">UTBK</a></li>
                                        <li class="divider"></li>
                                        <li><a href="/index.php?r=pmb-syarat-usm%2Fview&amp;id=12" tabindex="-1">JPS</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/index.php?r=site%2Fpesanlaptop" tabindex="-1">PEMESANAN LAPTOP</a></li>
                            </ul>
                        </li>
                        <li><a href="/index.php?r=pmb-usm%2Findex">BIAYA</a></li>
                        <li><a href="/index.php?r=pmb-prodi%2Fprodi">PRODI</a></li>
                        <li><a href="/index.php?r=pmb-pengumuman%2Findex">PENGUMUMAN</a></li>
                        <li><a href="/index.php?r=forum-post">FORUM</a></li>
                        <li id="menu-berita" class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">BERITA <span class="caret"></span></a>
                            <ul id="dropdown-berita" class="dropdown-menu">
                                <li><a href="/index.php?r=pmb-galery" tabindex="-1">GALERI</a></li>
                                <li class="divider"></li>
                                <li><a href="/index.php?r=pmb-berita" tabindex="-1">KONTEN</a></li>
                                <li class="divider"></li>
                                <li><a href="/index.php?r=pmb-kerja-sama" tabindex="-1">KERJA SAMA</a></li>
                            </ul>
                        </li>
                        <li><a href="/index.php?r=site%2Fdaftaronline">DAFTAR ONLINE</a></li>
                        <li><a href="/index.php?r=site%2Fkontak">KONTAK</a></li>
                        <li id="menu-login" class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">LOGIN <span class="caret"></span></a>
                            <ul id="dropdown-login" class="dropdown-menu">
                                <li><a href="/index.php?r=site%2Flogin" tabindex="-1">LOGIN</a></li>
                                <li class="divider"></li>
                                <li><a href="/index.php?r=site%2Fsignup" tabindex="-1">DAFTAR AKUN</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <br><br>
    <br>
    <div class="container">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <p class="pull-left">
                    <table>
                        <tr>
                            <td><img src="{{ asset('assets/images/del/itdel.jpg') }}" height="80" width="80"></td>
                            <td width="20"></td>
                            <td>
                                <h2>SPMB IT Del<br><b>Informasi Penerimaan Mahasiswa Baru</b> Institut Teknologi Del</h2>
                            </td>
                        </tr>
                    </table>
                    </p>
                    <div class="col-lg-12 text-center"></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-7">
                        <section style="padding-bottom: 0px">
                            <div class="carousel slide" id="carousel-example-generic" data-ride="carousel" data-interval="3000" wrap="true">
                                <ol class="carousel-indicators">
                                    <li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
                                    <li data-slide-to="1" data-target="#carousel-example-generic"></li>
                                    <li data-slide-to="2" data-target="#carousel-example-generic"></li>
                                    <li data-slide-to="3" data-target="#carousel-example-generic"></li>
                                    <li data-slide-to="4" data-target="#carousel-example-generic"></li>
                                </ol>
                                <center>
                                    <div class="carousel-inner acc_slider" style="height:350px;">
                                        <div class="item active center">
                                            <a href="image/PendaftaranPMDK_V2.jpg" target="_blank" class="pointer">
                                                <img src="{{ asset('assets/images/del/PendaftaranPMDK_V2.jpg') }}" alt="Slide 1" style=" margin:0px;"></a>
                                            <div class="carousel-caption  d-none d-md-block">
                                                <a>ALUR PENDAFTARAN PMDK</a>
                                            </div>
                                        </div>
                                        <div class="item center">
                                            <a href="image/PendaftaranUSM_V2.jpg" target="_blank" class="pointer">
                                                <img src="{{ asset('assets/images/del/PendaftaranUSM_V2.jpg') }}" alt="Slide 2" style=" margin:0px;">
                                            </a>
                                            <div class="carousel-caption"></div>
                                        </div>
                                        <div class="item center">
                                            <a href="image/PendaftaranUTBK_V2.jpg" target="_blank" class="pointer">
                                                <img src="{{ asset('assets/images/del/PendaftaranUTBK_V2.jpg') }}" alt="Slide 3" style=" margin:0px;">
                                            </a>
                                            <div class="carousel-caption"></div>
                                        </div>
                                        <div class="item center">
                                            <a href="image/Ulang.jpg" target="_blank" class="pointer">
                                                <img src="{{ asset('assets/images/del/Ulang.jpg') }}" alt="Slide 2" style=" margin:0px;">
                                            </a>
                                            <div class="carousel-caption"></div>
                                        </div>
                                        <div class="item center">
                                            <a href="image/Jalur.jpg" target="_blank" class="pointer">
                                                <img src="{{ asset('assets/images/del/Jalur.jpg') }}" alt="Slide 2" style=" margin:0px;">
                                            </a>
                                            <div class="carousel-caption"></div>
                                        </div>
                                        <div class="item center">
                                            <a href="image/del2.jpg" target="_blank" class="pointer">
                                                <img src="{{ asset('assets/images/del/del2.jpg') }}" alt="Slide 2" style=" margin:0px;">
                                            </a>
                                            <div class="carousel-caption"></div>
                                        </div>
                                        <div class="item center">
                                            <a href="image/del.jpg" target="_blank" class="pointer">
                                                <img src="{{ asset('assets/images/del/del.jpg') }}" alt="Slide 2" style=" margin:0px;">
                                            </a>
                                            <div class="carousel-caption"></div>
                                        </div>
                                    </div>
                                </center>
                                <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-5">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="nav-item"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="nav-link active">JADWAL PENDAFTARAN</a></li>
                                <li role="presentation" class="nav-item"><a href="#test" aria-controls="test" role="tab" data-toggle="tab" class="nav-link">JENIS TES</a></li>
                                <li role="presentation" class="nav-item"><a href="#lokasi" aria-controls="lokasi" role="tab" data-toggle="tab" class="nav-link">LOKASI *</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpane1" class="tab-pane active" id="home">
                                    <hr>
                                    <table class="table">
                                        <tr>
                                            <td align="left">
                                                <b>JPS</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>13 JANUARI 2024 - 14 FEBRUARI 2024</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>PMDK </b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>22 DESEMBER 2023 - 14 JANUARI 2024</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>USM 1</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>15 FEBRUARI 2024 - 20 MARET 2024</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>USM 2</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>18 MARET 2024 - 08 MEI 2024</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>USM 3</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>10 MEI 2024 - 06 JUNI 2024</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>UTBK</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>10 JUNI 2024 - 04 JULI 2024</b></font>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div role="tabpane2" class="tab-pane" id="test">
                                    <hr>
                                    <table class="table">
                                        <tr>
                                            <td align="left">
                                                <b>JPS</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>Nilai Rapor + Wawancara Lisan (Onsite)</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>PMDK </b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>Nilai Rapor + Wawancara Tertulis</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>USM 1</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>Tes Akademik</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>USM 2</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>Tes Akademik + Psikotes</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>USM 3</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>Tes Akademik + Psikotes</b></font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <b>UTBK</b>
                                            </td>
                                            <td></td>
                                            <td align="left">
                                                <font color="#1565C0"><b>Nilai UTBK + Psikotes</b></font>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div role="tabpane3" class="tab-pane" id="lokasi">
                                    <span class='alert-danger'>* HANYA UNTUK USM DENGAN TES AKADEMIK ONSITE</span>
                                    <table class="table">
                                        <tr>
                                            <td>Kampus Institut Teknologi Del</td>
                                            <td></td>
                                            <td>
                                                Jl. Sisingamangaraja, Sitoluama
                                                Laguboti,
                                                <br>Toba Samosir
                                                Sumatera Utara
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Medan</td>
                                            <td></td>
                                            <td>
                                                Kampus Universitas HKBP Nommensen (Medan)
                                                <br>Jl Perintis Kemerdekaan No.23, Perintis, Medan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jakarta</td>
                                            <td></td>
                                            <td>
                                                Sopo Del Office Towers & Lifestyle Tower A Lt. 9
                                                <br />Jl. Mega Kuningan Barat III Lot 10.1-6
                                                <br />Jakarta Selatan 12950
                                                <br />No. tlp : 021 - 5080 6565
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i>MARTUHAN</h4>
                            </div>
                            <div class="panel-body">
                                <p>MarTuhan adalah keyakinan akan keberadaan Tuhan dan kesetiaan untuk mengenal dan
                                    mengasihi Tuhan, sebagai sambutan atas kasih Tuhan kepada manusia, yang
                                    membangkitkan gairah belajar disiplin kontemplatif spiritual yang membentuk
                                    pembaharuan budi sehingga menimbulkan kepedulian mengasihi sesama dan pengabdian
                                    dalam kehidupan bermasyarakat.
                                    <a href="https://spmb.del.ac.id/index.php?r=site%2Fviewmartuhan&amp;id=1" target="_blank">Baca Selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-gift"></i>MARROHA</h4>
                            </div>
                            <div class="panel-body">
                                <p>Marroha adalah sikap dalam bertindak berlandaskan pada kerendahan hati dengan
                                    penuh tanggung jawab, melakukan apapun dengan hati, dan tunduk pada nilai-nilai
                                    moral dalam kaitannya dengan makhluk hidup lainnya.
                                    <a href="https://spmb.del.ac.id/index.php?r=site%2Fviewmarroha&amp;id=1" target="_blank">Baca Selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-compass"></i>MARBISUK</h4>
                            </div>
                            <div class="panel-body">
                                <p>Marbisuk adalah bijaksana berdasarkan hikmat yang mengedepankan kearifan dan
                                    pengertian berdasarkan penguasaan pengetahuan dan kecakapan dalam bekerja dan
                                    kesediaan belajar sepanjang hayat.
                                    <a href="https://spmb.del.ac.id/index.php?r=site%2Fviewmarbisuk&amp;id=1" target="_blank">Baca Selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="chatbot-button" class="chatbot-button">
                    <img src="assets/images/icons8-chat-90.png" alt="Ikon Chatbot">
                </div>
                <div id="chatbot-container" class="chatbot-container">
                    <div class="chatbot-header">
                        <div class="logo-and-title">
                            <img class="logodel" src="assets/images/logodel.jpg" alt="">
                            <h4>Chatbot SPMB IT Del</h4>
                        </div>
                        <div class="back-to-categories" onclick="backToCategories()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            <span class="close-chatbot" onclick="closeChatbot()">&times;</span>
                        </div>
                    </div>
                    <div id="chatbot-content" class="chatbot-content">
                        <div class="chat-message" id="welcome-message">
                            <p><strong>Admin SPMB IT Del</strong></p>
                            <p>Halo! Selamat datang di chatbot FAQ layanan SPMB IT Del. Ada yang bisa saya bantu?</p>
                        </div>
                        <div id="categories" class="categories">
                            <p><strong>Kategori:</strong></p>
                            <ul id="categories-list"></ul>
                        </div>
                        <div id="programs" class="programs" style="display:none;">
                            <p><strong>Program Studi:</strong></p>
                            <ul id="programs-list"></ul>
                        </div>
                        <div id="questions" class="questions" style="display:none;">
                            <p><strong>Pertanyaan:</strong></p>
                            <ul id="questions-list"></ul>
                        </div>
                        <div id="answers" class="answers" style="display:none;">
                            <div id="answer-content"></div>
                        </div>
                        <div id="chat-input" class="chat-input">
                            <input type="text" id="user-input" placeholder="Ketik pesan Anda...">
                            <button onclick="sendMessage()">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetch('/categories')
                        .then(response => response.json())
                        .then(data => {
                            let categoriesList = document.getElementById('categories-list');
                            data.forEach(category => {
                                let listItem = document.createElement('li');
                                listItem.setAttribute('data-kategori-id', category.id);
                                listItem.innerText = category.nama_kategori;
                                listItem.addEventListener('click', function() {
                                    if (category.nama_kategori.toLowerCase() === 'program studi') {
                                        loadProgramStudi();
                                    } else {
                                        loadQuestions(category.id);
                                    }
                                });
                                categoriesList.appendChild(listItem);
                            });
                        });

                    fetch('/program-studi')
                        .then(response => response.json())
                        .then(data => {
                            let programsList = document.getElementById('programs-list');
                            data.forEach(program => {
                                let listItem = document.createElement('li');
                                listItem.setAttribute('data-program-id', program.id);
                                listItem.innerText = program.nama_programstudi;
                                listItem.addEventListener('click', function() {
                                    loadProgramQuestions(program.id);
                                });
                                programsList.appendChild(listItem);
                            });
                        });
                });

                function loadProgramStudi() {
                    document.getElementById('categories').style.display = 'none';
                    document.getElementById('programs').style.display = 'block';
                }

                function loadQuestions(categoryId) {
                    fetch(`/categories/${categoryId}/questions`)
                        .then(response => response.json())
                        .then(data => {
                            let questionsList = document.getElementById('questions-list');
                            questionsList.innerHTML = '';
                            data.forEach(question => {
                                let questionItem = document.createElement('li');
                                questionItem.setAttribute('data-pertanyaan-id', question.id);
                                questionItem.innerText = question.pertanyaan;
                                questionItem.addEventListener('click', function() {
                                    loadAnswer(question.id);
                                });
                                questionsList.appendChild(questionItem);
                            });

                            document.getElementById('categories').style.display = 'none';
                            document.getElementById('questions').style.display = 'block';
                        });
                }

                function loadProgramQuestions(programId) {
                    fetch(`/program-studi/${programId}/questions`)
                        .then(response => response.json())
                        .then(data => {
                            let questionsList = document.getElementById('questions-list');
                            questionsList.innerHTML = '';
                            data.forEach(question => {
                                let questionItem = document.createElement('li');
                                questionItem.setAttribute('data-pertanyaan-id', question.id);
                                questionItem.innerText = question.pertanyaan;
                                questionItem.addEventListener('click', function() {
                                    loadProgramAnswer(question.id);
                                });
                                questionsList.appendChild(questionItem);
                            });

                            document.getElementById('programs').style.display = 'none';
                            document.getElementById('questions').style.display = 'block';
                        });
                }

                function loadAnswer(questionId) {
                    fetch(`/questions/${questionId}/answer`)
                        .then(response => response.json())
                        .then(data => {
                            let answerContent = document.getElementById('answer-content');
                            answerContent.innerHTML = `<p><strong>Jawaban:</strong> ${data.jawaban}</p>`;

                            document.getElementById('questions').style.display = 'none';
                            document.getElementById('answers').style.display = 'block';
                        });
                }

                function loadProgramAnswer(questionId) {
                    fetch(`/program-studi-questions/${questionId}/answer`)
                        .then(response => response.json())
                        .then(data => {
                            let answerContent = document.getElementById('answer-content');
                            answerContent.innerHTML = `<p><strong>Jawaban:</strong> ${data.jawaban}</p>`;

                            document.getElementById('questions').style.display = 'none';
                            document.getElementById('answers').style.display = 'block';
                        });
                }

                function backToCategories() {
                    resetChatbot();
                    document.getElementById('questions').style.display = 'none';
                    document.getElementById('answers').style.display = 'none';
                    document.getElementById('categories').style.display = 'block';
                }

                function resetChatbot() {
                    document.getElementById('questions-list').innerHTML = '';
                    document.getElementById('answer-content').innerHTML = '';
                    document.getElementById('chat-input').style.display = 'none';
                }
            </script>
            <footer class="footer">
                <div class="container">
                    <footer class="site-footer">
                        <div class="container">
                            <div class="row">
                                <hr>
                                <p class="pull-left" style="color: #004D40">&copy; <b>SPMB Institut Teknologi Del 2024</b></p>
                                <p class="pull-right"><img src="/assets/images/logo_del.png" height="60" width="60"></p>
                                <p class="pull-right"><img src="/assets/images/yayasandel.jpg" height="60" width="60"></p>
                                <p class="pull-right"><img src="/assets/images/smaungguldel.jpg" height="60" width="60"></p>
                                </hr>
                            </div>
                        </div>
                    </footer>
                </div>
            </footer>
            <script src="assets/js/chatbot.js"></script>
            <script src="assets/js/seleksi.js"></script>
            <script src="assets/js/slideshow.js"></script>
            <script>
                document.getElementById("info-pendaftaran").addEventListener("click", function(event) {
                    event.preventDefault();
                    document.getElementById("dropdown-info").classList.toggle("show");
                });
                document.getElementById("menu-berita").addEventListener("click", function(event) {
                    event.preventDefault();
                    document.getElementById("dropdown-berita").classList.toggle("show");
                });
                document.getElementById("menu-login").addEventListener("click", function(event) {
                    event.preventDefault();
                    document.getElementById("dropdown-login").classList.toggle("show");
                });
                window.onclick = function(event) {
                    if (!event.target.matches('.dropdown-toggle')) {
                        var dropdowns = document.getElementsByClassName("dropdown-menu");
                        for (var i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
        </div>
    </div>
</body>

</html>