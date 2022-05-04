function submitForm(event) {
    if (event.submitter.name === 'checkEmail'){
        event.preventDefault();

        let $form = document.forms.login;
        let email = $form.elements.email;

        checkEmail(email.value)
    }
}

async function checkEmail(email) {

    let data = new FormData();
    data.append("email", email);

    try{
        let response = await fetch('/api/check-email', {
            method: 'POST',
            body: data
        });

        let result = await response;

        if (result.status === 200) {
            openPasswordInput();
        }
        if (result.status === 401) {
            showError(result.json())
        }
    } catch (err) {
        console.log(err);
    }

}

function openPasswordInput(btn = true) {
    let $form = document.forms.login;
    let $email = $form.elements.email;
    let $password = document.getElementsByClassName('for-input_password')[0];
    let $emailButton = document.getElementById('emailButton');

    $email.setAttribute('readonly', 'readonly');
    $password.classList.remove('for-input_hidden');
    $emailButton.classList.add('email__button_hidden');

    if (btn) {
        document.getElementsByClassName('login__error')[0]
            .classList.add('login__error_no');
    }
}

function showError(errors) {
    errors.then(function (res) {
        document.getElementsByClassName('login__error')[0]
            .classList.remove('login__error_no');

        let $error = document.getElementById('error');
        $error.innerHTML = res.errors
    })

}
