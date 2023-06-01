<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Resume extends Component
{
    public array $jobs = [];
    public array $schools = [];
    public array $skills = [];
    public array $certifications = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->jobs =[
            [
                'title' => 'Registration Clerk - Emergency Department',
                'company' => 'Michael Garron Hospital',
                'yr' => 'Jan 2022 - Present',
                'description' => [
                    'Process 100-150 patients daily by coordinating with Nurses, EMS, and Law Enforcement in a dynamic ER environment to oversee patient flow efficiently.',
                    'Effectively prioritize and manage multiple competing tasks while communicating with relevant staff and patients.',
                    'Collect patient information with attention to detail and handle the data with care and confidence.',
                    'Train new staff on required software and hospital procedures.'
                ]
            ],
            [
                'title' => 'Unit Clerk - Vaccine Clinic',
                'company' => 'Michael Garron Hospital',
                'yr' => 'Apr 2021 - Jan 2022',
                'description' => [
                    'Elevated to supply management responsibilities; prepared pharmacy and clinical supplies for 5-9 TEHN mobile clinics on a daily basis.',
                    '70%+ increase in recovered and reused materials from returned clinical supplies.',
                    'Fulfilled additional roles handling test kits for COVID assessment centres and the school outreach program.',
                    'Learned various hospital programs such as ESM, Cerner PowerChart, Conversation Launcher, and COVaxON quickly and efficiently.'
                ]
            ],
            [
                'title' => 'Lab Development Assistant - Machine Health and Remote Monitoring',
                'company' => 'McMaster University, Faculty of Engineering',
                'yr' => 'Jun 2020 - Aug 2020',
                'description' => [
                    'Edited and re-wrote instructions for 5 projects to be repurposed for a virtual environment at the onset of the COVID-19 pandemic.',
                    'Learned to integrate Raspberry Pi, Arduino, and MQTT for IoT applications from scratch within a 1-week period to develop 4 new lab projects demonstrating their applications; optimized project development process resulted in 40% cut in production time.',
                    'Documented newly developed projects into detail manuals to be reproduced by students in a virtual environment.'
                ]
            ],
        ];

        $this->schools = [
            [
                'program' => 'Google Data Analytics Professional Certificate',
                'name' => 'Coursera',
                'yr' => 'Mar 2022 - Sep 2022',
                'description' => [
                    'Learned key analytical skills and how to clean and organize data for analysis and
                    complete analysis and calculations using spreadsheets, SQL, and R.',
                    'Visualized and presented data findings in dashboards and presentations with
                    visualization platforms such as Tableau.', '<b>Capstone Project:</b> Used R Studio to analyze ride patterns of 6 million users
                    of a bike sharing company to model a new marketing
                    strategy aimed at converting casual riders into annual members.',

                ]
            ],
            [
                'program' => 'Bachelor of Technology (Co-op) - Automation Engineering Technology',
                'name' => 'McMaster University',
                'yr' => 'Sep 2015 - Dec 2020',
                'description' => [
                    'Technical background with controls and hardware automation such as electric
                    sensors, motors and PID controllers as well as web development, OOP, data
                    manipulation, and IoT.',
                    'Business background in quality assurance, operations management, and project
                    management.', '<b>Capstone Project:</b> Developed a virtual tour of the McMaster University Learning Factory
                    using Unity game engine to showcase the use of virtual reality (VR) in a lab setting.',

                ]
            ],
        ];

        $this->skills = [
            [
                'category' => 'Languages',
                'skillset' => [
                    'SQL', 'R', 'PHP', 'HTML', 'CSS', 'Python', 'C++', 'Ruby',
                ]
            ],
            [
                'category' => 'Frameworks and Libraries',
                'skillset' => [
                    'Laravel', 'Alpine.js', 'Tailwind.css',
                ]
            ],
            [
                'category' => 'Visualization Programs',
                'skillset' => [
                    'Tableau', 'Power Bi',
                ]
            ],
            [
                'category' => 'AI and Machine Learning',
                'skillset' => [
                    'Matplotlib', 'Jupyter Notebook', 'MATLAB',
                ]
            ],
            [
                'category' => 'Office',
                'skillset' => [
                    'MS Office', 'MS Project',
                ]
            ],
            [
                'category' => 'Hardware Programming and Other',
                'skillset' => [
                    'Raspberry Pi', 'Arduino', 'MQTT', 'Oracle VM (Ubuntu)',
                ]
            ],
        ];

        $this->certifications = [
            ['name' => 'Google Data Analytics Professional Certificate', 'accredited' => 'Coursera'],
            ['name' => 'Bachelor of Technology - Automation Engineering Technology', 'accredited' => 'McMaster University'],
            ['name' => 'Chemical Engineering Technology - Process Automation Advanced Diploma', 'accredited' => 'Mohawk College'],
            ['name' => 'Business Management Certificate', 'accredited' => 'Mohawk College'],
            ['name' => 'Fanuc CERT Level 1 Certificate', 'accredited' => 'Mohawk College'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.resume');
    }
}
