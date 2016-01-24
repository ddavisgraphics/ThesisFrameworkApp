<div class="meteorEditor syntaxHighlight mediumBox">
// Assuming we already created our collection
// FindOne() Examples
Employees.findOne({
    firstName: "Jon",
    lastName:  "Snow",
});

// Returns
{
    EmployeeID: "2",
    firstName: "Jon",
    lastName:  "Snow",
    Gender: "Male",
    HireDate: "3/23/1999",
    Salary: "Free"
}

// Find() gets all objects from the database
Employees.find();

// Fetch gets all objects from the database
Employees.find().fetch(); // => Returns an Object with Multiple Objects Similar to the one above

// Limits to only 5 results
Employees.find().limit(5);

// Sorts Asc or Desc by Name
Employees.find().sort(firstName:-1); // desc
Employees.find().sort(firstName:1);  // asc

</div>