<?php include 'header.php'; ?>
<main class="home_page">
    <div class="hero1 custom-bg min-vh-100 vh-100">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img class="w-100 h-100 object-fit-cover" src="images/on_water_bg.png" alt="">
        </div>
        <div class="container position-relative z-2 h-100 hstack">
            <img class="onwater-text-style1 mx-auto" src="images/on_water_with_text_berlin.svg" alt="">
        </div>
    </div>

    <div class="menu-container w-100 z-2">
        <div class="container">
            <div class="offcanvas offcanvas-end d-lg-block w-100 visible" tabindex="-1" id="offcanvasNavbar">
                <div class="offcanvas-header mb">
                    <button type="button" class="btn-close fs-6 me-auto ms-0 ps-0" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body p-lg-0">
                    <div class="navbar-expand-lg">
                        <ul class="navbar-nav m-0 bg-transparent">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#">START</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">PROGRAMM</a></li>
                                    <li><a class="dropdown-item" href="#">NEWS</a></li>
                                    <li><a class="dropdown-item" href="#">MITMACHEN</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">DIALOGE</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action 1</a></li>
                                    <li><a class="dropdown-item" href="#">Another action 1</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here 1</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link">PARCOURS</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">ORTE</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action 2</a></li>
                                    <li><a class="dropdown-item" href="#">Another action 2</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here 2</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">THEMEN</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action 3</a></li>
                                    <li><a class="dropdown-item" href="#">Another action 3</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link">KONTAKT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section_below_banner page1 position-relative">
        <div class="blue-blob"><img src="images/Zur_Ausstellung_im.svg" alt=""></div>
        <div class="container">
            <h2 class="mb-3">BERLINS WASSERFORSCHUNG <br>IM AUSTAUSCH MIT DER GESELLSCHAFT</h2>
            <p>Es formt Landschaften, prägt Kulturen, durchdringt Körper und Systeme. Es ist alltäglich, elementar, kostbar:
                Wasser - ein unerschöpflicher Forschungsgegenstand. Das Programm «On Water. WasserWissen in Berlin"
                macht so erlebbar, wofür die Berlin University Alliance steht: kollaboratives Forschen, Teilhabe und die
                Überzeugung, dass wir gemeinsam mehr erreichen. Wir verbinden wissenschaftliche Perspektiven, überwindet
                Disziplinen und eröffnen neue Wege, um gemeinsam Antworten auf die Wasserprobleme der Zukunft zu
                finden.</p>
        </div>
    </section>


    <section class="section-video">
        <div class="ratio ratio-16x9 bg-black">
            <video width="100%" height="100%" controls poster="images/Video_Placeholder.png">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section class="event-container position-relative overflow-hidden">
        <div class="green-blob"><img src="images/green-blob-img.svg" alt=""></div>
        <div class="container" style="position: relative; z-index: 2;">
            <h2 class="mb-3">HEADLINE VERANSTALTUNGEN</h2>
            <h3 class="fw-normal">Ur, omnisci aectotae voluptatem assi nempor molut la etur, imo<br>
                ommos ipsame sequis maximus exped magnis rati ulparum endam.</h3>
            <div class="wap_events_card overflow-hidden position-relative">
                <div class="events_card position-relative">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><div class="event-card">
                                    <img class="image" src="images/Event_Image_1.png" alt="Event Image">
                                    <h5>ON WATER. PARCOURS</h5>
                                    <h4>if the Ocean Were a City?"</h4>
                                    <p>03. - 04. Mai 2025</p>
                                    <a class="stretched-link" href="#">ZUR ANMELDUNG</a>
                                </div></div>
                            <div class="swiper-slide"><div class="event-card">
                                    <img class="image" src="images/Event_Image_2.png" alt="Event Image">
                                    <h5>ON WATER. PARCOURS</h5>
                                    <h4>,,DIY Hack The Panke"</h4>
                                    <p>20. - 22. Juni 2025</p>
                                    <a class="stretched-link" href="#">ZUR ANMELDUNG</a>
                                </div></div>
                            <div class="swiper-slide"><div class="event-card">
                                    <img class="image" src="images/Event_Image_3.png" alt="Event Image">
                                    <h5>ON WATER. PA</h5>
                                    <h4>„Dialog „Kic</h4>
                                    <p>23. Oktober</p>
                                    <a class="stretched-link" href="#">ZUR ANMELD</a>
                                </div></div>
                            <div class="swiper-slide"><div class="event-card">
                                    <img class="image" src="images/Event_Image_2.png" alt="Event Image">
                                    <h5>ON WATER. PARCOURS</h5>
                                    <h4>,,DIY Hack The Panke"</h4>
                                    <p>20. - 22. Juni 2025</p>
                                    <a class="stretched-link" href="#">ZUR ANMELDUNG</a>
                                </div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="contact_map">
        <img class="w-100" src="images/WASSERWISSEN_bg.png" alt="">
        <div class="container">
            <div class="row gx-x gy-5">
                <div class="col-md-auto col-12">
                    <div class="col_left">
                    <h2>WASSERWISSEN VOR ORT</h2>
                    <h3 class="fw-normal mb-4">Teilen Sie mit uns Ihren Wasser-Ort in Berlin!</h3>
                    <p>Wo findet sich Expertise über Wasser in Forschung
                        und Praxis? Entdecken Sie unsere interaktive Karte
                        und markieren Ihren eigenen Ort des<br>
                        WasserWissens:</p>
                    <div class="contact-form mt-4 mb-5 pb-3">
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-4 border-primary px-4" id="floatingStr" placeholder="">
                                <label class="text-primary px-4" for="floatingStr">Straße, PLZ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea rows="5" class="form-control rounded-4 border-primary px-4" placeholder="" id="floatingTextarea"></textarea>
                                <label class="text-primary px-4" for="floatingTextarea">Welche Expertise über Wasser ist hier zu finden?</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-4 border-primary px-4" id="floatingEmail" placeholder="">
                                <label class="text-primary px-4" for="floatingEmail">E-Mail</label>
                            </div>
                            <button class="btn w-100 rounded-4 btn-primary text-start py-3 px-4 lh-sm" type="submit">Absenden</button>
                        </form>
                    </div>
                    <a href="#" class="btn-link">ZUR INTERAKTIVEN WASSER-KARTE ></a>
                    <div class="map-container mt-2">
                        <img src="images/Map_Placeholder.png" alt="Map of Berlin">
                    </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="water_image_container">
                    <img src="images/water_image.png" alt="Water Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>