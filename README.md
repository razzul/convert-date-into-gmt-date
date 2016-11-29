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

```UTC−12:00, Y<br />
UTC−11:00, X<br />
UTC−10:00, W<br />
UTC−09:30, V†<br />
UTC−09:00, V<br />
UTC−08:00, U<br />
UTC−07:00, T<br />
UTC−06:00, S<br />
UTC−05:00, R<br />
UTC−04:00, Q<br />
UTC−03:30, P†<br />
UTC−03:00, P<br />
UTC−02:00, O<br />
UTC−01:00, N<br />
UTC±00:00, Z<br />
UTC+01:00, A<br />
UTC+02:00, B<br />
UTC+03:00, C<br />
UTC+03:30, C†<br />
UTC+04:00, D<br />
UTC+04:30, D†<br />
UTC+05:00, E<br />
UTC+05:30, E†<br />
UTC+05:45, E*<br />
UTC+06:00, F<br />
UTC+06:30, F†<br />
UTC+07:00, G<br />
UTC+08:00, H<br />
UTC+08:30, H†<br />
UTC+08:45, H*<br />
UTC+09:00, I<br />
UTC+09:30, I†<br />
UTC+10:00, K<br />
UTC+10:30, K†<br />
UTC+11:00, L<br />
UTC+12:00, M<br />
UTC+12:45, M*<br />
UTC+13:00, M†<br />
UTC+14:00, M†```

Here I have used only Z, you can update the code for other time zone.
Also don't pass timezone like `UTC+14:00`which is invalid according to the code, you need to pass `+14:00`
