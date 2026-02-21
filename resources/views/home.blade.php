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
<style>
@media screen and (min-width: 768px) {
  .bozo {
    style="grid-template-columns: 60px 60px 60px 60px 60px; 
    grid-template-rows: 60px 60px 60px; 
    display: grid;
    gap: 10px
  }
}
</style>
</head>

<body>
    <!-- Header with navigation -->
    <wiki-header>
        <h1><img width="30px" src="profile.jpg"> <a href="/">KenzieShane Media</a></h1>
        <p>Website refresh... All data are pretty much lost lol // Site is under construction.</p>
        
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
                    <a href="#login">Login</a>
                    <a href="#register" class="register-link">Register</a>
                    <a href="https://blog.kenzieshane.my.id/2025/11/about-us.html">Privacy Policy</a>
                </div>
            @endauth
        </div>
    </wiki-header>

    <!-- Navigation sidebar -->
    <wiki-nav>
        <a href="/" class="active">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="https://blog.kenzieshane.my.id">Blog</a>
        <a href="https://kenzieshane.itch.io">Games</a>
    </wiki-nav>

    <!-- Main content area -->
    <main>
        <wiki-page>
            <div class="content">
                @auth
                    <h1>Hello, {{ auth()->user()->name }}!</h1>
                    <p>You are a tier-1 user!</p>
                    <p>For now there's no perks for logging in.</p>
                    <p>But if you're part of the old StandardUser tier, please visit the old page to access your perks and more: <a href=https://ks-login.kesug.com>click here</a></p>
                    <form action="/logout" method="POST">
                        @csrf
                        <button>Logout</button>
                    </form>

                      <!-- Featured Content -->
                    <div class="featured-section">
                        <h2>(!) Featured Content</h2>
                        
                        <div class="featured-grid">
                            <div class="featured-card">
                                <h3>Pinned</h3>
                                <h4><a href="/blog/getting-started">Recovering Bricked Redmi 12</a></h4>
                                <p>Hi, I just want to share this little piece of information. As the title suggest, here is a guide for Redmi 12 4G (fire) SP Flash tool. Original instructions by me is in the XDA Forums. No Authentication file needed, and without any payments needed whatsoever.</p>
                                <span class="card-meta">Android</span>
                            </div>

                            <div class="featured-card">
                                <h3>Current Project</h3>
                                <h4><a href="https://blog.kenzieshane.my.id/2025/07/how-to-generate-android-application.html">Turbowarp and Mobile</a></h4>
                                <p>It is possible, and you can used to it. Also no need to ask for help from some stranger online anymore to do it for you--yes I do have a little bit of trust problem, thank you for your concerns. Using cordova brings you many benefits when compared to using Appgeyser and MIT App inventor... it gives you option to embed ads, custom permissions, and (probably) overall smaller size of APK...</p>
                                <span class="card-meta">Android, iOS</span>
                            </div>

                            <div class="featured-card">
                                <h3>About Me</h3>
                                <p>☩ Hello! My name is Kenzie Shane Setiawan. I've made projects and other things in my free time. I've tried so many things and went to so many places on the internet. I've made a lot of amateur scratch and turbowarp projects that are open-source...</p>
                                <a href="/about" class="read-more">Read more →</a>
                            </div>
                        </div>
                    </div>

    <br>                    
                        <div class="view-all">
                            <a href="https://blog.kenzieshane.my.id/" class="button">View All Posts</a>
                        </div>
                    </div>
                    
                @else
                    <!-- Hero section with intro -->
                    <div class="hero-section" style="text-align: center; padding: 2rem .75rem; background: var(--card-bg); border-radius: 8px; margin-bottom: 1rem;">
                        <h1 class="hero-title" style="font-size: 2rem; color: #fff; margin-bottom: 0rem;">Welcome to KenzieShane's Media!</h1>
                    </div>

                     <div class=bozo width="100%" style="grid-template-columns: 60px 60px 60px 60px 60px; grid-template-rows: 60px 60px 60px; display: grid;gap: 10px">
                            <a href="https://kenzieshane.itch.io"><img style="justify-items: center" height="100%" style="object-fit: contain;" src=4.png></a>
                            <a href="https://kenzieshane.itch.io"><img style="justify-items: center" height="100%" src=5.png></a>
                            <a href="https://kenzieshane.itch.io"><img style="justify-items: center" height="100%" src=6.png></a>
                            <a href="https://kenzieshane.itch.io"><img height="100%" style="justify-items: center"  src=7.png></a>
                            <a href="https://kenzieshane.itch.io"><img height="100%" style="justify-items: center"  src=8.png></a>
                            <a href="https://www.github.com/kenzieshane"><img height="100%" style="justify-items: center"  src=9.png></a>
                            <a href="https://blog.kenzieshane.my.id"><img height="100%" style="justify-items: center"  src=10.png></a>
                            <a href="https://blog.kenzieshane.my.id"><img height="100%" style="justify-items: center" src=11.png></a>
                            <a href="https://www.github.com/kenzieshane"><img height="100%" style="justify-items: center" src=12.png></a>
                            <a href="https://kenzieshane.itch.io"><img height="100%" style="justify-items: center" src=13.png></a>
                            <a href="https://kenzieshane.itch.io"><img height="100%" style="justify-items: center" src=14.png></a>
                            <a href="https://blog.kenzieshane.my.id"><img height="100%" style="justify-items: center" src=15.png></a>
                        </div>

                      <!-- Featured Content -->
                    <div class="featured-section">
                        <h2>(!) Featured Content</h2>
                       
                        <div class="featured-grid">
                            <div class="featured-card">
                                <h3>Pinned</h3>
                                <h4><a href="/blog/getting-started">Recovering Bricked Redmi 12</a></h4>
                                <p>Hi, I just want to share this little piece of information. As the title suggest...</p>                             <span class="card-meta">Android</span>
                           
                            </div>

                            <div class="featured-card">
                                <h3>Current Project</h3>
                                <h4><a href="https://blog.kenzieshane.my.id/2025/07/how-to-generate-android-application.html">Turbowarp and Mobile</a></h4>
                                <p>It is possible, and you can used to it. Also no need to ask for help from some stranger online anymore to do it for you...</p>
                                <span class="card-meta">Android, iOS</span>
                            </div>

                            <div class="featured-card">
                                <h3>INTROCUCTION</h3>
                                <h4>About Me</h4>
                                <p>☩ Hello! My name is Kenzie Shane Setiawan. I've made projects and other things in my free time... </p>           <a href="/about" class="read-more">Read more →</a>
                            </div>
                        </div>
                    </div>

    <br>                    
                        <div class="view-all">
                            <a href="https://blog.kenzieshane.my.id/" class="button">View All Posts</a>
                        </div>
                    </div>
