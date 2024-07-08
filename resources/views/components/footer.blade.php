<style>
    /* Ensure the wrapper takes the full height of the viewport */
    html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }
    
    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    
    .content {
        flex: 1; /* This makes the content area take up the available space */
    }    
    
    .footer-top-content {
        margin-bottom: 10px;
    }
    
    .black-text {
        color: black;
    }
    
    .white-link {
        color: white;
        text-decoration: none;
    }
    
    .white-link:hover {
        text-decoration: underline;
    }
    </style>
    
    <footer class="footer mt-auto">
        <div class="footer-top">
            <div class="footer-top-content">
                HUBUNGI KAMI <br>
                <i class="bi bi-telephone-fill black-text"> </i>081223255635 <i class="bi bi-whatsapp black-text"> </i>081223255635<br>
            </div>
            <span class="black-text">Dengan menggunakan jasa dan produk kami, maka anda menyatakan setuju dengan </span><a href="{{ route('syaratketentuan') }}" class="white-link">Syarat Ketentuan</a><br>
    
            <a href="{{ route('about') }}" class="white-link">TENTANG KAMI</a> - <a href="#" class="white-link">LAYANAN</a>
            <hr class="border-3 opacity-50" style="background-color: white; width: 100%; margin: 10px auto;">
            <p>Copyright &copy; 2024 LaundryEn</p>
        </div>
    </footer>
    