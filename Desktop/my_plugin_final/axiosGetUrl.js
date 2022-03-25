const getToken = () => {

    // var form = document.getElementById("frm");
    // function handleForm(event) { 
    //     event.preventDefault(); 
    // } 
    // form.addEventListener('submit', handleForm);
    
    // let clientInfo = {
        clientId = localStorage.getItem("clientId"),
        clientSecret = localStorage.getItem("clientSecret"),
        total = localStorage.getItem("total")

        basket = {
            "amount": total,
            "currency": "EUR",
            "successfulURL": "test",
            "unsuccessfulURL": "test",
            "productItemDTOList": [
              {
                "itemName": "test",
                "itemPrice": "test"
              }
            ]
          }
    // }

        var access_token = "<?php echo $_SESSION['accessToken']; ?>";

        console.log(access_token);
        
        var session = JSON.parse('<?php echo json_encode($_SESSION); ?>');
        // axios.post('https://engin.effyispayment.com/ecom-sandbox-service/pay/order', basket,
        // {
        //     headers: {
        //         Authorization: 'Bearer ' + access_token
        //     }
        // }).then(response => {
        //     width = 500;
        //     height = 700;
        //     if (window.innerWidth) {
        //         var left = (window.innerWidth - width) / 2;
        //         var top = (window.innerHeight - height) / 2;
        //     } else {
        //         var left = (document.body.clientWidth - width) / 2;
        //         var top = (document.body.clientHeight - height) / 2;
        //     }
        //     effyispayWindow = window.open(response.data.url, 'onboarding-popup', 'menubar=no, scrollbars=no, top=' + top + ', left=' + left + ', width=' + width + ', height=' + height + '');
            
        // }).catch(error => {
        //     console.log(error)
        // })


}
