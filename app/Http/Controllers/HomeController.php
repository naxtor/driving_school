<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function show(): View
    {
        // Only return homepage view
        // And using static data
        return view('homepage', [
            'schedules' => [
                [
                    'day' => 'Monday',
                    'hours' => '13:00 to 17:00',
                    'duration' => '1 hours',
                ],
                [
                    'day' => 'Wednesday',
                    'hours' => '08:00 to 12:00',
                    'duration' => '1 hours',
                ],

                [
                    'day' => 'Friday',
                    'hours' => '13:00 to 17:00',
                    'duration' => '1 hours',
                ],
                [
                    'day' => 'Saturday',
                    'hours' => '08:00 to 12:00',
                    'duration' => '1 hours',
                ],
            ],
            'packages' => [
                [
                    'name' => 'Student',
                    'description' => 'A plan for student',
                    'price' => 'IDR 1.500.000',
                ],
                [
                    'name' => 'Citizen',
                    'description' => 'A plan for citizen',
                    'price' => 'IDR 3.000.000',
                ],
                [
                    'name' => 'Professional',
                    'description' => 'A plan for professional',
                    'price' => 'IDR 5.000.000',
                ],
            ],
            'trainers' => [
                [
                    'name' => 'Lindsay Walton',
                    'position' => 'Trainer',
                    'image' => 'https://images.unsplash.com/photo-1566492031773-4f4e44671857?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80'
                ],
                [
                    'name' => 'Courtney Henry',
                    'position' => 'Trainer',
                    'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'
                ],
                [
                    'name' => 'Tom Cook',
                    'position' => 'Trainer',
                    'image' => 'https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=749&q=80'
                ],
            ],
            'staffs' => [
                [
                    'name' => 'Muhammad',
                    'position' => 'CEO',
                    'image' => 'https://images.unsplash.com/photo-1508835277982-1c1b0e205603?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80'
                ],
                [
                    'name' => 'Nabil',
                    'position' => 'CTO',
                    'image' => 'https://images.unsplash.com/photo-1542190891-2093d38760f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80'
                ],
                [
                    'name' => 'Faris',
                    'position' => 'COO',
                    'image' => 'https://images.unsplash.com/photo-1557389767-53dbcb02fc98?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80'
                ],
            ],
            'vehicles' =>  [
                [
                    'name' => 'Toyota Yaris',
                    'image' => 'https://images.unsplash.com/photo-1647269826024-2bf241770b6b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80',
                    'type' => 'Matic/Manual',
                ],
                [
                    'name' => 'Honda Civic',
                    'image' => 'https://images.unsplash.com/photo-1542046272227-d247df21628a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80',
                    'type' => 'Matic/Manual',
                ],
                [
                    'name' => 'Toyota Fortuner',
                    'image' => 'https://images.unsplash.com/photo-1557863618-9643198cb07b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
                    'type' => 'Manual',
                ],
            ]
        ]);
    }
}
