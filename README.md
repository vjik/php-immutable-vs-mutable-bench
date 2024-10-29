# PHP immutable objects VS mutable objects

Benchmark running:

```shell
composer run bench
# or
vendor/bin/phpbench run --report=aggregate
```

## Results

With PHP version 8.2.7, xdebug ❌, opcache ❌:

```
+-----------+------------------+-----+------+-----+-----------+----------+---------+
| benchmark | subject          | set | revs | its | mem_peak  | mode     | rstdev  |
+-----------+------------------+-----+------+-----+-----------+----------+---------+
| MainBench | benchMutable1    |     | 1    | 50  | 749.760kb | 1.994μs  | ±40.25% |
| MainBench | benchImmutable1  |     | 1    | 50  | 749.760kb | 2.996μs  | ±27.51% |
| MainBench | benchMutable14   |     | 1    | 50  | 749.760kb | 3.881μs  | ±49.81% |
| MainBench | benchImmutable14 |     | 1    | 50  | 749.768kb | 6.047μs  | ±12.53% |
| MainBench | benchMutable36   |     | 1    | 50  | 749.760kb | 5.016μs  | ±15.59% |
| MainBench | benchImmutable36 |     | 1    | 50  | 749.768kb | 13.867μs | ±16.92% |
+-----------+------------------+-----+------+-----+-----------+----------+---------+
```

## License

The package is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.
