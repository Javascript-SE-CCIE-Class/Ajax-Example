function saveForm(event) {
    event.preventDefault();


    let form = document.getElementById('my_fom');
    let formData = new FormData(form);

    let http = new XMLHttpRequest();
    http.open('POST', '/save.php', true);

    http.onreadystatechange = function () {
        if (this.readyState === 4 && this.status ===200) {
            let response = this.responseText;
            if(response === 'saved'){
                form.reset();
                let form_success = document.getElementById('form_success');
                form_success.style.display = 'block';
                form_success.innerHTML= 'User was Saved Successfully';

                setTimeout(function () {
                    form_success.style.display = 'none';
                }, 2000)
            }else{
                let form_failed = document.getElementById('form_failed');
                form_failed.style.display = 'block';
                form_failed.innerHTML = http.response;
                setTimeout(function () {
                    form_failed.style.display = 'none';
                }, 10000)
            }
        }
    }
    http.send(formData);

}
