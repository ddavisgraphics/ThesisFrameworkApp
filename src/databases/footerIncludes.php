<script src="/includes/nativeLibs/ace/build/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

<script>
    var editor;
    $('.meteorEditor').each(function( index ) {
        editor = ace.edit(this);
        editor.getSession().setMode('ace/mode/javascript');
        editor.setReadOnly(true);
        editor.getSession().setUseWrapMode(true);
        editor.setTheme("ace/theme/monokai");
        editor.session.setOption("useWorker", false);
    });

    var engine;
    $('.phpEditor').each(function(index){
        engine = ace.edit(this);
        engine.getSession().setMode('ace/mode/php');
        engine.setReadOnly(true);
        engine.getSession().setUseWrapMode(true);
        engine.setTheme("ace/theme/monokai");
        engine.session.setOption("useWorker", false);
    });


    var sql;
    $('.sqlEditor').each(function(index){
        sql = ace.edit(this);
        sql.getSession().setMode('ace/mode/sql');
        sql.setReadOnly(true);
        sql.getSession().setUseWrapMode(true);
        sql.setTheme("ace/theme/monokai");
        sql.session.setOption("useWorker", false);
    });

    var generic;
    $('.codeInput').each(function(index){
        generic = ace.edit(this);
        generic.getSession().setUseWrapMode(true);
        generic.setTheme("ace/theme/monokai");
        generic.session.setOption("useWorker", false);
    });

    $('.selectSyntax').change(function(){
        value = $(this).val();
        if(value == 'js'){
            generic.getSession().setMode('ace/mode/javascript');
        } else if(value == 'php') {
            generic.getSession().setMode('ace/mode/php');
        }
    });

    $('.codeInput').bind('change keyup', function(){
        $('#hiddenCode').val(generic.getSession().getValue());
    });
</script>