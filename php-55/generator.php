<?php

/**
  * Numeric array
  */

// Create generator
function dwarfsGenerator ()
{
  $dwarfs = [
    'Doc',
    'Dopey',
    'Bashful',
    'Grumpy',
    'Sneezy',
    'Sleepy',
    'Happy'
    ];

  foreach($dwarfs as $dwarf) {
    yield $dwarf;
  }
};

$dwarfsGenerator = dwarfsGenerator();
// Use generator
foreach($dwarfsGenerator as $dwarf) {
  print $dwarf . PHP_EOL;
}

/**
  * Associative array
  */
// Create generator
$dwarfsDubberGenerator = function ()
{
  $dwarfs = [
    'Doc' => 'Roy Atwell',
    'Dopey' => 'Eddie Collins',
    'Bashful' => 'Scotty Mattraw',
    'Grumpy' => 'Pinto Colvig',
    'Sneezy' => 'Billy Gilbert',
    'Sleepy' => 'Pinto Colvig',
    'Happy' => 'Otis Harlan'
    ];

  foreach($dwarfs as $dwarf => $dubber) {
    yield $dwarf => $dubber;
  }
};

// Use generator
foreach($dwarfsDubberGenerator() as $dwarf => $dubber) {
  print $dwarf . " is dubbed by " . $dubber . PHP_EOL;
}

$dwarfsGenerator = dwarfsGenerator();
print $dwarfsGenerator->current() . PHP_EOL;
$dwarfsGenerator->next();
