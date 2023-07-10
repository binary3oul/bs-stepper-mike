$(document).ready(function() {
    // $('input[type="radio"]').prop('checked', false);
})

const validate = (step) => {
    if(!step) return false
    let selectedRadiobox = $(`input[name=btnradio${step}]:checked`).val()
    if(selectedRadiobox){
        if(step == 10) {
            const form = $('form')[0]
            form.submit()
        }
        return true
    } 
    renderWarningMessage(true, "<strong>Warning!</strong> Select one of the five options before continuing to next question.")
    return false
}

const renderWarningMessage = (type = 0, message = '') => {
    if(!type) {
        $('#alert').remove()
        return
    }
    const messageDiv = `<div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">    \
        ${message} \
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">    \
        <span aria-hidden="true">&times;</span>   \
        </button>   \
    </div>`
    $('.warning').append(messageDiv)
    setTimeout(function() {
        $('#alert').alert('close');
    }, 5000);
}

