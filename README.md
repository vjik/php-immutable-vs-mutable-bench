# PHP immutable objects VS mutable objects

Benchmark running:

```shell
composer run bench
# or
vendor/bin/phpbench run --report=aggregate
```

## Results

With PHP version 8.3.13, xdebug ❌, opcache ❌:

```
+-----------+------------------+-----+------+-----+-----------+----------+---------+
| benchmark | subject          | set | revs | its | mem_peak  | mode     | rstdev  |
+-----------+------------------+-----+------+-----+-----------+----------+---------+
| MainBench | benchMutable1    |     | 1    | 50  | 749.064kb | 1.041μs  | ±52.82% |
| MainBench | benchImmutable1  |     | 1    | 50  | 749.064kb | 2.984μs  | ±32.88% |
| MainBench | benchMutable14   |     | 1    | 50  | 749.064kb | 2.998μs  | ±24.69% |
| MainBench | benchImmutable14 |     | 1    | 50  | 749.072kb | 5.002μs  | ±12.40% |
| MainBench | benchMutable36   |     | 1    | 50  | 749.064kb | 4.986μs  | ±19.32% |
| MainBench | benchImmutable36 |     | 1    | 50  | 749.072kb | 10.000μs | ±3.77%  |
+-----------+------------------+-----+------+-----+-----------+----------+---------+
```

## License

The package is free software. It is released under the terms of the BSD License.
Please see [`LICENSE`](./LICENSE.md) for more information.
