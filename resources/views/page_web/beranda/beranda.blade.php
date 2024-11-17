@extends('template_web.layout')

@section('content')
    <!-- Main Content -->
    <ul class="l-main-content main-content">
        <li class="l-section section section--is-active">
            <div class="intro">
                <div class="intro--banner">
                    <h1>Transforming<br>ideas into<br>solutions</h1>
                    <button class="cta">Hire Us
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                            style="enable-background:new 0 0 150 118;" xml:space="preserve">
                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                <path
                                    d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                            </g>
                        </svg>
                        <span class="btn-background"></span>
                    </button>
                    <img src="{{ asset('web') }}/assets/img/introduction-visual.png" alt="Welcome">
                </div>
                <div class="intro--options">
                    <a href="#0">
                        <h3>Web Development</h3>
                        <p>Spesialisasi dalam pengembangan aplikasi web modern menggunakan Laravel, PHP, dan JavaScript.</p>
                    </a>
                    <a href="#0">
                        <h3>Full Stack Developer</h3>
                        <p>Pengalaman menangani pengembangan front-end dan back-end untuk aplikasi web yang kompleks.</p>
                    </a>
                    <a href="#0">
                        <h3>Problem Solver</h3>
                        <p>Fokus pada solusi inovatif dan efisien untuk menyelesaikan tantangan teknis dalam pengembangan
                            software.</p>
                    </a>
                </div>
            </div>
        </li>
        <!-- Portofolio -->
        <li class="l-section section">
            <div class="work">
                <h2>Artikel Terbaru</h2>
                <div class="work--lockup">
                    <ul class="slider">
                        @foreach ($articles as $article)
                            @if ($loop->first)
                                <li class="slider--item slider--item-left">
                                @elseif($loop->iteration == 2)
                                <li class="slider--item slider--item-center">
                                @else
                                <li class="slider--item slider--item-right">
                            @endif
                            <a href="{{ $article->link }}" target="_blank">
                                <div class="slider--item-image">
                                    <img src="{{ asset($article->headline_image) }}" alt="{{ $article->title }}">
                                </div>
                                <p class="slider--item-title">{{ $article->title }}</p>
                                <p class="slider--item-description">{{ Str::limit($article->content, 100) }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="slider--prev">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                            style="enable-background:new 0 0 150 118;" xml:space="preserve">
                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                <path
                                    d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                                c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                                        c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z" />
                            </g>
                        </svg>
                    </div>
                    <div class="slider--next">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;"
                            xml:space="preserve">
                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                <path
                                    d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </li>
        <!-- About -->
    <li class="l-section section">
        <div class="about">
            <div class="about--banner">
                <h2>Building<br>digital<br>excellence</h2>
                <a href="{{ asset('document/CV_Muhammad Khoirul Anam.docx.pdf') }}" target="_blank">CV
                    <span>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118"
                            style="enable-background:new 0 0 150 118;" xml:space="preserve">
                            <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                <path
                                    d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z" />
                            </g>
                        </svg>
                    </span>
                </a>
                <img src="{{ asset('web') }}/assets/img/about-visual.png" alt="About Us">
            </div>
            <div class="intro--options">
                <a href="#0">
                    <h3>Web Developer</h3>
                    <p>Berpengalaman dalam pengembangan aplikasi web menggunakan PHP, Laravel, JavaScript, dan berbagai
                        teknologi modern lainnya.</p>
                </a>
                <a href="#0">
                    <h3>Project Manager</h3>
                    <p>Memimpin dan mengelola berbagai proyek pengembangan perangkat lunak dengan fokus pada ketepatan waktu
                        dan kualitas.</p>
                </a>
                <a href="#0">
                    <h3>Skills</h3>
                    <p>Laravel • PHP • JavaScript • MySQL • Git • Project Management • Team Leadership • Agile • Notion •
                        Etc </p>
                </a>
            </div>
        </div>
    </li>
    <!-- Contact -->
    <li class="l-section section">
        <div class="contact">
            <div class="contact--lockup">
                <div class="modal">
                    <div class="modal--information">
                        <p>Semarang, Jawa Tengah, Indonesia</p>
                        <a href="mailto:khrlanm02@gmail.com">khrlanm02@gmail.com</a>
                        <a href="https://api.whatsapp.com/send/?phone=6281227436604&text&type=phone_number&app_absent=0">+62
                            812 2743 6604</a>
                    </div>
                    <ul class="modal--options">
                        <li><a href="https://github.com/khoirulanam20" target="_blank">Github</a></li>
                        <li><a href="https://www.linkedin.com/in/khoirul-anam-0a1b90200/" target="_blank">LinkedIn</a></li>
                        <li><a href="mailto:khrlanm02@gmail.com">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
    <!-- Hire Us -->
    <li class="l-section section">
        <div class="hire">
            <h2>You want us to do</h2>
            <!-- checkout formspree.io for easy form setup -->
            <form class="work-request" action="{{ route('hire.request') }}" method="POST">
                @csrf
                <div class="work-request--options">
                    <span class="options-a">
                        <input id="opt-1" type="checkbox" name="services[]" value="laravel">
                        <label for="opt-1">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path
                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                </g>
                            </svg>
                            Laravel
                        </label>
                        <input id="opt-2" type="checkbox" name="services[]" value="project management">
                        <label for="opt-2">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path
                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                </g>
                            </svg>
                            Project Management
                        </label>
                        <input id="opt-3" type="checkbox" name="services[]" value="reactjs">
                        <label for="opt-3">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path
                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                </g>
                            </svg>
                            ReactJS
                        </label>
                    </span>
                    <span class="options-b">
                        <input id="opt-4" type="checkbox" name="services[]" value="ux design">
                        <label for="opt-4">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path
                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                </g>
                            </svg>
                            UX Design
                        </label>
                        <input id="opt-5" type="checkbox" name="services[]" value="web development">
                        <label for="opt-5">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path
                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                </g>
                            </svg>
                            Web Development
                        </label>
                        <input id="opt-6" type="checkbox" name="services[]" value="marketing">
                        <label for="opt-6">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 111"
                                style="enable-background:new 0 0 150 111;" xml:space="preserve">
                                <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                                    <path
                                        d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                                </g>
                            </svg>
                            Marketing
                        </label>
                    </span>
                </div>
                <div class="work-request--information">
                    <div class="information-name">
                        <input id="name" type="text" name="name" spellcheck="false">
                        <label for="name">Name</label>
                    </div>
                    <div class="information-email">
                        <input id="email" type="email" name="email" spellcheck="false">
                        <label for="email">Email</label>
                    </div>
                </div>
                <input type="submit" value="Send Request">
            </form>
            @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        background: 'rgba(76, 175, 80, 0.9)',
                        color: '#fff',
                        customClass: {
                            popup: 'colored-toast'
                        }
                    });
                });
            </script>
            @endif
            @if(session('error'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Error!',
                        text: '{{ session('error') }}',
                        icon: 'error',
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        background: 'rgba(244, 67, 54, 0.9)',
                        color: '#fff',
                        customClass: {
                            popup: 'colored-toast'
                        }
                    });
                });
            </script>
            @endif
        </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <ul class="outer-nav">
        <li class="is-active">Home</li>
        <li>Works</li>
        <li>About</li>
        <li>Contact</li>
        <li>Hire us</li>
    </ul>
@endsection
