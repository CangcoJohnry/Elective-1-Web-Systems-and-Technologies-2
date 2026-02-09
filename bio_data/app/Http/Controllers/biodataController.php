<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $name = "Johnry P. Cangco";
        $position = "Software Engineer";
        $age = 21;
        $gender = "Male";
        $nationality = "Filipino";
        $bio = "Results-driven Developer specializing in full-stack web systems. Focused on writing clean, maintainable code and optimizing user experiences to help organizations scale.";
        $path = "images/image.jpg";

        $contacts = [
            'phone' => '09279634827',
            'email' => '23ur0562@psu.edu.ph',
            'address' => 'Ungab Cuyapo Nueva Ecija',
            'linkedin' => 'linkedin.com/in/johnry-cangco',
            'github' => 'github.com/CangcoJohnry',

        ];

        $education = [
            'tertiary' => [
                'year' => 'Tertiary: 2023-Present',
                'degree' => 'Bachelor of Science in Information Technology',
                'school' => 'Pangasinan State University',
                'details' => 'Major in Web & Mobile Technologies'
            ],
            'secondary' => [
                'year' => 'Secondary: 2015-2023',
                'school' => 'OLRA College Foundation Inc.',
                'details' => '',
            ],
            'primary' => [
                'year' => 'Primary: 2009-2015',
                'school' => 'Dr. A Ongsiako Sr. Elementary School',
                'details' => '',
            ]
        ];

        $experience = "N/A";

        $skills = ['Laravel', 'Java', 'Dart', 'PHP', 'Flutter', 'HTML/CSS', 'MySQL'];

        return view('biodata', compact(
            'name',
            'position',
            'age',
            'nationality',
            'gender',
            'contacts',
            'education',
            'experience',
            'skills',
            'bio',
            'path'
        ));
    }
}