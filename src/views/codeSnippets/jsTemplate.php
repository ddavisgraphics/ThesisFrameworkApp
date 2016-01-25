<div class="phpEditor sytnaxHighlight mediumBox"><?php print htmlspecialchars('<template name="customers">
    <h2> Customer Page </h2>

    <div class="addCustomer">
        <a href="/addCustomer" class="button"> Add Customers </a>
    </div>

    <ul class="customerList">
        {{#each allCustomers}}
            <li>
                <div> {{fullname}} </div>
                <div> {{company}} </div>
                <div> {{phone}} </div>
                <div> {{email}} </div>
                <div> <a href="/editCustomer" class="edit button"> Edit </a> </div>
                <div> <a href="#delete" class="delete button"> Delete </a> </div>
            </li>
        {{/each}}
    </ul>
</template>');?>
</div>

<p> The following JS would accompany that in a seperate file either on the server or client side.  It identifies the template, and sets the variables that would be found in that template.  The allCustomers variable grabs from a database, and the following variables inherit that data automatically knowing it because of proximity in the template and the this keyword. </p>
<div class="meteorEditor mediumBox">
Template.customers.helpers({
  allCustomers:function(){
    return Customers.find();
  },
  fullname:function(){
    return this.firstname + " " + this.lastname;
  },
  phone: function(){
    return this.phone;
  },
  website: function(){
    return this.website;
  },
  email: function(){
    return this.email;
  },
  company: function(){
    return this.companyName;
  },
});
</div>

