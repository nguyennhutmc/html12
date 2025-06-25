<?php include 'header.php'; ?>
<main class="home_page">
    <div class="custom-bg" style="padding: 5rem 0; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('https://placehold.co/1920x800/00305E/FFFFFF?text=Background+Image'); background-size: cover; opacity: 0.3;"></div>
        <div class="container" style="position: relative; z-index: 2; text-align: left;">
            <h1 class="onwater-text">on water</h1>
            <p class="wasserwissen-text">WasserWissen in Berlin</p>
        </div>
    </div>

    <div class="container menu-container">
        <a href="#" class="menu-item">START</a>
        <a href="#" class="menu-item">DIALOGE</a>
        <a href="#" class="menu-item">PARCOURS</a>
        <a href="#" class="menu-item">ORTE</a>
        <a href="#" class="menu-item">THEMEN</a>
        <a href="#" class="menu-item">KONTAKT</a>
        <br>
        <a href="#" class="menu-item">PROGRAMM</a>
        <a href="#" class="menu-item">NEWS</a>
        <a href="#" class="menu-item">MITMACHEN</a>
    </div>

    <div class="container mt-5">
        <h2>BERLINS WASSERFORSCHUNG IM AUSTAUSCH MIT DER GESELLSCHAFT</h2>
        <p>Es formt Landschaften, prägt Kulturen, durchdringt Körper und Systeme. Es ist alltäglich, elementar, kostbar:
            Wasser - ein unerschöpflicher Forschungsgegenstand. Das Programm «On Water. WasserWissen in Berlin"
            macht so erlebbar, wofür die Berlin University Alliance steht: kollaboratives Forschen, Teilhabe und die
            Überzeugung, dass wir gemeinsam mehr erreichen. Wir verbinden wissenschaftliche Perspektiven, überwindet
            Disziplinen und eröffnen neue Wege, um gemeinsam Antworten auf die Wasserprobleme der Zukunft zu
            finden.</p>
    </div>

    <div class="section-video">
        <div class="ratio ratio-16x9 bg-black">
            <video width="100%" height="100%" controls poster="images/Video_Placeholder.png">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="event-container position-relative overflow-hidden">
        <div class="green-blob"><img src="images/green-blob-img.svg" alt=""></div>
        <div class="container" style="position: relative; z-index: 2;">
            <h2>HEADLINE VERANSTALTUNGEN</h2>
            <h3 class="fw-normal">Ur, omnisci aectotae voluptatem assi nempor molut la etur, imo<br>
                ommos ipsame sequis maximus exped magnis rati ulparum endam.</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="event-card">
                        <img src="https://placehold.co/400x200/FFFFFF/00305E?text=Event+Image" alt="Event Image">
                        <h5>ON WATER. PARCOURS</h5>
                        <h4>if the Ocean Were a City?"</h4>
                        <p>03. - 04. Mai 2025</p>
                        <a href="#">ZUR ANMELDUNG</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event-card">
                        <img src="https://placehold.co/400x200/FFFFFF/00305E?text=Event+Image" alt="Event Image">
                        <h5>ON WATER. PARCOURS</h5>
                        <h4>,,DIY Hack The Panke"</h4>
                        <p>20. - 22. Juni 2025</p>
                        <a href="#">ZUR ANMELDUNG</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="event-card">
                        <img src="https://placehold.co/400x200/FFFFFF/00305E?text=Event+Image" alt="Event Image">
                        <h5>ON WATER. PA</h5>
                        <h4>„Dialog „Kic</h4>
                        <p>23. Oktober</p>
                        <a href="#">ZUR ANMELD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <input type="text" class="form-control rounded-4 border-primary" id="floatingStr" placeholder="">
                                <label class="text-primary" for="floatingStr">Straße, PLZ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea rows="5" class="form-control rounded-4 border-primary" placeholder="" id="floatingTextarea"></textarea>
                                <label class="text-primary" for="floatingTextarea">Welche Expertise über Wasser ist hier zu finden?</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-4 border-primary" id="floatingEmail" placeholder="">
                                <label class="text-primary" for="floatingEmail">E-Mail</label>
                            </div>
                            <button class="btn w-100 rounded-4 btn-primary text-start py-2" type="submit">Absenden</button>
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