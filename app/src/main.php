<header>
    <div class="header-top-bar">
        <div class="container">
            <div class="row justify-content-center align-items-center mobile-bg">
                <div class="col-12 col-md-auto">
                    <a href="./">
                        <?= renderImg('logo.png', 'logo') ?>
                    </a>
                </div>
                <div class="col">
                    <div class="row align-items-center justify-content-center justify-content-lg-end justify-content-xl-between py-4">
                        <div class="col-auto fw-700 h12 text-white line-height-1 d-lg-none d-xl-block">Sydney’s Best
                            & Most Trusted
                            Removalists
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="row justify-content-center">
                                <div class="col-auto px-1 pb-md-2 pt-md-3 py-lg-0">
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-block text-white py-3 px-md-4 h14 fw-700 line-height-1 d-flex align-items-center gap-2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.1673 11.021L10.4503 9.814C10.168 9.68775 9.85184 9.65852 9.55117 9.73088C9.25051 9.80325 8.98226 9.97313 8.78831 10.214L8.00531 11.193C6.72161 10.3693 5.62886 9.2806 4.80031 8L5.77931 7.217C6.01996 7.02311 6.1897 6.75504 6.26205 6.45459C6.33441 6.15414 6.30531 5.83819 6.17931 5.556L4.98131 2.832C4.84669 2.52868 4.6087 2.28304 4.30979 2.1389C4.01088 1.99475 3.67048 1.96148 3.34931 2.045L1.04931 2.645C0.715633 2.73134 0.425531 2.93773 0.234557 3.22465C0.0435838 3.51157 -0.0348376 3.85886 0.0143105 4.2C0.442756 7.17477 1.82316 9.93077 3.94889 12.0554C6.07462 14.1801 8.83132 15.5591 11.8063 15.986C12.1473 16.0343 12.494 15.9552 12.7803 15.7639C13.0667 15.5726 13.2724 15.2825 13.3583 14.949L13.9583 12.649C14.0418 12.3279 14.008 11.9876 13.863 11.6892C13.718 11.3908 13.4713 11.1538 13.1673 11.021Z" fill="#F7952A" />
                                            <path d="M16.0003 8H14.0003C13.9987 6.40919 13.3661 4.88399 12.2412 3.75911C11.1163 2.63424 9.59112 2.00159 8.00031 2V0C10.1213 0.00238211 12.1548 0.846002 13.6545 2.34578C15.1543 3.84555 15.9979 5.879 16.0003 8Z" fill="#F7952A" />
                                            <path d="M12.0003 8H10.0003C10.0003 7.46957 9.7896 6.96086 9.41452 6.58579C9.03945 6.21071 8.53074 6 8.00031 6V4C9.06118 4 10.0786 4.42143 10.8287 5.17157C11.5789 5.92172 12.0003 6.93913 12.0003 8Z" fill="#F7952A" />
                                        </svg>
                                        <?= $phone_number ?>
                                    </a>
                                </div>
                                <div class="col-12 col-md col-lg-auto px-1 pb-2 pt-md-3 py-lg-0">
                                    <a href="https://www.jbremovals.sydney/free-moving-calculator/" class="btn btn-block btn-secondary rounded-2 text-white py-2 py-md-3 px-4 h14 fw-700 line-height-1">
                                        Free Moving Calculator
                                    </a>
                                </div>
                                <div class="col-6 col-lg-auto px-1">
                                    <a href="#form" class="btn btn-block btn-primary rounded-2 text-white py-2 py-md-3 px-md-4 h14 fw-700 line-height-1">
                                        Free Quote
                                    </a>
                                </div>
                                <div class="col-6 col-lg-auto px-1">
                                    <a href="https://www.jbremovals.sydney/book-us/" class="btn btn-block btn-primary text-white rounded-2 py-2 py-md-3 px-md-4 h14 fw-700 line-height-1">
                                        Book Online
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-0 justify-content-lg-end align-items-center bottom-nav-wrapper d-none d-lg-flex">
                        <div class="col-12 col-md-auto nav-seperator">
                            <a href="https://www.jbremovals.sydney/about-us/" class="btn btn-block text-white header-bottom-navigation h14 fw-600 line-height-1">
                                About Us
                            </a>
                        </div>
                        <div class="col-auto">
                            <div class="nav-separator"></div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="dropdown">
                                <a href="#" id="service-dropdown" class="dropdown-toggle btn btn-block text-white header-bottom-navigation h14 fw-600 line-height-1 gap-3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Services <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12H14M1 1H14M1 6.5H14" stroke="#F7952A" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="https://www.jbremovals.sydney/services/carpet-cleaning/">Carpet
                                            Cleaning</a></li>
                                    <li><a class="dropdown-item" href="https://www.jbremovals.sydney/services/end-of-lease-cleaning/">End
                                            of Lease Cleaning</a></li>
                                    <li><a class="dropdown-item" href="https://www.jbremovals.sydney/services/furniture-removals/">Furniture
                                            Removalist Sydney Wide</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="nav-separator"></div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="https://www.jbremovals.sydney/truck-range/" class="btn btn-block text-white header-bottom-navigation h14 fw-600 line-height-1">
                                Truck Range
                            </a>
                        </div>
                        <div class="col-auto">
                            <div class="nav-separator"></div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="https://www.jbremovals.sydney/packing-unpacking/" class="btn btn-block text-white header-bottom-navigation h14 fw-600 line-height-1">
                                Packing &amp; Unpacking
                            </a>
                        </div>
                        <div class="col-auto">
                            <div class="nav-separator"></div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="https://www.jbremovals.sydney/box-shop/" class="btn btn-block text-white header-bottom-navigation h14 fw-600 line-height-1">
                                Box Shop
                            </a>
                        </div>
                        <div class="col-auto">
                            <div class="nav-separator"></div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="https://www.jbremovals.sydney/contact-us/" class="btn btn-block text-white header-bottom-navigation pr-0 h14 fw-600 line-height-1">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-lg-none" aria-label="Third navbar example">
        <div class="container-fluid">
            <div></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://www.jbremovals.sydney/about-us/">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="https://www.jbremovals.sydney/services/carpet-cleaning/">Carpet
                                    Cleaning</a></li>
                            <li><a class="dropdown-item" href="https://www.jbremovals.sydney/services/end-of-lease-cleaning/">End of
                                    Lease Cleaning</a></li>
                            <li><a class="dropdown-item" href="https://www.jbremovals.sydney/services/furniture-removals/">Furniture
                                    Removalist Sydney Wide</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.jbremovals.sydney/truck-range/">Truck Range</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.jbremovals.sydney/packing-unpacking/">Packing &amp;
                            Unpacking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.jbremovals.sydney/box-shop/">Box Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.jbremovals.sydney/contact-us/">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="banner pt-5 py-lg-5 py-xl-0">
    <div class="container-fluid px-xl-0">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-6">
                <div class="row justify-content-end">
                    <div class="col-xl-11 text-white">
                        <div class="d-flex align-items-center">
                            <?= renderImg('stars.png', 'icons') ?>
                            <div class="fs-20 fw-700 ps-4">Over 1,248 Aussies love Easy Box™</div>
                        </div>
                        <div class="text-uppercase fs-64 fw-800 lh-1 py-3">Move <span class="fw-300">anywhere anytime</span> with Easy Box™</div>
                        <div class="fs-24 font-dmsans fw-500">Mobile Storage Solution in Sydney and the Central Coast<br /> JB Removals EasyBox.</div>
                        <div class="row py-5">
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn bg-white text-primary rounded-0 fw-500 fs-26 px-3 px-md-4 py-3 font-dmsans gap-2">
                                    <svg width="27" height="29" viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.7668 8.94022L22.4668 10.2402C24.8068 12.5802 24.8068 16.2202 22.4668 18.6902L23.7668 19.9902C27.0168 17.0002 27.0168 12.0602 23.7668 8.94022ZM21.0368 11.6702L19.7368 12.9702C20.3868 13.8802 20.3868 15.0502 19.7368 15.9602L21.0368 17.2602C22.5968 15.7002 22.5968 13.3602 21.0368 11.6702ZM15.8368 0.230225H2.83682C1.40682 0.230225 0.236816 1.40022 0.236816 2.83022V26.2302C0.236816 27.6602 1.40682 28.8302 2.83682 28.8302H15.8368C17.2668 28.8302 18.4368 27.6602 18.4368 26.2302V2.83022C18.4368 1.40022 17.2668 0.230225 15.8368 0.230225ZM15.8368 24.9302H2.83682V4.13022H15.8368V24.9302Z" fill="#EF6010" />
                                    </svg>

                                    Call Now
                                </a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-black text-white rounded-0 fw-500 fs-26 px-3 px-md-4 py-3 font-dmsans gap-2">
                                    Get a live quote
                                </a>
                            </div>
                        </div>

                        <div class="banner_slider_step mt-5">
                            <div><?= renderImg('slider-step-1.png', 'lib') ?></div>
                            <div><?= renderImg('slider-step-2.png', 'lib') ?></div>
                            <div><?= renderImg('slider-step-3.png', 'lib') ?></div>
                            <div><?= renderImg('slider-step-4.png', 'lib') ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner_slider">
                    <div><?= renderImg('slide-1.png', 'lib') ?></div>
                    <div><?= renderImg('slide-2.png', 'lib') ?></div>
                    <div><?= renderImg('slide-3.png', 'lib') ?></div>
                    <div><?= renderImg('slide-4.png', 'lib') ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ourSteps py-6 py-md-8">
    <div class="container">
        <div class="row gy-5">
            <div class="col-md-6 col-xl-3">
                <div class="step-card d-flex flex-column align-items-center text-center">
                    <?= renderImg('step-1.png', 'lib') ?>
                    <div class="bg-primary d-inline-flex text-white rounded-7 fs-36 lh-1 px-4 py-1">Step 1</div>
                    <div class="fs-36 text-black fw-800">We Pack</div>
                    <div class="fs-18 text-black font-dmsans pt-4">
                        Our highly experienced team of professional removalists will utilise every inch of the Easy Box™ efficiently and carefully.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="step-card d-flex flex-column align-items-center text-center">
                    <?= renderImg('step-2.png', 'lib') ?>
                    <div class="bg-primary d-inline-flex text-white rounded-7 fs-36 lh-1 px-4 py-1">Step 2</div>
                    <div class="fs-36 text-black fw-800">We Move</div>
                    <div class="fs-18 text-black font-dmsans pt-4">
                        Using our huge fleet of forklifts and trucks, we'll do all the heavy lifting for you.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="step-card d-flex flex-column align-items-center text-center">
                    <?= renderImg('step-3.png', 'lib') ?>
                    <div class="bg-primary d-inline-flex text-white rounded-7 fs-36 lh-1 px-4 py-1">Step 3</div>
                    <div class="fs-36 text-black fw-800">We Store</div>
                    <div class="fs-18 text-black font-dmsans pt-4">
                        Our secure and managed facility is the perfect place to store your belongings, stress-free!
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="step-card d-flex flex-column align-items-center text-center">
                    <?= renderImg('step-4.png', 'lib') ?>
                    <div class="bg-primary d-inline-flex text-white rounded-7 fs-36 lh-1 px-4 py-1">Step 4</div>
                    <div class="fs-36 text-black fw-800">You Relax!</div>
                    <div class="fs-18 text-black font-dmsans pt-4">
                        Put your feet up with confidence, knowing you can trust the Easy Box™ end-to-end service.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ctas">
    <div class="container-fluid px-xl-0">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6">
                <div class="row justify-content-center py-6 py-xl-0">
                    <div class="col-lg-11 col-xl-8">
                        <div class="heading text-uppercase fw-800 text-primary fs-54 lh-1">mobile storage service JB Removals Easy Box™</div>
                        <div class="text-black fs-18 font-dmsans py-4 py-xl-5">
                            <span class="fw-700">Get a personalized and convenient storage solution that comes directly to your doorstep.</span> Experience the ultimate in mobile storage throughout Sydney and the Central Coast, with our cutting-edge 3D storage calculator, you can visualize your belongings being loaded in real time and accurately estimate the number of storage boxes required. This ensures you know the exact cost upfront, without any hidden surprises.
                        </div>
                        <a href="#" class="btn btn-primary text-white d-inline-flex px-3 px-md-5 rounded-0 py-3 py-md-4 fs-20 fw-700">Book your Easy Box™ Removal Now</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="ctas_Slider">
                    <div class="slide">
                        <?= renderImg('cta_1.jpg', 'lib', 'main_img') ?>
                        <div class="cta_card gap-2 d-none d-md-flex">
                            <div>
                                <svg width="100" height="78" viewBox="0 0 100 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62.7522 10.0112H7.25582C5.02702 10.0112 3.22021 11.818 3.22021 14.0468V69.5432C3.22021 71.772 5.02702 73.5788 7.25582 73.5788H62.7522C64.981 73.5788 66.7878 71.772 66.7878 69.5432V14.0468C66.7878 11.818 64.981 10.0112 62.7522 10.0112Z" stroke="#010101" stroke-width="6" />
                                    <path d="M21.4258 73.2325C21.6996 73.2256 21.9599 72.8494 22.1019 73.3912C22.1796 73.8226 22.1898 74.2368 22.1627 74.6406L22.1526 74.789V74.827L22.1492 74.8339L34.1558 77.4707L34.1659 77.4535L34.2132 77.381L34.4059 77.098L34.8014 76.5458C35.3321 75.8141 35.8425 75.0927 36.2211 74.1574L35.9034 73.8157C36.7788 72.5318 37.847 71.2721 38.8915 69.9778C40.4768 67.3514 42.2447 64.7836 44.0599 62.2261C43.8841 62.1847 43.7455 62.1226 43.8942 61.8396C44.6109 60.7351 45.892 59.4305 47.1663 58.0293L47.6598 57.3459C47.7308 57.1181 47.6531 56.9732 47.6057 56.88C48.1905 56.2449 48.7314 55.6996 49.235 55.2026C54.9037 47.7581 61.3667 39.889 68.3807 32.1476C69.7936 30.3909 71.1761 28.5617 72.7581 27.0983C75.0972 24.917 78.5349 22.7496 81.0565 20.9687C79.7518 19.9402 85.6638 15.0186 83.5647 14.5043C85.3562 13.3826 88.1111 11.8088 88.0232 11.3256C87.7663 9.87952 88.4119 7.70517 93.1409 4.22276C95.098 3.05275 98.4648 2.05532 99.0698 1.45823C100.03 0.519465 96.0377 1.86894 96.991 0.930176C81.3574 7.7811 68.2995 18.0661 56.151 29.8111C54.4338 32.0337 46.666 39.5404 38.9557 48.4069C35.1056 52.8212 31.384 57.6703 28.4736 62.1605C27.01 64.397 25.766 66.5541 24.7452 68.4558C24.2078 69.3842 23.8055 70.3161 23.3965 71.1099C23.1971 71.5102 23.0111 71.8899 22.8354 72.2419C28.068 73.3981 11.1161 69.6672 34.5648 74.8339V74.8235V74.8028V74.7614V74.682V74.5233L34.558 74.2161L34.5513 73.6363L34.487 72.5629C34.389 65.9398 30.806 58.3433 27.49 54.7712C25.9351 53.0697 24.2483 51.6167 22.6089 50.2085C23.0145 51.1404 23.3728 52.055 23.6534 52.8419C22.3655 51.0748 21.0574 49.3767 20.3408 48.9315C17.0417 45.8598 18.005 48.3379 18.2552 50.3742C18.6642 51.6443 17.0721 50.7918 17.907 52.6141C17.0586 51.5028 16.6259 50.954 15.7707 49.8323C15.3279 49.9945 18.6337 53.0697 17.4642 52.7694C16.7611 51.6063 15.6084 50.602 14.7532 49.4803C14.591 50.2534 17.6062 53.4355 17.0011 53.6357C16.44 53.1387 15.1791 50.0463 14.4389 50.2983C14.2901 50.35 15.1521 51.4752 15.578 52.0274C12.7116 48.8038 10.6631 47.2507 12.5088 50.9644C11.6603 49.8565 10.697 48.0721 9.72344 46.9194V46.9366C10.1494 47.5475 10.7984 48.6934 11.2107 49.2387C10.7071 48.5622 10.2068 47.8582 9.70654 47.1679L9.72682 47.7166C10.0378 48.2827 10.3623 48.8521 10.7578 49.3837L9.75725 48.0031C9.82147 48.4932 9.93302 49.0316 10.0851 49.6011C10.9403 51.5028 11.586 53.4424 12.2282 54.2742C17.4507 61.2114 21.1824 66.9614 21.4157 73.2359L21.4258 73.2325Z" fill="#EF6010" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="text-primary fs-32 font-dmsans fw-600">Convenience</div>
                                <div class="font-dmsans fs-18 text-black">Mobile storage brings the storage solution right to your doorstep, simplifying the entire process and saving time and effort.</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <?= renderImg('cta_2.jpg', 'lib', 'main_img') ?>
                        <div class="cta_card gap-2 d-none d-md-flex">
                            <div>
                                <svg width="100" height="78" viewBox="0 0 100 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62.7522 10.0112H7.25582C5.02702 10.0112 3.22021 11.818 3.22021 14.0468V69.5432C3.22021 71.772 5.02702 73.5788 7.25582 73.5788H62.7522C64.981 73.5788 66.7878 71.772 66.7878 69.5432V14.0468C66.7878 11.818 64.981 10.0112 62.7522 10.0112Z" stroke="#010101" stroke-width="6" />
                                    <path d="M21.4258 73.2325C21.6996 73.2256 21.9599 72.8494 22.1019 73.3912C22.1796 73.8226 22.1898 74.2368 22.1627 74.6406L22.1526 74.789V74.827L22.1492 74.8339L34.1558 77.4707L34.1659 77.4535L34.2132 77.381L34.4059 77.098L34.8014 76.5458C35.3321 75.8141 35.8425 75.0927 36.2211 74.1574L35.9034 73.8157C36.7788 72.5318 37.847 71.2721 38.8915 69.9778C40.4768 67.3514 42.2447 64.7836 44.0599 62.2261C43.8841 62.1847 43.7455 62.1226 43.8942 61.8396C44.6109 60.7351 45.892 59.4305 47.1663 58.0293L47.6598 57.3459C47.7308 57.1181 47.6531 56.9732 47.6057 56.88C48.1905 56.2449 48.7314 55.6996 49.235 55.2026C54.9037 47.7581 61.3667 39.889 68.3807 32.1476C69.7936 30.3909 71.1761 28.5617 72.7581 27.0983C75.0972 24.917 78.5349 22.7496 81.0565 20.9687C79.7518 19.9402 85.6638 15.0186 83.5647 14.5043C85.3562 13.3826 88.1111 11.8088 88.0232 11.3256C87.7663 9.87952 88.4119 7.70517 93.1409 4.22276C95.098 3.05275 98.4648 2.05532 99.0698 1.45823C100.03 0.519465 96.0377 1.86894 96.991 0.930176C81.3574 7.7811 68.2995 18.0661 56.151 29.8111C54.4338 32.0337 46.666 39.5404 38.9557 48.4069C35.1056 52.8212 31.384 57.6703 28.4736 62.1605C27.01 64.397 25.766 66.5541 24.7452 68.4558C24.2078 69.3842 23.8055 70.3161 23.3965 71.1099C23.1971 71.5102 23.0111 71.8899 22.8354 72.2419C28.068 73.3981 11.1161 69.6672 34.5648 74.8339V74.8235V74.8028V74.7614V74.682V74.5233L34.558 74.2161L34.5513 73.6363L34.487 72.5629C34.389 65.9398 30.806 58.3433 27.49 54.7712C25.9351 53.0697 24.2483 51.6167 22.6089 50.2085C23.0145 51.1404 23.3728 52.055 23.6534 52.8419C22.3655 51.0748 21.0574 49.3767 20.3408 48.9315C17.0417 45.8598 18.005 48.3379 18.2552 50.3742C18.6642 51.6443 17.0721 50.7918 17.907 52.6141C17.0586 51.5028 16.6259 50.954 15.7707 49.8323C15.3279 49.9945 18.6337 53.0697 17.4642 52.7694C16.7611 51.6063 15.6084 50.602 14.7532 49.4803C14.591 50.2534 17.6062 53.4355 17.0011 53.6357C16.44 53.1387 15.1791 50.0463 14.4389 50.2983C14.2901 50.35 15.1521 51.4752 15.578 52.0274C12.7116 48.8038 10.6631 47.2507 12.5088 50.9644C11.6603 49.8565 10.697 48.0721 9.72344 46.9194V46.9366C10.1494 47.5475 10.7984 48.6934 11.2107 49.2387C10.7071 48.5622 10.2068 47.8582 9.70654 47.1679L9.72682 47.7166C10.0378 48.2827 10.3623 48.8521 10.7578 49.3837L9.75725 48.0031C9.82147 48.4932 9.93302 49.0316 10.0851 49.6011C10.9403 51.5028 11.586 53.4424 12.2282 54.2742C17.4507 61.2114 21.1824 66.9614 21.4157 73.2359L21.4258 73.2325Z" fill="#EF6010" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="text-primary fs-32 font-dmsans fw-600">Accurate Estimation</div>
                                <div class="font-dmsans fs-18 text-black">Our 3D storage calculator allows you to visualize your belongings being loaded, helping you estimate the exact number of storage boxes needed and the associated costs.</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <?= renderImg('cta_3.jpg', 'lib', 'main_img') ?>
                        <div class="cta_card gap-2 d-none d-md-flex">
                            <div>
                                <svg width="100" height="78" viewBox="0 0 100 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62.7522 10.0112H7.25582C5.02702 10.0112 3.22021 11.818 3.22021 14.0468V69.5432C3.22021 71.772 5.02702 73.5788 7.25582 73.5788H62.7522C64.981 73.5788 66.7878 71.772 66.7878 69.5432V14.0468C66.7878 11.818 64.981 10.0112 62.7522 10.0112Z" stroke="#010101" stroke-width="6" />
                                    <path d="M21.4258 73.2325C21.6996 73.2256 21.9599 72.8494 22.1019 73.3912C22.1796 73.8226 22.1898 74.2368 22.1627 74.6406L22.1526 74.789V74.827L22.1492 74.8339L34.1558 77.4707L34.1659 77.4535L34.2132 77.381L34.4059 77.098L34.8014 76.5458C35.3321 75.8141 35.8425 75.0927 36.2211 74.1574L35.9034 73.8157C36.7788 72.5318 37.847 71.2721 38.8915 69.9778C40.4768 67.3514 42.2447 64.7836 44.0599 62.2261C43.8841 62.1847 43.7455 62.1226 43.8942 61.8396C44.6109 60.7351 45.892 59.4305 47.1663 58.0293L47.6598 57.3459C47.7308 57.1181 47.6531 56.9732 47.6057 56.88C48.1905 56.2449 48.7314 55.6996 49.235 55.2026C54.9037 47.7581 61.3667 39.889 68.3807 32.1476C69.7936 30.3909 71.1761 28.5617 72.7581 27.0983C75.0972 24.917 78.5349 22.7496 81.0565 20.9687C79.7518 19.9402 85.6638 15.0186 83.5647 14.5043C85.3562 13.3826 88.1111 11.8088 88.0232 11.3256C87.7663 9.87952 88.4119 7.70517 93.1409 4.22276C95.098 3.05275 98.4648 2.05532 99.0698 1.45823C100.03 0.519465 96.0377 1.86894 96.991 0.930176C81.3574 7.7811 68.2995 18.0661 56.151 29.8111C54.4338 32.0337 46.666 39.5404 38.9557 48.4069C35.1056 52.8212 31.384 57.6703 28.4736 62.1605C27.01 64.397 25.766 66.5541 24.7452 68.4558C24.2078 69.3842 23.8055 70.3161 23.3965 71.1099C23.1971 71.5102 23.0111 71.8899 22.8354 72.2419C28.068 73.3981 11.1161 69.6672 34.5648 74.8339V74.8235V74.8028V74.7614V74.682V74.5233L34.558 74.2161L34.5513 73.6363L34.487 72.5629C34.389 65.9398 30.806 58.3433 27.49 54.7712C25.9351 53.0697 24.2483 51.6167 22.6089 50.2085C23.0145 51.1404 23.3728 52.055 23.6534 52.8419C22.3655 51.0748 21.0574 49.3767 20.3408 48.9315C17.0417 45.8598 18.005 48.3379 18.2552 50.3742C18.6642 51.6443 17.0721 50.7918 17.907 52.6141C17.0586 51.5028 16.6259 50.954 15.7707 49.8323C15.3279 49.9945 18.6337 53.0697 17.4642 52.7694C16.7611 51.6063 15.6084 50.602 14.7532 49.4803C14.591 50.2534 17.6062 53.4355 17.0011 53.6357C16.44 53.1387 15.1791 50.0463 14.4389 50.2983C14.2901 50.35 15.1521 51.4752 15.578 52.0274C12.7116 48.8038 10.6631 47.2507 12.5088 50.9644C11.6603 49.8565 10.697 48.0721 9.72344 46.9194V46.9366C10.1494 47.5475 10.7984 48.6934 11.2107 49.2387C10.7071 48.5622 10.2068 47.8582 9.70654 47.1679L9.72682 47.7166C10.0378 48.2827 10.3623 48.8521 10.7578 49.3837L9.75725 48.0031C9.82147 48.4932 9.93302 49.0316 10.0851 49.6011C10.9403 51.5028 11.586 53.4424 12.2282 54.2742C17.4507 61.2114 21.1824 66.9614 21.4157 73.2359L21.4258 73.2325Z" fill="#EF6010" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="text-primary fs-32 font-dmsans fw-600">Expert Handling</div>
                                <div class="font-dmsans fs-18 text-black">Our professional team ensures proper wrapping and loading of your valuables, offering you peace of mind.</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <?= renderImg('cta_4.jpg', 'lib', 'main_img') ?>
                        <div class="cta_card gap-2 d-none d-md-flex">
                            <div>
                                <svg width="100" height="78" viewBox="0 0 100 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62.7522 10.0112H7.25582C5.02702 10.0112 3.22021 11.818 3.22021 14.0468V69.5432C3.22021 71.772 5.02702 73.5788 7.25582 73.5788H62.7522C64.981 73.5788 66.7878 71.772 66.7878 69.5432V14.0468C66.7878 11.818 64.981 10.0112 62.7522 10.0112Z" stroke="#010101" stroke-width="6" />
                                    <path d="M21.4258 73.2325C21.6996 73.2256 21.9599 72.8494 22.1019 73.3912C22.1796 73.8226 22.1898 74.2368 22.1627 74.6406L22.1526 74.789V74.827L22.1492 74.8339L34.1558 77.4707L34.1659 77.4535L34.2132 77.381L34.4059 77.098L34.8014 76.5458C35.3321 75.8141 35.8425 75.0927 36.2211 74.1574L35.9034 73.8157C36.7788 72.5318 37.847 71.2721 38.8915 69.9778C40.4768 67.3514 42.2447 64.7836 44.0599 62.2261C43.8841 62.1847 43.7455 62.1226 43.8942 61.8396C44.6109 60.7351 45.892 59.4305 47.1663 58.0293L47.6598 57.3459C47.7308 57.1181 47.6531 56.9732 47.6057 56.88C48.1905 56.2449 48.7314 55.6996 49.235 55.2026C54.9037 47.7581 61.3667 39.889 68.3807 32.1476C69.7936 30.3909 71.1761 28.5617 72.7581 27.0983C75.0972 24.917 78.5349 22.7496 81.0565 20.9687C79.7518 19.9402 85.6638 15.0186 83.5647 14.5043C85.3562 13.3826 88.1111 11.8088 88.0232 11.3256C87.7663 9.87952 88.4119 7.70517 93.1409 4.22276C95.098 3.05275 98.4648 2.05532 99.0698 1.45823C100.03 0.519465 96.0377 1.86894 96.991 0.930176C81.3574 7.7811 68.2995 18.0661 56.151 29.8111C54.4338 32.0337 46.666 39.5404 38.9557 48.4069C35.1056 52.8212 31.384 57.6703 28.4736 62.1605C27.01 64.397 25.766 66.5541 24.7452 68.4558C24.2078 69.3842 23.8055 70.3161 23.3965 71.1099C23.1971 71.5102 23.0111 71.8899 22.8354 72.2419C28.068 73.3981 11.1161 69.6672 34.5648 74.8339V74.8235V74.8028V74.7614V74.682V74.5233L34.558 74.2161L34.5513 73.6363L34.487 72.5629C34.389 65.9398 30.806 58.3433 27.49 54.7712C25.9351 53.0697 24.2483 51.6167 22.6089 50.2085C23.0145 51.1404 23.3728 52.055 23.6534 52.8419C22.3655 51.0748 21.0574 49.3767 20.3408 48.9315C17.0417 45.8598 18.005 48.3379 18.2552 50.3742C18.6642 51.6443 17.0721 50.7918 17.907 52.6141C17.0586 51.5028 16.6259 50.954 15.7707 49.8323C15.3279 49.9945 18.6337 53.0697 17.4642 52.7694C16.7611 51.6063 15.6084 50.602 14.7532 49.4803C14.591 50.2534 17.6062 53.4355 17.0011 53.6357C16.44 53.1387 15.1791 50.0463 14.4389 50.2983C14.2901 50.35 15.1521 51.4752 15.578 52.0274C12.7116 48.8038 10.6631 47.2507 12.5088 50.9644C11.6603 49.8565 10.697 48.0721 9.72344 46.9194V46.9366C10.1494 47.5475 10.7984 48.6934 11.2107 49.2387C10.7071 48.5622 10.2068 47.8582 9.70654 47.1679L9.72682 47.7166C10.0378 48.2827 10.3623 48.8521 10.7578 49.3837L9.75725 48.0031C9.82147 48.4932 9.93302 49.0316 10.0851 49.6011C10.9403 51.5028 11.586 53.4424 12.2282 54.2742C17.4507 61.2114 21.1824 66.9614 21.4157 73.2359L21.4258 73.2325Z" fill="#EF6010" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="text-primary fs-32 font-dmsans fw-600">Secure Facilities</div>
                                <div class="font-dmsans fs-18 text-black">Storage facilities with 24/7 CCTV surveillance and protected warehouses guarantee the safety of your belongings.</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <?= renderImg('cta_5.jpg', 'lib', 'main_img') ?>
                        <div class="cta_card gap-2 d-none d-md-flex">
                            <div>
                                <svg width="100" height="78" viewBox="0 0 100 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62.7522 10.0112H7.25582C5.02702 10.0112 3.22021 11.818 3.22021 14.0468V69.5432C3.22021 71.772 5.02702 73.5788 7.25582 73.5788H62.7522C64.981 73.5788 66.7878 71.772 66.7878 69.5432V14.0468C66.7878 11.818 64.981 10.0112 62.7522 10.0112Z" stroke="#010101" stroke-width="6" />
                                    <path d="M21.4258 73.2325C21.6996 73.2256 21.9599 72.8494 22.1019 73.3912C22.1796 73.8226 22.1898 74.2368 22.1627 74.6406L22.1526 74.789V74.827L22.1492 74.8339L34.1558 77.4707L34.1659 77.4535L34.2132 77.381L34.4059 77.098L34.8014 76.5458C35.3321 75.8141 35.8425 75.0927 36.2211 74.1574L35.9034 73.8157C36.7788 72.5318 37.847 71.2721 38.8915 69.9778C40.4768 67.3514 42.2447 64.7836 44.0599 62.2261C43.8841 62.1847 43.7455 62.1226 43.8942 61.8396C44.6109 60.7351 45.892 59.4305 47.1663 58.0293L47.6598 57.3459C47.7308 57.1181 47.6531 56.9732 47.6057 56.88C48.1905 56.2449 48.7314 55.6996 49.235 55.2026C54.9037 47.7581 61.3667 39.889 68.3807 32.1476C69.7936 30.3909 71.1761 28.5617 72.7581 27.0983C75.0972 24.917 78.5349 22.7496 81.0565 20.9687C79.7518 19.9402 85.6638 15.0186 83.5647 14.5043C85.3562 13.3826 88.1111 11.8088 88.0232 11.3256C87.7663 9.87952 88.4119 7.70517 93.1409 4.22276C95.098 3.05275 98.4648 2.05532 99.0698 1.45823C100.03 0.519465 96.0377 1.86894 96.991 0.930176C81.3574 7.7811 68.2995 18.0661 56.151 29.8111C54.4338 32.0337 46.666 39.5404 38.9557 48.4069C35.1056 52.8212 31.384 57.6703 28.4736 62.1605C27.01 64.397 25.766 66.5541 24.7452 68.4558C24.2078 69.3842 23.8055 70.3161 23.3965 71.1099C23.1971 71.5102 23.0111 71.8899 22.8354 72.2419C28.068 73.3981 11.1161 69.6672 34.5648 74.8339V74.8235V74.8028V74.7614V74.682V74.5233L34.558 74.2161L34.5513 73.6363L34.487 72.5629C34.389 65.9398 30.806 58.3433 27.49 54.7712C25.9351 53.0697 24.2483 51.6167 22.6089 50.2085C23.0145 51.1404 23.3728 52.055 23.6534 52.8419C22.3655 51.0748 21.0574 49.3767 20.3408 48.9315C17.0417 45.8598 18.005 48.3379 18.2552 50.3742C18.6642 51.6443 17.0721 50.7918 17.907 52.6141C17.0586 51.5028 16.6259 50.954 15.7707 49.8323C15.3279 49.9945 18.6337 53.0697 17.4642 52.7694C16.7611 51.6063 15.6084 50.602 14.7532 49.4803C14.591 50.2534 17.6062 53.4355 17.0011 53.6357C16.44 53.1387 15.1791 50.0463 14.4389 50.2983C14.2901 50.35 15.1521 51.4752 15.578 52.0274C12.7116 48.8038 10.6631 47.2507 12.5088 50.9644C11.6603 49.8565 10.697 48.0721 9.72344 46.9194V46.9366C10.1494 47.5475 10.7984 48.6934 11.2107 49.2387C10.7071 48.5622 10.2068 47.8582 9.70654 47.1679L9.72682 47.7166C10.0378 48.2827 10.3623 48.8521 10.7578 49.3837L9.75725 48.0031C9.82147 48.4932 9.93302 49.0316 10.0851 49.6011C10.9403 51.5028 11.586 53.4424 12.2282 54.2742C17.4507 61.2114 21.1824 66.9614 21.4157 73.2359L21.4258 73.2325Z" fill="#EF6010" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="text-primary fs-32 font-dmsans fw-600">Transparency</div>
                                <div class="font-dmsans fs-18 text-black">Receive a link to access photographs of your stored items, allowing you to keep track of your possessions with ease.</div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <?= renderImg('cta_6.jpg', 'lib', 'main_img') ?>
                        <div class="cta_card gap-2 d-none d-md-flex">
                            <div>
                                <svg width="100" height="78" viewBox="0 0 100 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M62.7522 10.0112H7.25582C5.02702 10.0112 3.22021 11.818 3.22021 14.0468V69.5432C3.22021 71.772 5.02702 73.5788 7.25582 73.5788H62.7522C64.981 73.5788 66.7878 71.772 66.7878 69.5432V14.0468C66.7878 11.818 64.981 10.0112 62.7522 10.0112Z" stroke="#010101" stroke-width="6" />
                                    <path d="M21.4258 73.2325C21.6996 73.2256 21.9599 72.8494 22.1019 73.3912C22.1796 73.8226 22.1898 74.2368 22.1627 74.6406L22.1526 74.789V74.827L22.1492 74.8339L34.1558 77.4707L34.1659 77.4535L34.2132 77.381L34.4059 77.098L34.8014 76.5458C35.3321 75.8141 35.8425 75.0927 36.2211 74.1574L35.9034 73.8157C36.7788 72.5318 37.847 71.2721 38.8915 69.9778C40.4768 67.3514 42.2447 64.7836 44.0599 62.2261C43.8841 62.1847 43.7455 62.1226 43.8942 61.8396C44.6109 60.7351 45.892 59.4305 47.1663 58.0293L47.6598 57.3459C47.7308 57.1181 47.6531 56.9732 47.6057 56.88C48.1905 56.2449 48.7314 55.6996 49.235 55.2026C54.9037 47.7581 61.3667 39.889 68.3807 32.1476C69.7936 30.3909 71.1761 28.5617 72.7581 27.0983C75.0972 24.917 78.5349 22.7496 81.0565 20.9687C79.7518 19.9402 85.6638 15.0186 83.5647 14.5043C85.3562 13.3826 88.1111 11.8088 88.0232 11.3256C87.7663 9.87952 88.4119 7.70517 93.1409 4.22276C95.098 3.05275 98.4648 2.05532 99.0698 1.45823C100.03 0.519465 96.0377 1.86894 96.991 0.930176C81.3574 7.7811 68.2995 18.0661 56.151 29.8111C54.4338 32.0337 46.666 39.5404 38.9557 48.4069C35.1056 52.8212 31.384 57.6703 28.4736 62.1605C27.01 64.397 25.766 66.5541 24.7452 68.4558C24.2078 69.3842 23.8055 70.3161 23.3965 71.1099C23.1971 71.5102 23.0111 71.8899 22.8354 72.2419C28.068 73.3981 11.1161 69.6672 34.5648 74.8339V74.8235V74.8028V74.7614V74.682V74.5233L34.558 74.2161L34.5513 73.6363L34.487 72.5629C34.389 65.9398 30.806 58.3433 27.49 54.7712C25.9351 53.0697 24.2483 51.6167 22.6089 50.2085C23.0145 51.1404 23.3728 52.055 23.6534 52.8419C22.3655 51.0748 21.0574 49.3767 20.3408 48.9315C17.0417 45.8598 18.005 48.3379 18.2552 50.3742C18.6642 51.6443 17.0721 50.7918 17.907 52.6141C17.0586 51.5028 16.6259 50.954 15.7707 49.8323C15.3279 49.9945 18.6337 53.0697 17.4642 52.7694C16.7611 51.6063 15.6084 50.602 14.7532 49.4803C14.591 50.2534 17.6062 53.4355 17.0011 53.6357C16.44 53.1387 15.1791 50.0463 14.4389 50.2983C14.2901 50.35 15.1521 51.4752 15.578 52.0274C12.7116 48.8038 10.6631 47.2507 12.5088 50.9644C11.6603 49.8565 10.697 48.0721 9.72344 46.9194V46.9366C10.1494 47.5475 10.7984 48.6934 11.2107 49.2387C10.7071 48.5622 10.2068 47.8582 9.70654 47.1679L9.72682 47.7166C10.0378 48.2827 10.3623 48.8521 10.7578 49.3837L9.75725 48.0031C9.82147 48.4932 9.93302 49.0316 10.0851 49.6011C10.9403 51.5028 11.586 53.4424 12.2282 54.2742C17.4507 61.2114 21.1824 66.9614 21.4157 73.2359L21.4258 73.2325Z" fill="#EF6010" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="text-primary fs-32 font-dmsans fw-600">Comprehensive Coverage</div>
                                <div class="font-dmsans fs-18 text-black">Our mobile storage solutions cater to Sydney and the Central Coast, providing extensive service across the region.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why_us bg-black">
    <div class="container">
        <div class="text-primary text-center fs-64 fw-800 lh-1 pb-5"><span class="text-white">Why</span> Easy Box™?</div>
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="main_container">
                    <div class="row align-items-center gy-5">
                        <div class="col-lg-5">
                            <?= renderImg('why_us.png', 'lib') ?>
                        </div>
                        <div class="col-lg-7">
                            <div class="px-xl-7">
                                <table class="table table-borderless">
                                    <tr>
                                        <th></th>
                                        <th class="text-center"><?= renderImg('easybox_logo.png', 'logo') ?></th>
                                        <th class="text-center">
                                            <div class="fs-24 font-dmsans">The Rest</div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="fs-20 fw-600">Deliver to your door</td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fs-20 fw-600">Powered by Sydney's Best Removalist</td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                        <td class="text-center"><?= renderImg('cross.png', 'icons') ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fs-20 fw-600">Can move & load items over 2 tonnes</td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                        <td class="text-center"><?= renderImg('cross.png', 'icons') ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fs-20 fw-600">Will store oversized items</td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                        <td class="text-center"><?= renderImg('cross.png', 'icons') ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fs-20 fw-600">No double handling - load & move once</td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                        <td class="text-center"><?= renderImg('cross.png', 'icons') ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fs-20 fw-600">FREE extra blankets bubble wrap</td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                        <td class="text-center"><?= renderImg('cross.png', 'icons') ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fs-20 fw-600">Extra Removalists and Packing services</td>
                                        <td class="text-center">
                                            <svg width="47" height="37" viewBox="0 0 47 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.7337 4.26245H3.89369C2.85593 4.26245 2.01465 5.11036 2.01465 6.15631V32.2C2.01465 33.2459 2.85593 34.0938 3.89369 34.0938H29.7337C30.7715 34.0938 31.6127 33.2459 31.6127 32.2V6.15631C31.6127 5.11036 30.7715 4.26245 29.7337 4.26245Z" stroke="#010101" stroke-width="4" />
                                                <path d="M10.4264 33.4453C10.5533 33.4421 10.6738 33.2701 10.7396 33.5179C10.7756 33.7151 10.7803 33.9045 10.7678 34.0892L10.7631 34.157V34.1744L10.7615 34.1775L16.3235 35.3833L16.3282 35.3754L16.3501 35.3423L16.4394 35.2129L16.6226 34.9603C16.8684 34.6258 17.1049 34.2959 17.2803 33.8682L17.1331 33.712C17.5386 33.1249 18.0334 32.5488 18.5173 31.957C19.2517 30.756 20.0706 29.5818 20.9115 28.4123C20.8301 28.3934 20.7659 28.365 20.8348 28.2356C21.1667 27.7306 21.7602 27.134 22.3505 26.4932L22.5792 26.1807C22.612 26.0766 22.576 26.0103 22.5541 25.9677C22.825 25.6773 23.0755 25.4279 23.3089 25.2007C25.9348 21.7965 28.9288 18.1982 32.1779 14.6582C32.8325 13.8549 33.4729 13.0185 34.2057 12.3493C35.2893 11.3519 36.8818 10.3608 38.05 9.5464C37.4455 9.07609 40.1842 6.82556 39.2118 6.59041C40.0418 6.07749 41.3179 5.35782 41.2772 5.13687C41.1582 4.4756 41.4573 3.48133 43.648 1.88891C44.5546 1.3539 46.1142 0.897798 46.3945 0.624767C46.8392 0.195494 44.9899 0.812574 45.4315 0.383301C38.1893 3.51605 32.1404 8.21912 26.5126 13.5898C25.7172 14.6061 22.1188 18.0388 18.547 22.0932C16.7635 24.1117 15.0395 26.3291 13.6913 28.3824C13.0133 29.405 12.437 30.3914 11.9641 31.261C11.7151 31.6855 11.5288 32.1117 11.3393 32.4747C11.2469 32.6577 11.1608 32.8313 11.0794 32.9923C13.5034 33.521 5.65053 31.815 16.513 34.1775V34.1728V34.1633V34.1444V34.1081V34.0355L16.5098 33.895L16.5067 33.6299L16.477 33.1391C16.4315 30.1105 14.7717 26.6369 13.2356 25.0034C12.5153 24.2253 11.7339 23.5609 10.9745 22.917C11.1624 23.3431 11.3284 23.7614 11.4583 24.1212C10.8617 23.3131 10.2558 22.5367 9.92379 22.3331C8.3955 20.9285 8.84177 22.0616 8.95765 22.9928C9.14712 23.5735 8.40959 23.1837 8.79636 24.017C8.40333 23.5088 8.2029 23.2579 7.80673 22.745C7.6016 22.8192 9.13302 24.2253 8.59123 24.088C8.26553 23.5562 7.73157 23.0969 7.3354 22.584C7.26024 22.9375 8.657 24.3926 8.37671 24.4842C8.11677 24.2569 7.5327 22.8428 7.18978 22.958C7.12088 22.9817 7.52018 23.4962 7.71748 23.7487C6.38962 22.2747 5.4407 21.5645 6.29567 23.2626C5.90263 22.756 5.45636 21.9401 5.00539 21.413V21.4209C5.20269 21.7002 5.50333 22.2242 5.69437 22.4735C5.46106 22.1642 5.22931 21.8422 4.99756 21.5266L5.00695 21.7775C5.15101 22.0364 5.30134 22.2968 5.48454 22.5398L5.02105 21.9085C5.0508 22.1326 5.10247 22.3788 5.17294 22.6392C5.5691 23.5088 5.86818 24.3958 6.1657 24.7761C8.58497 27.9483 10.3137 30.5776 10.4217 33.4468L10.4264 33.4453Z" fill="#EF6010" />
                                            </svg>
                                        </td>
                                        <td class="text-center"><?= renderImg('cross.png', 'icons') ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-auto">
                <a href="tel:<?= $phone_number ?>" class="btn bg-white text-primary rounded-0 fw-500 fs-26 p-3 p-md-4 font-dmsans gap-2">
                    <svg width="27" height="29" viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.7668 8.94022L22.4668 10.2402C24.8068 12.5802 24.8068 16.2202 22.4668 18.6902L23.7668 19.9902C27.0168 17.0002 27.0168 12.0602 23.7668 8.94022ZM21.0368 11.6702L19.7368 12.9702C20.3868 13.8802 20.3868 15.0502 19.7368 15.9602L21.0368 17.2602C22.5968 15.7002 22.5968 13.3602 21.0368 11.6702ZM15.8368 0.230225H2.83682C1.40682 0.230225 0.236816 1.40022 0.236816 2.83022V26.2302C0.236816 27.6602 1.40682 28.8302 2.83682 28.8302H15.8368C17.2668 28.8302 18.4368 27.6602 18.4368 26.2302V2.83022C18.4368 1.40022 17.2668 0.230225 15.8368 0.230225ZM15.8368 24.9302H2.83682V4.13022H15.8368V24.9302Z" fill="#EF6010" />
                    </svg>

                    Call Now
                </a>
            </div>
            <div class="col-auto">
                <a href="" class="btn bg-primary text-white rounded-0 fw-500 fs-26 p-3 p-md-4 font-dmsans gap-2">
                    Get a live quote
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mobile_storage_service">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-5">
                <div class="lh-1 fs-54 fw-700 text-white">
                    <div class="text-white">Mobile Storage Service</div>
                    <div class="text-primary">JB Removals Easy Box™</div>
                </div>

                <div class="text-white py-5 pt-xl-8 fs-18">
                    Get a personalized and convenient storage solution that comes directly to your doorstep. Experience the ultimate in mobile storage throughout Sydney and the Central Coast, with our cutting-edge 3D storage calculator, you can visualize your belongings being loaded in real time and accurately estimate the number of storage boxes required. This ensures you know the exact cost upfront, without any hidden surprises.
                </div>

                <a href="#" class="btn btn-black text-white d-inline-flex px-3 px-md-5 rounded-0 py-2 py-md-4 fs-20 fw-700">Book your Easy Box™ Removal Now</a>
            </div>
        </div>
    </div>
