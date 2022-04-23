$(document).ready(function(){
    console.log("hi");
    var tab__container = $('.tab__container');
   if(tab__container){ // Chỉ trang có tab_cont mới chạy script này
       document.querySelectorAll('.options__info-item').forEach(element => {
           element.onclick = function(){
               //xoa lua chon truoc do
               document.querySelector('.options__info-item.active').classList.remove('active');
               //them add active 
               element.classList.add('active');
   
               if(element.classList.contains('options__1')){ // option 1 đc active
                   document.querySelector('.tab__1').classList.remove('d-none');
                   document.querySelector('.tab__2').classList.add('d-none');
                   document.querySelector('.tab__3').classList.add('d-none');
               }else if(element.classList.contains('options__2')){
                   document.querySelector('.tab__2').classList.remove('d-none');
                   document.querySelector('.tab__1').classList.add('d-none');
                   document.querySelector('.tab__3').classList.add('d-none');
               }else {
                   document.querySelector('.tab__3').classList.remove('d-none');
                   document.querySelector('.tab__1').classList.add('d-none');
                   document.querySelector('.tab__2').classList.add('d-none');
               }
           }
       });

        document.querySelectorAll('.star__list-item').forEach(function(element){
            element.onclick = function (){
                document.querySelector('.star__list-item.active').classList.remove('active');
                element.classList.add('active');
            }
        });



   }
})