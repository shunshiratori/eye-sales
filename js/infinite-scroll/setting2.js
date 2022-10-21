var infScroll = new InfiniteScroll('#list2', {
  append: '.entry',
  path: '.section2 .nextpostslink',
  hideNav: '.pagination',
  button: '#more-button2',
  scrollThreshold: false,
  status: '.scroller-status2',
  history: false,
});

jQuery(function($) {

  $('#list2').on('append.infiniteScroll', function(event, response, path, items) {

    $(items).find('img[srcset]').each(function(i, img) {

      img.outerHTML = img.outerHTML;

    });

  });

});