</section>

<section class="specification">
    <div class="container">
        <div class="row gy-5">
            <div class="col-xl-5">
                <div class="spec-card">
                    <div class="pe-3 pe-md-5">
                        <div class="fs-32 text-primary fw-600">The Temp Store</div>
                        <div class="description text-black fs-18 fw-500 font-dmsans">
                            From just 1 week or to 3 Months. The Temp Store package is perfect for quick moves or temporary storage. We'll help you move in and out of your new place, or hold your things while you renovate! Fixed Price - Save up to 10%
                        </div>
                    </div>
                    <?= renderImg('temp.png', 'lib') ?>
                </div>
                <div class="spec-card">
                    <div class="pe-3 pe-md-5">
                        <div class="fs-32 text-primary fw-600">The Secure Store</div>
                        <div class="description text-black fs-18 fw-500 font-dmsans">
                            The middle range! With our secure facilities this package is perfect for 3 - 6 Months. With 1 bonus month FREE. Store your belongings with confidence and save money!
                        </div>
                    </div>
                    <?= renderImg('secure.png', 'lib') ?>
                </div>
                <div class="spec-card">
                    <div class="pe-3 pe-md-5">
                        <div class="fs-32 text-primary fw-600">The Long Term Store</div>
                        <div class="description text-black fs-18 fw-500 font-dmsans">
                            The smart saver package! This 6 - 12 month storage plan is PERFECT for the home builder or the space saver. With a bonus 2.5 Months FREE this gives you flexible options to store your goods while you make other plans.
                        </div>
                    </div>
                    <?= renderImg('long-term.png', 'lib') ?>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="text-black text-uppercase text-center fs-48 fw-800 pb-5"><span class="text-primary">Easy Box &trade;</span> size & specs</div>
                <?= renderImg('spec.png', 'lib', 'w-100') ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="calculator-wrapper">
            <div class="calc_slider">
                <div>
                    <div class="row align-items-center px-xl-8 gy-5">
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="videoWrapper">
                                <?= renderImg('iphoneFrame.png', 'lib', 'frame') ?>
                                <video class="video" autoplay muted>
                                    <source src="./assets/video/iphoneVideo.mp4" type="video/mp4">
                                    <source src="./assets/video/iphoneVideo.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="px-3 px-lg-5">
                                <div class="fs-20 fw-500 text-capitalize font-dmsans">ultimate solution for an efficient and well-organized move!</div>
                                <div class="text-uppercase text-black fw-800 fs-54 lh-1"><span class="text-primary">Easy-as</span> storage calculator</div>
                                <div class="py-4 py-md-6 fs-18 fw-500 font-dmsans">Cutting-edge device is designed to make your moving experience seamless and stress-free</div>

                                <a href="javascript:void(0)" id="goToForm" class="btn btn-primary d-inline-flex text-white rounded-0 fw-700 font-dmsans fs-20 px-3 px-md-5 py-2 py-md-4">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.4951 0.732422H2.74512C1.50762 0.732422 0.495117 1.74492 0.495117 2.98242V18.7324C0.495117 19.9699 1.50762 20.9824 2.74512 20.9824H18.4951C19.7326 20.9824 20.7451 19.9699 20.7451 18.7324V2.98242C20.7451 1.74492 19.7326 0.732422 18.4951 0.732422ZM18.4951 18.7324H2.74512V2.98242H18.4951V18.7324Z" fill="white" />
                                        <path d="M9.77637 6.04242H4.15137V7.72992H9.77637V6.04242Z" fill="white" />
                                        <path d="M17.3701 15.0762H11.7451V16.7637H17.3701V15.0762Z" fill="white" />
                                        <path d="M17.3701 12.2637H11.7451V13.9512H17.3701V12.2637Z" fill="white" />
                                        <path d="M6.12012 17.6074H7.80762V15.3574H10.0576V13.6699H7.80762V11.4199H6.12012V13.6699H3.87012V15.3574H6.12012V17.6074Z" fill="white" />
                                        <path d="M12.9714 9.67617L14.5576 8.08992L16.1439 9.67617L17.3364 8.48367L15.7501 6.88617L17.3364 5.29992L16.1439 4.10742L14.5576 5.69367L12.9714 4.10742L11.7789 5.29992L13.3651 6.88617L11.7789 8.48367L12.9714 9.67617Z" fill="white" />
                                    </svg>
                                    <span class="ps-3">Use smart moving calculator</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row align-items-center h-100 px-xl-8">
                        <div class="col-lg-6 text-black">
                            <div class="px-3 px-md-5 px-lg-4 px-xl-5">
                                <div class="fs-20 font-dmsans">Simplify Your Storage With Easy Box Storage Solutions</div>
                                <div class="fs-40 text-uppercase fw-800 lh-1 py-3 pb-md-6">Book Your Easy Box™ Storage Today and Free Up Your Space!</div>
                                <div class="fs-18 font-dmsans">Experience Instant Storage Solutions - Book Now and Declutter in Minutes!</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="./form.php" class="calculator_form px-3 px-md-5 px-lg-4 px-xl-5" method="POST">
                                <div class="row gy-3 gy-md-4">
                                    <div class="col-12">
                                        <input type="text" name="name" placeholder="Name" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <select name="easybox" class="form-control form-select">
                                            <option disabled selected>Choose Your Easy Box™</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="pickup_location" placeholder="Pick Up Location" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="dropoff_location" placeholder="Drop off Location" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" name="date" placeholder="Date" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="time" name="time" placeholder="Time" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary form-button">Book your Easy Box™ Now!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq">
    <div class="container">
        <div class="text-center fs-24 fw-500">Questions Answered</div>
        <div class="text-uppercase text-center fs-48 fw-800 text-black"><span class="text-primary">Easy Box &trade;</span> FAQ's</div>

        <?php $faqs = [
            [
                "question" => "Can I store my mother-in-law in a storage unit?",
                "answer" => "As great as that sounds, storing people or animals in storage units is strictly prohibited. Our expert customer service team can provide you with a complete list of items we CAN securely store. You might be surprised!",
            ],
            [
                "question" => "What sizes are available for mobile storage units?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
            [
                "question" => "What do I do if my items are too big for the EasyBox?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
            [
                "question" => "Can the mobile storage unit be kept on my property or does it need to be stored at a designated facility?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
            [
                "question" => "Are there any additional services, like packing assistance or moving supplies, available?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
            [
                "question" => "How soon can the mobile storage unit be booked?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
            [
                "question" => "What happens if I need to change the delivery or pick-up date after I've scheduled it?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
            [
                "question" => "Are the mobile storage units weatherproof and well-ventilated to protect my belongings from damage?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
            [
                "question" => "What do I do if my items are too big for the EasyBox?",
                "answer" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend eleifend ligula, ut volutpat libero interdum eu. Aliquam erat volutpat. Suspendisse iaculis turpis sed odio interdum, ut pretium nunc rhoncus. Maecenas ac condimentum nulla, eu dapibus ex. Phasellus vestibulum lorem in e",
            ],
        ];
        ?>

        <div class="row justify-content-center pt-4 pt-md-6">
            <div class="col-xl-9">
                <ul class="accordion">
                    <?php foreach ($faqs as $faq) { ?>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <div class="question"><?= $faq['question'] ?></div>
                                <div class="icon">+</div>
                            </div>
                            <div class="accordion-content">
                                <?= $faq['answer'] ?>
                            </div>
                        </div>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="about py-6">
    <?= renderImg('plant-pot.png', 'lib', 'pot') ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="px-xl-4">
                    <div class="heroImg"><?= renderImg('about.jpg', 'lib') ?></div>

                    <div class="text-white font-dmsans fw-700 fs-20 pt-5 pb-4">
                        Introducing JB Removal's latest addition to our range of services: EasyBox, our innovative mobile storage solution. With EasyBox, we provide you with the convenience of packing, moving, and storing your belongings all in one place, while you sit back and relax.
                    </div>
                    <div class="text-grey fs-18">Choose JB Removals for your next move or storage needs, and experience the highest level of professionalism and reliability in Sydney. Contact us today to book your EasyBox and let us take care of the rest.</div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="px-lg-4">
                    <div class="description text-black fs-40 ls-3 lh-1_16">
                        <span class="fw-600">“Easy Box™ is a more efficient, and cost-effective solution compared to traditional self-storage options.</span> Make the smart choice and trust JB Removals and Storage with your moving and storage needs.”
                    </div>
                    <div class="row gx-2 py-5">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn border-2 border-white text-white rounded-0 fw-500 font-dmsans fs-20 px-4">Call <?= $phone_number ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-black text-white rounded-0 fw-500 fs-20 px-4 font-dmsans">Get a live quote</a>
                        </div>
                    </div>

                    <div class="pt-5 pt-md-8 fs-36 fw-700 font-dmsans text-white">Here's how EasyBox works in just four simple steps:</div>
                    <div class="font-dmsans pt-5 pt-md-6 steps d-flex flex-column gap-4">
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">1</div>
                            </div>
                            <div class="col">
                                <div class="title fs-24 text-primary fw-700">We Pack</div>
                                <div class="step-description fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">2</div>
                            </div>
                            <div class="col">
                                <div class="title fs-24 text-primary fw-700">We Pack</div>
                                <div class="step-description fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">3</div>
                            </div>
                            <div class="col">
                                <div class="title fs-24 text-primary fw-700">We Pack</div>
                                <div class="step-description fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">4</div>
                            </div>
                            <div class="col">
                                <div class="title fs-24 text-primary fw-700">We Pack</div>
                                <div class="step-description fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta py-6 py-md-9 text-white">
    <div class="container">
        <div class="heading text-capitalize text-center fs-96 lh-1 fw-700">Most trusted removals &amp;<br /> Storage Sydney Wide</div>
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-lg-6">
                <div class="row gx-2">
                    <div class="col-4">
                        <a href="" class="btn btn-dark-grey text-white rounded-0 fw-700 fs-20">Book Online</a>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-dark-grey text-white rounded-0 fw-700 fs-20">Free Quote</a>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-primary text-white rounded-0 fw-700 fs-20">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services bg-dark-grey py-6">
    <div class="container">
        <div class="font-dmsans text-secondary fs-40 fw-700 text-center">Our Services</div>
        <div class="text-white fs-18 fw-700 text-center">On top of providing the most trusted removal services in Sydney, we also offer a wide range of services</div>

        <div class="row justify-content-center py-5 gy-3">
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <div class="service-img">
                    <?= renderImg('service_1.jpg', 'lib') ?>
                </div>
                <div class="service-card-text-wrapper">
                    Heavy Moving
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <div class="service-img">
                    <?= renderImg('service_2.jpg', 'lib') ?>
                </div>
                <div class="service-card-text-wrapper">
                    Packing
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <div class="service-img">
                    <?= renderImg('service_3.jpg', 'lib') ?>
                </div>
                <div class="service-card-text-wrapper">
                    Unpacking
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl">
                <div class="service-img">
                    <?= renderImg('service_4.jpg', 'lib') ?>
                </div>
                <div class="service-card-text-wrapper">
                    Box Shop
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl py-2 py-xl-0">
                <div class="service-img">
                    <?= renderImg('service_5.jpg', 'lib') ?>
                </div>
                <div class="service-card-text-wrapper">
                    Furniture Removals
                </div>
            </div>
        </div>

        <div class="font-dmsans text-secondary fs-40 fw-700 text-center">Contact JB Removals Now</div>
        <div class="text-white fs-18 text-center">
            Are you planning to relocate your house, office, branch or business to a new place? Let us be part of your removal process. JB Removals is a Northern Beach & Sydney based removalist company call us any time at <a href="tel:<?= $phone_number ?>" class="text-tertiary fw-700"><?= $phone_number ?></a>. You can fill our “Get a Quote form” & one our representative will contact you as soon as possible. You can also call us and discuss your relocation requirement and we will let you know the quote over the phone.
        </div>
    </div>
</section>

<section class="footerCta py-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <div class="row gy-4">
                    <div class="col-12 col-md-4 col-lg d-flex flex-column gap-2">
                        <div class="fs-18 fw-700 text-light pb-3">Quick Links</div>
                        <div><a href="./" class="text-grey fs-18 fw-500">Home</a></div>
                        <div><a href="https://www.jbremovals.sydney/about-us/" class="text-grey fs-18 fw-500">About
                                Us</a></div>
                        <div><a href="https://www.jbremovals.sydney/services/" class="text-grey fs-18 fw-500">Services</a></div>
                        <div><a href="https://www.jbremovals.sydney/truck-range/" class="text-grey fs-18 fw-500">Truck Range</a></div>
                        <div><a href="https://www.jbremovals.sydney/packing-unpacking/" class="text-grey fs-18 fw-500">Packing/Unpacking</a></div>
                        <div><a href="https://www.jbremovals.sydney/contact-us/" class="text-grey fs-18 fw-500">Contact Us</a></div>
                    </div>
                    <div class="col-12 col-md-4 col-lg d-flex flex-column gap-2">
                        <div class="fs-18 fw-700 text-light pb-3">Removalist Services</div>

                        <div>
                            <a href="https://www.jbremovals.sydney/removalist-sydney/" class="text-grey fs-18 fw-500">Home Removalist</a>
                        </div>

                        <div>
                            <a href="" class="text-grey fs-18 fw-500">Office Removalist</a>
                        </div>

                        <div class="d-flex align-items-start gap-2">
                            <a href="https://www.jbremovals.sydney/heavy-removal/" class="text-grey fs-18 fw-500">Heavy
                                Moves</a>
                            <div class="bg-secondary text-white rounded-pill fw-600 lh-1 fs-12 py-1 px-2">
                                EXPERTS</div>
                        </div>

                        <div><a href="https://www.jbremovals.sydney/packing-unpacking/" class="text-grey fs-18 fw-500">Packing/Unpacking</a></div>

                        <div class="d-flex align-items-start gap-2">
                            <a href="https://www.jbremovals.sydney/box-shop/" class="text-grey fs-18 fw-500">Box
                                Shop</a>
                            <div class="bg-secondary text-white rounded-pill fw-600 lh-1 fs-12 py-1 px-2">
                                New</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg d-flex flex-column gap-2">
                        <div class="fs-18 fw-700 text-light pb-3">Other Services</div>
                        <div><a href="https://www.jbremovals.sydney/services/carpet-cleaning/" class="text-grey fs-18 fw-500">Carpet Cleaning</a></div>
                        <div><a href="https://www.jbremovals.sydney/services/end-of-lease-cleaning/" class="text-grey fs-18 fw-500">End of Lease Cleaning</a></div>
                        <div><a href="https://www.jbremovals.sydney/services/furniture-removals/" class="text-grey fs-18 fw-500">Furniture Removalist Sydney Wide</a>
                        </div>
                        <div><a href="https://www.jbremovals.sydney/monthly-specials/" class="text-grey fs-18 fw-500">Monthly Specials</a></div>
                    </div>
                    <div class="col-12 col-md-4 col-lg d-flex flex-column gap-2">
                        <div class="fs-18 fw-700 text-light pb-2">Support</div>
                        <div><a href="https://www.jbremovals.sydney/contact-us/" class="text-grey fs-18 fw-500">Contact Us</a></div>
                        <div><a href="https://www.jbremovals.sydney/book-us/" class="text-grey fs-18 fw-500">Book
                                Now</a></div>
                        <div><a href="https://www.jbremovals.sydney/free-moving-calculator/" class="text-grey fs-18 fw-500">Free Moving Calculator</a></div>
                        <div><a href="" class="text-grey fs-18 fw-500">Privacy Policies</a></div>
                        <div><a href="https://www.jbremovals.sydney/terms-and-conditions/" class="text-grey fs-18 fw-500">Terms &amp; Conditions</a></div>
                    </div>
                    <div class="col-12 col-md-4 col-lg d-flex flex-column gap-2">
                        <div class="fs-18 fw-700 text-light pb-2">Social Media</div>
                        <div>
                            <a href="https://www.facebook.com/jbfurnitureremovals/" target="_blank" class="text-grey fs-18 fw-500">
                                <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect y="0.482422" width="26" height="26" fill="url(#pattern0)" />
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_44_10346" transform="scale(0.00195312)" />
                                        </pattern>
                                        <image id="image0_44_10346" width="512" height="512" xlink:href="data:image/png;base64,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" />
                                    </defs>
                                </svg>

                                <span class="ps-1">@jbfurnitureremovals</span>
                            </a>
                        </div>
                        <div>
                            <a href="" target="_blank" class="text-grey fs-18 fw-500">
                                <?= renderImg('youtube.png', 'icons', 'pe-2') ?>@jb removals sydney
                            </a>
                        </div>
                        <div>
                            <div class="fs-18 fw-700 text-light pt-3 pb-2">Payment Options</div>
                            <?= renderImg('payment-options.png', 'icons') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-light">
    <div class="container">
        <div class="row justify-content-center justify-content-md-between align-items-center py-3 py-lg-4">
            <div class="col-auto">
                <div class="row no-gutters mb-3 mb-md-0 text-grey justify-content-center h17">
                    <div class="col-auto">Copyright 2021</div>
                    <div class="col-auto footer-nav-li-before pl-2 pl-lg-4">
                        JB Removals</div>
                    <div class="col-auto footer-nav-li-before pl-2 pl-lg-4">All
                        Rights Reserved
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg('aiims.png', 'logo') ?>
                </a>
            </div>
        </div>
    </div>
</footer>