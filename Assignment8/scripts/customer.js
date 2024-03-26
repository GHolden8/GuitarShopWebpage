
if(document.getElementById('login')){
document.getElementById('login').addEventListener('submit', function(event) {
            event.preventDefault();
            var email = document.getElementById('email').value;          
            //regex given to confirm email
            var emailPattern = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
                if (!(email && emailPattern.test(email))) {
                    //give a alert to user to say it is wrong
                    alert("Please enter a valid email address.");
                } else {
                    document.getElementById('login').action = "?action=customer_page";
                    document.getElementById('login').submit();
                }
  });
}
if(document.getElementById('customerInfo')){
    document.getElementById('customerInfo').addEventListener('submit', function(event) {
            event.preventDefault();
            let email = document.getElementById('mail').value;   
            let password = document.getElementById('password').value;
            let confirm = document.getElementById('confirm').value;
            //regex given to confirm email
            let emailPattern = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
            let passwordPattern = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                if (!(email && emailPattern.test(email))) {
                    //give a alert to user to say it is wrong
                    alert("Please enter a valid email address.");
                }else if((password!==null) && !(password && passwordPattern.test(password))){
                    alert("Please enter a valid password");
                }else if(!(password===confirm)){
                    alert("Passwords do not match");
                }else{
                    alert("Information has been changed");
                    document.getElementById('customerInfo').action = "?action=update_customer_info";
                    document.getElementById('customerInfo').submit();
                }
  });
};

if(document.getElementById('Billing')){
    document.getElementById('Billing').addEventListener('submit', function(event) {
            event.preventDefault();
            let zip = document.getElementById('zip_code').value;   
            let phone = document.getElementById('phone').value;
            
            let zipPattern = /^\d{5}(-\d{4})?(?!-)$/;
            let phonePattern = /^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm;
                if (!(zip && zipPattern.test(zip))) {
                    //give a alert to user to say it is wrong
                    alert("Please enter a valid Zip Code.");
                }else if(!(phone && phonePattern.test(phone))){
                    alert("Please enter a valid phone number");
                }else{
                    alert("Information has been changed");
                    document.getElementById('Billing').action = "?action=update_billing_address";
                    document.getElementById('Billing').submit();
                }
  });
};
if(document.getElementById('Shipping')){
    document.getElementById('Shipping').addEventListener('submit', function(event) {
            event.preventDefault();
            let zip = document.getElementById('zip_code').value;   
            let phone = document.getElementById('phone').value;
            
            let zipPattern = /^\d{5}(-\d{4})?(?!-)$/;
            let phonePattern = /^(1\s?)?(\d{3}|\(\d{3}\))[\s\-]?\d{3}[\s\-]?\d{4}$/gm;
                if (!(zip && zipPattern.test(zip))) {
                    //give a alert to user to say it is wrong
                    alert("Please enter a valid Zip Code.");
                }else if(!(phone && phonePattern.test(phone))){
                    alert("Please enter a valid phone number");
                }else{
                    alert("Information has been changed");
                    document.getElementById('Shipping').action = "?action=update_shipping_address";
                    document.getElementById('Shipping').submit();
                }
  });
};