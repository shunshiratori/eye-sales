var infScroll = new InfiniteScroll('#infinite-scroll', {
  append: '.infinite_scroll_target',
  // append: '.events_contents',
  path: '.nextpostslink',
  hideNav: '.pagination',
  button: '#more-button',
  scrollThreshold: false,
  status: '.scroller-status',
  history: 'false',
  bufferPx : 500,
});

jQuery(function($) {

  $('#infinite-scroll').on('append.infiniteScroll', function(event, response, path, items) {

    $(items).find('img[srcset]').each(function(i, img) {

      img.outerHTML = img.outerHTML;

    });

  });

});