<div class="meteorEditor sytnaxHighlight mediumBox">
Template.registerHelper('customerMenu', function(){
  var customers = Customers.find().fetch();
  var menu = [];

  // loop through customers to build menu
  for(var i = 0; i < customers.length; i++){
    var customer   = customers[i];
    var fullname   = customer['firstname'] + " " + customer['lastname'];
    var customerID = customer['_id'];
    var company    = customer['companyName'];
    var label      = fullname + " - " + company;
    var listObject = { label : label, value : customerID};
    menu.push(listObject);
  }

  return menu;
});
</div>
