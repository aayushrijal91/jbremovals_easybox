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
                                    <a href="tel:<?= $phone_number ?>" class="btn btn-block text-white py-3 px-md-4 h14 fw-700 line-height-1 d-flex align-items-center">
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
                    <div class="row no-gutters justify-content-lg-end align-items-center bottom-nav-wrapper d-none d-lg-flex">
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
                                <a href="#" id="service-dropdown" class="dropdown-toggle btn btn-block text-white header-bottom-navigation h14 fw-600 line-height-1" data-bs-toggle="dropdown">
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

<section class="faq">
    <div class="container">
        <div class="text-center fs-24 fw-500">Questions Answered</div>
        <div class="text-uppercase text-center fs-48 fw-800"><span class="text-primary">Easy Box &trade;</span> FAQ's</div>

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

        <div class="row justify-content-center pt-6">
            <div class="col-lg-9">
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
                <div class="px-lg-4">
                    <div class="heroImg"><?= renderImg('about.jpg', 'lib') ?></div>

                    <div class="text-white font-dmsans fw-700 fs-20 pt-5 pb-4">
                        Introducing JB Removal's latest addition to our range of services: EasyBox, our innovative mobile storage solution. With EasyBox, we provide you with the convenience of packing, moving, and storing your belongings all in one place, while you sit back and relax.
                    </div>
                    <div class="text-grey fs-18">Choose JB Removals for your next move or storage needs, and experience the highest level of professionalism and reliability in Sydney. Contact us today to book your EasyBox and let us take care of the rest.</div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="px-lg-4">
                    <div class="text-black fs-40 ls-3 lh-1_16">
                        <span class="fw-600">“Easy Box™ is a more efficient, and cost-effective solution compared to traditional self-storage options.</span> Make the smart choice and trust JB Removals and Storage with your moving and storage needs.”
                    </div>
                    <div class="row gx-2 py-5">
                        <div class="col-auto">
                            <a href="tel:<?= $phone_number ?>" class="btn border-2 border-white text-white rounded-0 fw-500 font-dmsans fs-20 px-4">Call <?= $phone_number ?></a>
                        </div>
                        <div class="col-auto">
                            <a href="" class="btn btn-black text-white rounded-0 fw-500 fs-20 px-4 font-dmsans">Get a live quote</a>
                        </div>
                    </div>

                    <div class="pt-8 fs-36 fw-700 font-dmsans text-white">Here's how EasyBox works in just four simple steps:</div>
                    <div class="font-dmsans pt-6 steps d-flex flex-column gap-4">
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">1</div>
                            </div>
                            <div class="col">
                                <div class="fs-24 text-primary fw-700">We Pack</div>
                                <div class="fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">2</div>
                            </div>
                            <div class="col">
                                <div class="fs-24 text-primary fw-700">We Pack</div>
                                <div class="fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">3</div>
                            </div>
                            <div class="col">
                                <div class="fs-24 text-primary fw-700">We Pack</div>
                                <div class="fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <div class="number">4</div>
                            </div>
                            <div class="col">
                                <div class="fs-24 text-primary fw-700">We Pack</div>
                                <div class="fs-18 text-grey">
                                    Our skilled team of professionals will carefully pack your belongings using high-quality packing materials to ensure their safety during transportation and storage.
                                </div>
                            </div>
                        </div>
                        <!-- We MoveOnce everything is packed, the EasyBox is loaded onto our truck, where we transport your belongings to the desired location swiftly and securely.We StoreEasyBox offers secure and spacious storage facilities to keep your possessions safe until you need them again. Our storage units are equipped with state-of-the-art security systems for ultimate peace of mind.You RelaxWith JB Removals and EasyBox, you can sit back, relax, and enjoy a stress-free moving and storage experience. Leave the hard work to us while you focus on settling into your new space. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta py-9 text-white">
    <div class="container">
        <div class="text-capitalize text-center fs-96 lh-1 fw-700">Most trusted removals &amp;<br /> Storage Sydney Wide</div>
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
                <div class="row">
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