<?php

namespace rklandesverband\ews\API\Type;

use rklandesverband\ews\API\Type;

/**
 * Class representing TaskRecurrenceType
 *
 *
 * XSD Type: TaskRecurrenceType
 *
 * @method RelativeYearlyRecurrencePatternType getRelativeYearlyRecurrence()
 * @method TaskRecurrenceType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method AbsoluteYearlyRecurrencePatternType getAbsoluteYearlyRecurrence()
 * @method TaskRecurrenceType setAbsoluteYearlyRecurrence(AbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence)
 * @method RelativeMonthlyRecurrencePatternType getRelativeMonthlyRecurrence()
 * @method TaskRecurrenceType setRelativeMonthlyRecurrence(RelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence)
 * @method AbsoluteMonthlyRecurrencePatternType getAbsoluteMonthlyRecurrence()
 * @method TaskRecurrenceType setAbsoluteMonthlyRecurrence(AbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence)
 * @method WeeklyRecurrencePatternType getWeeklyRecurrence()
 * @method TaskRecurrenceType setWeeklyRecurrence(WeeklyRecurrencePatternType $weeklyRecurrence)
 * @method DailyRecurrencePatternType getDailyRecurrence()
 * @method TaskRecurrenceType setDailyRecurrence(DailyRecurrencePatternType $dailyRecurrence)
 * @method DailyRegeneratingPatternType getDailyRegeneration()
 * @method TaskRecurrenceType setDailyRegeneration(DailyRegeneratingPatternType $dailyRegeneration)
 * @method WeeklyRegeneratingPatternType getWeeklyRegeneration()
 * @method TaskRecurrenceType setWeeklyRegeneration(WeeklyRegeneratingPatternType $weeklyRegeneration)
 * @method MonthlyRegeneratingPatternType getMonthlyRegeneration()
 * @method TaskRecurrenceType setMonthlyRegeneration(MonthlyRegeneratingPatternType $monthlyRegeneration)
 * @method YearlyRegeneratingPatternType getYearlyRegeneration()
 * @method TaskRecurrenceType setYearlyRegeneration(YearlyRegeneratingPatternType $yearlyRegeneration)
 * @method NoEndRecurrenceRangeType getNoEndRecurrence()
 * @method TaskRecurrenceType setNoEndRecurrence(NoEndRecurrenceRangeType $noEndRecurrence)
 * @method EndDateRecurrenceRangeType getEndDateRecurrence()
 * @method TaskRecurrenceType setEndDateRecurrence(EndDateRecurrenceRangeType $endDateRecurrence)
 * @method NumberedRecurrenceRangeType getNumberedRecurrence()
 * @method TaskRecurrenceType setNumberedRecurrence(NumberedRecurrenceRangeType $numberedRecurrence)
 */
class TaskRecurrenceType extends Type
{

    /**
     * @var \rklandesverband\ews\API\Type\RelativeYearlyRecurrencePatternType
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\AbsoluteYearlyRecurrencePatternType
     */
    protected $absoluteYearlyRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\RelativeMonthlyRecurrencePatternType
     */
    protected $relativeMonthlyRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\AbsoluteMonthlyRecurrencePatternType
     */
    protected $absoluteMonthlyRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\WeeklyRecurrencePatternType
     */
    protected $weeklyRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\DailyRecurrencePatternType
     */
    protected $dailyRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\DailyRegeneratingPatternType
     */
    protected $dailyRegeneration = null;

    /**
     * @var \rklandesverband\ews\API\Type\WeeklyRegeneratingPatternType
     */
    protected $weeklyRegeneration = null;

    /**
     * @var \rklandesverband\ews\API\Type\MonthlyRegeneratingPatternType
     */
    protected $monthlyRegeneration = null;

    /**
     * @var \rklandesverband\ews\API\Type\YearlyRegeneratingPatternType
     */
    protected $yearlyRegeneration = null;

    /**
     * @var \rklandesverband\ews\API\Type\NoEndRecurrenceRangeType
     */
    protected $noEndRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\EndDateRecurrenceRangeType
     */
    protected $endDateRecurrence = null;

    /**
     * @var \rklandesverband\ews\API\Type\NumberedRecurrenceRangeType
     */
    protected $numberedRecurrence = null;
}
