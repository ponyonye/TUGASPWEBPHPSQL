    <?php
$notif = "";


if (isset($_GET['status'])) {
    if ($_GET['status'] == 'sukses') {
        $notif = "Pesan berhasil dikirim!";
    } elseif ($_GET['status'] == 'gagal') {
        $notif = "Terjadi kesalahan saat mengirim pesan.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        header("Location: ?status=gagal");
        exit();
    } else {
        $nama = $conn->real_escape_string($_POST['full_name']);
        $email = $conn->real_escape_string($_POST['email']);
        $phone = $conn->real_escape_string($_POST['phone']);
        $pesan = $conn->real_escape_string($_POST['pesan']);

        $sql = "INSERT INTO contacts (full_name, email, phone, pesan) VALUES ('$nama', '$email', '$phone', '$pesan')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ?status=sukses");
            exit();
        } else {
            header("Location: ?status=gagal");
            exit();
        }

        $conn->close();
    }
}
?>
    
    <!DOCTYPE html>
    <html lang="id">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Raihan Faisal Ramdani - Front End Developer</title>
            <link rel="stylesheet" href="styles.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="script.js"></script>
        </head>
        <body>

        <header class="header">
            <div class="container">
                <div class="logo">
                    <i class="fas fa-umbrella"></i>
                </div>
                <div class="burger-menu" onclick="toggleMenu()">
                    <div class="burger-line"></div>
                    <div class="burger-line"></div>
                    <div class="burger-line"></div>
                </div>

                <nav class="nav" id="nav-menu">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#testimonials">Testimoni</a></li>
                        <li><a href="#project">Project</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="home" class="hero">
            <div class="container hero-content">
                <div class="hero-text">
                    <h1>Yahoo!!!</h1>
                    <h2>Saya Raihan Faisal Ramdani</h2>
                    <p>Saya adalah Mahasiswa semester 4 di Universitas Siliwangi mempunyai keahlian sebagai Front End Developer dan UI/UX Design. Pengalaman saya dalam bidang ini lebih mengarah ke Front End Developer saya harap dengan keahlian saya bisa memberikan yang terbaik apabila kita bekerja sama.</p>
                    <div class="social-links">
                        <p>Touch me on:</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/raihan-faisal-ramdani-a183b3270/" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/ponyonye" class="social-icon"><i class="fab fa-github"></i></a>
                            <a href="mailto:237006065@student.unsil.ac.id" class="social-icon"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="profile-image.jpg" alt="Raihan Faisal Ramdani">
                </div>
            </div>
        </section>

        <section id="service" class="service">
            <div class="container">
                <h2>Service</h2>
                <p class="service-description">
                    Dalam perkuliahan saya, saya sudah mengerjakan beberapa project yang dimana saya berfokus pada Front End Development dan juga UI/UX Designer. Project-Project tersebut mengajarkan saya bagaimana bertanggung jawab terhadap pekerjaan yang nantinya akan saya jalani.
                </p>

                <div class="service-items">
                    <div class="service-item">
                        <div class="service-text">
                            <h3>UI/UX</h3>
                            <p>3 Projects completed</p>
                        </div>
                        <div class="service-img-container">
                            <img src="uiux-image.jpg" alt="UI/UX" class="service-img">
                        </div>
                    </div>
                    <div class="service-item">
                        <div class="service-text">
                            <h3>FE Developer</h3>
                            <p>2 Projects completed</p>
                        </div>
                        <div class="service-img-container">
                            <img src="fe-dev-image.jpg" alt="Front End Developer" class="service-img">
                        </div>
                    </div>
                </div>

                <div class="tools">
                    <h3>Tools:</h3>
                    <div class="tools-icons">
                        <a href="#" class="tool-icon">
                            <i class="fab fa-html5"></i>
                        </a>
                        <a href="#" class="tool-icon">
                            <i class="fab fa-css3-alt"></i>
                        </a>
                        <a href="#" class="tool-icon">
                            <i class="fab fa-react"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <div class="container">
                <h2>What They Tell About Me</h2>
                <div class="testimonials-items">
                    <div class="testimonial-item">
                        <i class="fas fa-user-circle"></i>
                        <p>"Hasil kerjanya sangat rapi saya suka!"</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fas fa-user-circle"></i>
                        <p>"Desainnya sangat enak di pandang oleh mata"</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fas fa-user-circle"></i>
                        <p>"Hasilnya sesuai dengan waktu yang di sepakati"</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="project" class="project">
            <div class="container">
                <h2>Project</h2>
                <p>dibawah ini adalah berbagai project yang sudah saya kerjakan sebagai UI/UX Designer dan juga sebagai Front End Developer.</p>

                <div class="project-item">
                    <img src="project1.jpg" alt="Cerdas Bersama Musik" class="project-img">
                    <div class="project-info">
                        <h3>Cerdas Bersama Musik</h3>
                        <p>Pada proyek ini saya memiliki role Front End Developer</p>
                    </div>
                </div>
            </div>
        </section>

           <!-- Contact Form -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <!-- Formulir untuk mengirim data ke save_contact.php -->
            <form method="POST">
                
                <!-- Nama Lengkap -->
                <div class="form-group">
                    <label for="full-name">Nama Lengkap</label>
                    <input type="text" id="full-name" name="full-name" required>
                    <span id="full-name-error" style="color: red;"></span>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <span id="email-error" style="color: red;"></span>
                </div>

                <!-- Nomor Handphone -->
                <div class="form-group">
                    <label for="phone">Nomor Handphone</label>
                    <input type="text" id="phone" name="phone" required>
                    <span id="phone-error" style="color: red;"></span>
                </div>

                <!-- Pesan -->
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea id="pesan" name="pesan" required></textarea>
                    <span id="message-error" style="color: red;"></span>
                </div>

                <!-- Tombol Kirim -->
                <button type="submit">Kirim</button>
            </form>

            <!-- Pesan error jika terjadi masalah -->
            <div id="error-message" style="color: red;"></div>
        </div>
    </section>

        <footer class="footer">
            <div class="container">
                <p>&copy; 2025 Raihan Faisal Ramdani</p>
            </div>
        </footer>
    </body>
    </html>
