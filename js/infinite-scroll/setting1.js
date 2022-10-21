var infScroll = new InfiniteScroll('#scrolllist', {
  append: '.slist',
  path: '.section1 .nextpostslink',
  hideNav: '.pagination',
  button: '#more-button1',
  scrollThreshold: false,
  status: '.scroller-status1',
  history: false,
});

jQuery(function($) {

  $('#scrolllist').on('append.infiniteScroll', function(event, response, path, items) {

    $(items).find('img[srcset]').each(function(i, img) {

      img.outerHTML = img.outerHTML;

    });

  });

});
