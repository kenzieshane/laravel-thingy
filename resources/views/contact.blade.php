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
        <a  href="/about">About</a>
        <a class="active" href="/contact">Contact</a>
        <a href="https://blog.kenzieshane.my.id">Blog</a>
                <a href="https://kenzieshane.itch.io">Games</a>
    </wiki-nav>

    <!-- Main content area -->
    <main>
        <wiki-page>
            <div class="content">

                            <div class="featured-card">
                                <h3>Contact me through...</h3>
                                <p>Email: cortadoistheonlyone@gmail.com</p>
<p>Github: <a href="https://www.github.com/kenzieshane">kenzieshane</a></p>
                            <p>instagram: <a href="https://instagram.com/username_.ks">username_.ks</a></p>
<p>Youtube : <a href="https://youtube.com/@imaguyyesmale?si=DhWUqpgpMvud5mC8">Kenzie Shane Setiawan (usernameks)</a></p>
<p>Reddit: <a href="https://www.reddit.com/user/Apprehensive-Fix9704/">kenzieshane</a></p>
                                <p>Thanks!</p>
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