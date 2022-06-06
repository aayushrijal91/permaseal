<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="bathroom">
    <div class="container px-0 px-lg-3">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto">
                <?= renderImg("bathroom.png", "lib", "w-100") ?>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xxl-11">
                <div class="row no-gutters">
                    <div class="col-lg-6"><?= renderImg("about.png", "lib", "w-100") ?></div>
                    <div class="col-lg-6 px-lg-4 px-xxl-6">
                        <div class="text-white h2 fw-800 py-4 pt-md-0">
                            Putting off leaking shower repairs for too long <span class="text-primary">can lead to a number of problems in your home.</span>
                        </div>
                        <p class="text-white h12">A leaking shower can result in water penetrating through the wall and causing plaster to blister and peel, as well as rotten carpet and buckled floor boards.</p>
                        <p class="text-white h12">This can become a breeding ground for bacteria and mould – a health hindrance for your family. Permaseal will not only stop these leaks but your tiles will look new again.</p>
                        <ul class="about-list">
                            <li><span>Re-grouting:</span> showers, full bathrooms, toilets, laundries, kitchens, living areas and balconies.</li>
                            <li><span>Silicone work:</span> Shower screens, vanities, basins and wall perimeters.</li>
                            <li><span>Tiling repairs:</span> replacing cracked/damaged tiles, replacing ceramic soap dish holders, re-tiling showers, tiling over existing tiles and small tiling jobs.</li>
                            <li><span>Replace floor wastes/drains.</span></li>
                            <li><span>Commercial work:</span> Epoxy re-grouting for restaurant kitchens, commercial toilets, hospitals, hotels, aged care facilities, schools and aquatic centres.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between cta-slider">
            <div class="col-6 col-md-4 col-xl-auto">
                <div class="cta-card">
                    <div><?= renderImg("cta-1.png", "lib", "cta-img") ?></div>
                    <div class="cta-title">
                        <div>Water-Repellent<br> &amp; Easy To Clean</div>
                        <div class="sm-text">(Dropeffect®<br class="d-lg-none">Technology)</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-auto">
                <div class="cta-card">
                    <div><?= renderImg("cta-2.png", "lib", "cta-img") ?></div>
                    <div class="cta-title text-center">Rapid<br> Drying</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-auto">
                <div class="cta-card">
                    <div><?= renderImg("cta-3.png", "lib", "cta-img") ?></div>
                    <div class="cta-title">
                        Anti-Efflorescence<br> For Uniform Colour
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-auto">
                <div class="cta-card">
                    <div><?= renderImg("cta-4.png", "lib", "cta-img") ?></div>
                    <div class="cta-title">Stable &amp;<br> Uniform Colour</div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-auto">
                <div class="cta-card">
                    <div><?= renderImg("cta-5.png", "lib", "cta-img") ?></div>
                    <div class="cta-title">
                        Grouted Areas<br> Are Quickly<br> Ready For Use
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-auto">
                <div class="cta-card">
                    <div><?= renderImg("cta-6.png", "lib", "cta-img") ?></div>
                    <div class="cta-title">
                        <div>Mould-Resistant</div>
                        <div class="sm-text">(Bioblock®Technology)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="before-after">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-md-6 col-xl-3 py-2 p-md-3 py-xl-0">
                <div class="cocoen">
                    <?= renderImg("before-1.jpg", "lib","before-img") ?>
                    <?= renderImg("after-1.jpg", "lib","after-img") ?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 py-2 p-md-3 py-xl-0">
                <div class="cocoen">
                    <?= renderImg("before-2.jpg", "lib","before-img") ?>
                    <?= renderImg("after-2.jpg", "lib","after-img") ?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 py-2 p-md-3 py-xl-0">
                <div class="cocoen">
                    <?= renderImg("before-3.jpg", "lib","before-img") ?>
                    <?= renderImg("after-3.jpg", "lib","after-img") ?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 py-2 p-md-3 py-xl-0">
                <div class="cocoen">
                    <?= renderImg("before-4.jpg", "lib","before-img") ?>
                    <?= renderImg("after-4.jpg", "lib","after-img") ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="text-white h2 fw-800 text-uppercase">
                    What to look out for?
                </div>
                <ul class="about-list">
                    <li>Missing floor or wall grout</li>
                    <li>Discoloured tiles or grout in or around the shower</li>
                    <li>Cracked Tiles</li>
                    <li>Dirty, black or mouldy silicone</li>
                    <li>Visible gaps in floor and wall joints</li>
                    <li>Watermarks on ceilings or damp carpet</li>
                    <li>Swollen timbers - Skirting boards, floor boards and door frames</li>
                    <li>Bubbling/flaking paint</li>
                </ul>
                <div class="text-white h7 fw-800 text-uppercase pt-4 pt-md-5">
                    Damaged areas include:
                </div>
                <ul class="about-list">
                    <li>Bubbling/Flaking Paint on Walls or Ceilings</li>
                    <li>Swollen Timbers, Skirting Boards, Floor Boards and Door Frames</li>
                    <li>Damp Carpet</li>
                </ul>
            </div>
            <div class="col-lg-7 pt-4 pt-md-5 pt-lg-0">
                <?= renderImg("about-2.png", "lib", "w-100") ?>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faqs">
    <div class="container">
        <div class="accordion-container">
            <div class="accordion-card">
                <div class="accordion-head active">
                    <div class="main-question"><span class="text-primary pr-2 pr-md-4">Q:</span>Do I have to stop using my shower? and when can I start using it again after the work has been completed?</div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 8.83331C17.5909 8.99745 17.719 9.20037 17.814 9.4305C17.909 9.66063 17.9691 9.91346 17.9908 10.1745C18.0347 10.7018 17.9197 11.2308 17.6711 11.645C17.4224 12.0592 17.0606 12.3248 16.6651 12.3833C16.2696 12.4418 15.8729 12.2884 15.5622 11.957L9 4.95775L2.43782 11.957C2.12714 12.2884 1.73041 12.4418 1.33492 12.3833C0.939421 12.3248 0.577557 12.0592 0.328928 11.645C0.0802993 11.2308 -0.0347253 10.7018 0.00915708 10.1745C0.0530375 9.64725 0.252231 9.1648 0.562918 8.83331L8.06255 0.834208C8.32858 0.550233 8.65921 0.395508 9 0.395508C9.34079 0.395508 9.67142 0.550233 9.93745 0.834208L17.4371 8.83331Z" fill="#36D4D8" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body" style="display: block;">
                    <span class="text-primary pr-2 pr-md-4">A:</span>If the shower is leaking and causing damage then yes, it is preferable to stop using the shower. However, in most cases it is usually quite a gradual leak so therefore the difference will be minimal between the time we quote to the time the work is completed so it is certainly not a necessity, especially if you only have the use of one shower. Once the shower has been re-grouted it will be 24 hours before it can be reused.
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">
                    <div class="main-question"><span class="text-primary pr-2 pr-md-4">Q:</span>Should I have my shower screen replaced before or after the re-grouting?</div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#36D4D8" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body">
                    <span class="text-primary pr-2 pr-md-4">A:</span>If you are considering having the shower screen replaced it is recommended to have this done before the re-grouting work.
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">
                    <div class="main-question"><span class="text-primary pr-2 pr-md-4">Q:</span>How long does the work take?</div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#36D4D8" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body">
                    <span class="text-primary pr-2 pr-md-4">A:</span>For standard shower re-grout, I would allow between 3-4 hours but it can vary depending on how hard the grout is to remove, size of the tiles, width of grout joints etc.
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">
                    <div class="main-question">
                        <span class="text-primary pr-2 pr-md-4">Q:</span>Do you use mould resistant silicone and grout?
                    </div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#36D4D8" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body">
                    <span class="text-primary pr-2 pr-md-4">A:</span>Yes, we do have antifungal agents in both our grout and silicone.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form" id="form">
    <div class="container">
        <div class="row form-wrapper no-gutters">
            <div class="col-12 col-lg-6 form-left">
                <div class="heading">Let's fix your grout!</div>
                <form action="./src/form.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                    <div class="row no-gutters justify-content-lg-between">
                        <div class="col-12 col-md-6 pr-md-1 pr-md-2 py-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#36D4D8" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control bg-secondary-light border-0" type="text" placeholder="Name" id="name" name="name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-md-1 pl-md-2 py-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#36D4D8" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control bg-secondary-light border-0" type="tel" placeholder="Number" id="phone" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pr-md-1 pr-md-2 py-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#36D4D8" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control bg-secondary-light border-0" type="email" id="email" placeholder="Email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-md-1 pl-md-2 py-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#36D4D8" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control bg-secondary-light border-0" type="text" id="postcode" placeholder="Post Code" name="postcode" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pr-md-1 pr-md-2 py-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#36D4D8" class="bi bi-calendar" viewBox="0 0 16 16">
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control bg-secondary-light border-0" type="date" id="date" placeholder="Preferred Inspection Date" name="date" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-md-1 pl-md-2 py-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#36D4D8" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control bg-secondary-light border-0" type="time" id="time" placeholder="Preferred Inspection Time" name="time" required>
                            </div>
                        </div>
                        <div class="col-12 py-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#36D4D8" class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                            <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z" />
                                            <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                        </svg>
                                    </span>
                                </div>
                                <select class="form-control bg-secondary-light border-0" name="service" required>
                                    <option selected disabled>Service</option>
                                    <option>Leaking Shower Repairs</option>
                                    <option>Leaking Balcony Repairs</option>
                                    <option>Cosmetic Repairs (Re-grout, Epoxy Grout, Silicone Repairs)</option>
                                    <option>Internal/External Caulking</option>
                                    <option>Bathroom Renovations</option>
                                    <option>Tiling - New & Repairs</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 py-2">
                            <button type="submit" class="btn btn-block btn-primary form-control">
                                Let's fix it!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6 form-right">
                <div class="fw-700 h5">PERMASEAL offers a <span class="fw-900">10-Year Warranty</span> on all products and services on construction service & shower repairs.</div>
                <ul class="form-list">
                    <li>Silicone Repairs</li>
                    <li>Pool Seals</li>
                    <li>Kitchen Resealing</li>
                    <li>Tiling - Repairs &amp; New Install</li>
                    <li>Caulking Internal / External</li>
                    <li>Cosmetic Repairs</li>
                    <li>Epoxy Grout</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>