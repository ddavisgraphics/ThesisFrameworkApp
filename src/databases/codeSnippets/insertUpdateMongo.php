<div class="meteorEditor syntaxHighlight mediumBox">
// Insert a New Record Most Likely from a from or event
Employees.insert({
    EmployeeID: "2",
    firstName: "Jon",
    lastName:  "Snow",
    Gender: "Male",
    HireDate: "3/23/1999",
    Salary: "Free"
});

// Update to Change Name Specific Record
Employees.update({
    EmployeeID: "2"
}, {
    $set: {firstName:"Nedard", lastName:"Stark"}
});
// The record with the EmployeeID of 2 will change to the information in the $set object

</div>