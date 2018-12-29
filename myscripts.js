    var url_string = window.location.href;
var url = new URL(url_string);
var c = url.searchParams.get("code");
console.log('value of c:' + c);

var data = "client_secret={VneGEXrb4GNhsfOJ}&client_id={Vjiko00BljSRCuHxSgYU3JV80D3ZQzWR}&code="+c+"&grant_type=authorization_code&redirect_uri={http://localhost/dev/beetus/dexcomwebapp/home2.html}";

console.log('value of data: ' + data);

    console.log('c is not null');

    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;
    
    xhr.addEventListener("readystatechange", function () {
      if (this.readyState === 4) {
        console.log(this.responseText);
      }
    });
    
    xhr.open("POST", "https://sandbox-api.dexcom.com/v2/oauth2/token");
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhr.setRequestHeader("cache-control", "no-cache");
    
    xhr.send(data);







