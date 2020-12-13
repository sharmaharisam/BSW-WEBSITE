
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OAE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.10/tailwind.min.css">
        
        <!-- Small CSS to Hide elements at 1520px size -->
        <style type="text/css">
            @media(max-width:1520px) {
                .left-svg {
                    display: none;
                }
            }
            a.line {
   display: inline-block;
   text-decoration:none
 }
 a.line:after {
   content: "";
   display: block;
   width: 0;
   border-bottom: 1.5px solid;
   margin: 0 auto;
   transition:all 0.3s linear 0s;
 }

 a.line:hover:after {
   width: 90%;
 }

 .colors {
     color: #FF9773;
 }
 .colora {
     color:  #474747;
;
 }
 .letter {
     font-size: 5.5rem;
;
 }
 .lettermid {
     font-size: 3.25rem;
;
 }
 .lettermid1 {
     font-size: 32px;
;
 }
 .coloring {
     background-color: #FF9773;
;
 }
 .coloring1 {
     background-color: #F2DED7
;
;
 }

            /* small css for the mobile nav close */
            #nav-mobile-btn.close span:first-child {
                transform: rotate(45deg);
                top: 4px;
                position: relative;
                background: #a0aec0;
            }

            #nav-mobile-btn.close span:nth-child(2) {
                transform: rotate(-45deg);
                margin-top: 0px;
                background: #a0aec0;
            }

            .dark {
                filter: invert(1);
                background: #252525;
            }

            .flip {
                filter: invert(1);
            }

            .theme-switch {
                cursor: pointer;
            }
        </style>
    </head>

    <body >

        <!-- Header Section -->
        <header class="h-24 w-full relative z-50">
            <div
                class="md:flex items-center justify-between py-2 px-8 md:px-24">

                <a href="/" class="inline-block h-full flex items-center h-5 relative font-black leading-none">
                    <object data="images/bsw_logo.svg" type="image/svg+xml">
                      </object>
                </a>
                <h1 class= "text-gray-900 font-black text-3xl sm:text-3xl  flex lg:w-2/5 " >Board for Student Welfare</h1>

                <nav id="nav"
                    class="absolute left-0 w-full md:w-auto text-gray-800 flex-col md:flex-row h-64 md:h-24 justify-between text-sm lg:text-base bg-white md:bg-transparent top-0 mt-24 md:mt-0 border-t md:border-none border-gray-200 pt-5 md:py-0 z-50 flex hidden md:flex items-center md:relative">
                    <a  href="#"
                        class="font-bold ml-0 md:ml-12 mr-0 md:mr-3 lg:mr-8 transition-color duration-100 hover:text-black line">Home</a>
                    <a href="#features"
                        class="font-bold mr-0 md:mr-3 lg:mr-8 transition-color duration-100 hover:text-black line">About Us</a>
                        <a href="#features"
                        class="font-bold mr-0 md:mr-3 lg:mr-8 transition-color duration-100 hover:text-black line">Accomodation </a>
                    <a href="#pricing"
                        class="font-bold mr-0 md:mr-3 lg:mr-8 transition-color duration-100 hover:text-black line">Resources</a>
                    <a href="#testimonials"
                        class="font-bold transition-color duration-100 hover:text-black line">Contact Us</a>
                    <a class="px-5 py-1 rounded theme-switch" onclick="theme()"><img id="theme-switch"
                            src="https://img.icons8.com/ios-glyphs/30/000000/moon-symbol.png" style="width:20px;"
                            class="inver" id="im"></a>
                 
                </nav>

                

                <div id="nav-mobile-btn"
                    class="w-6 absolute block md:hidden right-0 top-0 mr-10 mt-8 sm:mt-10 z-50 cursor-pointer select-none">
                    <span class="w-full h-1 mt-2 sm:mt-1 bg-gray-800 rounded-full block transform duration-200"></span>
                    <span class="w-full h-1 mt-1 bg-gray-800 rounded-full block  transform duration-200"></span>
                </div>

            </div>
        </header>
        <!-- End Header Section-->

        <!-- BEGIN HERO SECTION -->
        <div class="w-full relative py-10 md:py-16 lg:py-24 xl:py-60  px-8 xl:px-0">
            
            <div
                class="container max-w-8xl mx-auto h-full flex flex-col lg:flex-row justify-between items-center -mt-32 px-8 xl:px-0 ">
                
                <div
                    class="flex flex-col items-center lg:items-start w-full max-w-xl pt-48 lg:pt-20 xl:pt-60 text-center lg:text-left z-30 ">

                    <h1 class="text colora font-semibold text-xl sm:text-4xl leading-tight relative mb-4 xl:mb-4  ">Welcome!</h1>
                    <div class="flex items-center">

                    <h1 class="text colors font-bold text-4xl letter leading-tight relative mb-4 xl:mb-4  ">O</h1></br>
                    <h1 class="text colora font-semibold text-2xl sm:text-5xl  relative mb-4 xl:mb-4  ">ffice of </h1>
                </div>

                <div class="flex items-center">

                    <h1 class="text colors font-bold text-3xl letter leading-tight relative mb-4 xl:mb-4  ">A</h1></br>
                    <h1 class="text colora font-semibold text-2xl sm:text-5xl  relative mb-4 xl:mb-4  ">ccessible </h1>
                </div> 
                <div class="flex items-center">

                    <h1 class="text colors font-bold text-3xl letter leading-tight relative mb-4 xl:mb-4  ">E</h1></br>
                    <h1 class="text colora font-semibold text-2xl sm:text-5xl  relative mb-4 xl:mb-4  ">ducation </h1>
                </div>      
            </br> 
                             <a href="#_"
                        class="mt-0 sm:mt-1 px-12 py-4 rounded-full  fold-bold text-base coloring shadow-xl text-white border-t border-gray-200 w-auto font-bold relative self-start inline-block lg:mx-0 mx-auto">Register Now</a>
                    <!-- Integrates with section -->
                </div>
                    <div class="lg:absolute max-w-4xl xl:max-w-6xl right-0 container lg:w-screen w-full">
                        
                        <img src="images/home1.svg"
                            >
                    </div>
               
            </div>
        </div>
        <!-- HERO SECTION END -->
        </br>
        </br>
        </br>
        </br> </br>
        </br>

        </br>
        </br>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900&display=swap" rel="stylesheet">

