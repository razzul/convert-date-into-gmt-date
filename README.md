# convert datetime into GMT datetime

Call the function `convertGMT` pass your date is this format `2016-11-29T08:51:41+00:00`
If the passed date format is correct then it will convert the date into GMT time.
Else it will return `false` as response.


Valid Year 0000 to 9999
Valid Month 01 to 12
Valid Day 01 to 31
Valid Hour 00 to 23
Valid Mins 00 to 59
Valid Secs 00 to 59
Valid timezone Z and the timezone given below.

# Time zone list

```UTC−12:00, Y__
UTC−11:00, X__
UTC−10:00, W__
UTC−09:30, V†__
UTC−09:00, V__
UTC−08:00, U__
UTC−07:00, T__
UTC−06:00, S__
UTC−05:00, R__
UTC−04:00, Q__
UTC−03:30, P†__
UTC−03:00, P__
UTC−02:00, O__
UTC−01:00, N__
UTC±00:00, Z__
UTC+01:00, A__
UTC+02:00, B__
UTC+03:00, C__
UTC+03:30, C†__
UTC+04:00, D__
UTC+04:30, D†__
UTC+05:00, E__
UTC+05:30, E†__
UTC+05:45, E*__
UTC+06:00, F__
UTC+06:30, F†__
UTC+07:00, G__
UTC+08:00, H__
UTC+08:30, H†__
UTC+08:45, H*__
UTC+09:00, I__
UTC+09:30, I†__
UTC+10:00, K__
UTC+10:30, K†__
UTC+11:00, L__
UTC+12:00, M__
UTC+12:45, M*__
UTC+13:00, M†__
UTC+14:00, M†```

Here I have used only Z, you can update the code for other time zone.
Also don't pass timezone like `UTC+14:00`which is invalid according to the code, you need to pass `+14:00`
