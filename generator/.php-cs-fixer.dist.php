<?php

// generation is slow on a single core
// perhaps your machine has many cores we can use?
return (new PhpCsFixer\Config())
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
;
