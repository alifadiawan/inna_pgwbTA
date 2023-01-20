   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top p-2">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image " href="http://www.smkn1-sby.sch.id/"><img src="{{ asset('images/logosmk 1.png')}}"
            alt="alternative"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="register">REGISTER <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#description">DETAILS</a>
            </li> --}}

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">CONTACT</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="article-details.html"><span class="item-text"><i
                                class='fa fa-whatsapp'></i> Custumer Service</span></a>

                </div>
            </li>
            <!-- end of dropdown menu -->

        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-instagram fw-bold fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="#your-link">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->

   <!-- Favicon  -->
   <link rel="icon" href="{{ asset('images/logosmk 1.png')}}">