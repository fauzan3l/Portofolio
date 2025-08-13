<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <title>Portofolio</title>
</head>
<body>
    <header id="navbar">
        <a href="#" class="logo">Fauzan</a>

        <nav>
            <a href="#home">Home</a>
            <a href="#skills">Skills</a>
            <a href="#work">Work</a>
        </nav>
    </header>
    <section class="home" id="home">
        <div class="home-img" data-aos="fade-down" data-aos-duration="2000" >
                    <img src="{{ asset ('image/profile.jpg')}}" alt="Profile">
        </div>
        <div class="home-content" data-aos="fade-down" data-aos-duration="2000" >
            <h1>Hi, It's <span>Fauzan</span></h1>
            <h3 class="typing-text">I'm a <span></span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, repudiandae odio? Nesciunt qui, accusamus ad quod atque hic, vel quisquam omnis, explicabo deserunt minus temporibus nobis nam expedita similique ducimus.</p>
            <div class="social-icons">
                <a href="https://instagram.com/fauzan_lv2"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://wa.me/6282318374923"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </section>

<section class="skills" id="skills">
    <h2 class="skills-title" >My Skills</h2>
    <div class="skills-layout">
        <div class="skills-boxes">
            <h2 class="skills-subtitle" data-aos="fade-down" data-aos-duration="2000" >Professional Skill</h2>
            <p class="skills-desc" data-aos="fade-down" data-aos-duration="2000" >"Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, repudiandae odio? Nesciunt qui, accusamus ad quod atque hic, vel quisquam omnis, explicabo deserunt minus temporibus nobis nam expedita similique ducimus."</p>
            <div class="skill-box" data-aos="fade-down" data-aos-duration="2000" >
                <h3>HTML & CSS</h3>
                <div class="skill-bar">
                    <div class="skill-per" style="width:90%">90%</div>
                </div>
            </div>
            <div class="skill-box" data-aos="fade-down" data-aos-duration="2000" >
                <h3>JavaScript</h3>
                <div class="skill-bar">
                    <div class="skill-per" style="width:80%">80%</div>
                </div>
            </div>
            <div class="skill-box" data-aos="fade-down" data-aos-duration="2000" >
                <h3>PHP</h3>
                <div class="skill-bar">
                    <div class="skill-per" style="width:75%">75%</div>
                </div>
            </div>
            <div class="skill-box" data-aos="fade-down" data-aos-duration="2000" >
                <h3>Laravel</h3>
                <div class="skill-bar">
                    <div class="skill-per" style="width:70%">70%</div>
                </div>   
            </div>
            <div class="skill-box" data-aos="fade-down" data-aos-duration="2000" >
                <h3>MySQL</h3>
                <div class="skill-bar">
                    <div class="skill-per" style="width:65%">65%</div>
                </div>
            </div>
        </div>
        <div class="skills-image" data-aos="fade-down" data-aos-duration="2000" >
            <img src="{{ asset('image/work3.jpg') }}" alt="Work 3">
        </div>
    </div>
</section>

    <section class="work" id="work">
    <h2 class="projects-title" >Work</h2>
    <div class="projects-gallery">
        <div class="project-item" data-aos="fade-up">
            <img src="{{ asset('image/project2.png') }}" alt="Project 1">
        </div>
        <div class="project-item" data-aos="fade-up">
            <img src="{{ asset('image/project3.png') }}" alt="Project 2">
        </div>
    </div>
    </section>


    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('js/typing.js') }}"></script>

<script>
let lastScrollTop = 0;
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop && scrollTop > 0) {
        navbar.classList.add('hide-navbar');
    } else {
        navbar.classList.remove('hide-navbar');
    }
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});
</script>

</body>
</html>