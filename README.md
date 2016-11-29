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

| Zone      | Code |
| --------- | ----:|
| UTC−12:00 | Y    |
| UTC−11:00 | X    |
| UTC−10:00 | W    |
| UTC−09:30 | V†   |
| UTC−09:00 | V    |
| UTC−08:00 | U    |
| UTC−07:00 | T    |
| UTC−06:00 | S    |
| UTC−05:00 | R    |
| UTC−04:00 | Q    |
| UTC−03:30 | P†   |
| UTC−03:00 | P    |
| UTC−02:00 | O    |
| UTC−01:00 | N    |
| UTC±00:00 | Z    |
| UTC+01:00 | A    |
| UTC+02:00 | B    |
| UTC+03:00 | C    |
| UTC+03:30 | C†   |
| UTC+04:00 | D    |
| UTC+04:30 | D†   |
| UTC+05:00 | E    |
| UTC+05:30 | E†   |
| UTC+05:45 | E*   |
| UTC+06:00 | F    |
| UTC+06:30 | F†   |
| UTC+07:00 | G    |
| UTC+08:00 | H    |
| UTC+08:30 | H†   |
| UTC+08:45 | H*   |
| UTC+09:00 | I    |
| UTC+09:30 | I†   |
| UTC+10:00 | K    |
| UTC+10:30 | K†   |
| UTC+11:00 | L    |
| UTC+12:00 | M    |
| UTC+12:45 | M*   |
| UTC+13:00 | M†   |
| UTC+14:00 | M†   |

Here I have used only Z, you can update the code for other time zone.
Also don't pass timezone like `UTC+14:00`which is invalid according to the code, you need to pass `+14:00`
