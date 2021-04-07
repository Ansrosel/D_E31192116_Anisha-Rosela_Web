<?php
echo "<hr>Benchmark code start dan code end<br>";
echo $this->benchmark->elapsed_time('code_start', 'code_end');

echo "<hr>Benchmark multiple sets of markers<br>";
echo $this->benchmark->elapsed_time('one', 'two') . '<br>';
echo $this->benchmark->elapsed_time('two', 'three') . '<br>';
echo $this->benchmark->elapsed_time('one', 'three') . '<br>';

echo "<hr>Displaying total execution time<br>";
echo $this->benchmark->elapsed_time();

echo "<hr>Displaying memory consumption<br>";
echo $this->benchmark->memory_usage();
