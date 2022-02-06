<?php

namespace Database\Seeders;

use App\Models\AboutusSetup;
use App\Models\BasicSetup;
use App\Models\Portfolio;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Database\Seeder;
use App\Models\PersonalSetup;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
   {
        // \App\Models\User=>=>factory(10)->create();
        $skills = [
            [

              "skill"=> "HTML",
              "score"=> "100"
            ],
            [

              "skill"=> "CSS",
              "score"=> "90"
            ],
            [

              "skill"=> "PHP",
              "score"=> "75"
            ],
            [

                "skill"=> "Laravel",
                "score"=> "80"
              ],
            [

              "skill"=> "MYSQL",
              "score"=> "75"
            ],
            [

              "skill"=> "Javascript",
              "score"=> "70"
            ],

            [

              "skill"=> "Bootstrap",
              "score"=> "50"
            ]
                        ];


            Skill::insert($skills);

           $BasicSetup= [
                [

                  "title"=> "Bakioui Souhail",
                  "description"=> "Développeur informatique à la\r\nrecherche d’un nouveau challenge,\r\npossédant une expérience sur la\r\ncréation des sites web, et je suis\r\navant tout quelqu’un qui souhaite\r\naider à faire grandir les entreprises",
                  "keyword"=> "web development,php development",
                  "icon"=> "profile-img.ico"
                ]
                ];
            BasicSetup::insert($BasicSetup);

            $AboutusSetup=[
                [

                  "shortdesc"=> "“Développeur informatique à la\r\nrecherche d’un nouveau challenge,\r\npossédant une expérience sur la\r\ncréation des sites web, et je suis\r\navant tout quelqu’un qui souhaite\r\naider à faire grandir les entreprises.”",
                  "heading"=> "DÉVELOPPEUR FULL STACK",
                  "subheading"=> "",
                  "longdesc"=> "",
                  "website"=> "https://www.devninja.com",
                  "dob"=> "14 July, 1999"
                ]
                ];
                AboutusSetup::insert($AboutusSetup);

$resume=
[
    [

      "category"=> "e",
      "title"=> "Diploma in Technician Specialized in Computer Development",
      "year"=> "2018 - 2020",
      "ogname"=> "ISTA ISMONTIC, Tanger",
      "workdesc"=> ""
    ],
    [

      "category"=> "pe",
      "title"=> "Agent Mailer",
      "year"=> "2020-2021",
      "ogname"=> "Cloud Marketing Hub ",
      "workdesc"=> ""
    ],
    [

      "category"=> "e",
      "title"=> "Baccalaureate Life & Earth Science\r\n",
      "year"=> "2016-2017",
      "ogname"=> "Lycée Ibn Al Khateb, Tanger",
      "workdesc"=> ""
    ],
    [

      "category"=> "pe",
      "title"=> "STAGE:DÉVELOPPEUR FULL STACK",
      "year"=> "2020-2021 (5 mois)",
      "ogname"=> "HR Factory",
      "workdesc"=> " "
    ]
    ];
Resume::insert($resume);

$portofolio=[
    [

      "projectname"=>"LOUERMAISONS.COM\r\n\r\n",
      "projectpic"=>"portfolio-1.jpg",
      "projectlink"=>"http://agencetanger.great-site.net/"
    ],
    [

      "projectname"=>"SHBMEDIA",
      "projectpic"=>"portfolio-2.jpg",
      "projectlink"=>"http://shbmedia.great-site.net/"
    ],
    [

      "projectname"=>"SHB_Bibliothèque",
      "projectpic"=>"portfolio-3.png",
      "projectlink"=>"https://sleepy-thompson-f16780.netlify.app/"
    ],
    [

      "projectname"=>"Motivation",
      "projectpic"=>"Motivation.png",
      "projectlink"=>"https://motivationwithus.herokuapp.com/"
    ],
    [

      "projectname"=>"Dashboard Pro",
      "projectpic"=>"Dashboard.png",
      "projectlink"=> "http://dahsboardlaravel.freecluster.eu/"
    ]
];

Portfolio::insert($portofolio);

$Personnel=[
    [

      "profilepic"=> "profile-img.jpg",
      "name"=> "Bakioui Souhail",
      "twitter"=> "",
      "facebook"=> "https://www.facebook.com/Sohail.bakkiwi/",
      "instagram"=> "",
      "skype"=> "",
      "linkedin"=> "https://www.linkedin.com/in/ousbouane-bakioui-souhail-1199011b1/",
      "github"=> "https://github.com/souhailbakioui",
      "homewallpaper"=> "hero-bg.jpg",
      "professions"=> "Web Developer,PHP Developer,Graphic Designer,Flutter Developer",
      "location"=> "B 14 Res. Hamza Rte de Tetouan\r\nMghohga, Tanger",
      "mobile"=> "0614038064",
      "emailid"=> "bakiouuisohail@gmail.com"
    ]
    ];
    PersonalSetup::insert($Personnel);

            }
        }
