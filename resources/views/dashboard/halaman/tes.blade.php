<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galih Susilo</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print"
        onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" />
    </noscript>
    <link href="{{ asset('assets') }}/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <style>
        body {
            background-color: lightslategray;
        }
    </style>
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="header-nav" role="navigation">
            <div class="container"><a class="link-dark navbar-brand site-title mb-0" href="#">Galih's</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-content">
        <div id="content">
            <header>
                <div class="cover bg-light">
                    <div class="container px-3">
                        <div class="row">

                            <div class="col-lg-6 p-2"><img class="img-fluid"
                                    src="{{ asset('assets') }}/images/illustrations/hello3.svg" alt="hello" />
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-5">
                                    <p class="lead text-uppercase mb-1">Hello!</p>
                                    @foreach ($data as $item)
                                        <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">I’m
                                            {{ $item->judul }}
                                        </h1>
                                    @endforeach
                                    <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Web Developer
                                        & Mobile
                                        Application Developer</p>
                                    <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
                                        <nav role="navigation">
                                            <ul class="nav justify-content-left">
                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://twitter.com/calon_persiden" title="Twitter"><i
                                                            class="fab fa-twitter"></i><span
                                                            class="menu-title sr-only">Twitter</span></a></li>

                                                <li class="nav-item"><a class="nav-link"
                                                        href="https://www.instagram.com/galihsslo/"
                                                        title="Instagram"><i class="fab fa-instagram"></i><span
                                                            class="menu-title sr-only">Instagram</span></a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a
                                            class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In
                                            Touch <i class="fas fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wave-bg"></div>
            </header>
            <div class="section pt-4 px-3 px-lg-4" id="about">
                <div class="container-narrow">
                    <div class="row">
                        <div class="col-md-6">
                            @foreach ($data as $item)
                                <h2 class="h4 my-2">Hello! I’m {{ $item->judul }}.</h2>
                            @endforeach

                            <p>I am passionate about UI/UX design and Web Design. I am a skilled front-end developer and
                                master of
                                graphic design tools such as Photoshop and Sketch. I am a quick learner and a team
                                worker that gets the
                                job done. I can easily capitalize on low hanging fruits and quickly maximize timely
                                deliverables for
                                real-time schemas.</p>
                            <div class="row mt-3">
                                @foreach ($data as $item)
                                    <div class="col-sm-2">
                                        <div class="pb-1">Age:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">{{ $item->info1 }} </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="pb-1">Email:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">{{ $item->info1 }}</div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="pb-1">GitHub:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">{{ $item->info1 }}</div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="pb-1">Phone:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">{{ $item->info1 }}</div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="pb-1">Address:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">{{ $item->info1 }}</div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="pb-1">Status:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">{{ $item->info1 }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img
                                class="avatar img-fluid mt-2" src="{{ asset('assets') }}/images/avatar.jpg"
                                width="400" height="400" alt="Galih Susilo" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="section px-3 px-lg-4 pt-5" id="services">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">My Services</h2>
                    </div>
                    <div class="text-center">
                        <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app.
                            I can quickly
                            maximize timely deliverables for real-time schemas.</p>
                    </div>
                    <div class="row py-3">
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img
                                class="mb-2" src="{{ asset('assets') }}/images/services/web-design.svg"
                                width="96" height="96" alt="web design" />
                            <div class="h5">Web Design</div>
                        </div>
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200"><img
                                class="mb-2" src="{{ asset('assets') }}/images/services/graphic-design.svg"
                                width="96" height="96" alt="graphic design" />
                            <div class="h5">Graphic Design</div>
                        </div>
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300"><img
                                class="mb-2" src="{{ asset('assets') }}/images/services/ui-ux.svg" width="96"
                                height="96" alt="ui-ux" />
                            <div class="h5">UI/UX</div>
                        </div>
                        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400"><img
                                class="mb-2" src="{{ asset('assets') }}/images/services/app-development.svg"
                                width="96" height="96" alt="app development" />
                            <div class="h5">App Development</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section px-3 px-lg-4 pt-5" id="skills">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">My Skills</h2>
                    </div>
                    <div class="text-center">
                        <p class="mx-auto mb-3" style="max-width:600px">I am a quick learner and specialize in
                            multitude of skills
                            required for Web Application Development and Product Design</p>
                    </div>
                    <div class="bg-light p-3">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">HTML5</span><span>90%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="100"
                                            data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">CSS3</span><span>90%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="200"
                                            data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">JavaScript</span><span>80%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="300"
                                            data-aos-anchor=".skills-section" style="width: 80%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">React</span><span>75%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="300"
                                            data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-2">
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">PHP</span><span>70%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="400"
                                            data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">WordPress</span><span>70%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="500"
                                            data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">MySQL</span><span>60%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="600"
                                            data-aos-anchor=".skills-section" style="width: 60%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="py-1">
                                    <div class="d-flex text-small fw-bolder"><span
                                            class="me-auto">Photoshop</span><span>60%</span></div>
                                    <div class="progress my-1">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            data-aos="zoom-in-right" data-aos-delay="600"
                                            data-aos-anchor=".skills-section" style="width: 60%" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-1">
                                <div class="d-flex text-small fw-bolder"><span
                                        class="me-auto">Laravel</span><span>75%</span></div>
                                <div class="progress my-1">
                                    <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right"
                                        data-aos-delay="600" data-aos-anchor=".skills-section" style="width: 75%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section px-2 px-lg-4 pt-5" id="portfolio">
                <div class="container">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">Portfolio </h2>
                    </div>
                    <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
                        <div class="grid-sizer"></div>
                        <div class="grid-item"><a href="https://susilomultidigital.space">
                                <figure class="portfolio-item"><img
                                        src="{{ asset('assets') }}/images/portfolio/app1.png"
                                        data-bp="images/portfolio/app1.png" />
                                    <figcaption>
                                        <h4 class="h5 mb-0">Aplikasi kasir</h4>
                                        <div>PHP Native</div>
                                    </figcaption>
                                </figure>
                            </a></div>
                        <div class="grid-item"><a href="https://github.com">
                                <figure class="portfolio-item"><img
                                        src="{{ asset('assets') }}/images/portfolio/app2.png"
                                        data-bp="{{ asset('assets') }}/images/portfolio/app2.jpg"
                                        data-caption="Example of an optional caption." />
                                    <figcaption>
                                        <h4 class="h5 mb-0">Web Development</h4>
                                        <div>GitHub.com</div>
                                    </figcaption>
                                </figure>
                            </a></div>
                        <!-- <div class="grid-item"><a href="https://soundcloud.com/">
                <figure class="portfolio-item"><img src="images/portfolio/3-small.png" data-bp="images/portfolio/3.jpg"
                    data-caption="Example of an optional caption." />
                  <figcaption>
                    <h4 class="h5 mb-0">Audio Mixing</h4>
                    <div>Soundcloud.com</div>
                  </figcaption>
                </figure>
              </a></div>
            <div class="grid-item"><a href="https://www.adobe.com/">
                <figure class="portfolio-item"><img src="images/portfolio/4-small.png"
                    data-bp="images/portfolio/4.jpg" />
                  <figcaption>
                    <h4 class="h5 mb-0">Video Editing</h4>
                    <div>Adobe After Effects</div>
                  </figcaption>
                </figure>
              </a></div>
            <div class="grid-item"><a href="https://www.adobe.com/">
                <figure class="portfolio-item"><img src="images/portfolio/5-small.png"
                    data-bp="images/portfolio/5.jpg" />
                  <figcaption>
                    <h4 class="h5 mb-0">Photography</h4>
                    <div>Adobe Photoshop</div>
                  </figcaption>
                </figure>
              </a></div>
            <div class="grid-item"><a href="https://www.android.com/">
                <figure class="portfolio-item"><img src="images/portfolio/6-small.png"
                    data-bp="images/portfolio/6.jpg" />
                  <figcaption>
                    <h4 class="h5 mb-0">App Development</h4>
                    <div>Android</div>
                  </figcaption>
                </figure>
              </a></div>
            <div class="grid-item"><a href="https://flutter.dev/">
                <figure class="portfolio-item"><img src="images/portfolio/7-small.png"
                    data-bp="images/portfolio/7.jpg" />
                  <figcaption>
                    <h4 class="h5 mb-0">App Design</h4>
                    <div>Flutter</div>
                  </figcaption>
                </figure>
              </a></div>
            <div class="grid-item"><a href="https://flutter.dev/">
                <figure class="portfolio-item"><img src="images/portfolio/8-small.png"
                    data-bp="images/portfolio/8.jpg" />
                  <figcaption>
                    <h4 class="h5 mb-0">App Development</h4>
                    <div>Flutter</div>
                  </figcaption>
                </figure>
              </a></div> -->
                    </div>
                </div>
            </div>
            <div class="section px-3 px-lg-4 pt-5" id="experience">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">Experience</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
                                <div class="card-header px-3 py-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="h5 mb-1">UI/UX Design</h3>
                                            <div class="text-muted text-small">Designerr Inc.
                                                <small>(2012-2014)</small>
                                            </div>
                                        </div><img src="{{ asset('assets') }}/images/services/ui-ux.svg"
                                            width="48" height="48" alt="ui-ux" />
                                    </div>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <p>Dalam peran ini, saya berhasil mengembangkan keterampilan desain dan teknis saya
                                        untuk menciptakan
                                        pengalaman pengguna yang optimal untuk aplikasi mobile dan web perusahaan. Saya
                                        belajar bagaimana
                                        cara mengembangkan prototipe, melakukan pengujian pengguna, dan berkolaborasi
                                        dengan tim pengembang.
                                        Saya juga terus memantau tren terbaru dan mengembangkan keterampilan saya agar
                                        tetap up-to-date
                                        dengan tren terbaru dan teknologi yang berkembang pesat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3" data-aos="fade-left" data-aos-delay="300">
                                <div class="card-header px-3 py-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="h5 mb-1">App Development</h3>
                                            <div class="text-muted text-small">MakeMyApp LLC.
                                                <small>(2015-2018)</small>
                                            </div>
                                        </div><img src="{{ asset('assets') }}/images/services/app-development.svg"
                                            width="48" height="48" alt="app development" />
                                    </div>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <p>Saya berhasil mengembangkan keterampilan teknis saya untuk menciptakan aplikasi
                                        mobile yang
                                        fungsional dan berkinerja tinggi untuk iOS dan Android. Saya belajar bagaimana
                                        menganalisis
                                        persyaratan bisnis dan teknis, mengoptimalkan kinerja aplikasi, dan
                                        mengimplementasikan metode Agile
                                        untuk meningkatkan efisiensi pengembangan aplikasi. Saya juga memperoleh
                                        pengalaman dalam mengelola
                                        siklus hidup pengembangan aplikasi dari konsep hingga peluncuran, dan menerapkan
                                        standar keamanan
                                        dan privasi yang ketat untuk melindungi data pengguna.



                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3" data-aos="fade-right" data-aos-delay="200">
                                <div class="card-header px-3 py-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="h5 mb-1">Web Design</h3>
                                            <div class="text-muted text-small">Webbie LLC. <small>(2018-2020)</small>
                                            </div>
                                        </div><img src="{{ asset('assets') }}/images/services/web-design.svg"
                                            width="48" height="48" alt="web design" />
                                    </div>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <p>Dalam peran ini, saya berhasil mengembangkan keterampilan desain saya untuk
                                        menciptakan desain
                                        website yang kreatif dan user-friendly. Saya belajar bagaimana cara membuat
                                        wireframe, mockup, dan
                                        prototipe website, dan melakukan kolaborasi dengan tim pengembang untuk
                                        memastikan desain dapat
                                        diimplementasikan dengan baik dan sesuai dengan spesifikasi teknis. Saya juga
                                        memperoleh pengalaman
                                        dalam menganalisis data pengguna dan menerapkan perbaikan desain untuk
                                        meningkatkan pengalaman
                                        pengguna dan konversi. Saya selalu memantau tren desain terbaru dan
                                        mengembangkan keterampilan
                                        desain saya agar tetap up-to-date dengan tren terbaru dan teknologi yang
                                        berkembang pesat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3" data-aos="fade-left" data-aos-delay="400">
                                <div class="card-header px-3 py-2">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="h5 mb-1">Full Stack Development</h3>
                                            <div class="text-muted text-small">SMD.CO <small>(2020-2021)</small></div>
                                        </div><img src="{{ asset('assets') }}/images/services/full-stack.svg"
                                            width="48" height="48" alt="full stack" />
                                    </div>
                                </div>
                                <div class="card-body px-3 py-2">
                                    <p>Dalam peran ini, saya berhasil mengembangkan keterampilan desain dan pemrograman
                                        saya untuk
                                        menciptakan desain website yang kreatif dan user-friendly serta mengembangkan
                                        front-end dan back-end
                                        website yang responsif dan dapat menyesuaikan dengan berbagai ukuran layar dan
                                        perangkat. Saya juga
                                        memperoleh pengalaman dalam mengelola database dan mengintegrasikannya dengan
                                        website, menerapkan
                                        perbaikan desain dan pembaruan website secara teratur, serta mengidentifikasi
                                        dan memperbaiki bug
                                        dan masalah keamanan website. Saya selalu berusaha untuk menjaga website agar
                                        selalu up-to-date
                                        dengan teknologi terbaru dan tren desain terkini, sehingga website dapat terus
                                        menghadirkan
                                        pengalaman pengguna yang terbaik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section px-3 px-lg-4 pt-5" id="testimonials">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">Client Testimonials</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5" data-aos="fade-right" data-aos-delay="100">
                            <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span
                                    class="m-2">Galih's
                                    displays exemplary professionalism and is able to take on challenges. He learns
                                    quickly and is an
                                    asset to any team.</span></div>
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="text-end me-2">
                                    <div class="fw-bolder">Keisya Anggi Melania </div>
                                    <div class="text-small">CEO / Web Design</div>
                                </div><img class="me-md-3 rounded"
                                    src="{{ asset('assets') }}/images/testimonials/client2.jpg" width="96"
                                    height="96" alt="client 1" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-5" data-aos="fade-left" data-aos-delay="300">
                            <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span
                                    class="m-2">Galih's
                                    displays exemplary professionalism and is able to take on challenges. He learns
                                    quickly and is an
                                    asset to any team.</span></div>
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="text-end me-2">
                                    <div class="fw-bolder">Sandika Fahmi Nurfauzi</div>
                                    <div class="text-small">CEO / Web Design</div>
                                </div><img class="me-md-3 rounded"
                                    src="{{ asset('assets') }}/images/testimonials/client1.jpg" width="96"
                                    height="96" alt="client 1" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-5" data-aos="fade-right" data-aos-delay="200">
                            <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span
                                    class="m-2">Galih's
                                    is a great co-worker and problem solver. He is quick to extend his helping hand and
                                    makes a good team
                                    player.</span></div>
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="text-end me-2">
                                    <div class="fw-bolder">Mey Silvia Febriana</div>
                                    <div class="text-small">Web Developer</div>
                                </div><img class="me-md-3 rounded"
                                    src="{{ asset('assets') }}/images/testimonials/client2.jpg" width="96"
                                    height="96" alt="client 1" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-5" data-aos="fade-left" data-aos-delay="400">
                            <div class="d-flex ms-md-3"><span><i class="fas fa-2x fa-quote-left"></i></span><span
                                    class="m-2">Galih's
                                    is a great co-worker and problem solver. He is quick to extend his helping hand and
                                    makes a good team
                                    player.</span></div>
                            <div class="d-flex justify-content-end align-items-end">
                                <div class="text-end me-2">
                                    <div class="fw-bolder">Moch David Andriansyah</div>
                                    <div class="text-small">Web Designer</div>
                                </div><img class="me-md-3 rounded"
                                    src="{{ asset('assets') }}/images/testimonials/client1.jpg" width="96"
                                    height="96" alt="client 1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
                <div class="container-narrow">
                    <div class="text-center mb-5">
                        <h2 class="marker marker-center">Contact Me</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="bg-light my-2 p-3 pt-2">
                                <form action="https://wa.me/message/JZQMDLWPRGL6C1">
                                    <div class="form-group my-2">
                                        <label for="name" class="form-label fw-bolder">Name</label>
                                        <input class="form-control" type="text" id="name" name="name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="email" class="form-label fw-bolder">Email</label>
                                        <input class="form-control" type="email" id="email" name="_replyto">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="message" class="form-label fw-bolder">Message</label>
                                        <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4"></textarea>
                                    </div>
                                    <button class="btn btn-primary mt-2" type="submit">Send Whatsapp</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="mt-3 px-1">
                                <div class="h5">Let’s talk how I can help you!</div>
                                <p>If you like my work and want to avail my services then drop me a message using the
                                    contact form. </p>
                                <p>Or get in touch using my email, skype or my contact number.</p>
                                <p>See you!</p>
                            </div>
                            <div class="mt-53 px-1">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="pb-1">Email:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">galihsus12@gmail.com</div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="pb-1">GitHub:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">https://github.com/galihs12</div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="pb-1">Phone:</div>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="pb-1 fw-bolder">+6282225562603</div>
                                    </div>
                                    <!-- <div class="col-sm-10">
                    <a class="nav-link" href="https://www.instagram.com/galihsslo/" title="Instagram"><i
                        class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                    <a class="nav-link" href="https://twitter.com/calon_persiden" title="Twitter"><i
                        class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a>
                  </div> -->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="pt-4 pb-4 text-center bg-light">
                <div class="container">
                    <div class="my-3">
                        <div class="h4">Galih Susilo</div>
                        <p>Web Developer & Mobile Application Developer</p>
                        <div class="social-nav">
                            <nav role="navigation">
                                <ul class="nav justify-content-center">


                                    <li class="nav-item"><a class="nav-link"
                                            href="https://www.instagram.com/galihsslo/" title="Instagram"><i
                                                class="fab fa-instagram"></i><span
                                                class="menu-title sr-only">Instagram</span></a></li>
                                    <li class="nav-item"><a class="nav-link"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="text-small text-secondary">
                        <div class="mb-1">&copy; Galih's Folio. All rights reserved.</div>
                        <div>
                            Design
                            - <a href="https://www.instagram.com/galihsslo/" target="_blank">Galih's</a></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i
                    class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="{{ asset('assets') }}/scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="{{ asset('assets') }}/scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="{{ asset('assets') }}/scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="{{ asset('assets') }}/scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="{{ asset('assets') }}/scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="{{ asset('assets') }}/scripts/aos.min.js?ver=1.2.0"></script>
    <script src="{{ asset('assets') }}/scripts/main.js?ver=1.2.0"></script>
    <script src="{{ asset('assets') }}/scripts/script.js"></script>
</body>

</html>
