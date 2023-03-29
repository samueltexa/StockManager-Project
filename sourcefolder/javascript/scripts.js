const form = document.getElementById('login-form');
const username = document.getElementsByName('username')[0];
const password = document.getElementsByName('password')[0];

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.remove('error');
    inputControl.classList.add('success');
};

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = message;
    inputControl.classList.remove('success');
    inputControl.classList.add('error');
};

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === '') {
        setError(username, 'User name is required');
        return false;
    } else {
        setSuccess(username);
    }

    if (passwordValue === '') {
        setError(password, 'Password is required');
        return false;
    } else {
        setSuccess(password);
    }

    return true;
};

form.addEventListener('submit', e => {
    if (validateInputs()) {
        return true; // allow form submission
    } else {
        e.preventDefault(); // prevent form submission
    }
});
// add product form pop up
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