<main class=" font-montserrat">
    <div class="container mx-auto px-6 sm:px-12 flex flex-col-reverse sm:flex-row relative">
        <div class="sm:w-5/12 relative z-10">
        <img src= "images/yeah.svg">       </div>
        <div class="sm:w-7/12 xl:w-5/12 flex flex-col items-start  sm:text-left ml-auto mt-8 sm:mt-0 relative z-10 xl:pt-20 mb-16 sm:mb-0">
            <h1 class="text-4xl lg:text-5xl text-black leading-none mb-4 font-black">About Us</h1>
            <p class="lg:text-lg mb-4 sm:mb-12 text-blue-900">The Office of Accessible Education (OAE) aspires to cater the needs of differently abled persons. We aim at providing a comprehensive and accessible environment to make your journey at IIT Delhi comfortable and hassle-free. Special assistance varying from academics to infrastructure requirements are taken care of by the department. We spare no efforts in helping you to find your true potential and excelling academically and vocationally alongside having a memorable stay at IIT Delhi.</p>
        </div>
    </div>
</main>

        <!--Right Col-->
        </br>
        </br>
        <!-- BEGIN FEATURES SECTION -->
        <div class="flex justify-center">

<h1  class= "text-semibold font-black lettermid sm:text-3xl  "> Accomodation & Policies </h1>
        </div>
        </br>
       <!-- This is an example component -->
<div class="mx-14 pt-15">
   <div class="grid gap-6 mb-8 md:grid-cols-1">
              <div class="min-w-0 p-4 bg-white ">
                <h4 class="mb-4 mt-2 ml-16 mr-16 font-semibold lettermid1 text-black dark:text-black">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                </h4>
                <p class="text-gray-800 ml-16 mb-2 mr-16 text-xl	dark:text-gray-800">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                  quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                  nihil dolorum.
                </p>
              </div>
            
            </div>
