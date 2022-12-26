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
                'title' => 'Lab Development Assistant - Machine Health and Remote Monitoring',
                'company' => 'McMaster University, Faculty of Engineering',
                'yr' => 'Jun 2020 - Aug 2020',
                'description' => [
                    'Assisted the Bachelor of Technology Program Chair with editing and writing lab
                    instructions for the Machine Health and Remote Monitoring course to be
                    suitable for a virtual environment due to the COVID-19 pandemic.',
                    'Developed lab projects which integrate the use of Raspberry Pi, Arduino, and
                    MQTT for IoT applications and then documented them into detailed manuals to
                    be reproduced by students.',
                    'Employed critical thinking and problem-solving skills in an independent work-from-
                    home environment when developing projects, cutting time by up to 30%
                    and beating deadlines.'
                ]
            ],
            [
                'title' => 'Web Developer Intern',
                'company' => 'Empower Health',
                'yr' => 'Jun 2019 - Aug 2019',
                'description' => [
                    'Utilized critical thinking and problem-solving skills to develop Ruby scripts that
                    would retrieve healthcare practitioner and provider data from various health
                    websites to help marginalized communities connect to providers.',
                    'Processed the records of 5000 healthcare practitioners and over 1500 providers
                    by applying knowledge in HTML, JavaScript, JSON, and Nokogiri to retrieve and
                    parse data.'
                ]
            ],
            [
                'title' => 'System Analyst/Web Developer',
                'company' => 'McMaster University, Faculty of Engineering',
                'yr' => 'Jan 2018 - Dec 2018',
                'description' => [
                    'Gained working knowledge of PHP, HTML, CSS, MySQL and applied that
                    knowledge to develop an understanding of Laravel 5 and relational databases.',
                    'Enhanced problem-solving, teamwork, and communication skills by
                    collaborating with co-workers to troubleshoot programming errors daily.',
                    'Worked with multi-disciplinary team to develop a web application that marked
                    CAD assignments submitted by students, with key responsibilities in developing
                    and assigning roles and permissions.'
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
                    visualization platforms such as Tableau.', '<b>Capstone Project:</b> Identified how annual members and casual riders utilize the services
                    of a bike sharing company differently to model a new marketing
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
                    using Unity game engine and deployed it on a Firebase website to
                    showcase the use of virtual reality (VR) in a lab setting.',

                ]
            ],
        ];

        $this->skills = [
            [
                'category' => 'Languages',
                'skillset' => [
                    'SQL', 'R', 'PHP', 'HTML', 'CSS', 'Python', 'C++', 'Ruby', 'VB',
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
                    'Raspberry Pi', 'Arduino', 'MQTT', 'LabVIEW', 'Oracle VM (Ubuntu)',
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
