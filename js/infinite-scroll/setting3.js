var infScroll = new InfiniteScroll('#list3', {
  append: '.all-entry',
  path: '.section3 .nextpostslink',
  hideNav: '.pagination',
  button: '#more-button3',
  scrollThreshold: false,
  status: '.scroller-status3',
  history: false,
});

jQuery(function($) {

  $('#list3').on('append.infiniteScroll', function(event, response, path, items) {

    $(items).find('img[srcset]').each(function(i, img) {

      img.outerHTML = img.outerHTML;

    });

  });

});