</div>
<div class="mx-14 pt-15">
   <div class="grid gap-6 mb-8 md:grid-cols-1">
              <div class="min-w-0 p-4  coloring1">
                <h4 class="mb-4 mt-2 ml-16 mr-16 font-semibold lettermid1 text-black dark:text-black">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                </h4>
                <p class="text-gray-800 ml-16 mb-2 mr-16 text-xl	dark:text-gray-400">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                  quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                  nihil dolorum.
                </p>
              </div>
            
            </div>
</div>
<div class="mx-14 pt-15">
   <div class="grid gap-6 mb-8 md:grid-cols-1">
              <div class="min-w-0 p-4 bg-white ">
                <h4 class="mb-4 mt-2 ml-16 mr-16 font-semibold lettermid1 text-black dark:text-black">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                </h4>
                <p class="text-gray-800 ml-16 mb-2 mr-16 text-xl	dark:text-gray-400">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                  quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                  nihil dolorum.
                </p>
              </div>
            
            </div>
</div>
<div class="mx-14 pt-15">
   <div class="grid gap-6 mb-8 md:grid-cols-1">
              <div class="min-w-0 p-4  coloring1">
                <h4 class="mb-4 mt-2 ml-16 mr-16 font-semibold lettermid1 text-black dark:text-black">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                </h4>
                <p class="text-gray-800 ml-16 mb-2 mr-16 text-xl	dark:text-gray-400">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                  quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                  nihil dolorum.
                </p>
              </div>
            
            </div>
</div>
<div class="mx-14 pt-15">
   <div class="grid gap-6 mb-8 md:grid-cols-1">
              <div class="min-w-0 p-4 bg-white ">
                <h4 class="mb-4 mt-2 ml-16 mr-16 font-semibold lettermid1 text-black dark:text-black">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                </h4>
                <p class="text-gray-800 ml-16 mr-16 mb-2 text-xl	  dark:text-gray-400">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                  quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                  nihil dolorum.
                </p>
              </div>
            
            </div>
</div>
<div class="mx-14 pt-15">
   <div class="grid gap-6 mb-8 md:grid-cols-1">
              <div class="min-w-0 p-4  coloring1">
                <h4 class="mb-4 mt-2 ml-16 mr-16 font-semibold lettermid1 text-black dark:text-black">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr:
                </h4>
                <p class="text-gray-800 text-xl	 ml-16 mr-16 mb-2 dark:text-gray-400">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                  quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                  nihil dolorum.
                </p>
              </div>
            
            </div>
</div>

<div class="flex justify-center">

<h1  class= "text-semibold font-black lettermid sm:text-3xl  "> Our Partners </h1>

        </div>
        <div class="flex justify-center">

        <p class="text-gray-600 ml-16 mr-16 mb-2 mt-4 dark:text-gray-400">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Fuga, cum commodi a omnis numquam quod? Totam exercitationem
                  quos hic ipsam at qui cum numquam, sed amet ratione! Ratione,
                  nihil dolorum.
                </p>
        </div>
        </br>
        <ul class="md:flex items-center flex justify-between md:space-x-8">
        <li class="flex flex-col items-center space-y-2 ml-20">
                <div class="bg-gradient-to-tr from-yellow-500 to-pink-600 rounded-full p-1">
                    <a class="block bg-white p-1 rounded-full transform transition hover:-rotate-12 duration-300" href="#">
                    <img class="h-32 w-32 rounded-full" src="https://i.ibb.co/yhh0Ljy/profile.jpg" alt="image">
                    </a>
                </div>
                <p>Lorem ipsum</p>
            </li>
            <li class="flex flex-col items-center space-y-2">
                <div class="bg-gradient-to-tr from-yellow-500 to-pink-600 rounded-full p-1">
                    <a class="block bg-white p-1 rounded-full transform transition hover:-rotate-12 duration-300" href="#">
                    <img class="h-32 w-32 rounded-full" src="https://i.ibb.co/yhh0Ljy/profile.jpg" alt="image">
                    </a>
                </div>
                <p>Lorem ipsum</p>
            </li>
           
            <li class="flex flex-col items-center space-y-2 ">
                <div class="bg-gradient-to-tr from-yellow-500 to-pink-600 rounded-full p-1 mr-20">
                    <a class="block bg-white p-1 rounded-full transform transition hover:-rotate-12 duration-300" href="#">
                        <img class="h-32 w-32 rounded-full" src="https://i.ibb.co/yhh0Ljy/profile.jpg" alt="image">
                    </a>
                </div>
                <p class="mr-20">Lorem ipsum</p>
            </li>
        </ul>
        <div class="relative flex items-top justify-center mt-20  coloring1 bg-white dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto mt-20 mb-20 sm:px-6 lg:px-8">
            <div class="mt-8 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6 mr-2 ">
                        <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                           <u> Contact Us </u>
                        </h1>
                        <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                        Feel free to reach out to our team with any 
