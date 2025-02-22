<?php

namespace USHolidays\Traits;

use USHolidays\Carbon;
use USHolidays\Traits\Holidays\AprilFoolsDay;
use USHolidays\Traits\Holidays\ArmedForcesDay;
use USHolidays\Traits\Holidays\AshWednesday;
use USHolidays\Traits\Holidays\BlackFriday;
use USHolidays\Traits\Holidays\ChristmasDay;
use USHolidays\Traits\Holidays\ChristmasEve;
use USHolidays\Traits\Holidays\CincoDeMayo;
use USHolidays\Traits\Holidays\ColumbusDay;
use USHolidays\Traits\Holidays\DaylightSavingEnd;
use USHolidays\Traits\Holidays\DaylightSavingStart;
use USHolidays\Traits\Holidays\EarthDay;
use USHolidays\Traits\Holidays\Easter;
use USHolidays\Traits\Holidays\FathersDay;
use USHolidays\Traits\Holidays\FlagDay;
use USHolidays\Traits\Holidays\GoodFriday;
use USHolidays\Traits\Holidays\GroundhogDay;
use USHolidays\Traits\Holidays\Halloween;
use USHolidays\Traits\Holidays\Hanukkah;
use USHolidays\Traits\Holidays\IndependenceDay;
use USHolidays\Traits\Holidays\IndigenousPeoplesDay;
use USHolidays\Traits\Holidays\Juneteenth;
use USHolidays\Traits\Holidays\Kwanzaa;
use USHolidays\Traits\Holidays\LaborDay;
use USHolidays\Traits\Holidays\MemorialDay;
use USHolidays\Traits\Holidays\MLKDay;
use USHolidays\Traits\Holidays\MothersDay;
use USHolidays\Traits\Holidays\NewYearsDay;
use USHolidays\Traits\Holidays\NewYearsEve;
use USHolidays\Traits\Holidays\OrthodoxEaster;
use USHolidays\Traits\Holidays\PalmSunday;
use USHolidays\Traits\Holidays\Passover;
use USHolidays\Traits\Holidays\PatriotsDay;
use USHolidays\Traits\Holidays\PearlHarborRemembrance;
use USHolidays\Traits\Holidays\PresidentsDay;
use USHolidays\Traits\Holidays\RoshHashanah;
use USHolidays\Traits\Holidays\StPatricksDay;
use USHolidays\Traits\Holidays\TaxDay;
use USHolidays\Traits\Holidays\Thanksgiving;
use USHolidays\Traits\Holidays\ValentinesDay;
use USHolidays\Traits\Holidays\VeteransDay;
use USHolidays\Traits\Holidays\YomKippur;

trait Holiday
{
    use AprilFoolsDay;
    use ArmedForcesDay;
    use AshWednesday;
    use BlackFriday;
    use ChristmasDay;
    use ChristmasEve;
    use CincoDeMayo;
    use ColumbusDay;
    use DaylightSavingEnd;
    use DaylightSavingStart;
    use EarthDay;
    use Easter;
    use FathersDay;
    use FlagDay;
    use GoodFriday;
    use GroundhogDay;
    use Halloween;
    use Hanukkah;
    use IndependenceDay;
    use IndigenousPeoplesDay;
    use Juneteenth;
    use Kwanzaa;
    use LaborDay;
    use MemorialDay;
    use MLKDay;
    use MothersDay;
    use NewYearsDay;
    use NewYearsEve;
    use OrthodoxEaster;
    use PalmSunday;
    use Passover;
    use PatriotsDay;
    use PearlHarborRemembrance;
    use PresidentsDay;
    use RoshHashanah;
    use StPatricksDay;
    use TaxDay;
    use Thanksgiving;
    use ValentinesDay;
    use VeteransDay;
    use YomKippur;

