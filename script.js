    // This is to simulate the JSON you retrieved via an AJAX call
var people = [{"id":1,"name":"George"},{"id":2,"name":"John"}],
    // Save a reference to your list of users
    $userSelect = $( '#userlist' ).find( 'select' );

   data = people;
    
    // Iterate over each item in the object of people you received
    // Note: iteration should be inside this callback, so it doesn't fire till your
    // data has been returned.
    for ( person in people ) {
        // create an option for each person
        $( '<option />', {
            value: people[person].id,
            text: people[person].name
        })
            // Append it to your list
            .appendTo( $userSelect ); 
    }
    

