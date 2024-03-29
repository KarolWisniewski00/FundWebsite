<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phoenix back to life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="google-site-verification" content="8wh-xjyneTBAx6Tw9Rz-0hEj_9Hm_1NzwsAfVvQVYLw" />
    <meta name="keywords" content="Phoenix Back to Life, foundation, critical illnesses, health, well-being, medical professionals, volunteers, medical care, emotional support, financial assistance, hope, positive impact, healthy life, fulfilling life">
    <meta name="description" content="Phoenix Back to Life is a life-saving foundation that provides essential support to individuals struggling with critical illnesses. Our team of medical professionals and volunteers are dedicated to improving the health and well-being of our patients and their families through high-quality medical care, emotional support, and financial assistance. Our mission is to give hope and empower those who are fighting for their lives to achieve a better future. We are committed to making a positive impact on their lives, believing that every person deserves the chance to live a healthy and fulfilling life. Visit our website to learn more about Phoenix Back to Life and our work.">
    <meta name="author" content="Karol Wiśniewski">
</head>

<body>
    <!--NAVBAR + HERO-->
    <section id="home">
        <div class="text-center bg-img">
            <div class="bg-black" style="--bs-bg-opacity: .25;">
                <div class="container">
                    <header class="d-flex flex-wrap justify-content-center py-3 mb-4">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <img src="{{asset('assets/logophoenix.png')}}" alt="logo" class="img-fluid max-height">
                            <span class="fs-4 text-white color-custom font-custom">Phoenix</span>
                        </a>

                        <ul class="nav nav-pills d-flex align-items-center justify-content-center">
                            <li class="nav-item"><a href="#" class="nav-link color-custom fw-bold mx-0 mx-md-2">Home</a></li>
                            <li class="nav-item"><a href="#about" class="nav-link color-custom fw-bold mx-0 mx-md-2">About</a></li>
                            <li class="nav-item"><a href="#donate" class="nav-link color-custom fw-bold mx-0 mx-md-2">Donate</a></li>
                            <li class="nav-item"><a href="#contact" class="nav-link color-custom fw-bold mx-0 mx-md-2">Contact</a></li>
                            <li class="nav-item"><a href="{{route('ukr')}}" class="nav-link color-custom fw-bold mx-0 mx-md-2">UKR</a></li>
                        </ul>
                    </header>
                </div>
            </div>
            <div class="my-5 px-5 min-height d-flex justify-content-center align-items-end">
                <div class="mb-5">
                    <h1 class="display-1 fw-bold text-white font-custom color-custom" style="letter-spacing: 0.2em;">PHOENIX</h1>
                    <div class="mx-auto">
                        <p class="lead mb-4 text-white color-custom" style="letter-spacing: 0.75em;">Back to Life</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT US-->
    <section class="my-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 text-center">
                        <div class="mb-4">
                            <h1 class="display-1">About us</h1>
                        </div>
                        <p style="font-size: 1.5em; line-height: 1.75em; letter-spacing: 0.1em;">Phoenix Back to Life is a life-saving foundation that is dedicated to improving the health and well-being of individuals who are struggling with critical illnesses. Our team of skilled and passionate medical professionals and volunteers work tirelessly to provide essential support to patients and their families, including access to high-quality medical care, emotional support, and financial assistance. Our mission is to give hope to those who are fighting for their lives and to empower them to achieve a better future. We are committed to making a positive impact on the lives of our patients and their loved ones, and we believe that every person deserves the chance to live a healthy and fulfilling life.</p>
                        <a href="/" class="mx-2 d-flex justify-content-center align-items-center text-decoration-none opacity-50">
                            <img src="{{asset('assets/logophoenixblack.png')}}" alt="logo" class="img-fluid max-height">
                            <span class="color-custom-2">PHOENIX BACK TO LIFE 44979102</span>
                        </a>
                        <div class="my-5 py-5">
                            <img src="{{asset('assets/health-insurance.png')}}" alt="health-insurance" class="img-fluid my-3" style="max-height: 128px;">
                            <p style="font-size: 2.25em; letter-spacing: -0.05em;font-weight: 600;">"Life is a gift, and it offers us the privilege, opportunity, and responsibility to give something back by becoming more."</p>
                            <p class="display-5" style="font-size: 2em;">Tony Robbins</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--DONATE-->
    <section class="my-5" id="donate">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="w-100 text-center">
                        <div class="mb-4">
                            <h1 class="display-1">Donate</h1>
                        </div>
                        <div class="border border-danger d-flex justify-content-center align-items-center" style="min-height: 300px;">Here is place for algo from bank</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT-->
    <section class="my-5" id="contact">
        <div class="bg-img-2 py-5">
            <!--ALERT-->
            @if(Session::has('success'))
            <div class="container"><div class="alert alert-success">{{Session::get('success')}}</div></div>
            @endif

            @if(Session::has('fail'))
            <div class="container"><div class="alert alert-danger">{{Session::get('fail')}}</div></div>
            @endif
            <div class="container bg-black" style="--bs-bg-opacity: .5;">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <div class="p-5">
                            <h1 class="display-1 text-white text-center">Do you have a question?</h1>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <form class="p-5 w-100" method="POST" action="{{route('message')}}">
                            <input type="hidden" name="lang" value="en">
                            @csrf
                            <div class="form-floating my-3">
                                <input type="text" class="form-control bg-transparent text-white rounded-0" id="name" value="" name="name" required>
                                <label for="name" class="text-white">Your name</label>
                            </div>
                            <div class="form-floating my-3">
                                <input type="text" class="form-control bg-transparent text-white rounded-0" id="email" value="" name="email" required>
                                <label for="email" class="text-white">Your email</label>
                            </div>
                            <div class="form-floating my-3">
                                <textarea class="form-control bg-transparent text-white rounded-0" id="message" value="" name="message" required></textarea>
                                <label for="message" class="text-white">Your message</label>
                            </div>
                            <div class="mt-5"><button class="btn btn-outline-light rounded-0" style="font-size: 1.75em;">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-5 py-5">
            <h3 class="text-muted">1 Akademika Karoliova Avenue, office 8, Kyiv, 03134, Ukraine</h3>
            <div class="text-muted">Identification code of legal entity: 44979102</div>
            <a href="mailto:info@phoenixfoundiation.com" class="text-muted">info@phoenixfoundiation.com</a>
        </div>
    </section>
    <!--FOOTER-->
    <section>
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">About</a></li>
                    <li class="nav-item"><a href="#donate" class="nav-link px-2 text-muted">Donate</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link px-2 text-muted">Contact</a></li>
                    <li class="nav-item"><a href="{{route('ukr')}}" class="nav-link px-2 text-muted">UKR</a></li>
                </ul>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="/" class="mx-2 d-flex justify-content-center align-items-center text-decoration-none">
                        <img src="{{asset('assets/logophoenixblack.png')}}" alt="logo" class="img-fluid max-height">
                        <span class="color-custom-2">Phoenix</span>
                    </a>
                    <p class="mx-2 text-center color-custom-2 m-0 p-0">All rights reserved</p>
                </div>
            </footer>
        </div>
    </section>
    <script>
        const tx = document.getElementsByTagName("textarea");
        for (let i = 0; i < tx.length; i++) {
            tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
            tx[i].addEventListener("input", OnInput, false);
        }

        function OnInput() {
            this.style.height = 0;
            this.style.height = (this.scrollHeight) + "px";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--https://www.flaticon.com/search?word=life-->
</body>

</html>