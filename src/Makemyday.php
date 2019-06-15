<?php
declare(strict_types=1);

namespace baddoctor\makemyday;


class Makemyday implements MakemydayInterface
{
    private $days = ['good', 'bad'];

    public function go(): string
    {
        return $this->days[random_int(0, count($this->days) - 1)];
    }
}