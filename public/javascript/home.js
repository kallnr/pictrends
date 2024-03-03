// var paginate = 1;
// var dataHome = [];
// LoadMoreData(paginate);
// $(window).scroll(function () { 
//     if($(window).scrollTop() + $(window).height() >= $(document).height()){
//         paginate++;
//         LoadMoreData(paginate);
//     }
// });

// function LoadMoreData(paginate){
//     $.ajax({
//         type: "GET",
//         url: window.location.origin +'/getDataHome/'+ '?page='+paginate,
//         dataType: "JSON",
//         success: function (e) {
//             console.log(e);
//         },
//         error: function(jqXHR, textStatus, errorThrown){

//         }
//     });
// }

// const getExplore =()=> {
//         $('#homedata').html('')
//         explore.map((x, i)=>{
//             $('#homedata').append(
//                 `
//                 <div class="  overflow-hidden">
//                     <a href="detail_foto"><img src="/asssets/c3.jpeg" alt="" class="rounded-[20px]">
//                         <div class="flex justify-between">
//                             <h2>Kucing</h2>
//                             <button class="mx-2 text-[20px] mt-0">...</button>
//                         </div>
//                     </a>
//                 </div>
//             `
//                     )
//                 });
//             }