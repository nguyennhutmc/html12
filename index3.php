<?php include 'header.php'; ?>
<main class="sub_page">
    <section class="hero2 custom-bg position-relative">
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img class="w-100 h-100 object-fit-cover" src="images/on_water_bg3.png" alt="">
        </div>
        <div class="container position-relative z-2 h-100 hstack">
            <img class="onwater-text-style2 mx-auto" src="images/on_water_with_text_berlin.svg" alt="">
        </div>
    </section>
    <?php include 'menu.php'; ?>
    <section class="section_below_banner page2 page3 position-relative contact_map">
        <div class="container">
            <div class="row gx-x gy-5">
                <div class="col-md-auto col-12">
                    <div class="col_left">
                        <h2 class="mb-2">WASSERWISSEN VOR ORT</h2>
                        <p>WasserWissen vor Ort: Welche Orte in Berlin sind<br> für die Wasser-Forschung und Praxis relevant? <br>Teilen Sie mit uns Ihre Wasserorte:</p>
                        <div class="contact-form mt-lg-5 mt-4">
                            <form>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control rounded-4 border-primary px-3" id="floatingStr" placeholder="">
                                    <label class="text-primary px-3" for="floatingStr">Straße, PLZ</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea rows="5" class="form-control rounded-4 border-primary px-3" placeholder="" id="floatingTextarea"></textarea>
                                    <label class="text-primary px-3" for="floatingTextarea">Welche Expertise über Wasser ist hier zu finden?</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control rounded-4 border-primary px-3" id="floatingEmail" placeholder="">
                                    <label class="text-primary px-3" for="floatingEmail">E-Mail</label>
                                </div>
                                <button class="btn w-100 rounded-4 btn-primary text-start py-3 px-3 lh-1" type="submit">Absenden</button>
                            </form>
                        </div>
                        <div class="map-container mt-lg-5 mt-4">
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
    <section class="mapping text-white">
        <div class="container">
            <h2 class="mb-3">MAPPING</h2>
            <h3 class="fw-normal mb-lg-5 mb-4 pb-lg-3 pb-2">ON WATER verbindet Wasser-Wissen aus Berlin. Orte des Wassers werden sichtbar gemacht. Die "WasserWissen-Orte" wurden durch Dr. Friederike Landau-Donelly erarbeitet.</h3>
            <div class="list_mapping list-unstyled row gx-0 gy-y row-cols-1 row-cols-lg-3">
                <a href="#" class="item"><img src="images/icon_wasserwissen.png" alt="" class="before"><span>WasserWissen-Orte</span></a>
                <a href="#" class="item"><img src="images/icon_parcours.png" alt="" class="before"><span>PARCOURS-Veranstaltungen</span></a>
                <a href="#" class="item"><img src="images/icon_weitere1.png" alt="" class="before"><span>Weitere Orte</span></a>
                <a href="#" class="item"><img src="images/icon_verbundpartnerinnen.png" alt="" class="before"><span>Verbundpartnerinnen der Berlin University Alliance</span></a>
                <a href="#" class="item"><img src="images/icon_dialog.png" alt="" class="before"><span>DIALOG-Veranstaltungen</span></a>
                <a href="#" class="item"><img src="images/icon_weitere2.png" alt="" class="before"><span>Weitere Orte</span></a>
            </div>
        </div>
    </section>
    <section class="maps">
        <img class="w-100" src="images/maps_2.png" alt="">
    </section>
</main>
<?php include 'footer.php'; ?>