import "./bootstrap";
// In your JavaScript file (e.g., app.js)
let currentQuestion = 0;
let selectedOptions = [];
const totalQuestions = 3;

function changeQuestion(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Save the selected options for the current question
    const checkedValues = saveSelectedOptions();

    // Check if at least one checkbox is checked
    if (checkedValues.length === 0) {
        alert(
            "Please select at least one option before moving to the next question."
        );
        return;
    }

    // Increment the current question number
    currentQuestion++;

    // Display the next question or handle logic as needed
    if (currentQuestion < totalQuestions) {
        displayQuestion();
    } else {
        // If there are no more questions, you can submit the form or handle completion
        submitForm();
    }
}

function saveSelectedOptions() {
    // Get all checkboxes for the current question
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Filter and save the checked values
    const checkedValues = Array.from(checkboxes)
        .filter((checkbox) => checkbox.checked)
        .map((checkbox) => checkbox.value);
    if (currentQuestion < totalQuestions) {
        // Save the selected options for the current question
        selectedOptions[currentQuestion] = checkedValues;
    }

    // Return the checked values
    return checkedValues;
}

function displayQuestion() {
    const questions = ["Ukuran Velg", "Bolongan Mobil"];

    const questionContainer = document.getElementById("question");
    const checkboxContainer = document.getElementById("table");

    // Display the next question
    questionContainer.innerHTML =
        "<b>" + questions[currentQuestion - 1] + "</b>";

    // Remove existing checkboxes
    checkboxContainer.innerHTML = "";

    // Add new checkboxes for the current question
    let options = [];
    if (currentQuestion === 1) {
        options = ["R15", "R16", "R17", "R18"];
    } else if (currentQuestion === 2) {
        options = ["4/8", "5/10", "6"];
    }

    // Create a table element
    const table = document.createElement("table");

    // Add new checkboxes for the current question
    options.forEach((option, index) => {
        const row = table.insertRow();
        const cell1 = row.insertCell(0);
        const cell2 = row.insertCell(1);

        const checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.name = "option";
        checkbox.value = option;

        const label = document.createElement("label");
        label.htmlFor = "option" + (index + 1);
        label.appendChild(document.createTextNode(option));

        checkboxContainer.appendChild(checkbox);
        checkboxContainer.appendChild(label);
        cell1.appendChild(checkbox);
        cell2.appendChild(label);
    });

    // Append the table to the container
    checkboxContainer.appendChild(table);
}

function submitForm() {
    console.log("Form submitted with selected options:", selectedOptions);

    // Update complete-our-quiz and quiz-box
    const completeOurQuiz =
        document.getElementsByClassName("complete-our-quiz")[0];
    const quizBox = document.getElementById("quiz-box");

    completeOurQuiz.innerHTML =
        "<b>Selesai Ntar otomatis pindah ke list velg yg udah di filter</b>";
    if (quizBox) {
        quizBox.remove();
    }

    // MAKE HIDDEN FORM biar bisa kesubmit trus di handle di controller
    // Assuming you have a hidden form for submission
    const hiddenForm = document.createElement("form");
    hiddenForm.method = "POST";
    hiddenForm.action = "/list";

    // Add a hidden input field to pass the selected options
    const optionsInput = document.createElement("input");
    optionsInput.type = "hidden";
    optionsInput.name = "selectedOptions";
    optionsInput.value = JSON.stringify(selectedOptions);
    hiddenForm.appendChild(optionsInput);

    // Append the form to the document body and submit it
    document.body.appendChild(hiddenForm);
    hiddenForm.submit();
}

// Add an event listener to the form to call the changeQuestion function
const form = document.querySelector("form");
form.addEventListener("submit", changeQuestion);
