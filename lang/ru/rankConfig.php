<?php

class rankConfig
{
    /* Rank names */
    protected $rankName = [
        0 => 'Newbie',
        1 => '6Q',
        2 => '5Q',
        3 => '4Q',
        4 => '3Q',
        5 => '2Q',
        6 => '1Q',
        7 => '1 DAN',
        8 => '2 DAN',
        9 => '3 DAN',
        10 => '4 DAN',
        11 => '5 DAN',
        12 => '6 DAN',
        13 => '7 DAN',
        14 => '8 DAN',
        15 => '9 DAN',
        16 => '10 DAN',
        ];
        /* Color with '#'. HTML COLOR */
    protected $rankColor = [
        0 => '#f2f3f4',
        1 => '#ffba00',
        2 => '#cc1d00',
        3 => '#4f7942',
        4 => '#4169e1',
        5 => '#b15ec4',
        6 => '#654321',
        7 => '#000000',
        8 => '#000000',
        9 => '#000000',
        10 => '#000000',
        11 => '#000000',
        12 => '#000000',
        13 => '#000000',
        14 => '#000000',
        15 => '#000000',
        16 => '#000000',
        ];

    protected $statusCode = [
        0 => 'Sent on server'
    ];

    public function __construct()
    {

    }

    public function getRankName()
    {
        return $this->rankName;
    }

    public function getRankColor()
    {
        return $this->rankColor;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}