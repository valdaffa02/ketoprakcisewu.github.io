@extends('layouts.main')

@section('content')
    <!-- Banner Slider (HERO) -->
    <div id="default-carousel" class="relative w-full aspect-[16/9] sm:aspect-[16/7] md:aspect-[16/5]" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden rounded-lg md:h-full">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://cdn.discordapp.com/attachments/1184093995564015746/1197473622344863794/promosi_1.png?ex=65bb6537&is=65a8f037&hm=0dc10f2679360659032884ef99db12c30f7d3f2e71bf6b634e04bfe60d652766&" class="absolute object-cover md:object-fill md:block w-auto h-full md:w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://cdn.discordapp.com/attachments/1184825050357039194/1189928796451786912/image.png?ex=659ff28c&is=658d7d8c&hm=35b41a202c7efbcf5ad21265da8c912674f38f9745636f673858cce1bdf73bab&" class="absolute object-cover md:object-fill md:block w-auto h-full md:w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://cdn.discordapp.com/attachments/1184825050357039194/1185242702187606036/Feeds_Cisewu_1.png?ex=658ee648&is=657c7148&hm=cc9c85328f3d30eb51b04b6c250f60f1ddb1e88213391fe58e8c36e05ebb2781&" class="absolute object-cover md:object-fill md:block w-auto h-full md:w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://cdn.discordapp.com/attachments/1184825050357039194/1185242703227801721/Feeds_Cisewu.png?ex=658ee649&is=657c7149&hm=b3410933bc30805496b457dcb53253b3175e84b328f32683fc8d3f326bb299e8&" class="absolute object-cover md:object-fill md:block w-auto h-full md:w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://cdn.discordapp.com/attachments/1184825050357039194/1185242702187606036/Feeds_Cisewu_1.png?ex=658ee648&is=657c7148&hm=cc9c85328f3d30eb51b04b6c250f60f1ddb1e88213391fe58e8c36e05ebb2781&" class="absolute object-cover md:object-fill md:block w-auto h-full md:w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <!--<div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>-->
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-cisewu/50 group-hover:bg-cisewu group-focus:ring-4 group-focus:ring-cisewu group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-cisewu/50 group-hover:bg-cisewu group-focus:ring-4 group-focus:ring-cisewu group-focus:outline-none">
                <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    
    <!-- Menu Ketoprak (Horizontal list of menu cards) -->
    <div class="w-full pt-10 pb-10">
        <div class="text-cisewu text-center mt-8 mb-10 mx-auto justify-center">
            <h2 class="font-dosis font-bold text-3xl drop-shadow-lg">Menu Ketoprak</h2>
            <hr class="w-48 h-1 mx-auto my-2 border-0 rounded md:my-4 bg-cisewu shadow-md">
        </div>
        <div class="w-full flex overflow-x-auto overflow-y-hidden lg:overflow-visible px-8 py-10 lg:justify-center">
            <a href="#" class="shadow hover:scale-125 duration-300 hover:shadow-lg rounded-xl bg-white bg-opacity-75 hover:bg-opacity-100 min-w-32 max-w-128 mr-6 lg:mr-10">
                        
                <img src="https://cdn.discordapp.com/attachments/1184093995564015746/1197181301506195547/ketoprak-original.png?ex=65ba54f8&is=65a7dff8&hm=f198d9ad5bcc640d2cb402025fb4012a83db4d59e3957d93632ef87d0f1d5c5d&" class="rounded-t-lg w-full aspect-square object-cover"/>
                
                <div class="p-5 flex flex-col">
                    <!-- Link Menu -->
                    <h3 class="font-dosis font-semibold line-clamp-4 text-xl mb-2">Ketoprak Original</h3>
                    <p class="font-dosis font-medium line-clamp-4 mb-4">lontong, tahu, toge, bihun, timun, dengan bumbu kecang</p>
                    <p class="font-dosis font-medium">Rp. 0,000</p>
                </div>
                
            </a>
            <a href="#" class="shadow hover:scale-125 duration-300 hover:shadow-lg rounded-xl bg-white bg-opacity-75 hover:bg-opacity-100 min-w-32 max-w-128 mr-6 lg:mr-10">
                        
                <img src="https://cdn.discordapp.com/attachments/1184093995564015746/1197181302445719622/ketoprak-telor-rebus.png?ex=65ba54f9&is=65a7dff9&hm=e2029e8cbfdb9bc0db88f65a6b0e517197906dacab73924035f51647a8e35fdb&" class="rounded-t-lg w-full aspect-square object-cover"/>
                
                <div class="p-5 flex flex-col">
                    <!-- Link Menu -->
                    <h3 class="font-dosis font-semibold line-clamp-4 text-xl mb-2">Ketoprak Telur Rebus</h3>
                    <p class="font-dosis font-medium line-clamp-4 mb-4">lontong, tahu, toge, bihun, timun, dengan bumbu kecang, dan toping telur rebus</p>
                    <p class="font-dosis font-medium">Rp. 0,000</p>
                </div>
                
            </a>
            <a href="#" class="shadow hover:scale-125 duration-300 hover:shadow-lg rounded-xl bg-white bg-opacity-75 hover:bg-opacity-100 min-w-32 max-w-128 mr-6 lg:mr-10">
                        
                <img src="https://cdn.discordapp.com/attachments/1184093995564015746/1197181302156304455/ketoprak-telor-dadar.png?ex=65ba54f8&is=65a7dff8&hm=5820ff946623138159dd412ed917ffa1b531a93f5c41f5ed2cb9193bb557d885&" class="rounded-t-lg w-full aspect-square object-cover"/>
                
                <div class="p-5 flex flex-col">
                    <!-- Link Menu -->
                    <h3 class="font-dosis font-semibold line-clamp-4 text-xl mb-2">Ketoprak Telur Dadar</h3>
                    <p class="font-dosis font-medium line-clamp-4 mb-4">lontong, tahu, toge, bihun, timun, dengan bumbu kecang, dan toping telur dadar</p>
                    <p class="font-dosis font-medium ">Rp. 0,000</p>
                </div>
            </a>
            <a href="#" class="shadow hover:scale-125 duration-300 hover:shadow-lg rounded-xl bg-white bg-opacity-75 hover:bg-opacity-100 min-w-32 max-w-128 mr-6 lg:mr-10">
                        
                <img src="https://cdn.discordapp.com/attachments/1184093995564015746/1197181301824950393/ketoprak-telor-ceplok.png?ex=65ba54f8&is=65a7dff8&hm=7407d80940afe059da46f0ff8cc353fdbe8815d85d7d9eaab91e628fa6435715&" class="rounded-t-lg w-full aspect-square object-cover"/>
                
                <div class="p-5 flex flex-col">
                    <!-- Link Menu -->
                    <h3 class="font-dosis font-semibold line-clamp-4 text-xl mb-2">Ketoprak Telur Ceplok</h3>
                    <p class="font-dosis font-medium line-clamp-4 mb-4">lontong, tahu, toge, bihun, timun, dengan bumbu kecang, dan toping telur ceplok</p>
                    <p class="font-dosis font-medium">Rp. 0,000</p>
                </div>
            </a>

            <a href="#" class="shadow hover:scale-125 duration-300 hover:shadow-lg rounded-xl bg-white bg-opacity-75 hover:bg-opacity-100 min-w-32 max-w-128 mr-6 lg:mr-10">
                        
                <img src="https://cdn.discordapp.com/attachments/1184093995564015746/1197181301128700054/ketoprak-indomie-dadar.png?ex=65ba54f8&is=65a7dff8&hm=8a2b8537423b01ba0e4a0a2c44ddb592ff290d7b2bfea367e2a56b260b93a7d6&" class="rounded-t-lg w-full aspect-square object-cover"/>
                
                <div class="p-5 flex flex-col h-full">
                    <!-- Link Menu -->
                    <h3 class="font-dosis font-semibold line-clamp-4 text-xl mb-2">Ketoprak Indomie Telur</h3>
                    <p class="font-dosis font-medium line-clamp-4 mb-4">lontong, tahu, toge, indomie, timun, dengan bumbu kecang, dan toping telur</p>
                    <p class="font-dosis font-medium">Rp. 0,000</p>
                </div>
            </a>
            
        </div>
        <div class="mt-4 mb-2 flex flex-col items-center">
            <!--<a class="bg-white border-0 text-cisewu text-lg duration-500 px-10 py-4 hover:shadow-md hover:scale-105 active:text-white border-2 border-cisewu active:bg-cisewu text-center rounded-full" href=""><strong>Pesan Sekarang!</strong></a> -->
            <h2 class="font-dosis font-bold text-2xl drop-shadow-lg">Tersedia di:</h2>
         </div>
        <div class="block xl:flex xl:flex-row px-20 xl:space-x-20">
            <a href="https://gofood.link/u/O18WM" class="xl:w-1/3 w-full hover:scale-105 duration-300"><img src="https://cdn.discordapp.com/attachments/1184825050357039194/1189095742376267776/gofood-logo.png?ex=659ceab5&is=658a75b5&hm=52edbe5af66ee2f424ddef4b1f0d1b5cdb8094decd8f13a31eb93b9444761d54&"></a>
            <a href="https://shopee.co.id/universal-link/now-food/shop/1079888?deep_and_deferred=1&shareChannel=copy_link" class="xl:w-1/3 w-full hover:scale-105 duration-300"><img src="https://1000logos.net/wp-content/uploads/2022/11/Shopee_Food_Logo_PNG7.png"></a>
            <a href="https://r.grab.com/g/2-1-IDGFSTI00001dse" class="xl:w-1/3 w-full hover:scale-105 duration-300"><img src="https://cdn.discordapp.com/attachments/1184825050357039194/1189095742112018473/grabfood-logo.png?ex=659ceab5&is=658a75b5&hm=5c7c0fbbeb2a542d87395cf6628099ef38743eda43ddf54dd2573b42ff2cecd0&"></a>
        </div>
    </div>
    

    <!-- About US -->
    <div class="block xl:flex xl:flex-row">
        <!-- About Us Video -->
        <div class="relative w-full overflow-hidden aspect-[16/7] xl:aspect-[16/9] xl:basis-2/3 flex items-center">
            <video class="object-center xl:object-fill xl:block w-full" autoplay loop muted>
                <source src="vid/WIP2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        
            <!-- About Us div -->
            <div class="absolute bottom-0 left-0 text-cisewu rounded-tr-lg xl:opacity-0 backdrop-filter backdrop-blur-md p-2">
                <h2 class="text-2xl font-dosis font-bold">About Us</h2>
            </div>
        </div>
        <div class="bg-white shadow-inner p-4 xl:basis-1/3">
            <div class="hidden xl:block">
                <h2 class="font-dosis font-bold text-2xl">About Us</h2>
                <hr class="w-28 h-1 mt-2 mb-4 rounded bg-black"> 
            </div>
            
            <p class="font-dosis font-medium text-justify">Melayani cita rasa authentic ketoprak khas jakarta sejak 2016, Ketoprak Cisewu hadir 
                memanjakan lidah konsumen dengan sajian ketoprak berkualitas. Resep dan bahan yang berkualitas menjadi 
                dasar kami dalam menyajikan harmoni rasa yang nikmat. Setiap suapan, lontong berpadu sempurna dengan tahu, 
                telur, tauge, dan bumbu kacang istimewa.
            </p>
            <br>
            <p class="font-dosis font-medium text-justify">Ketoprak Cisewu tumbuh menjadi salah satu destinasi kuliner authentic, dengan variasi 
                menu yang beragam. Selain mendapat apresiasi dari masyarakat lokal, kami pun menjadi ketoprak dengan rating 
                tertinggi di gofood dan shopeefood, pecinta ketoprak pasti setuju akan hal tersebut. Melalui kolaborasi dengan 
                mitra online, kami semakin memperluas jangkauan untuk membagikan kelezatan ketoprak. Bergabunglah bersama kami 
                merayakan hidangan yang tradisional ini.
            </p>
        </div>
    </div>
    
    <!-- Location Map -->
    <div class="relative">
        <!--<div class="w-full bg-cisewu py-2 text-white text-2xl font-semibold text-center justify-center">
            <h2>Our Location</h2>
        </div>-->
        <iframe class="w-full min-h-[35rem]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.120948990949!2d107.60448747499609!3d-6.876109493122704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6ee66ab2a85%3A0xe30aae550146ecfb!2sKetoprak%20Cisewu!5e0!3m2!1sid!2sid!4v1703412329053!5m2!1sid!2sid" 
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        <div class="absolute top-2 text-center left-1/2 transform -translate-x-1/2 backdrop-filter backdrop-blur-md py-2 px-5 rounded-full">
            <h2 class="text-2xl font-dosis font-semibold drop-shadow-md text-cisewu">Our Location</h2>
            <hr class="w-32 h-1 mx-auto my-2 border-0 rounded shadow-md bg-cisewu shadow-md">
        </div>
    </div>

    <!-- Form Kritik dan Saran-->
    <div class="px-5 py-10 lg:p-10">
        <div class="text-cisewu text-center mt-8 mb-10 mx-auto justify-center">
            <h2 class="font-dosis font-bold text-2xl drop-shadow-lg">Kritik dan Saran</h2>
            <hr class="w-48 h-1 mx-auto my-2 border-0 rounded md:my-4 bg-cisewu shadow-md">
        </div>
        <form class="max-w-2xl mx-auto">
            <div class="mb-5">
                <!--<label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-mail</label>-->
                <input type="email" id="email" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cisewu focus:border-cisewu block w-full p-2.5 border-gray-600 placeholder-gray-400" placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-5">
                <input type="text" id="something" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cisewu focus:border-cisewu block w-full p-2.5 border-gray-600 placeholder-gray-400" placeholder="Subject" required>
            </div>
            <div class="max-w-2xl mx-auto mb-8">
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-cisewu focus:border-cisewu bg-white border-gray-600 placeholder-gray-400" placeholder="Leave a comment..."></textarea>
            </div>
            <div class="mt-4 mb-10 flex flex-col items-center">
                <button type="submit" class="bg-white border-0 text-cisewu text-md duration-500 px-8 py-3 hover:shadow-md hover:scale-105 active:text-white border-2 border-cisewu active:bg-cisewu text-center rounded-full">Submit</button>
            </div>
          </form>
    </div>


@endsection