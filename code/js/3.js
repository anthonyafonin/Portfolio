// Anthony Afonin 3/3/2018
// Creates a JSON employees object and writes html to page

// Declare variables
var employeeImg,
    employeeTitle,
    employeeName,
    employeeEmail,
    employeePhone;

// Define Employee JSON object
var employeeArr = [
    {
        "id"    : '32546',
        'img'   : '/code/images/me.jpg',
        "title" : 'Software Developer',
        "name"  : 'Anthony Afonin',
        "email" : 'anthonyafonin@gmail.com',
        "phone" : '971-216-1445'
    },
    {
        "id"    : '95746',
        'img'   : '/code/images/brady.jpg',
        "title" : 'Project Coordinator',
        "name"  : 'Brady Carson',
        "email" : 'brady.carson@gmail.com',
        "phone" : '876-891-3245'
    },
    {
        "id"    : '84932',
        'img'   : '/code/images/davis.jpg',
        "title" : 'Lead Developer',
        "name"  : 'Davis Easton',
        "email" : 'davis.easton@gmail.com',
        "phone" : '456-325-7984'
    }
];

// Call function to create html elements from array
$( document ).ready(function() {
    constructEmployees(getEmployees());
});

// Return all employees
function getEmployees(){
    return employeeArr;
}

// Return employee by index
// @param - index of employee array
function getEmployee(index){
    return employeeArr[index];
}

// Construct html with info from elmpoyeesArr
// @param arr - An array to retrieve emnployee info from
function constructEmployees(arr){
    var output;
    for(var i=0; i<arr.length;i++){
        output =
            '<div class="employee box '+arr[i].id+'"><div class="img col-lg-3">'
            +'<img src="'+arr[i].img+'" alt="name"></div><div class="about col-lg-9">'
            +'<div class="info title"><div class="title">Title</div><div class="name">Name</div>'
            +'<div class="email">Email Address</div><div class="phone">Phone Number</div>'
            +'</div><div class="info text"><div class="title">'+arr[i].title+'</div>'
            +'<div class="name">'+arr[i].name+'</div><div class="email">'+arr[i].email+'</div>'
            +'<div class="phone">'+arr[i].phone+'</div></div></div></div>'

        $('#employees').append(output);
    }
}
