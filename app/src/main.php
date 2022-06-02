<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="bathroom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <?= renderImg("bathroom.png", "lib") ?>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row no-gutters">
                    <div class="col-6"><?= renderImg("about.png", "lib", "w-100") ?></div>
                    <div class="col-lg-6 px-6">
                        <div class="text-white h2 fw-800 pb-4">
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
<?php include __DIR__ . '/footer.php'; ?>