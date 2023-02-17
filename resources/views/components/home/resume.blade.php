<!-- === Resume Section Start === -->
<section
    id = "resume"
    x-data= "
        {
            selectedTab: 'all',
            activeClasses: 'bg-primary text-white',
            inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
    "
    class = "pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
>
    <div class = "container">
        <!--
        <div class="py-[70px]">
            <div class="mx-auto px-4 sm:container">
                <div class="border-primary border-l-[5px] pl-5">
                    <h2 class="mb-2 text-2xl font-semibold text-dark dark:text-slate-300">
                        Resume
                    </h2>
                    <p class="text-body-color text-sm font-medium">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras
                        ultrices lectus sem.
                    </p>
                </div>
            </div>
        </div> -->
        
        <div class = "flex flex-wrap -mx-4">
            <div class = "w-full px-4">
                <div class = "justify-center mx-auto mb-[60px] max-w-[510px] flex">
                    <!-- Header -->
                    <h2 class = "font-bold text-center text-3xl sm:text-4xl md:text-[40px] text-dark dark:text-slate-300 mb-2 mr-4">
                        Resume
                    </h2>

                    <!-- Download Button -->
                    <a href="/resumeFile/Resume-SriramRangan.pdf" target="_blank" width="20" height="20" class="text-primary dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800 inline-flex items-center rounded-lg bg-transparent py-3 px-5 text-base font-medium">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                        </span>
                    </a>                
                </div>
            </div>
        </div> 
        

        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="lg:grid lg:grid-cols-3 gap-6">
                    <!-- Skills and Certification Column -->
                    <div>
                        <!-- Skills Tab -->
                        <div class="mb-10 overflow-hidden rounded-lg bg-white dark:bg-slate-800">
                            <h2 class="bg-primary text-slate-100 p-4 sm:p-5 xl:p-5 uppercase font-bold text-lg xl:text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22px" height="22px" class="fill-current inline-block mb-1">
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M5.33 3.271a3.5 3.5 0 0 1 4.472 4.474L20.647 18.59l-2.122 2.121L7.68 9.867a3.5 3.5 0 0 1-4.472-4.474L5.444 7.63a1.5 1.5 0 1 0 2.121-2.121L5.329 3.27zm10.367 1.884l3.182-1.768 1.414 1.414-1.768 3.182-1.768.354-2.12 2.121-1.415-1.414 2.121-2.121.354-1.768zm-7.071 7.778l2.121 2.122-4.95 4.95A1.5 1.5 0 0 1 3.58 17.99l.097-.107 4.95-4.95z"/>
                                </svg>
                                <span>Skills</span>
                            </h2>
                            @foreach($skills as $skill)
                            <x-resume-skill
                                :category="$skill['category']"
                                :skillsets="$skill['skillset']"
                            ></x-resume-skill>
                            @endforeach
                        </div>

                        <!-- Certifications Tab -->
                        <div class="mb-10 overflow-hidden rounded-lg bg-white dark:bg-slate-800">
                            <h2 class="bg-primary text-slate-100 p-4 sm:p-5 xl:p-5 uppercase font-bold text-lg xl:text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="22px" height="22px" class="fill-current inline-block mb-1">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 7V37C10 38.6569 11.3431 40 13 40H26V36.4649C24.8044 35.7733 24 34.4806 24 33C24 30.7909 25.7909 29 28 29C30.2091 29 32 30.7909 32 33C32 34.4806 31.1956 35.7733 30 36.4649V40H35C36.6569 40 38 38.6569 38 37V7C38 5.34315 36.6569 4 35 4H13C11.3431 4 10 5.34315 10 7ZM28 35C29.1046 35 30 34.1046 30 33C30 31.8954 29.1046 31 28 31C26.8954 31 26 31.8954 26 33C26 34.1046 26.8954 35 28 35ZM18 11C18 10.4477 18.4477 10 19 10L29 10C29.5523 10 30 10.4477 30 11C30 11.5523 29.5523 12 29 12L19 12C18.4477 12 18 11.5523 18 11ZM15 16C14.4477 16 14 16.4477 14 17C14 17.5523 14.4477 18 15 18H33C33.5523 18 34 17.5523 34 17C34 16.4477 33.5523 16 33 16H15ZM14 21C14 20.4477 14.4477 20 15 20H33C33.5523 20 34 20.4477 34 21C34 21.5523 33.5523 22 33 22H15C14.4477 22 14 21.5523 14 21ZM15 24C14.4477 24 14 24.4477 14 25C14 25.5523 14.4477 26 15 26H33C33.5523 26 34 25.5523 34 25C34 24.4477 33.5523 24 33 24H15Z"/> 
                                    <path d="M26 44V40H30V44L28 42.5L26 44Z"/>
                                </svg>
                                <span>Certifications</span>
                            </h2>
                            @foreach($certifications as $certification)
                                <x-resume-certification
                                    :name="$certification['name']"
                                    :accredited="$certification['accredited']"
                                >
                                </x-resume-certification>
                            @endforeach
                        </div>
                    </div>
                    <!-- Jobs and Education Column -->
                    <div class="col-span-2">
                        <!-- Education tab -->
                        <div class="mb-10 overflow-hidden rounded-lg bg-white dark:bg-slate-800">
                            <h2 class="bg-primary text-slate-100 p-4 sm:p-5 xl:p-5 uppercase font-bold text-lg xl:text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="22px" height="22px" class="fill-current inline-block mb-1">
                                    <path d="M3.33 8L10 12l10-6-10-6L0 6h10v2H3.33zM0 8v8l2-2.22V9.2L0 8zm10 12l-5-3-2-1.2v-6l7 4.2 7-4.2v6L10 20z"/>
                                </svg>
                                <span>Education</span>
                            </h2>
                            @foreach($schools as $school)
                                <x-resume-school
                                    :program="$school['program']"
                                    :name="$school['name']"
                                    :yr="$school['yr']"
                                    :descriptions="$school['description']"
                                >
                                </x-resume-school>
                            @endforeach
                        </div>

                        <!-- Jobs Tab -->
                        <div class="mb-10 overflow-hidden rounded-lg bg-white dark:bg-slate-800">
                            <h2 class="bg-primary text-slate-100 p-4 sm:p-5 xl:p-5 uppercase font-bold text-lg xl:text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="22px" height="22px" class="fill-current inline-block mb-1">
                                    <path d="M336,288H176V256H16V452a12,12,0,0,0,12,12H484a12,12,0,0,0,12-12V256H336Z"/>
                                    <path d="M496,124a12,12,0,0,0-12-12H384V56a8,8,0,0,0-8-8H136a8,8,0,0,0-8,8v56H28a12,12,0,0,0-12,12V224H496ZM344,112H168V88H344Z"/>
                                </svg>
                                <span>Professional Experience</span>
                            </h2>
                            @foreach($jobs as $job)
                                <x-resume-job
                                    :title="$job['title']"
                                    :company="$job['company']"
                                    :yr="$job['yr']"
                                    :descriptions="$job['description']"
                                >
                                </x-resume-job>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</section>
<!-- === Resume Section End === -->
