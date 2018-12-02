
// Trang kết quả
window.addEventListener ("load", function() {
        function find(value) {
            if (document.URL.search(value)>=0) {
                var find= document.URL.slice(document.URL.search(value));
                find= find.slice(find.search('=')+1);
                if (find.search('&')>=0){
                find= find.substring(0, find.search('&'));}
                return decodeURIComponent(find).replace(/\+/g, ' ');
            } else {
                return "";
            }
        }
        var name= find('name');
        var email= find('email');
        var address= find('address');
        var phone= find('phone');
        var password= find('password');
        var birth= find('birthday');
        var gender= find('gender');
        
        document.getElementById('name').innerHTML += ' ' +"<i>"+name;
        document.getElementById('email').innerHTML += ' ' + "<i>"+email;
        document.getElementById('address').innerHTML += ' ' + "<i>"+address;
        document.getElementById('phone').innerHTML += ' ' + "<i>"+phone;
        document.getElementById('password').innerHTML += ' '+ password;
        document.getElementById('gender').innerHTML += ' ' + "<i>"+gender;
        document.getElementById('birth').innerHTML += ' ' + "<i>"+birth;
    })