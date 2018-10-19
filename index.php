<?php
//
///////////////////////////////////////// Zephir test ///////////////////////////////////////
//$start_mem = memory_get_usage();
//$start_time = microtime(TRUE);
//
//new App\App();
//
//$end_mem = memory_get_usage();
//$end_time = microtime(TRUE);
//
//echo "\n", 'Time: ' . ($end_time - $start_time) . ' microseconds.';
//echo "\n", 'Memory: ' . ($end_mem - $start_mem) . ' bytes.';
//echo "\n", 'All used memory: ' . $end_mem . ' bytes.';
//
///**
// * Results for above:
// * average time - 0.013 microseconds.
// * dedicate memory - 760 bytes
// * full allocated memory - 396576 bytes
// */
//
///////////////////////////////// Native php test /////////////////////////////////////////
//
//require_once 'vendor/autoload.php';
//
//$start_mem = memory_get_usage();
//$start_time = microtime(TRUE);
//
//new Php\App();
//
//$end_mem = memory_get_usage();
//$end_time = microtime(TRUE);
//
//echo "\n", 'Time: ' . ($end_time - $start_time) . ' microseconds.';
//echo "\n", 'Memory: ' . ($end_mem - $start_mem) . ' bytes.';
//echo "\n", 'All used memory: ' . $end_mem . ' bytes.';
//
///**
// * Results for above:
// * average time - 0.022 microseconds.
// * dedicate memory - 1410 bytes
// * full page allocated memory - 405568 bytes
// */
//
//
///////////////////////////////// Zephir apache benchmark test //////////////////////////////////
//new App\App();

/*
Results:


ab -n 10000 {url}
This is ApacheBench, Version 2.3 <$Revision: 1807734 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking zetest.vag (be patient)
Completed 1000 requests
Completed 2000 requests
Completed 3000 requests
Completed 4000 requests
Completed 5000 requests
Completed 6000 requests
Completed 7000 requests
Completed 8000 requests
Completed 9000 requests
Completed 10000 requests
Finished 10000 requests


Server Software:        nginx/1.15.0
Server Hostname:        zetest.vag
Server Port:            80

Document Path:          /
Document Length:        700000 bytes

Concurrency Level:      1
Time taken for tests:   272.105 seconds
Complete requests:      10000
Failed requests:        0
Total transferred:      7001370000 bytes
HTML transferred:       7000000000 bytes
Requests per second:    36.75 [#/sec] (mean)
Time per request:       27.211 [ms] (mean)
Time per request:       27.211 [ms] (mean, across all concurrent requests)
Transfer rate:          25127.33 [Kbytes/sec] received

Connection Times (ms)
min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       3
Processing:    24   27   1.8     27     107
Waiting:        0    6   1.3      5      29
Total:         24   27   1.9     27     107

Percentage of the requests served within a certain time (ms)
50%     27
66%     27
75%     27
80%     28
90%     28
95%     30
98%     32
99%     35
100%    107 (longest request)

*/

/////////////////////////////// Native php apache benchmark test //////////////////////////////////
//new Php\App();

/*
 ab -n 10000 {url}
This is ApacheBench, Version 2.3 <$Revision: 1807734 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking zetest.vag (be patient)
Completed 1000 requests
Completed 2000 requests
Completed 3000 requests
Completed 4000 requests
Completed 5000 requests
Completed 6000 requests
Completed 7000 requests
Completed 8000 requests
Completed 9000 requests
Completed 10000 requests
Finished 10000 requests


Server Software:        nginx/1.15.0
Server Hostname:        zetest.vag
Server Port:            80

Document Path:          /
Document Length:        1271 bytes

Concurrency Level:      1
Time taken for tests:   38.042 seconds
Complete requests:      10000
Failed requests:        0
Total transferred:      14080000 bytes
HTML transferred:       12710000 bytes
Requests per second:    262.87 [#/sec] (mean)
Time per request:       3.804 [ms] (mean)
Time per request:       3.804 [ms] (mean, across all concurrent requests)
Transfer rate:          361.44 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.0      0       1
Processing:     3    3   0.8      3      17
Waiting:        3    3   0.8      3      17
Total:          3    4   0.8      4      18

Percentage of the requests served within a certain time (ms)
  50%      4
  66%      4
  75%      4
  80%      4
  90%      4
  95%      4
  98%      6
  99%      8
 100%     18 (longest request)
 */