    /**
     * Get holiday data
     *
     * @param int|null $year The year to get the holidays in
     */
    private function holidays( $year = null ) {
        $this->setTime(0,0,0);
        $holidays = array(
            array(
                'name' => "April Fool's Day",
                'search_names' => ["APRIL FOOL'S DAY", "APRIL FOOLS DAY", "APRIL FOOLS"],
                'date' => function() use ($year) {
                    return $this->setAprilFoolsDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Armed Forces Day",
                'search_names' => ["ARMED FORCES DAY"],
                'date' => function() use ($year) {
                    return $this->setArmedForcesDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Ash Wednesday",
                'search_names' => ["ASH WEDNESDAY"],
                'date' => function() use ($year) {
                    return $this->setAshWednesday($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Black Friday",
                'search_names' => ["BLACK FRIDAY", "DAY AFTER THANKSGIVING"],
                'date' => function() use ($year) {
                    return $this->setBlackFriday($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Christmas Day",
                'search_names' => ["CHRISTMAS DAY", "CHRISTMAS"],
                'date' => function() use ($year) {
                    return $this->setChristmasDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Christmas Eve",
                'search_names' => ["CHRISTMAS EVE"],
                'date' => function() use ($year) {
                    return $this->setChristmasEve($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Cinco de Mayo",
                'search_names' => ["CINCO DE MAYO"],
                'date' => function() use ($year) {
                    return $this->setCincoDeMayo($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Columbus Day",
                'search_names' => ["COLUMBUS DAY"],
                'date' => function() use ($year) {
                    return $this->setColumbusDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Daylight Saving (End)",
                'search_names' => ["DAYLIGHT SAVING (END)", "DAYLIGHT SAVING END", "DAYLIGHT SAVINGS (END)", "DAYLIGHT SAVINGS END"],
                'date' => function() use ($year) {
                    return $this->setDaylightSavingEnd($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Daylight Saving (Start)",
                'search_names' => ["DAYLIGHT SAVING (START)", "DAYLIGHT SAVING START", "DAYLIGHT SAVINGS (START)", "DAYLIGHT SAVINGS START"],
                'date' => function() use ($year) {
                    return $this->setDaylightSavingStart($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Earth Day",
                'search_names' => ["EARTH DAY"],
                'date' => function() use ($year) {
                    return $this->setEarthDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Easter",
                'search_names' => ["EASTER"],
                'date' => function() use ($year) {
                    return $this->setEaster($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Father's Day",
                'search_names' => ["FATHER'S DAY", "FATHERS DAY"],
                'date' => function() use ($year) {
                    return $this->setFathersDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Flag Day",
                'search_names' => ["FLAG DAY"],
                'date' => function() use ($year) {
                    return $this->setFlagDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Good Friday",
                'search_names' => ["GOOD FRIDAY"],
                'date' => function() use ($year) {
                    return $this->setGoodFriday($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Groundhog Day",
                'search_names' => ["GROUNDHOG DAY", "GROUNDHOGS DAY"],
                'date' => function() use ($year) {
                    return $this->setGroundhogDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Halloween",
                'search_names' => ["HALLOWEEN"],
                'date' => function() use ($year) {
                    return $this->setHalloween($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Hanukkah",
                'search_names' => ["HANUKKAH"],
                'date' => function() use ($year) {
                    return $this->setHanukkah($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Independence Day",
                'search_names' => ["INDEPENDENCE DAY", "FORUTH OF JULY", "4TH OF JULY"],
                'date' => function() use ($year) {
                    return $this->setIndependenceDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Indigenous Peoples' Day",
                'search_names' => ["INDIGENOUS PEOPLES' DAY", "INDIGENOUS PEOPLES DAY"],
                'date' => function() use ($year) {
                    return $this->setIndigenousPeoplesDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Juneteenth",
                'search_names' => ["JUNETEENTH"],
                'date' => function() use ($year) {
                    return $this->setJuneteenth($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Kwanzaa",
                'search_names' => ["KWANZAA"],
                'date' => function() use ($year) {
                    return $this->setKwanzaa($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Labor Day",
                'search_names' => ["LABOR DAY"],
                'date' => function() use ($year) {
                    return $this->setLaborDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Memorial Day",
                'search_names' => ["MEMORIAL DAY"],
                'date' => function() use ($year) {
                    return $this->setMemorialDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Martin Luther King Jr. Day",
                'search_names' => ["MARTIN LUTHER KING JR. DAY", "MARTIN LUTHER KING JR DAY", "MLK DAY"],
                'date' => function() use ($year) {
                    return $this->setMLKDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Mother's Day",
                'search_names' => ["MOTHER'S DAY", "MOTHERS DAY"],
                'date' => function() use ($year) {
                    return $this->setMothersDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "New Year's Day",
                'search_names' => ["NEW YEAR'S DAY", "NEW YEARS DAY", "NEW YEARS"],
                'date' => function() use ($year) {
                    return $this->setNewYearsDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "New Year's Eve",
                'search_names' => ["NEW YEAR'S EVE", "NEW YEARS EVE"],
                'date' => function() use ($year) {
                    return $this->setNewYearsEve($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Orthodox Easter",
                'search_names' => ["ORTHODOX EASTER"],
                'date' => function() use ($year) {
                    return $this->setOrthodoxEaster($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Palm Sunday",
                'search_names' => ["PALM SUNDAY"],
                'date' => function() use ($year) {
                    return $this->setPalmSunday($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Passover",
                'search_names' => ["PASSOVER"],
                'date' => function() use ($year) {
                    return $this->setPassover($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Patriot Day",
                'search_names' => ["PATRIOT DAY"],
                'date' => function() use ($year) {
                    return $this->setPatriotsDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Pearl Harbor Remembrance Day",
                'search_names' => ["PEARL HARBOR REMEMBRANCE DAY"],
                'date' => function() use ($year) {
                    return $this->setPearlHarborRemembrance($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Presidents' Day",
                'search_names' => ["PRESIDENTS' DAY", "PRESIDENTS DAY"],
                'date' => function() use ($year) {
                    return $this->setPresidentsDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Rosh Hashanah",
                'search_names' => ["ROSH HASHANAH"],
                'date' => function() use ($year) {
                    return $this->setRoshHashanah($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "St. Patrick's Day",
                'search_names' => ["ST. PATRICK'S DAY", "ST PATRICKS DAY", "ST. PATRICKS DAY", "SAINT PATRICKS DAY"],
                'date' => function() use ($year) {
                    return $this->setStPatricksDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Tax Day",
                'search_names' => ["TAX DAY"],
                'date' => function() use ($year) {
                    return $this->setTaxDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Thanksgiving",
                'search_names' => ["THANKSGIVING"],
                'date' => function() use ($year) {
                    return $this->setThanksgiving($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Valentine's Day",
                'search_names' => ["VALENTINE'S DAY", "VALENTINES DAY", "VALENTINES"],
                'date' => function() use ($year) {
                    return $this->setValentinesDay($year);
                },
                'bank_holiday' => false
            ),
            array(
                'name' => "Veterans Day",
                'search_names' => ["VETERANS DAY"],
                'date' => function() use ($year) {
                    return $this->setVeteransDay($year);
                },
                'bank_holiday' => true
            ),
            array(
                'name' => "Yom Kippur",
                'search_names' => ["YOM KIPPUR"],
                'date' => function() use ($year) {
                    return $this->setYomKippur($year);
                },
                'bank_holiday' => false
            ),
        );

        foreach ($holidays as $key => $holiday) {
            if(!in_array($holiday['name'], $this->holidayArray) && !array_intersect($holiday['search_names'], $this->holidayArray)) {
                unset($holidays[$key]);
            }

            if($this->bankHolidayArray != ['default']) {
                if(in_array($holiday['name'], $this->bankHolidayArray) || array_intersect($holiday['search_names'], $this->bankHolidayArray)) {
                    $holidays[$key]['bank_holiday'] = true;
                } else {
                    $holidays[$key]['bank_holiday'] = false;
                }
            }
        }

        $userHolidays = $this->userAddedHolidays;

        foreach ($userHolidays as $userHoliday) {

            if(is_callable($userHoliday['date'])) {
                $date = $userHoliday['date'];
            } else {
                $date = function() use ($year, $userHoliday) {
                    $day = $userHoliday['date']->day;
                    $month = $userHoliday['date']->month;
                    return Carbon::create($year, $month, $day, 0, 0, 0);
                };
            }

            $bankHoliday = $userHoliday['bank_holiday'];

            array_push($holidays,
                array(
                    'name' => $userHoliday['name'],
                    'search_names' => [\strtoupper($userHoliday['name']), \strtoupper(\str_replace("'", '', $userHoliday['name']))],
                    'date' => $date,
                    'bank_holiday' => $bankHoliday
                )
            );
        }

        return array_values($holidays);
    }
}
