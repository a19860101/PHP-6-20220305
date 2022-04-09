<?php
    class Hero {
        //屬性
        public $name;
        public $nickname;
        public $role;
        public $skill;
        //方法
    }

    $userA = new Hero;
    $userA->name = '阿璃';
    $userA->nickname = '九尾妖狐';
    $userA->role = '法師';
    $userA->skill = ['飛仙','幻玉','魅火','傾城','銷魂'];

   

    echo $userA -> nickname;

    $userB = new Hero;
    $userB->name = '伊芙琳';
    $userB->nickname = '臨終擁抱';
    $userB->role = '刺客    ';
    $userB->skill = ['魔魅之影','憎恨尖刺','咒慾迷塵','奪魂鞭索','殘戮收割'];
    var_dump($userA);
    var_dump($userB);