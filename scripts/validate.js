/**
 * controller function of validation
 */
function validate(){
    var textFields = getTextFields();
    var textFieldsSuccessfulValidated = validateTextFields(textFields);
      
    var checkboxes = getCheckboxes();
    var checkboxSuccessfulValidated = validateCheckboxes(checkboxes);
    
    activateSubmitButton(textFieldsSuccessfulValidated, checkboxSuccessfulValidated);
}

/**
 * function to return all input fields with type=text/email
 * @returns textFields with all html elements with the class "validate"
 */
function getTextFields(){
    var textFields = document.getElementsByClassName("validate");
    return textFields;
}

/**
 * function to return all input fields with type=check
 * @returns checkboxes with all html elements with the id's check_agb/data
 */
function getCheckboxes(){
    var checkboxes = [];
    var agb = document.getElementById("check_agb");
    var data = document.getElementById("check_data");
    checkboxes.push(data, agb);
    return checkboxes;
}

/**
 * function to validate if all textfields are filled with correct data
 * @param {Object} textFields object of all text input elements 
 * @returns boolean
 */
function validateTextFields(textFields){
    var successCounter = 0;
    for (var i = 0; i< textFields.length; i++){
        if(textFields[i].value && textFields[i].value != "*Farbe" && textFields[i].value !="*Versandart"){
            successCounter++;
        }
    }
    if(successCounter === textFields.length){
        return true;
    }
    return false;
}

/**
 * function to validate if the checkboxes are checked or not
 * @param {Object} checkboxes object of all checkbox input elements
 * @returns boolean
 */
function validateCheckboxes(checkboxes){
    if(checkboxes[0].checked && checkboxes[1].checked){
        return true;
    }
    return false;
}

/**
 * function to activate the submit button and styling
 * @param {boolean} textFieldsSuccessfulValidated boolean whether the validation was successful or not
 * @param {boolean} checkboxSuccessfulValidated boolean whether the validation was successful or not
 */
function activateSubmitButton(textFieldsSuccessfulValidated, checkboxSuccessfulValidated){
    var button = document.getElementById("submit_button");
    if(textFieldsSuccessfulValidated === true && checkboxSuccessfulValidated === true){
        button.type = 'submit';
        button.style.cursor = "pointer"
    }
    else{
        button.type = 'button';
        button.style.cursor = "not-allowed";
    }
}