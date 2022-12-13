<!-- === About Section Start === -->
<section id = "about" class = "dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class = "container">
        <div class = "flex flex-wrap justify-between items-center -mx-4">
            <div class = "w-full lg:w-6/12 px-4">
                <div class = "flex items-center -mx-3 sm:-mx-4">
                    <div class = "w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{ url('/img/me1.png') }}"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                        </div>
                        
                        <div class="py-3 sm:py-4">
                            <img
                                src="{{ url('/img/me3.png') }}"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                        </div>
                    </div>

                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img
                                src="{{ url('/img/me2.png') }}"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-slate-200 mb-8">
                        About Me
                    </h2>

                    <p class="text-base dark:text-slate-400 mb-8">
                        I am a McMaster University graduate of Automation Engineering 
                        currently learning about data analytics.
                    </p>

                    <p class="text-base dark:text-slate-400 mb-8">
                        I have a technical background in software and automation. 
                        This experitise includes web development, data manipulation, and applications of IoT.
                        I some experience with controls and hardware automation such as electric sensors, motors,
                        and PID controllers.
                    </p>

                    <p class="text-base dark:text-slate-400 mb-8">
                        Currently, I am expanding on my knowledge of data manipulation by learning about data analytics
                        and seeking to enter the broader realm of big data.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- === About Section End === -->