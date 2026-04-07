
//Contact form validation 
const form = document.getElementById('contact-form');

//validate form function
const validateForm = () => {



form.setAttribute('novalidate', '');

//validation options objects array
const validationOptions = [
    //checks if someone has entered text into field and that it doesnt exceed maxiumum set length and is above the minimum set length 
    {
        attribute: 'data-v-required',
        isValid: input => input.value.trim() !== '',
        errorMessage: (input, label) => `${label.textContent} is required`
    },
    {
        attribute: 'data-v-required',
        isValid: input => input.value.trim() !== null,
        errorMessage: (input, label) => `${label.textContent} is required`
    },
    {
        attribute: 'data-v-required',
        isValid: input => input.value.trim() !== undefined,
        errorMessage: (input, label) => `${label.textContent} is required`
    },
    {
        //checks email and phone number agaisnt pattern provided for valid email and phone number
        attribute: 'data-v-pattern',
        isValid: input => {
    // Get the raw string from the attribute
    const patternString = input.getAttribute('data-v-pattern');
    
    // Create the RegEx with the case-insensitive 'i' flag
    const patternRegEx = new RegExp(patternString, 'i');
    
    // Test the TRIMMED value
    return patternRegEx.test(input.value.trim());
        },
        errorMessage: (input, label) => `Is Not a Valid ${label.textContent}`
    },
    {
        attribute: 'customminlength',
        isValid: input => input.value.length >= parseInt(input.getAttribute('customminlength')),
        errorMessage: (input, label) => `${label.textContent} Has Too Many Characters`

    }
]

//unpacks arrary into variables and checks for errors in said feild
const validateformField = formField => {
    const label = formField.querySelector('label');
    const input = formField.querySelector('input, textarea');

    //sets the error value to false by default    
    let formFieldError = false;

    //checks agaisnt the vaildation options for errors
    //uses the attrubute and the value of the input to determine if errors or not
    for (const option of validationOptions) {
        if(input.hasAttribute(option.attribute) && !option.isValid(input)) {
            //changes the border to red
            input.classList.add('field-error');          

            //since error was found sets the error value to true
            formFieldError = true;
            setTimeout(() => {
                input.classList.remove('field-error');
            }, 30000); 
        }
    }
    //if no errors are found the error value stays false so the next if statment can check it

    // checks for no errors and styles the form accordingly uses formfielderror value to check this
    if (!formFieldError) {
        //changes the border back to normal 
        input.classList.remove('field-error');
        
    }

    //logs the value of the field
   // console.log(input.value);
    return formFieldError;
};


//pulls each formfield into an array for each selector in formfield
const validateFormFields = formToValidate => {
    const formFields = Array.from(formToValidate.querySelectorAll('.field-form'));

    formFields.forEach(formField => {
        validateformField(formField);
       
    });

    //gathers the results of the form and checks if all fields are correct before submitting the form
    const results = formFields.map(formField => validateformField(formField));

};

//when submitted check if errors found by validation function then stop submit.
    form.addEventListener('submit', (e) => {
       // e.preventDefault();
        const isAllValid = validateFormFields(form);
    
    // if (isAllValid) {
    //     console.log('Form is valid, submitting to PHP...');
    //     form.submit(); // This sends it to your PHP script
    // } else {
    //     console.log('Form has errors, stopping submit.');
    // }
        
    });

    // this will check when each field has information enttered into it, when the user moves onto the field it checks if the previous field is correct
    //this will be done both after submitting and before the first submit.
    // i use the blur event to achive this which checks when one field loses focus and another gains focus.
const inputs = form.querySelectorAll('input, textarea');

inputs.forEach(element => {
    element.addEventListener('blur', (event) => {
        // Find the parent container safely
        const formField = event.target.closest('.field-form');
        
        // Only validate if we found a valid container AND the field isn't the submit button
        if (formField && event.target.type !== 'submit') {
            validateformField(formField);
        }
    });
});
};

//runs functions on page load waiting on entries for form validation to begin

validateForm();

//used to display tick in check box i need the dom load for this to work
// i use the change event of the value of the input marketing preference in order to toggle the icon to display
document.addEventListener('DOMContentLoaded', () => {
    const checkbox = document.querySelector('.tickbox-button');
    const ticked = document.querySelector('.ticked');
    const tickedvalue = document.getElementById('marketing_preference');

    if (checkbox && ticked) {
        tickedvalue.addEventListener('change', (e) => { 
            
            ticked.classList.toggle('is-hidden2');
        });
    }
});