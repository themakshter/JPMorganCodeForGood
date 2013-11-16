    // This is to simulate the JSON you retrieved via an AJAX call
var people = [{"id":1,"name":"George"},{"id":2,"name":"John"}];
    // Save a reference to your list of users
    //$userSelect = $( '#userlist' ).find( 'select' );
//var people = [{"id":1,"name":"George"},{"id":2,"name":"John"}],

    // Iterate over each item in the object of people you received
    // Note: iteration should be inside this callback, so it doesn't fire till your
    // data has been returned.
    // for ( person in people ) {
    //     // create an option for each person
    //     $( '<option />', {
    //         value: people[person].id,
    //         text: people[person].name
    //     })
    //         // Append it to your list
    //         .appendTo( $userSelect ); 
    // }
    // 

$("#show_button").click(function() {
    for(var person in people){
        $("#show_place").append('<p> ID = ' + people[person].id + ' Name = ' + people[person].name + '</p>');
    }
});

$("#remove_button").click(function(){
     $("#show_place").empty();
});
    

