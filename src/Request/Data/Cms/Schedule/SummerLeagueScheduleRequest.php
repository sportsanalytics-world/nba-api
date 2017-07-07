<?php

namespace JasonRoman\NbaApi\Request\Data\Cms\Schedule;

use Symfony\Component\Validator\Constraints as Assert;
use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Request\AbstractDataRequest;
use JasonRoman\NbaApi\Params\Data\TeamSlugParam;

/**
 * Get a team's summer league schedule.
 */
class SummerLeagueScheduleRequest extends AbstractDataRequest
{
    const ENDPOINT = '/json/sl/cms/{year}/team/{teamSlug}/schedule.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2015)
     *
     * @var int
     */
    public $year;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(TeamSlugParam::OPTIONS)
     *
     * @var string
     */
    public $teamSlug;
}