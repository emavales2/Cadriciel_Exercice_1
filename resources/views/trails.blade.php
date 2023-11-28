@extends('master')
@section('title', 'Our Favorite Trails')

@section('content')

        <!-- ------- TRAILS ------- -->
        
        <section class="projects-section bg-light" id="trails">
        <h2 class="text-black mb-5 text-center">Our Favorite Trails</h2>
            <div class="container px-4 px-lg-5">

                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">                       
                        <div class="featured-text text-center text-lg-left">
                            <h4>THE O CIRCUIT : Chilean Patagonia</h4>
                            <p class="text-black-50 mb-0">The W Trek is the most famous hiking trail through Torres del Paine National Park, and possibly the most famous hiking trail in Patagonia. The O Circuit, though, forms a full loop around Torres del Paine National Park (and actually includes the W Trek), making it the ideal option for those who have the time and desire to see the full park.</p>
                        </div>
                    </div>
                </div>

                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">MACHU PICCHU VIA SALKANTAY : Perú</h4>
                                    <p class="mb-0 text-white-50">The most traditional route to climb Machu Picchu is, of course, the Inca Trail. This is famous for a reason. It’s beautiful. But it’s also pretty crowded these days. We’d instead recommend taking the Salkantay Route, which will see you walk from the ancient capital of the Incas - Cusco - to Machu Picchu. It’s a 46-mile route peaking at 4,600m at the Salkantay Pass.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">THE ROUTE OF PARKS : Chile & Argetnina</h4>
                                    <p class="mb-0 text-white-50">The Route of Parks is a 1,700-mile hiking trail which runs through every single national park in Chile, starting in northern Patagonia and finishing at Cape Horn. Along the way it combines three pre-existing trails, namely the Carretera Austral road, the central fjordlands, which are only accessible by ferry, and the End of the World route in the far south of Patagonia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Three Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">VOLCÁN COTOPAXI : Ecuador</h4>
                                    <p class="mb-0 text-white-50">To get to the 5,897m peak of Cotopaxi, one of the highest points in Ecuador, you’ll have to go through the Avenue of Volcanoes first. On your way to the iconic summit, you’re going to be picking up life-changing adventure memories like a kid plucking sweets out a cinema pick ‘n’ mix. From the Valley of Los Chillos, you can hike to Hacienda Santa Rita, at 3,280m. A big day of hiking will take you to the Pasochoa Volcano. Look inside and you’ll see the Pasochoa Forest Reserve, a protected cloud forest within the extinct crater which houses 110 species of birds including condors, and 45 species of trees.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        @endsection