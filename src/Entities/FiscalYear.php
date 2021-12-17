<?php


namespace Webparking\LaravelVisma\Entities;

use Illuminate\Support\Collection;

class FiscalYear extends BaseEntity
{
    /** @var string */
    protected $endpoint = '/fiscalyears';

    public function index(): collection
    {
        return $this->baseIndex();
    }
}