<br>
                    <hr>
                    <!-- Your original register UI with anchor -->
                    <div id="register" style="scroll-margin-top: 120px; border: 3px solid var(--accent-red); padding: 2rem; border-radius: 8px; background: var(--card-bg); margin-bottom: 2rem;">
                        <h1 style="color: var(--accent-red); margin-bottom: 1.5rem;">Register</h1>
                        <form action="/register" method="POST">
                            @csrf
                            <div style="display: flex; flex-direction: column; gap: 1rem; max-width: 400px;">
                                <input name="name" type="text" placeholder="name" style="padding: 0.75rem; background: var(--input-bg); border: 1px solid var(--border-color); border-radius: 4px; color: var(--text-color);">
                                <input name="email" type="text" placeholder="email@email.com" style="padding: 0.75rem; background: var(--input-bg); border: 1px solid var(--border-color); border-radius: 4px; color: var(--text-color);">
                                <input name="password" type="password" placeholder="password" style="padding: 0.75rem; background: var(--input-bg); border: 1px solid var(--border-color); border-radius: 4px; color: var(--text-color);">
                                <button type="submit" class="primary" style="padding: 0.75rem;">Register</button>
                            </div>
                        </form>
                    </div>

                    <!-- Your original login UI with anchor -->
                    <div id="login" style="scroll-margin-top: 120px; border: 3px solid var(--accent-red); padding: 2rem; border-radius: 8px; background: var(--card-bg); margin-bottom: 2rem;">
                        <h1 style="color: var(--accent-red); margin-bottom: 1.5rem;">Login</h1>
                        <form action="/login" method="POST">
                            @csrf
                            <div style="display: flex; flex-direction: column; gap: 1rem; max-width: 400px;">
                                <input name="loginname" type="text" placeholder="name" style="padding: 0.75rem; background: var(--input-bg); border: 1px solid var(--border-color); border-radius: 4px; color: var(--text-color);">
                                <input name="loginpassword" type="password" placeholder="password" style="padding: 0.75rem; background: var(--input-bg); border: 1px solid var(--border-color); border-radius: 4px; color: var(--text-color);">
                                <button type="submit" class="primary" style="padding: 0.75rem;">Login</button>
                            </div>
                        </form>
                    </div>

                    <!-- Optional: Smooth scroll back to top -->
                    <div style="text-align: center; margin-top: 2rem;">
                        <a href="#" style="color: var(--accent-red);">↑ Back to top</a>
                    </div>
                @endauth
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