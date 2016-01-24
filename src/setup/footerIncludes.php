<script src="/includes/nativeLibs/ace/build/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

<script>
    // Meteor JS Setup
    var editor = ace.edit("bash");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/sh");
    editor.setReadOnly(true);
    editor.getSession().setUseWrapMode(true);

    // Vagrant Bootrap
    var bootstrap = ace.edit("bootstrap");
    bootstrap.setTheme("ace/theme/monokai");
    bootstrap.getSession().setMode("ace/mode/sh");
    bootstrap.setReadOnly(true);
    bootstrap.getSession().setUseWrapMode(true);

    // Vagrant File
    var ruby = ace.edit("ruby");
    ruby.setTheme("ace/theme/monokai");
    ruby.getSession().setMode("ace/mode/ruby");
    ruby.setReadOnly(true);
    ruby.getSession().setUseWrapMode(true);
</script>