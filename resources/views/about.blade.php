<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KenzieShane's Site!">
    <title>KS Media</title>
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <meta property="og:title" content="KS Media" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.kenzieshane.my.id/" />
<meta property="og:image" content="https://www.kenzieshane.my.id/profile.jpg" />
</head>

<body>
    <!-- Header with navigation -->
    <wiki-header>
        <h1><img width="30px" src="profile.jpg"> <a href="/">KenzieShane Media</a></h1>
        <p>Site is under construction.</p>
        
        <div class="admin">
            @auth
                <div class="auth-links">
                    <span class="username">{{ auth()->user()->name }}</span>
                    <form action="/logout" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                    </form>
                </div>
            @else
                <div class="auth-links">
                    <a href="/#login">Login</a>
                    <a href="/#register" class="register-link">Register</a>
                    <a href="https://blog.kenzieshane.my.id/2025/11/about-us.html">Privacy Policy</a>
                </div>
            @endauth
        </div>
    </wiki-header>

    <!-- Navigation sidebar -->
    <wiki-nav>
        <a href="/">Home</a>
        <a class="active" href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="https://blog.kenzieshane.my.id">Blog</a>
                <a href="https://kenzieshane.itch.io">Games</a>
    </wiki-nav>

    <!-- Main content area -->
    <main>
        <wiki-page>
            <div class="content">
                    <!-- Hero section with intro -->
                    <div class="hero-section" style="text-align: center; padding: 2rem .75rem; background: var(--card-bg); border-radius: 8px; margin-bottom: 1rem;">
                        <h1 class="hero-title" style="font-size: 2rem; color: #fff; margin-bottom: 0rem;">About KenzieShane's Media.</h1>
                    </div>

                            <div class="featured-card">
                                <h3>About Me</h3>
                                <p>☩ Hello! My name is Kenzie Shane Setiawan. I've made projects and other things in my free time. I've tried so many things and went to so many places on the internet. I've made a lot of amateur scratch and turbowarp projects that are open-source. I've tried to hack many offline and online games using file editing (root access on phone), and through GameGuardian. I've changed my phone's ROM so many times between MIUI, HyperOS, and custom roms. I've modded and tinkered with my phone's settings database to customize it to my liking. I am experienced(?) with a little web development, and most proficient in the block-coding language of Scratch and Turbowarp. On hindsight, i shouldn't be proud of that.<br>Btw, I like skeumorphic and metro design. Hello!</p>
                            </div>
                        </div>
                    </div>

                        


            </div>
        </wiki-page>
    </main>

    <!-- Footer -->
    <footer style="grid-column: 1 / -1; text-align: center; padding: 2rem; background: var(--light-gray); border-top: 1px solid var(--border-color); margin-top: 2rem;">
        <p>© {{ date('Y') }} KenzieShane's Media</p>
    </footer>

    <!-- Optional: Add smooth scrolling behavior -->
    <style>
        html {
            scroll-behavior: smooth;
        }
        #register, #login {
            scroll-margin-top: 100px; /* Adjusts for fixed header height */
        }
    </style>
</body>
</html>