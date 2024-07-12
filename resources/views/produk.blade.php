<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts/googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"
        integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{asset('css/custome.css')}}">
    <title>HAPTYCRAFT</title>
    <script src="https://kit.fontawesome.com/ba558f5520.js" crossorigin="anonymous"></script>

<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #365E32;">
            <div class="container">
                <a class="navbar-brand fs-6" href="#" style="font-weight:bold">HAPTYCRAFT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fs-8 active" aria-current="page" href="{{route('welcome')}}"
                                style="font-weight:bold">Home</a>
                        </li>
                        <li class="kategori">
                            <a class="nav-link fs-8 active" aria-current="page" href="#categories"
                                style="font-weight:bold">Product</a>
                        </li>
                        <a class="nav-link fs-8" href="#contact" style="font-weight:bold">Contact Us</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center justify-content-around">
                        <button class="btn btn-outline-dark" type="submit"
                            style="background-color: #FFBF00; font-weight:bold">User</button>
                        <div class="notif">
                            <a href="{{route('keranjang')}}" class="fs-5">
                                <i class="fa-solid icon-nav fa-bag-shopping ms-3 "></i>
                            </a>
                            <div class="circle">5</div>
                        </div>
                        </d>
                    </div>
                </div>
        </nav>
    </header>
    <main style="background-color: #365E32; width:100%">
        <section class="hero">
            <div class="container3">
                <h1 style="font-weight:bold">Liven up your day with Haptycraft!</h1>
                <p>Get up to 36% off on seleceted items!</p>
            </div>
        </section>
        <div class="salam">
            <h2 style="margin-left:50px; font-weight:bold">Product from Haptycraft</h2>
        </div>
        <section class="products" id="prod">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('assets/image/g3.png')}}" class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight:bold">Star Night</h5>
                                <p class="card-text">Seperti bintang di langit malam yang melambangkan kemewahan. </p>
                                <p class="card-harga">Rp100.000</p>
                                <a href="#prod" class="btn btn-primary">Add To Chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('assets/image/c1.png')}}" class="card-img-top" alt="Product 2">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight:bold">Everlasting Love</h5>
                                <p class="card-text">The diamond, represents the unwavering love that will withstand the test of time.</p>
                                <p class="card-harga">Rp150.000</p> <a href="#prod" class="btn btn-primary">Add To Chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('assets/image/g7.png')}}" class="card-img-top" alt="Product 3">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight:bold">Graceful Embrace</h5>
                                <p class="card-text">Symbolizing the couple's refined taste and sophisticated style.</p>
                                <p class="card-harga">Rp200.000</p> <a href="#prod" class="btn btn-primary">Add To Chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('assets/image/c2.png')}}" class="card-img-top" alt="Product 4">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight:bold">Enchanted Sparkle</h5>
                                <p class="card-text">This name captures the brilliance of the diamond, reminiscent of a magical enchantment.</p>
                                <p class="card-harga">Rp500.000</p> <a href="#prod" class="btn btn-primary">Add To Chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('assets/image/g8.png')}}" class="card-img-top" alt="Product 5">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight:bold">Product Name 4</h5>
                                <p class="card-text">Description for product 4</p>
                                <p class="card-harga">Price</p> <a href="#prod" class="btn btn-primary">Add To Chart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="{{asset('assets/image/c3.png')}}" class="card-img-top" alt="Product 6">
                            <div class="card-body">
                                <h5 class="card-title" style="font-weight:bold">Product Name 4</h5>
                                <p class="card-text">Description for product 4</p>
                                <p class="card-harga">Price</p> <a href="#prod" class="btn btn-primary">Add To Chart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
        </div>
        </section>
        <div class="Contact-Us" id="contact" style="min-height:100vh">
            <h1 class="contact-title" style="text-align:left; font-size:40px; font-weight:bold">Contact US</h1>
            <div class="isi3">
                <p>Kami di Haptycraft sangat menghargai masukan dan pertanyaan dari Anda. Jika Anda memiliki pertanyaan
                    seputar layanan kami, ingin memberikan saran, atau membutuhkan bantuan, tim kami siap membantu. Anda
                    dapat menghubungi kami melalui telepon, email, atau langsung datang ke kantor kami di alamat yang
                    tertera di bawah ini. Kami juga menyediakan formulir kontak di situs ini untuk memudahkan Anda dalam
                    menyampaikan pesan. Setiap pesan yang Anda kirimkan sangat berarti bagi kami dan akan kami tanggapi
                    secepat mungkin. Terima kasih telah menghubungi Haptycraft!</p>
            </div>
            <section id="contact">
                <div class="contact-detail">
                    <form action="">
                        <h1>Tell us your problem</h1>
                        <div class="form-group">
                            <div id="input-name" class="input-group">
                                <p><label for="name">Name</label></p>
                                <input type="text" id="name">
                            </div>
                            <div id="input-subject" class="input-group">
                                <p><label for="subject">Subject</label></p>
                                <input type="text" id="subject">
                            </div>
                            <div id="input-email" class="input-group">
                                <p><label for="email">Email</label></p>
                                <input type="email" id="email">
                            </div>
                            <div id="input-phone" class="input-group">
                                <p><label for="phone">Phone Number</label></p>
                                <input type="tel" id="phone">
                            </div>
                            <div id="input-message" class="input-group">
                                <p><label for="message">Message</label></p>
                                <input type="text" id="message">
                            </div>
                        </div>
                        <button class="btn-submit">Submit</button>
                    </form>
                </div>
            </section>
    </main>
</body>
<footer style="background-color: #FFBF00; padding: 10px">
    <p style="text-align:center; color:white">&copy; 2024 Haptycraft. All right reserved.</p>
    <div class="info">
        <p><span>Info:</span> antariksaa12@gmail.com</p>
        <p><span>Phone:</span> 082119154532</p>
        <p><span>Address:</span> Subang</p>
        <p><span>Hours:</span> 09:00-18:00</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>