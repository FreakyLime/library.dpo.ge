$( document ).ready(function() {

    $(":input").each(function() {
        if(this.name != "_token" && this.name != "module") {
            this.name = 0+this.name;
        }
    });

});

//define template
var template = $('#sections .section:first').clone();

//define counter
var sectionsCount = 0;

//add new section
$('body').on('click', '.addsection', function() {

    //increment
    sectionsCount++;

    //loop through each input
    var section = template.clone().find(':input').each(function(){

        //set id to store the updated section number
        var newId = this.id + sectionsCount;

        //update for label
        $(this).prev().attr('for', newId);

        //update id
        this.id = newId;

        //update id
        if(this.name != "_token" && this.name != "module") {
            this.name = newId + this.name;
        }

    }).end()

    //inject new section
        .appendTo('#sections');
    return false;
});



//remove section
$('#sections').on('click', '.remove', function() {
    //fade out section
    $(this).parent().fadeOut(300, function(){
        //remove parent element (main section)
        $(this).parent().parent().empty();
        return false;
    });
    return false;
});
