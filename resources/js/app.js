import './bootstrap';
import swal from 'sweetalert';

console.log(1213);
Echo.channel('order')
    .listen('OrderNotify',function(e){
        console.log(e);
    })