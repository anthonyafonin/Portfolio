// Anthony Afonin - 3/2/2018
// Requirements -
// John and Jack like to swim but rarely at the same time.
// Every Third day, Jack will swim alone.
// While Jack is not swimming, John will swim alone.
// Every 50 days, both will swim.
var swimmer,
    swimmerArr = [],
    year = 365,
    monthName;

// Define array of months by name
var months = [
    "January", "February", "March", "April",
    "May", "June", "July", "August", "September",
    "October", "November", "December"
];

// Populate swimmerArr and build HTML elements
$( document ).ready(function() {
    populateArr(year);
    constructCal();
    constructList();
});


// Pseudocode to challenge is documented in this function
// Populate swimmerArr Array
// @param year - ceiling for loop
function populateArr(year) {
    for (var i = 1; i <= year; i++) {

        // If Day of Year is divisible by 50, assign swimmer as Jack & John
        if (i % 50 === 0) {
            swimmer = "Jack & John";
        } else if (i % 3 === 0) {
            // Else if Day of Year is divisible by 3, assign swimmer as Jack
            swimmer = "Jack";
        } else {
            // Else swimmer is John
            swimmer = "John";
        }

        // add new object to swimmerArr
        addSwimmer(i, swimmer);
    }
}

// Builds the calendar view element
function constructCal() {
    var arr = swimmerArr;
    var monthNum = 1;
    var dayOfYear = 1;

    // Populate each month of year
    for (var month = 0; month < 12; month++) {
        var output =
            '<div class="month-text" id="month' + month +
            '"><a data-toggle="collapse" class="collapsed" href="#collapse' +
            month + '"><h1>' + monthNumToName(monthNum) +
            '<span class="toggle"></span></h1></a></div></div>' +
            '<div id="collapse' + month +
            '" class="col-lg-12 month panel-collapse collapse">';

        // Populate each day of month
        for (var day = 1; day <= daysInMonth(monthNum); day++) {
            var swimmer = getSwimmer(dayOfYear - 1);
            var className;
            if (swimmer == "John") {
                className = "john";
            } else if (swimmer == "Jack") {
                className = "jack";
            } else {
                className = "both";
            }
            output +=
                '<div class="monthDay ' + className + '"><div class="dayOfMonth">' + day +
                '</div><div class="swimmer">' + swimmer +
                '</div><div class="textLabel">Day of Year - ' +
                dayOfYear + '</div></div>';

            dayOfYear++;
        }
        output += '</div>';
        $("#calendar").append(output);
        monthNum++;
    }
    // Open first month drop down
    $("#collapse0").addClass("in");
    $("#month0 a").removeClass('collapsed');
}

// Output raw data to list view
function constructList() {
    var output;
    var arr = swimmerArr;
    for (var i = 0; i < arr.length; i++) {

        output = "<div class='item'><span class='day'>" + (i + 1) + ".</span><span class='swimmer'>" + arr[i].Swimmer + "</span>";
        $("#list").append(output);
    }
}

// Add index to swimmerArr
// @param dayOfYear - day of year
// @param swimmer - swimmer or swimmers of the day
function addSwimmer(dayOfYear, swimmer) {
    // Create object of day of year
    var obj = {
        DayOfYear: dayOfYear,
        Swimmer: swimmer
    };
    // push obj to swimmerArr
    swimmerArr.push(obj);
}

// Returns number of days per month
// @param month - int of month. January = 1, December = 12
// @return - number of days per month
function daysInMonth(month) {
    return new Date(new Date().getYear(), month, 0).getDate();
}

// Returns Month name from param number
// @param monthnum - int of month. January = 1, December = 12
// @return - Month name from param number
function monthNumToName(monthnum) {
    return months[monthnum - 1];
}

// Get swimmerArr index
// @param index - index of desired swimmerArr
// @return - returns item of swimmerArr of index
function getSwimmer(index) {
    return swimmerArr[index].Swimmer;
}
