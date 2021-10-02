<?php

$questionnaires = [
    "Department of study at Accra Technical University (ATU)",
    "Year of Entry ",
    "Mode of Entry ",
    "Year of Completion",
    "Session of Study",
    "Programme of study at ATU",
    "Primary reason for choosing ATU",
    "Primary reason for choosing programme",
    "Highest qualification obtained at ATU ",
    "Did you undertake any industrial attachment(s) while at ATU? ",
    "Name the organisation(s) of industrial attachment ",
    "Duration of industrial attachment(s)",
    "Was/were your industrial attachment(s) relevant to your course of study at ATU? ",
    "How relevant was/were your industrial attachment(s)?",
    "If 'No', please provide reason(s) for your inability to undertake an industrial attachment ",
];


$conn = mysqli_connect("localhost", "root", "", "survey");

if ($conn !== false) {
    echo "connected";
    //for each question
    foreach ($questionnaires as $question) {

        
        //insert into questions table
        $feedback = mysqli_query($conn, "INSERT INTO questions (question) VALUES ('$question')");
        
        echo $feedback;
        
    }
}else{
    echo "not connected to database";
}
