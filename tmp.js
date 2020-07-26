fetch('mama.html')
    .then(function (response) {
        switch (response.status) {
            // status "OK"
            case 200:
                return response.text();
            // status "Not Found"
            case 404:
                throw response;
        }
    })
    .then(function (template) {
        console.log(template);
	document.getElementById('test').innerHTML=template; 
    })
    .catch(function (response) {
        // "Not Found"
        console.log(response.statusText);
    });


