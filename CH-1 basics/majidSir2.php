<?php
  /*   abmajid saheb bazare 5000 taka niye gelo tini 55 taka dore 5kg chal kinlo, 855.50 dore 500g mach kinlo, 500 takar sobji kinlo and tar ek bondhur sathe dekha holo tini take soho tinio 35 takar cha biscut khailo and tar bondhur kas theke 300 taka paito seti tar bondhu take dilo tahole abmajid saheber kase koto taka thaklo */

    $balance=5000;
    $rice_cost=(55*5);
    $fish_cost=(855.5/2);
    $vegetable_cost=500;
    $others_cost=35;
    $add_bal=300;
    $total_bal=(($balance+$add_bal)-($rice_cost+$fish_cost+$vegetable_cost+$others_cost));
    echo ("His total balance is: ".$total_bal." tk");

?>
<!-- jodi kono baktir 50000> Bs hoi tahole tar HR-60, MA-70, PF-20
	abr jodi kono baktir 70000> Bs tahole tar HR-65, MA-75, PF-23
	abr jodi kono baktir 90000> Bs tahole tar HR-70, MA-80, PF-24
	abr jodi kono baktir 100000> Bs tahole tar HR-75, MA-85, PF-25

	tahole je baktir bs input dibo tar 
	bs=?
	hr=?
	ma=?
	pf=?
	total_salary=? -->