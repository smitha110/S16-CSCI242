a) The script would output 1010. $num1 and $num2 would be added together and
assigned into $calc, then an exception would be thrown on line 10 and caught on
line 14. Lines 11 and 12 would not be executed. The catch outputs the first 10,
then 10 is assigned into $calc. Once the script exits the exception, $calc, which
is assigned 10, is echoed again.

b) Only lines 8 and 17 set/assign values into $calc (line 12 is never executed).

c) Since the original line would be a generic exception, then changing line 10
to MySQLException would throw an error since there is not a MySQLException class.
If you implimented a MySQLException class and changed line 10 to MySQLException
(while leaving line 14 the same), then the generic exception would still catch
the error and the output would still be 1010.
