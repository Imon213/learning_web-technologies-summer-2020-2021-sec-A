function registation()
{
   let id=document.getElementById('id').value;
   let pass=document.getElementById('password').value;
   let repass=document.getElementById('repassword').value;
   let name=document.getElementById('name').value;
   let email=document.getElementById('email').value;
   let user=document.getElementById('user').value;
   const http = new XMLHttpRequest();
    http.open('GET', `registation.php?id=${id}&&pass=${pass}&&repass=${repass}&&name=${name}&&email=${email}&&user=${user}`, true);
    http.send();
    http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }

    }
}
function login()
{
    let id = document.getElementById('id').value;
    let password = document.getElementById('password').value;
    const http = new XMLHttpRequest();
    http.open('GET', `login.php?id=${id}&&pass=${pass}`, true);
    http.send();
    http.onreadystatechange = function () {
        if(this.readyState==4 && this.status==200){
            document.getElementById('result').innerHTML = this.responseText;
        }

    }

}