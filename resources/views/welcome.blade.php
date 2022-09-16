<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>cjgundino</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
        <link href="/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Fonts -->
       

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
        <div class="parent">
            <section class="section1 panel" >
                <div class="px-5 py-3">
                    <nav class="flex justify-end mt-5">
                        <ul class="flex mr-20">
                            <a href=""><li class="px-2"><img src="{{ asset('images/git.png') }}" alt="github icon"></li></a> 
                            <a href=""><li class="px-2"><img src="{{ asset('images/dribble.png') }}" alt="dribbble icon"></li></a> 
                            <a href=""><li class="px-2"><img src="{{ asset('images/fbicon.png') }}" alt="facebook icon"></li></a> 
                            <a href=""><li class="px-2"><img src="{{ asset('images/insta.png') }}" alt="instagram icon"></li></a> 
                        </ul>
                    </nav>
                </div>
                <div class="pt-7 px-10 lg:pt-24 lg:px-32">
                    <h1 class="text-xl lg:text-6xl lg:pr-64 leading-tight fancy-header text-center md:text-left" id="fancy-header">I AM A <span class="color-green">UX/UI</span>  DESIGNER
                        AND <span class="color-green">FULL-STACK </span>WEB DEVELOPER.
                    </h1>
                </div>
                <div class="mt-5 md:grid grid-cols-6 md:mt-24 md:px-32 ">
                    <div class="px-12 md:px-0 glass stagger-animate">
                        <h1 class="text-white font-bold text-xl">01</h1>
                        <h3 class="color-green md:mb-3 font-semibold align-self-center ">GRAPHIC DESIGN</h3>
                        <p class="text-white mt-1 mb-3 text-xs md:text-sm md:pr-10 text-center md:text-left ">Hi, I am Chrsitian John D. Gundino 28 years old, I specialize in Graphic Design, UX/UI design, Web development and full stack web developemnt. </p>
                    </div>
                    <div class="px-12 md:px-0 stagger-animate">
                        <h1 class="text-white font-bold text-xl">02</h1>
                        <h3 class="color-green md:mb-3 font-semibold">UX/UI DESIGN</h3>
                        <p class="text-white mt-1 mb-3 text-xs md:text-sm md:pr-10 text-center md:text-left">Hi, I am Chrsitian John D. Gundino 28 years old, I specialize in Graphic Design, UX/UI design, Web development and full stack web developemnt. </p>
                    </div>
                    <div class="px-12 md:px-0 stagger-animate">
                        <h1 class="text-white font-bold text-xl">03</h1>
                        <h3 class="color-green md:mb-3 font-semibold">WEB ENGINEER</h3>
                        <p class="text-white mt-1 mb-3 text-xs md:text-sm md:pr-10 text-center md:text-left">Hi, I am Chrsitian John D. Gundino 28 years old, I specialize in Graphic Design, UX/UI design, Web development and full stack web developemnt. </p>
                    </div>
                    <div class="col-span-3 order-last md:order-first mt-32 lg:mt-0 ">
                        <button class="px-10 py-3 rounded-full content-center ml-44 md:ml-0 text-xs md:text-sm  contact">contact me</button>
                    </div>
                </div>
            </section>
            <section class="section2 md:grid md:grid-cols-2 panel">
                <div class="py-10">
                    <div class="px-12 md:px-32 md:mt-24 md:ml-24 container">
                        <h1 class="text-xl md:text-5xl text-white font-bold color-green"><span class="color-green">ABOUT </span> </h1>
                    </div>
                    <div class="px-12 mt-10 md:px-32  md:ml-24 container">
                        <p class="text-xs md:text-sm md:mt-10 text-white leading-loose font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac odio nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus metus blandit nisl suscipit gravida. Donec egestas dui velit. Etiam rhoncus convallis odio vitae hendrerit. Nunc vel iaculis tortor, eget hendrerit erat. In ullamcorper maximus congue. Vivamus nunc nibh, efficitur et nulla et, semper ullamcorper nisi.</p>   
                    </div>
                    <div class="px-12 mt-3 md:px-32  md:ml-24 container">
                        <p class="text-xs md:text-sm md:mt-3 text-white leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac odio nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus metus blandit nisl suscipit gravida. Donec egestas dui velit. Etiam rhoncus convallis odio vitae hendrerit. Nunc vel iaculis tortor, eget hendrerit erat. In ullamcorper maximus congue. Vivamus nunc nibh, efficitur et nulla et, semper ullamcorper nisi.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac odio nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus metus blandit nisl suscipit gravida. Donec egestas dui velit. Etiam rhoncus convallis odio vitae hendrerit. Nunc vel iaculis tortor, eget hendrerit erat. In ullamcorper maximus congue. Vivamus nunc nibh, efficitur et nulla et, semper ullamcorper nisi.</p>
                    </div>
                </div>
                <div>
                    <div class="invisible md:visible  mt-56 md:flex md:items-center keyboard ">
                        <img src="{{asset('images/keyboard.png')}}" alt="" class=" md:mr-24 md:hover:rotate-12 transition-all" >
                    </div> 
                </div>
                
            </section >
            <section class="section3 panel">
               <div class="ml-10  md:px-32 md:ml-24 pt-7 pb-5 md:pb-24">
                     <h1 class="text-xl md:text-5xl text-white font-bold color-green header3"><span class="color-green">SAMPLE WORKS</span> </h1>
                     <p class="text-white mt-3 par3">How to transform your uniqueness into profitable business.🦾</p>
               </div>
               <div id="smooth-wrapper">
                    <div class="px-10 grid grid-cols-2 md:grid-cols-3 justify-items-stretch gap-5 md:px-56" id="smooth-content">
                            <div class="card">
                                <div class="box px-5">
                                </div>
                                <div class="white-box px-5 text-xs py-3 md:py-10 text-center md:hover:mt-3 md:transition-all">
                                    <div class="flex justify-center"> 
                                        <img src="{{asset("images/icon1.png")}}" alt="" class="icons ">
                                    </div>
                                    <div class="mt-3 md:mt-10">
                                        <h1 class="md:text-lg text-center color-green2 font-semibold"><span class="green-color2">Software Engineering</span> </h1>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac odio nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                   
                                    <div>
                                        <button class="text-xs px-3 py-1 md:px-10 md:py-3 contact2 mt-5">view more</button>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="card">
                                <div class="box px-5">
                                </div>
                                <div class="white-box px-5 text-xs py-3 md:py-10 text-center md:hover:mt-3 md:transition-all">
                                    <div class="flex justify-center">
                                        <img src="{{asset("images/icon2.png")}}" alt="" class="icons">
                                    </div>
                                    <div class="mt-6 md:mt-16">
                                        <h1 class="md:text-lg text-center color-green2 font-semibold"><span class="green-color2">Graphic Design</span> </h1>
                                    </div>
                                    <div class="mt-3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac odio nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                   
                                    <div>
                                        <button class="text-xs px-3 py-1 md:px-10 md:py-3 contact2 mt-5">view more</button>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="card">
                                <div class="box px-5">
                                </div>
                                <div class="white-box px-5 text-xs py-3 md:py-10 text-center md:hover:mt-3 md:transition-all">
                                    <div class="flex justify-center">
                                        <img src="{{asset("images/icon4.png")}}" alt="" class="icons">
                                    </div>
                                    <div class="mt-3 md:mt-10">
                                        <h1 class="md:text-lg text-center color-green2 font-semibold"><span class="green-color2">UX/UI Design</span> </h1>
                                    </div>
                                    <div class="mt-3">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac odio nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                   
                                    <div>
                                        <button class="text-xs px-3 py-1 md:px-10 md:py-3 contact2 mt-5">view more</button>
                                    </div>
                                </div>
                               
                            </div>
                    </div>
               </div>
            </section>
            <section class="section4 panel">
                <div class="md:px-24 md:ml-24 pt-12 pb-24">
                    <h1 class="text-xl ml-10 md:text-5xl text-white font-bold color-green header4"><span class="color-green">TECH STACK</span> </h1>
                    <p class="text-white mt-3 md:ml-10 par4">I have a very particular set of skills. I will find you. I will deliver to you.😉</p>
              </div>
              <div class="container">
                <div class="md:grid md:grid-cols-6 px-80">
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/illustrator.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/photoshop.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/premier.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/experience.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/after-effects.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/figma.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/html-5.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/css-3.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/js.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/wordpress.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/php.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/laravel2.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/database.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/bootstrap.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/tailwind.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/sass.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/office.png')}}" alt="" class="h-1/2">
                    </div>
                    <div class="flex justify-center tech-stack">
                        <img src="{{asset('images/google-drive.png')}}" alt="" class="h-1/2">
                    </div>
                </div>
             
                  
              </div>
            </section>
            <section class="section5 panel">
                <div class="md:px-24 md:ml-24 pt-12 pb-24">
                    <h1 class="text-xl ml-10 md:text-5xl text-white font-bold color-green"><span class="color-green">LET'S TALK</span> </h1>
                    <p class="text-white mt-3 md:ml-10">Tell us about yourself so we can customize your account.💬</p>
              </div>
            </section>
        </div>
      

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
        <script src="{{asset('assets/js/gsap.js')}}"></script>
       
    </body>
</html>
