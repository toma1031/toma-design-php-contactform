// popupクラスの付いた要素にMagnific Popupを適用
// index.html用

$('.popup').magnificPopup({
  type: 'image',
  gallery: { enabled: true },
  mainClass: 'mfp-fade',
  removalDelay: 300,
  image: {
    verticalFit: true
  }
});


$('.gallery').slick({
  autoplay: false,
  // autoplaySpeed: 4000,
  arrows: true,
  slidesToShow: 8,
  centerPadding: '0px',
  centerMode: false,
  accessibility: true,
  swipe: true,
  responsive: true,
  infinite: false,
  prevArrow: '<button type="button" class="slide-arrow prev-arrow">＜</button>',
  nextArrow: '<button type="button" class="slide-arrow next-arrow">＞</button>',
});


// animation.html用

$('.popup-youtube').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: true
});

// 	// 配列を作成
// 	const list = [
//   {id:'tJ3lQr5XtUc', name: 'youtube1'},
//   {id:'5I87MVUmCb4', name: 'youtube2'},
//   {id:'ruWnrhmPq6A', name: 'youtube3'},
//   {id:'wePmTpC7j7A', name: 'youtube4'},
//   {id:'s3YXVzUqu4o', name: 'youtube5'},
//   {id:'VmiAnS2W5wU', name: 'youtube6'},
//   {id:'rvAJ3OdiFUc', name: 'youtube7'},
//   {id:'_cWjgneBI5E', name: 'youtube8'},
// ]

//   let total = 0;  



//   const getYouTubeImageURL = (photo, size) => {
//   let url = `https://farm${photo.farm}.staticflickr.com/${photo.server}/${photo.id}_${
//     photo.secret
//   }`;
//   if (size) {
//     // サイズ指定ありの場合
//     url += `_${size}`;
//   }
//   url += '.jpg';
//   return url;
// };

//     // ヒット件数
//   $div.append(`<div>${data.photos.total} photos in total</div>`);

//   for (let i = 0; i < data.list.length; i++) {
//     const photo = data.list[i];

//     // $divに <a href="..." ...><img src="..." ...></a> を追加する
//     $div.append(
//       $('<a>', {
//         href: getFlickrPageURL(list),
//         class: 'd-inline-block',
//         target: '_blank', // リンクを新規タブで開く
//         'data-toggle': 'tooltip',
//         'data-placement': 'bottom',
//         // title: photoText,
//       }).append(
//         $('<img>', {
//           src: getFlickrImageURL(list, 'q'),
//           width: 500,
//           height: 500,
//           // alt: photoText,
//         }),
//       ),
//     );
//   }
//   // $divを#mainに追加する
//   $div.appendTo('#main');

// $('.popup-youtube').mouseover(function(){
//   console.log('mouseover')
//         $('#iframeThumbnail').removeClass('hide');
// 				$('#imgThumbnail').addClass('display');
// 			});

// $('.popup-youtube').mouseout(function(){
//   console.log('mouseout')

// 				$('#iframeThumbnail').removeClass('display');
// 				$('#imgThumbnail').addClass('hide');

// 			});




// $(document).ready(function() {

//   $('.preViewTube').PreViewTube();

//   // $('.preViewTube').PreViewTube({
//   //   'interval': 500,
//   //   'mode': 'constant'
//   // });

// });






  // $('#form').validate({
  //   rules: {
  //     name: {
  //       required: { required: true },// 入力必須チェック
  //       rangelength: [1, 50], // 最小１文字、最大５０文字
  //     },
  //     email: {
  //       required: true,
  //       email: true  //メールアドレス限定にする
  //     },
  //     message: {
  //       required: { required: true }, // 入力必須チェック
  //     }
  //   }
  // });
  
  
  $('form').validate({
    rules: {
        name: { required: true, rangelength: [1, 50]},
        
        email: { required: true, email: true},
    
        message: { required: true},
    
    
    }
  
    
});