queries you might have                       
 </p>
                        <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-16 h-16 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div class="ml-4 text-xl tracking-wide 	 font-bold w-40">
                                info@example.org
                            </div>
                        </div>
                    </div>
                    <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                    <form  action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSelyC5JSXvT3Q-ShcGpJnWy5R2d-S9Nb7RXQAM2wpUCzOVMdg/formResponse" method="POST" class="p-6 flex flex-col justify-center">
                        <div class="flex flex-col">
                            <label for="name" class="hidden">Full Name</label>
                            <input name="entry.2005620554" type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="email" class="hidden">Email</label>
                            <input type="email" name="entry.1539999985" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <div class="flex flex-col mt-2">
                            <label for="tel" class="hidden">Number</label>
                            <input type="tel" name="tel" id="tel" placeholder="Phone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none">
                        </div>

                        <button type="submit" class="md:w-32 coloring1 hover:coloring1 text-white font-bold py-3 px-6 rounded-lg mt-3 hover:coloring transition ease-in-out duration-300">
                            Submit
                        </button>
                    </form>
        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">

<img src=" images/footer.svg"> 
        </div>

        <div class="bg-gray-100">
   <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-between">
      <div class="p-5 w-48 ">
         <div class="text-xs uppercase text-gray-500 font-medium">Home</div>
         <a class="my-3 block" href="/#">Services <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Products <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">About Us <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Pricing <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Partners <span class="text-teal-600 text-xs p-1">New</span></a> 
      </div>
      <div class="p-5 w-48 ">
         <div class="text-xs uppercase text-gray-500 font-medium">User</div>
         <a class="my-3 block" href="/#">Sign in <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">New Account <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Demo <span class="text-teal-600 text-xs p-1">New</span></a><a class="my-3 block" href="/#">Career <span class="text-teal-600 text-xs p-1">We're hiring</span></a><a class="my-3 block" href="/#">Surveys <span class="text-teal-600 text-xs p-1">New</span></a> 
      </div>
      <div class="p-5 w-48 ">
         <div class="text-xs uppercase text-gray-500 font-medium">Resources</div>
         <a class="my-3 block" href="/#">Documentation <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Tutorials <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Support <span class="text-teal-600 text-xs p-1">New</span></a> 
      </div>
      
   </div>
</div>
        <!-- a little JS for the mobile nav button -->
        <script>
            if (document.getElementById('nav-mobile-btn')) {
                document.getElementById('nav-mobile-btn').addEventListener('click', function () {
                    if (this.classList.contains('close')) {
                        document.getElementById('nav').classList.add('hidden');
                        this.classList.remove('close');
                    } else {
                        document.getElementById('nav').classList.remove('hidden');
                        this.classList.add('close');
                    }
                });
            }

            function theme() {
                var element = document.body;
                element.classList.toggle("dark");
                // prevent img flip
                var elements = document.getElementsByTagName("img");
                for (let index = 0; index < elements.length; index++) {
                    const element = elements[index];
                    element.classList.toggle("flip");
                }
                // toggle button
                var img1 = "https://www.nicepng.com/png/full/121-1215503_sun-icon-white-sun-blue-background.png",
                    img2 = "https://img.icons8.com/ios-glyphs/30/000000/moon-symbol.png";
                var imgElement = document.getElementById('theme-switch');
                imgElement.src = (imgElement.src === img1) ? img2 : img1;
            };
        </script>

    </body>

    </html>

