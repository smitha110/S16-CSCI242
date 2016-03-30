The solution is to use type hinting to force the navigate method to impliment
the drivable interface. All classes that impliment the  drivable interface must
also impliment the drive method in order to be invoked. This is accomplished by
using the interface name, drivable, before the argument $car in public static
function navigate.
