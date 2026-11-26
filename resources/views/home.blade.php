<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jelajah Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .hero {
            min-height: 75vh;
            background:
                linear-gradient(90deg, rgba(10, 28, 38, .78), rgba(10, 28, 38, .18)),
                url('https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=2000&q=85') center/cover;
        }

        .gallery-image {
            height: 240px;
            object-fit: cover;
        }

        .section-padding {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="/">Jelajah Nusantara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="hero d-flex align-items-center text-white" id="home">
            <div class="container py-5">
                <div class="col-lg-7">
                    <p class="text-uppercase fw-semibold mb-2">Cerita indah dimulai di sini</p>
                    <h1 class="display-3 fw-bold">Temukan pesona Nusantara</h1>
                    <p class="lead my-4">Jelajahi keindahan alam, budaya, dan tempat-tempat istimewa di Indonesia.</p>
                    <a class="btn btn-success btn-lg" href="/galeri">Lihat Galeri</a>
                </div>
            </div>
        </section>

        <section class="section-padding" id="galeri">
            <div class="container">
                <div class="text-center mb-5">
                    <p class="text-success text-uppercase fw-semibold mb-2">Inspirasi perjalanan</p>
                    <h2 class="display-6 fw-bold">Galeri Nusantara</h2>
                    <p class="text-secondary mb-0">Beberapa sudut Indonesia yang selalu punya cerita.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <article class="card h-100 border-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&w=900&q=80" class="card-img-top gallery-image" alt="Pura di tepi danau di Bali">
                            <div class="card-body">
                                <h3 class="h5 card-title fw-bold">Bali</h3>
                                <p class="card-text text-secondary">Budaya yang memikat dan panorama alam yang menenangkan.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="card h-100 border-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?auto=format&fit=crop&w=900&q=80" class="card-img-top gallery-image" alt="Pemandangan pegunungan di Indonesia">
                            <div class="card-body">
                                <h3 class="h5 card-title fw-bold">Raja Ampat</h3>
                                <p class="card-text text-secondary">Kepulauan tropis dengan laut jernih dan alam yang luar biasa.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4">
                        <article class="card h-100 border-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&w=900&q=80" class="card-img-top gallery-image" alt="Pemandangan alam tropis Indonesia">
                            <div class="card-body">
                                <h3 class="h5 card-title fw-bold">Komodo</h3>
                                <p class="card-text text-secondary">Petualangan alam dan pesona pulau yang tak terlupakan.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding bg-light" id="about">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8">
                        <p class="text-success text-uppercase fw-semibold mb-2">Tentang kami</p>
                        <h2 class="display-6 fw-bold mb-3">Mengenal lebih dekat Indonesia</h2>
                        <p class="text-secondary mb-0">Jelajah Nusantara hadir untuk berbagi inspirasi perjalanan dan memperkenalkan kekayaan alam serta budaya Indonesia. Mari temukan destinasi favoritmu dan ciptakan cerita perjalanan yang berkesan.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-4 text-center text-secondary">
        <div class="container">
            <small>&copy; {{ date('Y') }} Jelajah Nusantara. Semua hak dilindungi.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
