<?php


namespace Webparking\LaravelVisma\Entities;

use Carbon\Carbon;
use Illuminate\Support\Collection;

class AccountBalance extends BaseEntity
{
    /** @var string */
    protected $endpoint = '/accountbalances';

    public function get(Carbon $date, string $accountNumber): ?object
    {
        $this->endpoint .= '/' . $accountNumber;
        $this->endpoint .= '/' . $date->format('Y-m-d');

        return $this->baseGet();
    }

    public function index(Carbon $date): collection
    {
        $this->endpoint .= '/' . $date->format('Y-m-d');

        return $this->baseIndex();
    }
}
