<?php
declare(strict_types = 1);

namespace baddoctor\makemyday;

/**
 * Class Makemyday
 */
class Makemyday implements MakemydayInterface
{
    private $vocablurary = ['very good', 'superb', 'outstanding', 'exceptional', 'marvelous', 'wonderful', 'magnificent', 'preeminent', 'perfect', 'matchless', 'unbeatable', 'peerless', 'supreme', 'prime', 'first-rate', 'first-class', 'superlative', 'splendid', 'fine', 'beautiful', 'exemplary', 'A1', 'ace', 'great', 'terrific', 'tremendous', 'fantastic', 'fabulous', 'splendiferous', 'fab', 'top-notch', 'dandy', 'divine', 'blue-ribbon', 'blue-chip', 'bang-up', 'skookum', 'class', 'awesome', 'magic', 'wicked', 'mean', 'cool', 'out', 'of this world', 'hunky-dory', 'A-OK', 'brilliant', 'killer'];

    public function make(): string
    {
        $day = $this->vocablurary[random_int(0, count($this->vocablurary) - 1)];

        return sprintf('Today is %s day!', $day);
    }
}