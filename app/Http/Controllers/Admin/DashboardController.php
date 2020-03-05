<?php

namespace App\Http\Controllers\Admin;

use App\Charts\CountAdSortChart;
use App\Charts\CountCategoryChart;
use App\Charts\CountDurationChart;
use App\Charts\CountOfferChart;
use App\Charts\CountPremiumChart;
use App\Charts\CountSortChart;
use App\Charts\EstateAddingByMonth;
use App\Charts\LawyersByMonth;
use App\Charts\OfficesByMonth;
use App\Charts\TopFiveUsersChart;
use App\Charts\UsersByMonth;
use App\Estate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;

class DashboardController extends Controller
{
    protected $monthLabels;

    public function __construct()
    {
        $this->monthLabels =  ['يناير', 'فبراير', 'مارس', 'إبريل','مايو','يونيو','يوليو','أغسطس','سبتمبر','أكتوبر','نوفمبر','ديسمبر'];
    }

    public function index()
    {
        $estatesByAdSortInMonths = [];

        for($i = 1; $i < 9; $i++){
            $estatesByAdSortInMonths[$i] = [];
            for($j = 1; $j < 13; $j++){
                array_push($estatesByAdSortInMonths[$i],Estate::FindByMonth($j, $i));
            }
        }
         
       
        $estateAddingByMonth = new EstateAddingByMonth;
        $estateAddingByMonth->labels = ($this->monthLabels);
        for($i = 1; $i < 9; $i++){
            $estateAddingByMonth->dataset('My dataset', 'line', $estatesByAdSortInMonths[$i]);
        }


        //$roles = Role::all();
        /*foreach($roles as $role)//{
            dd(Role::whereName($role->name)->first()->users);
        }*/

        $usersByMonth = new UsersByMonth;
        $usersByMonth->labels = ($this->monthLabels);

        $usersInMonth = [];
        for($j = 1; $j < 13; $j++){
            array_push($usersInMonth,User::FindUsersByMonth($j));
        }

        $usersByMonth->dataset('My dataset', 'line', $usersInMonth);
        $usersByMonth->height(200);
        $usersByMonth->displayAxes(false);
        $usersByMonth->displayLegend(false);

        

        $officesByMonth = new OfficesByMonth;
        $officesByMonth->labels = ($this->monthLabels);

        $officesInMonth = [];
        for($j = 1; $j < 13; $j++){
            array_push($officesInMonth,User::FindOfficesByMonth($j));
        }

        $officesByMonth->dataset('My dataset', 'line', $officesInMonth);
        $officesByMonth->height(200);
        $officesByMonth->displayAxes(false);
        $officesByMonth->displayLegend(false);





        $lawyersByMonth = new LawyersByMonth;
        $lawyersByMonth->labels = ($this->monthLabels);

        $lawyersInMonth = [];
        for($j = 1; $j < 13; $j++){
            array_push($lawyersInMonth,User::FindLawyersByMonth($j));
        }

        $lawyersByMonth->dataset('My dataset', 'line', $lawyersInMonth);
        $lawyersByMonth->height(200);
        $lawyersByMonth->displayAxes(false);
        $lawyersByMonth->displayLegend(false);


        $countUsers = User::CountUsers();
        $countOffices = User::CountOffices();
        $countLawyers = User::CountLawyers();
        $countEstates = Estate::count();



        $countPremiums = Estate::CountPremiums();
       
        $countPremiumChart = new CountPremiumChart;
        $countPremiumChart->labels = array_keys($countPremiums);
        $resultCountPremiums = array_values($countPremiums);
        $countPremiumChart->dataset('My dataset', 'bar', $resultCountPremiums);


        $countDurations = Estate::CountDurations();

        $countDurationChart = new CountDurationChart;
        $countDurationChart->labels = array_keys($countDurations);
        $resultCountDurations = array_values($countDurations);
        $countDurationChart->dataset('My dataset', 'pie', $resultCountDurations);


        $countOffers = Estate::CountOffers();

        $countOfferChart = new CountOfferChart;
        $countOfferChart->labels = array_keys($countOffers);
        $resultCountOffers = array_values($countOffers);
        $countOfferChart->dataset('My dataset', 'pie', $resultCountOffers);


        $countSorts = Estate::CountSorts();

        $countSortChart = new CountSortChart;
        $countSortChart->labels = array_keys($countSorts);
        $resultCountSorts = array_values($countSorts);
        $countSortChart->dataset('My dataset', 'pie', $resultCountSorts);


        $countAdSorts = Estate::CountAdSorts();

        $countAdSortChart = new CountAdSortChart;
        $countAdSortChart->labels = array_keys($countAdSorts);
        $resultCountAdSorts = array_values($countAdSorts);
        $countAdSortChart->dataset('My dataset', 'pie', $resultCountAdSorts);


        $countCategories = Estate::CountCategories();

        $countCategoryChart = new CountCategoryChart;
        $countCategoryChart->labels = array_keys($countCategories);
        $resultCountCategories = array_values($countCategories);
        $countCategoryChart->dataset('My dataset', 'pie', $resultCountCategories);
        



        $topFiveUsers = User::TopFiveUserEstates();
        $topFiveUserNames = [];
        $topFiveUserEstates = [];
        foreach ($topFiveUsers as $user) {
            array_push($topFiveUserNames, $user->name);
            array_push($topFiveUserEstates, $user->estates_count);
        }

        $topFiveUsersChart = new TopFiveUsersChart;
        $topFiveUsersChart->labels = $topFiveUserNames;
        $topFiveUsersChart->dataset('My dataset', 'pie', $topFiveUserEstates);

        

        return view('admin.dashboard', compact('estateAddingByMonth', 'usersByMonth', 'officesByMonth', 'lawyersByMonth', 'countUsers', 'countOffices', 'countLawyers', 'countEstates', 'countPremiumChart', 'countDurationChart', 'countOfferChart' , 'countSortChart' , 'countAdSortChart' , 'countCategoryChart', 'topFiveUsersChart'));
    }
}
