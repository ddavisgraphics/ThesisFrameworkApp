<h4> Iron Router </h4>
<div class="meteorEditor syntaxHighlighter smallBox">// sets up router
Router.configure({
    layoutTemplate: 'mainLayout',
    notFoundTemplate: 'notFound'
});

// uses the root url to create a homepage route
Router.route('/', function() {
    this.render('home');
}, {name: 'home'});
</div>

<p> This route then corresponds with the following which would be located in the view file.  This is not as important right now, we will talk about views in a different section. </p>

<div class="phpEditor syntaxHighlight smallBox"><?php print htmlspecialchars('<template name="home">
  <h1> Welcome!  </h1>
  <p>
    The goal of this application is for education.
    Feel free to modify and amend as needed.
  </p>
</template>');?>
</div>