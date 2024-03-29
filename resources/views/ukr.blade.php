<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Фенікс повертається до життя</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="keywords" content="Фенікс повертається до життя, фонд, критичні захворювання, здоров'я, благополуччя, медичні фахівці, волонтери, медична допомога, емоційна підтримка, фінансова допомога, надія, позитивний вплив, здорове життя, задоволення життя">
    <meta name="description" content="Фенікс повертається до життя - це фонд, який зберігає життя та надає необхідну підтримку людям, які борються з критичними захворюваннями. Наша команда медичних фахівців та волонтерів працює без втоми, щоб забезпечити пацієнтам та їх родинам високоякісну медичну допомогу, емоційну підтримку та фінансову допомогу. Наша місія - дати надію тим, хто бореться за своє життя, і допомогти їм досягти кращого майбутнього. Ми зобов'язані зробити позитивний вплив на життя наших пацієнтів та їх близьких, оскільки ми вважаємо, що кожна людина заслуговує на можливість жити здоровим і задоволеним життям. Відвідайте наш веб-сайт, щоб дізнатися більше про Phoenix Back to Life та нашу роботу.">
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
                            <span class="fs-4 text-white color-custom">Фенікс</span>
                        </a>

                        <ul class="nav nav-pills d-flex align-items-center justify-content-center">
                        <li class="nav-item"><a href="#" class="nav-link color-custom fw-bold mx-0 mx-md-2">Дім</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link color-custom fw-bold mx-0 mx-md-2">Про нас</a></li>
                        <li class="nav-item"><a href="#donate" class="nav-link color-custom fw-bold mx-0 mx-md-2">Пожертвувати</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link color-custom fw-bold mx-0 mx-md-2">Контакт</a></li>
                        <li class="nav-item"><a href="{{route('en')}}" class="nav-link color-custom fw-bold mx-0 mx-md-2">EN</a></li>
                        </ul>
                    </header>
                </div>
            </div>
            <div class="my-5 px-5 min-height d-flex justify-content-center align-items-end">
                <div class="mb-5">
                    <h1 class="display-1 fw-bold text-white color-custom" style="letter-spacing: 0.2em;">Фенікс</h1>
                    <div class="mx-auto">
                        <p class="lead mb-4 text-white color-custom" style="letter-spacing: 0.75em;">повертається до життя</p>
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
                            <h1 class="display-1">Про нас</h1>
                        </div>
                        <p style="font-size: 1.5em; line-height: 1.75em; letter-spacing: 0.1em;">Наша організація присвячена рятівництву життя та поліпшенню здоров'я людей, що стикаються з критичними хворобами. Наша команда кваліфікованих та пристрасних медичних працівників та волонтерів працює безперервно, щоб забезпечити пацієнтам та їх родинам необхідну підтримку, включаючи доступ до високоякісної медичної допомоги, емоційної підтримки та фінансової допомоги. Наша місія полягає в тому, щоб дати надію тим, хто бореться за своє життя, та допомогти їм досягти кращої майбутньої. Ми зобов'язуємося зробити позитивний вплив на життя наших пацієнтів та їх близьких, і вважаємо, що кожна людина заслуговує на шанс на здорове та щасливе життя.</p>
                        <a href="/" class="mx-2 d-flex justify-content-center align-items-center text-decoration-none opacity-50">
                            <img src="{{asset('assets/logophoenixblack.png')}}" alt="logo" class="img-fluid max-height">
                            <span class="color-custom-2">Фенікс повертається до життя 44979102</span>
                        </a>
                        <div class="my-5 py-5">
                            <img src="{{asset('assets/health-insurance.png')}}" alt="health-insurance" class="img-fluid my-3" style="max-height: 128px;">
                            <p style="font-size: 2.25em; letter-spacing: -0.05em;font-weight: 600;">"Життя - це дарунок, який дає нам привілей, можливість та відповідальність дати щось назад, ставши кращими."</p>
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
                            <h1 class="display-1">Пожертвувати</h1>
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
                            <h1 class="display-1 text-white text-center">Чи у вас є питання?</h1>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <form class="p-5 w-100" method="POST" action="{{route('message')}}">
                            <input type="hidden" name="lang" value="ukr">
                            @csrf
                            <div class="form-floating my-3">
                                <input type="text" class="form-control bg-transparent text-white rounded-0" id="name" value="" name="name" required>
                                <label for="name" class="text-white">Ваше ім'я</label>
                            </div>
                            <div class="form-floating my-3">
                                <input type="text" class="form-control bg-transparent text-white rounded-0" id="email" value="" name="email" required>
                                <label for="email" class="text-white">Ваша електронна пошта</label>
                            </div>
                            <div class="form-floating my-3">
                                <textarea class="form-control bg-transparent text-white rounded-0" id="message" value="" name="message" required></textarea>
                                <label for="message" class="text-white">Ваше повідомлення</label>
                            </div>
                            <div class="mt-5"><button class="btn btn-outline-light rounded-0" style="font-size: 1.75em;">Надіслати повідомлення</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-5 py-5">
            <h3 class="text-muted">Украина, 03134, місто  Київ, Корольова  Академіка , будинок 1, офіс  8</h3>
            <div class="text-muted">Ідентифікаційний код юридичної особи: 44979102</div>
            <a href="mailto:info@phoenixfoundiation.com" class="text-muted">info@phoenixfoundiation.com</a>
        </div>
    </section>
    <!--FOOTER-->
    <section>
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">дім</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">Про нас</a></li>
                    <li class="nav-item"><a href="#donate" class="nav-link px-2 text-muted">Пожертвувати</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link px-2 text-muted">Контакт</a></li>
                    <li class="nav-item"><a href="{{route('en')}}" class="nav-link px-2 text-muted">EN</a></li>
                </ul>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="/" class="mx-2 d-flex justify-content-center align-items-center text-decoration-none">
                        <img src="{{asset('assets/logophoenixblack.png')}}" alt="logo" class="img-fluid max-height">
                        <span class="color-custom-2">Фенікс</span>
                    </a>
                    <p class="mx-2 text-center color-custom-2 m-0 p-0">Всі права захищені.</p>
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