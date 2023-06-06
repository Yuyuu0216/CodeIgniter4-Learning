<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function testfunc(){
        $data = [
            'title'     => 'Table LAB',
            'heading'   => 'SDLC',
            'todo_list' => [
                'Week_1' => [
                    'Requirement Gathering and Analysis',
                    'You should analyze relevant requirements and create an SRS (Software Requirement Specification) file.',
                ],
                'Week_2' => [
                    'Design',
                    'Follow the SRS to design the software architecture (OOD) and technology selection.',
                ],
                'Week_3' => [
                    'Implementation or Coding',
                    'Follow the SRS and above design to implement your project (OOP).',
                ],
                'Week_4' => [
                    'Testing',
                    'Follow the SRS and above design to test your project and fix the bugs to achieve the clients requirements.'
                ],
                'Week_5' => [
                    'Deployment',
                    'Deploy your project under the UAT (User Acceptance Testing) environment.',
                ],
                'Week_6' => [
                    'Maintenance',
                    'Follow the SRS to maintain your project.',
                ],
            ]
        ];

        echo view('test_view_file', $data);
    }
}
